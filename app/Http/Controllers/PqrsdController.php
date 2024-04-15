<?php

namespace App\Http\Controllers;

use App\Models\Pqrsd;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PqrsdController extends Controller
{
    public function index()
    {
        return view('pqrs.index');
    }

    public function create()
    {
        return view('pqrs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tipo' => ['required', Rule::in(['Peticiones', 'Quejas', 'Reclamos', 'Sugerencias'])],
            'nombres' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'apellidos' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'telefono' => ['required','digits:10'],
            'correo' => 'required|email',
            'asunto' => 'required',
            'descripcion' => 'required',
        ], [
            'tipo.required' => 'El campo Tipo es obligatorio.',
            'tipo.in' => 'El valor seleccionado en el campo Tipo no es válido.',
            'nombres.required' => 'El campo Nombres es obligatorio.',
            'nombres.regex' => 'El campo Nombres solo puede contener letras y espacios.',
            'apellidos.required' => 'El campo Apellidos es obligatorio.',
            'apellidos.regex' => 'El campo Apellidos solo puede contener letras y espacios.',
            'telefono.required' => 'El campo Teléfono es obligatorio.',
            'telefono.digits' => 'El campo Teléfono debe contener 10 dígitos.',
            'correo.required' => 'El campo Correo electrónico es obligatorio.',
            'correo.email' => 'El campo Correo electrónico debe ser una dirección de correo válida.',
            'asunto.required' => 'El campo Asunto es obligatorio.',
            'descripcion.required' => 'El campo Descripción es obligatorio.',
        ]);

        $pqrs = new Pqrsd();
        $pqrs->Motivo = $validatedData['tipo'];
        $pqrs->E_mail = $validatedData['correo'];
        $pqrs->Titulo = $validatedData['asunto'];
        $pqrs->Estado = "0";
        $pqrs->Texto_pqrst = $validatedData['descripcion'];
        $pqrs->Fecha_registro = date('Y-m-d');
        $pqrs->save();

        return redirect()->route('pqrs.index')->with('formSubmitted', true);
    }
}

