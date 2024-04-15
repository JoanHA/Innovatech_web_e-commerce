<?php

namespace App\Http\Controllers;

use App\Models\Direccione;
use App\Models\Paise;
use Illuminate\Http\Request;

class DireccioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $direcciones = Direccione::select('direcciones.id','municipio','departamento','pais','barrio','direccion','piso')
        ->join('municipios','municipios.id','direcciones.municipio_id')
        ->join('departamentos','departamentos.id','municipios.departamento_id')
        ->join('paises','paises.id','departamentos.pais_id')
        ->where('direcciones.usuario_id',1)->get();
        return view('perfil.direcciones', compact('direcciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paises = Paise::get();
        return view('perfil.direcciones_create', compact('paises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $direccion = new Direccione;
        $direccion->barrio = $request->input('barrio');
        $direccion->direccion = $request->input('direccion');
        $direccion->piso = $request->input('piso');
        $direccion->estado = '1';
        $direccion->usuario_id = 1;
        $direccion->municipio_id = $request->input('ciudad');
        $direccion->save();

        return redirect()->route('direcciones');
    }

    /**
     * Display the specified resource.
     */
    public function show(Direccione $direcciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Direccione $direccion){

        $paises = Paise::get();
        return view('perfil.direcciones_editar', compact('direccion'))->with('paises',$paises);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Direccione $direccion)
    {
        $direccion->barrio = $request->input('barrio');
        $direccion->direccion = $request->input('direccion');
        $direccion->piso = $request->input('piso');
        $direccion->estado = '1';
        $direccion->usuario_id = 1;
        $direccion->municipio_id = $request->input('ciudad');
        $direccion->save();

        return redirect()->route('direcciones');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Direccione $direccion)
    {
        $direccion->delete();
        return redirect()->route('direcciones');
    }
}
