<?php

namespace App\Http\Controllers;

use App\Models\Caja;
use App\Models\Libro;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Persona extends Controller
{

    public function registrar(\App\Models\Persona $persona, Request $request){
        $validator = Validator::make($request->all(), [
            "primerNombre" => "required",
            "segundoNombre" => "required",
            "primerApellido" => "required",
            "segundoApellido" => "required",
            "telefono" => "required",
            "municipio" => "required",
            "direccion" => "required",
            "usuario_id" => "required",
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "message" => "Datos incorrectos",
                "result" => "error",
                "data" => []
            ]);
        }
        $response = $persona->fill([
            "primerNombre" => $request->post("primerNombre"),
            "segundoNombre" => $request->post("segundoNombre"),
            "primerApellido" => $request->post("primerApellido"),
            "segundoApellido" => $request->post("segundoApellido"),
            "telefono" => $request->post("telefono"),
            "municipio" => $request->post("municipio"),
            "direccion" => $request->post("direccion"),
            "usuario_id" => $request->post("usuario_id"),
        ])->save();

        if($response){
            return response()->json([
                "status"  => true,
                "message" => "Persona registrada con exito",
                "result" => "success",
                "data" => $persona
            ]);
        }
        return response()->json([
            "status"  => false,
            "message" => "Persona Error al registrar persona",
            "result" => "error",
            "data" => []
        ]);
    }


    public function register(\App\Models\Persona $persona, Request $request)
    {

        $idPersona = 0;

        $id = $request->post("id");
        if (isset($id) || $id == "") {
            $validator = Validator::make($request->all(), [
                "primerNombre" => "required",
                "segundoNombre" => "required",
                "primerApellido" => "required",
                "segundoApellido" => "required",
                "telefono" => "required",
                "municipio" => "required",
                "direccion" => "required",
                "usuario_id" => "required",
            ]);


            if ($validator->fails()) {
                return response()->json([
                    "status" => false,
                    "message" => "Datos incorrectos",
                    "result" => "error",
                    "data" => []
                ]);
            }

            //$response = $persona->fill($request->all())->save();
            $id = DB::table("persona")->insertGetId([
                "primerNombre" => $request->post("primerNombre"),
                "segundoNombre" => $request->post("segundoNombre"),
                "primerApellido" => $request->post("primerApellido"),
                "segundoApellido" => $request->post("segundoApellido"),
                "telefono" => $request->post("telefono"),
                "municipio" => $request->post("municipio"),
                "direccion" => $request->post("direccion"),
                "usuario_id" => $request->post("usuario_id"),
            ]);
        }


        $libro = new Libro();
        $libros = $request->post("data")["libro"];

        $facturaVenta = [
            "fecha" => Carbon::now(),
            "total" => $request->post("data")["total"],
            "persona_id" => $id
        ];

        $idFacturaVenta = DB::table("factura_venta")->insertGetId($facturaVenta);


        $detalleFacturaVenta = [];
        $valor = 0;
        for($i=0; $i<=count($libros)-1;$i++){
            $l = $libro->find($libros[$i]["id"]);
            array_push($detalleFacturaVenta,[
                "cantidad" => $libros[$i]["cantidad"],
                "precio" => $l->precioVenta,
                "valorNeto" => $l->precioVenta * $libros[$i]["cantidad"],
                "factura_venta_id" => $idFacturaVenta,
                "libro_id" => $libros[$i]["id"]
            ]);
            $valor +=  $l->precioVenta * $libros[$i]["cantidad"];
        }

        $response = DB::table("detalle_factura_venta")->insert($detalleFacturaVenta);


        $caja = Caja::find(1);
        $caja->saldo  =  $caja->saldo  + $valor;
        $caja->save();


        if($response){
            return response()->json([
                "status"  => true,
                "message" => "Compra registrada con exito",
                "result" => "success",
                "data" => []
            ]);
        }
    }
}
