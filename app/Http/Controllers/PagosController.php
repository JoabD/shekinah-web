<?php

namespace App\Http\Controllers;

use App\Mail\PagosMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class PagosController extends Controller
{
    public function index()
    {
        $perfil = session('perfil');
        $usuario = session('usuario');
        $region = session('region');

        $query = "
        WITH RECURSIVE meses AS (
            SELECT 
                ID_PERIODO,
                FECHA_INICIAL AS fecha,
                FECHA_FINAL
            FROM PERIODO
            WHERE ESTATUS = 1

            UNION ALL

            SELECT 
                ID_PERIODO,
                DATE_ADD(fecha, INTERVAL 1 MONTH),
                FECHA_FINAL
            FROM meses
            WHERE fecha < DATE_FORMAT(FECHA_FINAL, '%Y-%m-01')
        ),
        periodos AS (
            SELECT 
                DATE_FORMAT(fecha, '%Y%m') AS periodo_mes
            FROM meses
            WHERE DATE_FORMAT(fecha, '%Y%m') <= DATE_FORMAT(CURDATE(), '%Y%m')
        )

        SELECT 
            U.USUARIO,
            PRE.NOMBRE_COMPLETO,
            PRE.REGION,
            PER.periodo_mes AS PERIODO,

            CASE 
                WHEN PA.USUARIO IS NOT NULL THEN 1
                ELSE 0
            END AS PAGO,

            CASE 
                WHEN PA.USUARIO IS NOT NULL THEN 'PAGADO'
                ELSE 'NO PAGADO'
            END AS DESCRIPCION,
            U.PAGOS AS NOTIFICACION

        FROM USUARIOS U
        INNER JOIN PREREGISTRO PRE 
            ON U.ID_ENCUESTA = PRE.ID_ENCUESTA

        CROSS JOIN periodos PER

        LEFT JOIN PAGOS PA 
            ON PA.USUARIO = U.USUARIO
            AND PA.PERIODO = PER.periodo_mes

        WHERE U.PERFIL = 1
        AND PRE.ESTATUS = 1
        ";

        $params = [];

        if ($perfil == 4) {
            $query .= ' AND PRE.REGION = :region ';
            $params['region'] = $region;
        }

        $query .= ' ORDER BY U.USUARIO, PER.periodo_mes ';

        $pagos = collect(DB::select($query, $params));

        $periodosPago = DB::select("
            WITH RECURSIVE meses AS (
                SELECT 
                    ID_PERIODO,
                    FECHA_INICIAL AS fecha,
                    FECHA_FINAL
                FROM PERIODO
                WHERE ESTATUS = 1

                UNION ALL

                SELECT 
                    ID_PERIODO,
                    DATE_ADD(fecha, INTERVAL 1 MONTH),
                    FECHA_FINAL
                FROM meses
                WHERE fecha < DATE_FORMAT(FECHA_FINAL, '%Y-%m-01')
            )
            SELECT 
                DATE_FORMAT(fecha, '%Y%m') AS periodo_mes
            FROM meses
            WHERE DATE_FORMAT(fecha, '%Y%m') <= DATE_FORMAT(CURDATE(), '%Y%m')
            ORDER BY periodo_mes
        ");

        return view('pagos', compact('pagos', 'periodosPago'));
    }

    public function importar(Request $request)
    {
        $request->validate([
            'archivo' => 'required|mimes:csv,xlsx',
        ]);

        try {
            $data = Excel::toCollection(null, $request->file('archivo'))->first();

            if ($data->isEmpty()) {
                return back()->with('error', 'El archivo está vacío');
            }

            $encabezados = $data->first()->toArray();
            $encabezados = array_map('strtoupper', $encabezados);

            if (! in_array('USUARIO', $encabezados) || ! in_array('PERIODO', $encabezados)) {
                return back()->with('error', 'El archivo debe contener las columnas: USUARIO y PERIODO');
            }

            $data->shift();

            $insertados = 0;
            $errores = [];
            $filaNumero = 2;

            foreach ($data as $fila) {
                $filaArray = $fila->toArray();

                $usuario = $filaArray[0] ?? null;
                $periodo = $filaArray[1] ?? null;

                if (! is_numeric($usuario) || ! is_numeric($periodo)) {
                    $errores[] = "Fila $filaNumero: valores no numéricos";
                    $filaNumero++;

                    continue;
                }

                if (! preg_match('/^\d{6}$/', $periodo)) {
                    $errores[] = "Fila $filaNumero: periodo inválido (debe ser YYYYMM)";
                    $filaNumero++;

                    continue;
                }

                DB::table('PAGOS')->updateOrInsert(
                    [
                        'USUARIO' => $usuario,
                        'PERIODO' => $periodo,
                    ],
                    []
                );

                DB::table('USUARIOS')
                    ->where('USUARIO', $usuario)
                    ->update(['PAGOS' => 0]);

                $insertados++;
                $filaNumero++;
            }

            if (count($errores) > 0) {
                return back()->with([
                    'success' => "Se importaron $insertados registros",
                    'errores_detalle' => $errores,
                ]);
            }

            return back()->with('success', "Se importaron $insertados registros correctamente");

        } catch (\Exception $e) {
            return back()->with('error', 'Error al procesar el archivo: '.$e->getMessage());
        }
    }

    public function filtrar(Request $request)
    {
        $perfil = session('perfil');
        $region = session('region');
        $periodo = $request->periodo;

        $query = "
        WITH RECURSIVE meses AS (
            SELECT 
                ID_PERIODO,
                FECHA_INICIAL AS fecha,
                FECHA_FINAL
            FROM PERIODO
            WHERE ESTATUS = 1

            UNION ALL

            SELECT 
                ID_PERIODO,
                DATE_ADD(fecha, INTERVAL 1 MONTH),
                FECHA_FINAL
            FROM meses
            WHERE fecha < DATE_FORMAT(FECHA_FINAL, '%Y-%m-01')
        ),
        periodos AS (
            SELECT 
                DATE_FORMAT(fecha, '%Y%m') AS periodo_mes
            FROM meses
            WHERE DATE_FORMAT(fecha, '%Y%m') <= DATE_FORMAT(CURDATE(), '%Y%m')
        )

        SELECT 
            U.USUARIO,
            PRE.NOMBRE_COMPLETO,
            PRE.REGION,
            PER.periodo_mes AS PERIODO,

            CASE 
                WHEN PA.USUARIO IS NOT NULL THEN 1
                ELSE 0
            END AS PAGO,
            U.PAGOS AS NOTIFICACION

        FROM USUARIOS U
        INNER JOIN PREREGISTRO PRE 
            ON U.ID_ENCUESTA = PRE.ID_ENCUESTA

        CROSS JOIN periodos PER

        LEFT JOIN PAGOS PA 
            ON PA.USUARIO = U.USUARIO
            AND PA.PERIODO = PER.periodo_mes

        WHERE U.PERFIL = 1
        AND PRE.ESTATUS = 1
        ";

        $params = [];

        if ($perfil == 4) {
            $query .= ' AND PRE.REGION = :region ';
            $params['region'] = $region;
        }

        if ($periodo != -1) {
            $query .= ' AND PER.periodo_mes = :periodo ';
            $params['periodo'] = $periodo;
        }

        $query .= ' ORDER BY U.USUARIO, PER.periodo_mes ';

        $data = collect(DB::select($query, $params));

        return response()->json($data);
    }

    public function notificar(Request $request)
    {
        $region = session('region');
        $perfil = session('perfil');

        $usuario = $request->usuario;
        $pagos = $request->pagos;

        $params = [];

        $query = "
            SELECT DISTINCT
            U.USUARIO,
            PRE.NOMBRE_COMPLETO,
            PRE.REGION,
            U.PAGOS +1 AS NOTIFICACION,
            PRE.CORREO,
            (
                SELECT GROUP_CONCAT(
                    DISTINCT 
                    CASE MONTH(m.fecha)
                        WHEN 1 THEN 'ENERO'
                        WHEN 2 THEN 'FEBRERO'
                        WHEN 3 THEN 'MARZO'
                        WHEN 4 THEN 'ABRIL'
                        WHEN 5 THEN 'MAYO'
                        WHEN 6 THEN 'JUNIO'
                        WHEN 7 THEN 'JULIO'
                        WHEN 8 THEN 'AGOSTO'
                        WHEN 9 THEN 'SEPTIEMBRE'
                        WHEN 10 THEN 'OCTUBRE'
                        WHEN 11 THEN 'NOVIEMBRE'
                        WHEN 12 THEN 'DICIEMBRE'
                    END
                    ORDER BY m.fecha
                    SEPARATOR ', '
                )
                FROM (
                    WITH RECURSIVE meses AS (
                        SELECT 
                            FECHA_INICIAL AS fecha,
                            FECHA_FINAL
                        FROM PERIODO
                        WHERE ESTATUS = 1

                        UNION ALL

                        SELECT 
                            DATE_ADD(fecha, INTERVAL 1 MONTH),
                            FECHA_FINAL
                        FROM meses
                        WHERE fecha < FECHA_FINAL
                    )
                    SELECT fecha
                    FROM meses
                    WHERE fecha <= LAST_DAY(CURDATE())
                ) m

                LEFT JOIN PAGOS PA 
                    ON PA.USUARIO = U.USUARIO
                    AND PA.PERIODO = DATE_FORMAT(m.fecha, '%Y%m')

                WHERE PA.PERIODO IS NULL
            ) AS MESES_DEBE

        FROM USUARIOS U
        INNER JOIN PREREGISTRO PRE 
            ON U.ID_ENCUESTA = PRE.ID_ENCUESTA

        WHERE U.PERFIL = 1
        AND PRE.ESTATUS = 1
        ";

        if ($perfil == 4) {
            $query .= ' AND PRE.REGION = :region ';
            $params['region'] = $region;
        }

        if ($usuario != -1) {
            $query .= ' AND U.USUARIO = :usuario ';
            $params['usuario'] = $usuario;
        }

        $query .= "
        AND EXISTS (
            SELECT 1
            FROM (
                WITH RECURSIVE meses AS (
                    SELECT 
                        FECHA_INICIAL AS fecha,
                        FECHA_FINAL
                    FROM PERIODO
                    WHERE ESTATUS = 1

                    UNION ALL

                    SELECT 
                        DATE_ADD(fecha, INTERVAL 1 MONTH),
                        FECHA_FINAL
                    FROM meses
                    WHERE fecha < FECHA_FINAL
                )
                SELECT DATE_FORMAT(fecha, '%Y%m') AS periodo_mes
                FROM meses
                WHERE fecha <= LAST_DAY(CURDATE())
            ) P
            WHERE NOT EXISTS (
                SELECT 1 
                FROM PAGOS PA
                WHERE PA.USUARIO = U.USUARIO
                AND PA.PERIODO = P.periodo_mes
            )
        )
        ";

        $resultados = DB::select($query, $params);

        foreach ($resultados as $row) {
            if (! empty($row->CORREO)) {
                Mail::to($row->CORREO)->send(
                    new PagosMail(
                        $row->NOMBRE_COMPLETO,
                        $row->NOTIFICACION,
                        $row->MESES_DEBE
                    )
                );

            }
        }

        $usuarios = collect($resultados)->pluck('USUARIO');

        DB::table('USUARIOS')
            ->whereIn('USUARIO', $usuarios)
            ->update([
                'PAGOS' => DB::raw('PAGOS + 1'),
            ]);

        return response()->json([
            'success' => true,
            'usuario' => $usuario,
            'pagos' => $pagos,
            'data' => $resultados,
        ]);
    }
}
