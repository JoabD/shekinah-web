<?php

namespace App\Http\Controllers;

use App\Mail\RegistroMail;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AdminUserController extends Controller
{
    public function index()
    {
        $perfil = collect();
        $perfil2 = collect();
        $usuario = collect();
        $regiones = collect();
        $perfil = DB::table('PERFILES')
            ->select('ID_PERFIL', 'NOMBRE')
            ->where('ID_PERFIL', '>', 1)
            ->orderBy('ID_PERFIL', 'ASC')
            ->get();
        $perfil2 = DB::table('PERFILES')
            ->select('ID_PERFIL', 'NOMBRE')
            ->orderBy('ID_PERFIL', 'ASC')
            ->get();
        $regiones = DB::table('REGION')
            ->select('ID_REGION', 'NOMBRE')
            ->get();
        $usuario = DB::table('PREREGISTRO as P')
            ->join('USUARIOS as U', 'P.ID_ENCUESTA', '=', 'U.ID_ENCUESTA')
            ->join('PERFILES as PE', 'PE.ID_PERFIL', '=', 'U.PERFIL')
            ->select(
                'U.USUARIO',
                'P.NOMBRE_COMPLETO',
                'P.FECHA_NACIMIENTO',
                'P.DOMICILIO',
                'P.IGLESIA',
                'P.DOMICILIO_IGLESIA',
                'P.CARGO_NOMBRE',
                'P.PASTOR',
                'P.CORREO',
                'PE.NOMBRE as PERFIL',
                'U.CUATRIMESTRE',
                DB::raw("CASE 
                        WHEN P.PRESENCIAL = 1 THEN 'Presencial'
                        ELSE 'Virtual'
                    END AS MODALIDAD"),
                'U.ID_ENCUESTA'
            )
            ->where('P.ESTATUS', 1)
            ->orderBy('U.USUARIO', 'desc')
            ->get();

        return view('adminUser', compact(
            'perfil',
            'usuario',
            'perfil2',
            'regiones'
        ));
    }

    public function store(Request $request)
    {
        try {

            $request->validate([
                'nombre_completo' => 'required|string',
                'correo' => 'required|email',
                'fecha_nacimiento' => 'required|date',
                'edad' => 'required|integer',
                'estado_civil' => 'required|string',
                'telefono' => 'required|string',
                'domicilio' => 'required|string',
                'colonia' => 'required|string',
                'localidad' => 'required|string',
                'municipio' => 'required|string',
                'estado' => 'required|string',
                'iglesia' => 'required|string',
                'domicilio_iglesia' => 'required|string',
                'colonia_iglesia' => 'required|string',
                'localidad_iglesia' => 'required|string',
                'municipio_iglesia' => 'required|string',
                'perfil' => 'required|string',
                'region' => 'required|string',
            ]);

            $datos = [
                'nombre_completo' => $request->nombre_completo,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'domicilio' => $request->domicilio,
                'colonia' => $request->colonia,
                'localidad' => $request->localidad,
                'municipio' => $request->municipio,
                'estado' => $request->estado,
                'telefono' => $request->telefono,
                'edad' => $request->edad,
                'estado_civil' => $request->estado_civil,
                'iglesia' => $request->iglesia,
                'domicilio_iglesia' => $request->domicilio_iglesia,
                'colonia_iglesia' => $request->colonia_iglesia,
                'localidad_iglesia' => $request->localidad_iglesia,
                'municipio_iglesia' => $request->municipio_iglesia,
                'estatus' => 1,
                'correo' => $request->correo,
            ];

            if ($request->perfil == 4) {
                $datos['region'] = $request->region;
            }

            $idEncuesta = DB::table('preregistro')->insertGetId($datos);

            $passwordPlano = Str::random(10);

            $usuarioCreado = Usuario::create([
                'CONTRASEÑA' => Hash::make($passwordPlano),
                'ID_ENCUESTA' => $idEncuesta,
                'PERFIL' => $request->perfil,
            ]);

            $usuario = $usuarioCreado->USUARIO;

            Mail::to($request->correo)->send(
                new RegistroMail(1, $passwordPlano, $usuario)
            );

            return redirect()->back()->with('success', 'Registro realizado correctamente. Se enviaron las credenciales al correo.');

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function datos($id)
    {
        $datos = DB::table('PREREGISTRO as p')
            ->join('USUARIOS as u', 'p.id_encuesta', '=', 'u.id_encuesta')
            ->select(
                'p.estatus',
                'p.region',
                'p.presencial',
                'p.virtual1',
                'p.diplomado',
                'u.perfil',
                'u.cuatrimestre'
            )
            ->where('p.id_encuesta', $id)
            ->get();

        return response()->json($datos);
    }

    public function actualizarUsuario(Request $request)
    {

        DB::table('USUARIOS')
            ->where('id_encuesta', $request->id_encuesta)
            ->update([
                'perfil' => $request->perfil,
            ]);

        if ($request->perfil == 1) {

            DB::table('PREREGISTRO')
                ->where('id_encuesta', $request->id_encuesta)
                ->update([
                    'estatus' => $request->estatus,
                    'region' => $request->region,
                    'presencial' => $request->modalidad == 1 ? 1 : 0,
                    'diplomado' => $request->modalidad == 2 ? 1 : 0,
                    'virtual1' => $request->modalidad == 3 ? 1 : 0,
                ]);

        } elseif ($request->perfil == 4) {
            DB::table('PREREGISTRO')
                ->where('id_encuesta', $request->id_encuesta)
                ->update([
                    'estatus' => $request->estatus,
                    'region' => $request->region,

                ]);
        } else {

            DB::table('PREREGISTRO')
                ->where('id_encuesta', $request->id_encuesta)
                ->update([
                    'estatus' => $request->estatus,
                ]);

        }

        if ($request->password) {
            DB::table('USUARIOS')
                ->where('id_encuesta', $request->id_encuesta)
                ->update([
                    'contraseña' => Hash::make($request->password),
                ]);
        }

        return response()->json([
            'status' => 'ok',
        ]);
    }
}
