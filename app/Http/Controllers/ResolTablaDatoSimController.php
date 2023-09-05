<?php

namespace App\Http\Controllers;

use App\Models\ResolTableDatoSim;
use Illuminate\Http\Request;

class ResolTablaDatoSimController extends Controller
{
    public function index()
    {
        $datos = ResolTableDatoSim::all();
        return view('resol_tabla_dato_sim.index', ['datos' => $datos]);
    }

    public function create()
    {
        return view('resol_tabla_dato_sim.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tabla_id' => 'nullable|integer',
            // Aquí puedes añadir validaciones para el resto de campos
        ]);

        $resol_tabla_dato_sim = New ResolTableDatoSim;
        $resol_tabla_dato_sim->tabla_id = $data['tabla_id'];
        $resol_tabla_dato_sim->perdesde = $request->perdesde;
        $resol_tabla_dato_sim->perhasta = $request->perhasta;
        $resol_tabla_dato_sim->paramstr = $request->paramstr;
        $resol_tabla_dato_sim->param1 = $request->param1;
        $resol_tabla_dato_sim->param2 = $request->param2;
        $resol_tabla_dato_sim->param3 = $request->param3;
        $resol_tabla_dato_sim->param4 = $request->param4;
        $resol_tabla_dato_sim->param5 = $request->param5;
        $resol_tabla_dato_sim->fchmod = date('Y-m-d H:i:s');
        $resol_tabla_dato_sim->usrmod = auth()->user()->id;
        $resol_tabla_dato_sim->save();

        return redirect()->route('resol_tabla_dato_sim.index');
    }

    public function show(ResolTableDatoSim $dato)
    {
        return view('resol_tabla_dato_sim.show', ['dato' => $dato]);
    }

    public function edit(ResolTableDatoSim $resolTableDatoSim, $id)
    {
        $dato = ResolTableDatoSim::find($id);
        return view('resol_tabla_dato_sim.edit', ['dato' => $dato]);
    }

    public function update(Request $request, ResolTableDatoSim $dato)
    {
        $dato->tabla_id = $request->tabla_id;
        $dato->perdesde = $request->perdesde;
        $dato->perhasta = $request->perhasta;
        $dato->paramstr = $request->paramstr;
        $dato->param1 = $request->param1;
        $dato->param2 = $request->param2;
        $dato->param3 = $request->param3;
        $dato->param4 = $request->param4;
        $dato->param5 = $request->param5;
        $dato->fchmod = date('Y-m-d H:i:s');
        $dato->usrmod = auth()->user()->id;
        $dato->save();

        return redirect()->route('resol_tabla_dato_sim.index')->with('status', 'Dato actualizado con éxito');
    }


    public function destroy(ResolTableDatoSim $dato, $id)
    {
        $dato = ResolTableDatoSim::find($id);
        $dato->delete();
        return redirect()->route('resol_tabla_dato_sim.index');
    }
}
