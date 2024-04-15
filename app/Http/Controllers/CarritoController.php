<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $id = $request->id;
        $producto = \DB::table('productos')->select('idProductos','Nombre_producto','Precio_venta','Descripcion')->where('idProductos',30)-> get();
        echo "id".$id;

        return $producto;
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
        $id = $request->id;
       
         $producto = \DB::table('productos')->where('idProductos',$id)->first();
        try {
            Cart::add(array(
                'id' => $producto->idProductos,   //inique row ID
                'name' => $producto->Nombre_producto,
                'price' =>$producto->Precio_venta,
                'quantity' => $request->quantity?$request->quantity:1,
    
            ));
    
        } catch (\Throwable $th) {
            return back()->with("error","Tuvimos un error y no podemos enviar tu producto al carrito");
        }
      
            return back()->with("msj_exitoso", $producto);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('Cart-show');   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Cart::clear();
 
        return redirect()->route("cart.show")->with("msj_destroy","El carrito fue vaciado");
        
    }
}
