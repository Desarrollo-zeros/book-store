<?php

namespace App\Http\Controllers;

use App\Models\Caja;
use App\Models\DetalleFacturaCompra;
use App\Models\Libro;
use App\Models\LibroImg;
use App\Models\LibroPorCatalogo;
use App\Models\Persona;
use App\Models\Proveedor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Panel extends Controller
{
    public function index(){
       if(session()->has("usuario")){
           if(session()->get("usuario")->rol > 1){
               $persona = new Persona();
               $persona = $persona->where("usuario_id",session()->get("usuario")->id)->first();

               $caja = new Caja();

               $totalVenta = DB::select("select sum(valorNeto) as valor from detalle_factura_venta;")[0]->valor;
               $totalCompra = DB::select("select sum(precio) as valor from detalle_factura_compra;")[0]->valor;
               $totalLibros = DB::select("select count(*) as total from libro")[0]->total;


               $totalVenta = isset($totalVenta) ? $totalVenta : 0;
               $totalCompra = isset($totalCompra) ? $totalCompra : 0;
               $totalLibros = isset($totalLibros) ? $totalLibros : 0;

               $proveedor = Proveedor::all();

               $catalogo = \App\Models\Catalogo::all();

               return view("panel")
                   ->with(compact("persona"))
                   ->with(["caja"=>$caja->find(1)])
                   ->with(compact("totalVenta"))
                   ->with(compact("totalCompra"))
                   ->with(compact("totalLibros"))
                   ->with(compact("proveedor"))
                   ->with(compact("catalogo"));
           }
       }
       return redirect("");
    }

    public function categoria(\App\Models\Catalogo $catalogo, Request $request){
        switch ($request->get("id")){
            case 1:{

                $response = $catalogo->fill([
                    "categoria" => $request->post("categoria"),
                    "detalle" => $request->post("detalle"),
                    "fecha" => Carbon::now(),
                ])->save();
                if($response){
                    return response()->json([
                        "status"  => true,
                        "message" => "Categoria registrada con exito",
                        "result" => "success",
                        "data" => $catalogo->all()
                    ]);
                }
                return response()->json([
                    "status"  => false,
                    "message" => "Categoria no pudo ser registrado",
                    "result" => "error",
                    "data" => []
                ]);
            }
            case 2:{
                $categoria = $catalogo->find($request->post("id"));
                $categoria->categoria = $request->post("categoria");
                $categoria->detalle = $request->post("detalle");
                $categoria->save();

                return response()->json([
                    "status"  => true,
                    "message" => "Categoria Actualizada con exito",
                    "result" => "success",
                    "data" => $catalogo->all()
                ]);
            }
            case 3:{
                return $catalogo->find($request->post("id"));
            }
            case 4:{
                return $catalogo->all();
            }
            case 5:{
                $catalogo->find($request->post("id"))->delete();

                return response()->json([
                    "status"  => true,
                    "message" => "Categoria Eliminada con exito",
                    "result" => "success",
                    "data" => $catalogo->all()
                ]);
            }
        }
    }

    public function libro(Libro $libro, Request $request){
        switch ($request->get("id")) {
            case 1:{
                $caja = new Caja();
                $caja = $caja->find(1);
                $saldo = 0;

                foreach ($request->all() as $row){
                    if(isset($row["isbn"])){
                        $saldo += $row["precioCompra"];
                        if($caja->saldo <= $saldo){
                            return response()->json([
                                "status"  => false,
                                "message" => "Saldo insuficiente, no puede realizar la compra de libros",
                                "result" => "error",
                                "data" => $libro->all()
                            ]);
                        }
                        $validator = Validator::make($row, [
                            "isbn" => 'required|unique:libro,ISBN',
                        ]);
                        if (!$validator->fails()) {
                            $libro_id = DB::table('libro')->insertGetId([
                                "ISBN" => $row["isbn"],
                                "titulo"  => $row["titulo"],
                                "autor"  => $row["autor"],
                                "descripcion"  => $row["descripcion"],
                                "precioCompra"  => $row["precioCompra"],
                                "precioVenta"  => $row["precioVenta"],
                                "cantidadActual"  => $row["cantidadActual"],
                                "fechaPublicacion" => Carbon::now(),
                                "descuento"  => $row["descuento"],
                                "estado"  => 1,
                            ]);

                            $img1 = $row["img1"];

                            DB::table("libro_img")->insert([
                                "img" => $img1,
                                "libro_id" => $libro_id
                            ]);

                        }else{
                            $libro_id = $libro->where("ISBN",$row["isbn"])->get("id")[0]->id;
                        }

                        DB::table("libro_por_catalogos")->insert(
                            [
                                "libro_id" => $libro_id,
                                "catalogo_id" => $row["catalogo_id"]
                            ]
                        );

                        $factura_id = DB::table("factura_compra")->insertGetId( [
                            "fecha" => Carbon::now(),
                            "proveedor_id" => $row["proveedor_id"]
                        ]);

                        $detalleFacturaCompra = new DetalleFacturaCompra();
                        $detalleFacturaCompra->fill([
                            "cantidad" => $row["cantidadActual"],
                            "precio" => $row["precioCompra"],
                            "factura_compra_id" => $factura_id,
                            "libro_id" => $libro_id
                        ])->save();


                    }
                }
                $caja->saldo -= $saldo;
                $caja->save();
                return response()->json([
                    "status"  => true,
                    "message" => "Compra registrada con exito",
                    "result" => "success",
                    "data" => $libro->all(),
                    "saldo" => $caja->saldo,
                    "compra" =>  $totalCompra = DB::select("select sum(precio) as valor from detalle_factura_compra;")[0]->valor,
                    "libro" => $libro->all()->count()
                ]);
            }
            case 2:{
                $validator = Validator::make($request->all(), [
                    "isbn" => 'required|unique:libro,ISBN',
                ]);

                $libro = $libro->find($request->post("id"));
                if (!$validator->fails()) {
                    $libro->ISBN = $request->post("isbn");
                }
                $libro->titulo = $request->post("titulo");
                $libro->descripcion = $request->post("descripcion");
                $libro->precioCompra = $request->post("precioCompra");
                $libro->precioVenta = $request->post("precioVenta");
                $libro->cantidadActual = $request->post("cantidadActual");
                $libro->descuento = $request->post("descuento");
                $libro->save();


                $img1 = $request->post("img1");
                //$img2 = $request->post("img2");
                //$img3 = $request->post("img3");

                $libroImg = new LibroImg();
                DB::table("libro_img")->where("libro_id",$libro->id)->delete();
                DB::table("libro_img")->insert([
                    "img" => $img1,
                    "libro_id" => $libro->id
                ]);

                return response()->json([
                    "status"  => true,
                    "message" => "Libro Actualizado con exito",
                    "result" => "success",
                    "data" => $libro->all(),
                ]);
            }
            case 4:{
                return $libro->LibroPorCatalogoQuerys();
            }
        }
    }

    public function proveedor(Proveedor $proveedor, Request $request){
        switch ($request->get("id")){
            case 1:{
                $response = $proveedor->fill($request->all())->save();
                if($response){
                    return response()->json([
                        "status"  => true,
                        "message" => "Proveedor registrada con exito",
                        "result" => "success",
                        "data" => $proveedor->all()
                    ]);
                }
                return response()->json([
                    "status"  => false,
                    "message" => "Proveedor no pudo ser registrado",
                    "result" => "error",
                    "data" => []
                ]);
            }
            case 2:{
                $prove = $proveedor->find($request->post("id"));
                $prove->nombre = $request->post("nombre");
                $prove->direccion = $request->post("direccion");
                $prove->telefono = $request->post("telefono");
                $prove->tipo = $request->post("tipo");
                $prove->save();

                return response()->json([
                    "status"  => true,
                    "message" => "Categoria Actualizada con exito",
                    "result" => "success",
                    "data" => $proveedor->all()
                ]);
            }
            case 3:{
                return $proveedor->find($request->post("id"));
            }
            case 4:{
                return $proveedor->all();
            }
            case 5:{
                $proveedor->find($request->post("id"))->delete();

                return response()->json([
                    "status"  => true,
                    "message" => "Proveedor Eliminada con exito",
                    "result" => "success",
                    "data" => $proveedor->all()
                ]);
            }
        }
    }
}
