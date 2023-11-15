<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amortizacion;
use App\Models\Prestamo;


class AmortizacionController extends Controller
{
    //
    public function index(){
        $amortizaciones = Amortizacion::all();
        return view('amortizacion', compact('amortizaciones'));
    }

    public function create($id){
        $prestamo = Prestamo::find($id);
        

        $periodos = $prestamo->plazo * 12;
        $interes = $prestamo->monto * $prestamo->tasaInteres * $prestamo->plazo;
//10,000
        for ($i=0; $i < $periodos; $i++) {
            $amortizacion = new Amortizacion();
            if($i == 0 ){
                $amortizacion->idPrestamo = $prestamo->id;
                $amortizacion->periodo = 0;
                $amortizacion->capital = 0;
                $amortizacion->interes = 0;
                $amortizacion->saldo = $prestamo->monto;
                $amortizacion->save();
            }else{
                $amortizacion->idPrestamo = $prestamo->id;
                $amortizacion->periodo = $i;
                $amortizacion->interes = ($interes);  //833,333
                $amortizacion->capital = (($prestamo->cuota) - ($amortizacion->interes)); //-781,250
                $amortizacion->saldo = (($amortizacion->saldo) - ($amortizacion->capital)); //833,333
                $amortizacion->save();
            }
        }
        return redirect()->route('amortizacion.inicio');
    }

    
}
