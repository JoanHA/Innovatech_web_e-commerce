<?php

namespace App\Http\Controllers;

use App\Models\Paise;
use Illuminate\Http\Request;

class PaiseController extends Controller
{
    public static function index()
    {
    }

    public static function obtenerDepartamento(Request $request)
    {
        if (isset($request->texto)) {
            $departamento = Paise::select('departamentos.id', 'departamento')
                ->join('departamentos', 'departamentos.pais_id', 'paises.id')
                ->where('paises.id', $request->texto)->get();


            return response()->json(
                [
                    "datos" => $departamento,
                    "success" => true
                ]
            );
        } else {
            return response()->json(
                [
                    "datos" => [],
                    "success" => false
                ]
            );
        }
    }

    public static function obtenerMunicipios(Request $request)
    {
        if (isset($request->texto)) {
            $ciudades = Paise::select('municipios.id', 'municipio')
                ->join('departamentos', 'departamentos.pais_id', 'paises.id')
                ->join('municipios', 'municipios.departamento_id', 'departamentos.id')
                ->where('departamentos.id', $request->texto)->get();

            return response()->json(
                [
                    "muni" => $ciudades,
                    "success" => true
                ]
            );
        } else {
            return response()->json(
                [
                    "muni" => [],
                    "success" => false
                ]
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Paise $paises)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paise $paises)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paise $paises)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paise $paises)
    {
        //
    }

    public function obtenerDepartaentos($id)
    {
    }
}
