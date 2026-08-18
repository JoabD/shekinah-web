<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function create()
    {

        return view('registro');
    }

    public function store(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string|max:150',
            'contra' => 'required|string|max:100',
        ]);

        $registro = DB::table('USUARIOS as U')
            ->join('PREREGISTRO as P', 'P.ID_ENCUESTA', '=', 'U.ID_ENCUESTA')
            ->select(
                'U.USUARIO',
                'U.PERFIL',
                'U.CONTRASEÑA',
                'U.PAGOS',
                'P.REGION'
            )
            ->where('U.USUARIO', $request->usuario)
            ->first();

        if (! $registro) {
            return back()->withErrors(['usuario' => 'Usuario no encontrado']);
        }

        if (! Hash::check($request->contra, $registro->CONTRASEÑA)) {
            return back()->withErrors(['contra' => 'Contraseña incorrecta']);
        }

        if ($registro->PAGOS >= 4) {
            return back()->withErrors([
                'usuario' => 'Usuario bloqueado por falta de pago',
            ]);
        }

        session([
            'usuario' => $registro->USUARIO,
            'perfil' => $registro->PERFIL,
            'region' => $registro->REGION,
            'logueado' => true,
        ]);

        return view('inicio');
    }

    public function logout()
    {
        session()->flush();

        return redirect('/registro');
    }
}
