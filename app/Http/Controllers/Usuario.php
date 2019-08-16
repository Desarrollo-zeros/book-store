<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function login(\App\Models\Usuario $usuario, Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);


        if ($validator->fails()) {
            return response()->json([
                "status"  => false,
                "message" => "usuario y/o contraseña vacios",
                "result" => "error",
                "data" => [],
                "entity" => []
            ]);
        }
        $response = $usuario->auth($request->post("username"),$request->post("password"));

        if($response != false){
            return response()->json([
                "status"  => true,
                "message" => "Login correcto",
                "result" => "success",
                "data" => $response,
                "entity" => []
            ]);
        }

        return response()->json([
            "status"  => false,
            "message" => "usuario y/o contraseña vacios",
            "result" => "error",
            "data" => [],
            "entity" => []
        ]);
    }




    public function register(\App\Models\Usuario $usuario, Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:usuario,username',
            'password1' => 'required',
            'password2' => 'required',
            'email' => 'required|unique:usuario,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status"  => false,
                "message" => "Usuario y/o email ya existen",
                "result" => "error",
                "data" => []
            ]);
        }

        if($request->post("password1") != $request->post("password2")){
            return response()->json([
                "status"  => false,
                "message" => "Contraseña deben ser iguales",
                "result" => "error",
                "data" => []
            ]);
        }

        $response = $usuario->fill([
            'username' => $request->post("username"),
            'password' => sha1($request->post("password1")),
            'email' => $request->post("email"),
            "rol" => 1
        ])->save();

        if($response) {
            return response()->json([
                "status" => true,
                "message" => "Usuario creado con exito",
                "result" => "success",
                "data" => $usuario
            ]);
        }

        return response()->json([
            "status"  => false,
            "message" => "Usuario no pudo crearse",
            "result" => "error",
            "data" => []
        ]);
    }

    public function destroy(){
        session()->flush();
        return redirect("");
    }
}
