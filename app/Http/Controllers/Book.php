<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\LibroImg;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Book extends Controller
{
    public function index(){
        $catalogo = new \App\Models\Catalogo();
        $catalogo->all();

        $data = [
            "catalogo" => $catalogo->all()
        ];

        return view("index")->with(compact("data"));
    }

    public function catalogo(){
        $catalogo = new \App\Models\Catalogo();
        $libro = new Libro();

        $data = [
            "catalogo" => $catalogo->all(),
            "libro" => $libro->LibroPorCatalogoQuerys(),
        ];
        return view("catalogo")->with(compact("data"));
    }

    public function libro(){
        $libro = new Libro();
        $libro = $libro->Libros();
        return json_encode($libro);
    }

    public function producto($id){
        $libro = new Libro();
        $libro = $libro->LibroPorCatalogoQuerys($id)[0];
        return view("single")->with(compact("libro"));
    }

    public function maxVendido(){
        $id =  DB::select("select count(libro_id), libro_id from detalle_factura_venta  GROUP BY libro_id order by libro_id desc LIMIT 1 ")[0]->libro_id;
        $libro = new Libro();
        $libro = $libro->LibroPorCatalogoQuerys($id)[0];
        return view("single")->with(compact("libro"))->with(["max"=>true]);
    }


    public function checkout(){
        $persona = null;
        if(session()->has("usuario")){
            $persona = new Persona();
            $persona = $persona->where("usuario_id",session()->get("usuario")->id)->first();
            return view("checkout")->with(compact("persona"));
        }
       return redirect("login?compra=true");
    }

    public function pageLogin(){
        if(!session()->has("usuario")){
            return view("login");
        }else{
           return $this->index();
        }
    }
}
