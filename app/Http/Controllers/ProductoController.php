<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Categoria;
use App\Http\Request\StoreProductoRequest;
use Illuminate\Support\Facades\Validator;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Seleccionar los productos
        $productos = producto::all();
        //Mostrar la vista del catalogo
        return view('producto.index')
                    ->with("productos",$productos);
        
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
        /*$reglas =
        [
            "nombre" => 'required|alpha',
            "desc" => 'required|max:100',
            "precio" => 'required|numeric|max:10000'
        ];

    $mensajes_personalizados=
    [
        'required' => 'dato obligatorio',
        'alpha' =>'solo letras',
        'max' => 'solo maximo 100 numeros',
        'numeric' =>'el dato tiene que ser numerico'
    ];   

    //2. crear el objeto validador
    $v= Validator::make($request->all(), 
                                        $reglas,
                                        $mensajes_personalizados
                                        );
    //3. validar
    if($v ->fails())
    {
         //validacion fallida
         //redirigir
         return redirect('producto/create')
                    ->withErrors($v);
    }else
    {*/
        //validacion exitosa
        $p = new Producto();
        $p-> nombre = $request->nombre;
        $p-> descripccion = $request->desc;
        $p-> precio = $request->precio;
        $p-> marcas_id = $request->marca;
        $p-> categorias_id = $request->categoria;
        
        $archivo =$request->imagen;
        $p->imagen = $archivo->getClientOriginalName();
                //mover el archivo cargado al carpeta public/img
        $archivo->move(public_path()."/img",
                $archivo->getClientOriginalName());
        //var_dump($request->imagen->getClienteOriginalName());
        
        $p->save();
       //rerideccionar: a una ruta disponible
       return redirect('producto/create')
       ->with('mensaje', "producto registrado exitosamente");
    
        
    
       // echo"</pre>";
        //var_dump($request->all());
        //echo"</pre>";
        //crear una entidad >>producto>>
              
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
