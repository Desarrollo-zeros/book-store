<?php

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

use App\Models\Libro;
use App\Models\LibroImg;

Route::get('/', "Book@index");
Route::get('/productos', "Book@catalogo");
Route::get('/login', "Book@pageLogin");
Route::get("/checkout","Book@checkout");
Route::get("/libro/get","Book@libro");
Route::get("/producto/{id}",function (\App\Http\Controllers\Book $book,$id){
    return $book->producto($id);
});

Route::get("/max/",function (\App\Http\Controllers\Book $book){
    return $book->maxVendido();
});


/*login usuario*/
Route::post('/usuario/login', "Usuario@login");
Route::post('/usuario/register', "Usuario@register");
Route::post('/usuario/register_api', "Usuario@register_api");
Route::get('/usuario/destroy', "Usuario@destroy");

Route::post('/persona/register', "Persona@register");

Route::get('/panel', "Panel@index");
Route::post('/panel/categoria', "Panel@categoria");
Route::post('/panel/proveedor', "Panel@proveedor");
Route::post('/panel/libro', "Panel@libro");



Route::post("/persona/registrar","Persona@registrar");


Route::get("/test",function (){
    return [ "primerNombre" => "required",
        "segundoNombre" => "required",
        "primerApellido" => "required",
        "segundoApellido" => "required",
        "telefono" => "required",
        "municipio" => "required",
        "direccion" => "required",
        "usuario_id" => 0
    ];
});
