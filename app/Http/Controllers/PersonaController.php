<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Persona;
use App\Models\Compra;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PersonaController extends Controller
{

    public function index()
    {
        
        

        $persona = Persona::find(2);
        $nombre = explode(" ", $persona->nombres);
        $nombre = ucfirst($nombre[0]);

        $apellido = explode(" ", $persona->apellidos);
        $apellido = ucfirst($apellido[0]);
        $usuarios = $persona->usuarios->first();
        session(['Nombre' => $usuarios->name]);

        return view('perfil.mis_datos',compact('persona'),compact('usuarios'));
        // $persona = Persona::
        // join('contacto as c','c.persona','persona.idPersona')
        // ->join('usuario as u','u.persona','persona.idPersona')
        // ->where('idUsuario',3)->first();

        // $productosComprados = Compra::
        // join('compra as c','detalle_compras.Compra','c.idCompra')
        // ->join('productos as p','detalle_compras.Productos','p.idProductos')
        // ->join('usuario as u','u.idUsuario','c.usuario')
        // ->where('idUsuario',3)->get();

        // $paises = PaisesController::index();
        // // dd(json_encode((PaisesController::obtenerDepartamento(2))));
        // return view('perfil.mis_datos',compact('persona'),compact('productosComprados'))->with('paises',$paises);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->Nombre = $request->nombre;
        $persona->Apellido = $request->apellido;
        $persona->Identificacion = $request->numero_documento;
        $persona->Estado = '1';
        $persona->Fecha_registro = date('Y-m-d');
        $persona->save();

        $usuario = new Usuario();
        $usuario->Persona = $persona->idPersona;
        $usuario->Contraseña = Hash::make($request->contraseña);
        $usuario->Email = $request->correo;
        $usuario->Tipo_user = '1';
        $usuario->Suscripcion = '1';
        $usuario->Estado = '1';
        $usuario->Fecha_registro = date('Y-m-d');
        $usuario->save();

        $contacto = new Contacto();
        $contacto->Persona = $persona->idPersona;
        $contacto->Celular = $request->numero_telefono;
        $contacto->Email = $request->correo;
        $contacto->Estado = '1';
        $contacto->Fecha_registro = date('Y-m-d');
        $contacto->save();
        return redirect('registro')->with('mensaje','Registro exitoso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
