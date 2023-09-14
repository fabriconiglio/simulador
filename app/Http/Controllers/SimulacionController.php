<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class SimulacionController extends Controller
{

    use Illuminate\Support\Facades\DB;

    public function ejecutarInmueble() {

        DB::select('select * from sam.simulacion2024(?)', ['Inmuebles']);
        return redirect()->back()->with('success', 'Simulación ejecutada con éxito');
    }

    public function ejecutarRodado() {

        DB::select('select * from sam.simululacion2024(?)', ['Rodados']);
        // Retorna a una vista o ruta específica. En este ejemplo, redirijo al usuario de vuelta a donde vino (generalmente la página anterior).
        return redirect()->back()->with('success', 'Simulación ejecutada con éxito');
    }


}
