<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tiendas/mostraregistro',[TiendaController::class,'create']);
Route::post('/tiendas/mostrarexito',[TiendaController::class,'store']);

//ruta de prueba
Route::get('hola', function()
{
    echo " hola ";
} );


Route::get('arreglo', function()
{
    $estudiantes =
    [
       "AN" => 1,
       "EL" => "kevin",
       "LA" => "Luara",
       "ED" => "Familia545"
    ];
    //echo "<pre><center>";
    //var_dump($estudiantes);
    //echo "</pre></center>";
    //echo "<br><hr />";
    //$estudiantes = 1;
    //var_dump($estudiantes);

    //foreach($estudiantes as $e )
    //{
       // echo "$e";
       // echo "<br><hr />";

  //  }

    //echo "<br><hr />";
   // echo $estudiantes["AN"];
   echo "<br><hr />";
   unset($estudiantes["LA"]);

   echo "<pre><center>";
   var_dump($estudiantes);
   echo "</pre></center>";
 
   echo "<br><hr />";
   echo "<pre><center>";
   $estudiantes[] = "Carlos";
  // set($estudiantes[]);
   var_dump($estudiantes);
   echo "</pre></center>";

    
    
} );

Route::get('paises', function()
{
    $paises =
    [
       "COLOMBIA" => 
       [
           "capital" => "bogota",
           "Moneda" => "Peso",
           "poblacion" => 50.08, "millones"

       ],
       "PERU" => 
       [
        "capital" => "Lima",
        "Moneda" => "Soles",
        "poblacion" => 32,97, "millones"
       ],
       "PARAGUAY" =>
       [
        "capital" => "Asunsacion",
        "Moneda" => "Guarani",
        "poblacion" => 7.1, "millones"
       ],
    
    ];
    echo "<pre><center>";
    echo "<br><hr />";
    var_dump($paises);
    echo "</pre></center>";

    return view('paises', $paises)
    ->with('paises', $paises);
});

Route::get('prueba', function()
{
    return view('Producto.create');
    //return view('layauts.principal');
});


Route::resource('producto', ProductoController::class);
