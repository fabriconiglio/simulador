<?php

namespace App\Http\Controllers;

use App\Models\ResolTableDato;
use Illuminate\Http\Request;

class ResolTablaDatoInmController extends Controller
{
    public function index()
    {
        $datos = ResolTableDato::all();
        return view('resol_tabla_dato_inm.index', ['datos' => $datos]);
    }

    public function create()
    {
        return view('resol_tabla_dato_inm.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tabla_id' => 'nullable|integer',
            // Aquí puedes añadir validaciones para el resto de campos
        ]);

        $resol_tabla_dato = New ResolTableDato;
        $resol_tabla_dato->tabla_id = $data['tabla_id'];
        $resol_tabla_dato->perdesde = $request->perdesde;
        $resol_tabla_dato->perhasta = $request->perhasta;
        $resol_tabla_dato->paramstr = $request->paramstr;
        $resol_tabla_dato->param1 = $request->param1;
        $resol_tabla_dato->param2 = $request->param2;
        $resol_tabla_dato->param3 = $request->param3;
        $resol_tabla_dato->param4 = $request->param4;
        $resol_tabla_dato->param5 = $request->param5;
        $resol_tabla_dato->fchmod = date('Y-m-d H:i:s');
        $resol_tabla_dato->usrmod = auth()->user()->id;
        $resol_tabla_dato->param6 = $request->param6;
        $resol_tabla_dato->obs = $request->obs;

        $resol_tabla_dato->save();

        return redirect()->route('resol_tabla_dato_inm.index');
    }

    public function show(ResolTableDato $dato)
    {
        return view('resol_tabla_dato_inm.show', ['dato' => $dato]);
    }

    public function edit(ResolTableDato $resolTableDatoSim, $id)
    {
        $dato = ResolTableDato::find($id);
        return view('resol_tabla_dato_inm.edit', ['dato' => $dato]);
    }

    public function update(Request $request, $id)
    {
        $resol_tabla_dato = ResolTableDato::find($id);
        $resol_tabla_dato->perdesde = $request->perdesde;
        $resol_tabla_dato->perhasta = $request->perhasta;
        $resol_tabla_dato->paramstr = $request->paramstr;
        $resol_tabla_dato->param1 = $request->param1;
        $resol_tabla_dato->param2 = $request->param2;
        $resol_tabla_dato->param3 = $request->param3;
        $resol_tabla_dato->param4 = $request->param4;
        $resol_tabla_dato->param5 = $request->param5;
        $resol_tabla_dato->fchmod = date('Y-m-d H:i:s');
        $resol_tabla_dato->usrmod = auth()->user()->id;
        $resol_tabla_dato->param6 = $request->param6;
        $resol_tabla_dato->obs = $request->obs;
        $resol_tabla_dato->save();

        return redirect()->route('resol_tabla_dato_inm.index')->with('status', 'Dato actualizado con éxito');
    }


    public function destroy(ResolTableDato $dato, $id)
    {
        $resol_tabla_dato = ResolTableDato::find($id);
        $resol_tabla_dato->delete();
        return redirect()->route('resol_tabla_dato_inm.index');
    }
}
