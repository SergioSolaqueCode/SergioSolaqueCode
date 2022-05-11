<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Categoria;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "aqui va ir el catalogo de produtos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //seleccionar las marcas de la base de datos utilizando el modelo marca
        $marcas = Marca::all();
        //seleccionar las marcas de la base de datos utilizando el modelo marca
        $categorias = Categoria::all();
        //mostrar el formulario
        return view('producto.create')
                    ->with("marca",$marcas)
                    ->with("categoria",$categorias);
                
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // echo"</pre>";
        //var_dump($request->all());
        //echo"</pre>";
        //crear una entidad >>producto>>
        $p = new Producto();
        $p-> nombre = $request->nombre;
        $p-> descripccion = $request->desc;
        $p-> precio = $request->precio;
        $p-> marcas_id = $request->marca;
        $p-> categorias_id = $request->categoria;
        $p->save();
        echo "producto registro";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        echo "aqui se va mostrar el detalle del producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        echo "aqui se muestra el formulario de edicion de los productos";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        echo "aqui se va a guardar la edicion de los produtos";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        echo "se elimina el prodcuto";
    }
}
