<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;
use App\Models\Amortizacion;


class PrestamoController extends Controller
{
    //

    public function create(){
        return view('crearPrestamo');
    }

    public function store(Request $request){
        $prestamo = new Prestamo();
        $prestamo->id = $request->input("id");
        $prestamo->monto = $request->input("monto");
        $prestamo->plazo = $request->input("plazo");
        $prestamo->tasaInteres = $request->input("tasaInteres");

        // Calculamos la cuota:
        $interes = $prestamo->monto * $prestamo->tasaInteres * $prestamo->plazo;

        $numerador = (($prestamo->monto) * ($interes/12) );
        $denominador = (1 - ( 1 + ( $interes / 12)) ^ ( $prestamo->plazo * 12));
        
        $prestamo->cuota = ($numerador/$denominador);
        $prestamo->save();

        return redirect()->route('amortizacion.crear', $prestamo->id);
    }


}
