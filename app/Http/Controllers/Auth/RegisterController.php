<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\persona;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => ['required', 'string'],
            'apellido' => ['required', 'string'],
            'numero_documento' => ['required', 'string', 'max:15'],
            'numero_telefono' => ['required', 'string', 'regex:/^[3|6]{1}[0-9]{9}$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contraseña' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\usuario
     */
    protected function create(array $data)
    {   
        persona::create([
            'identificacion' => $data['numero_documento'],
            'nombres' => $data['nombre'],
            'apellidos' => $data['apellido'],
            'estado' => '0',
            'created_at' => date('Y-m-d')
        ]);

        return User::create([
            'name' => $data['nombre'],
            'tipo_user' => '1',
            'suscripcion' => '1',
            'estado' => '1',
            'email' => $data['email'],
            'password' => Hash::make($data['contraseña']),
            'created_at' => date('Y-m-d'),
            'persona_id' => persona::where('identificacion', $data['numero_documento'])->first()->id,
        ]);
    }
}
