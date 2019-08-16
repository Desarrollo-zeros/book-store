<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        "username",
        "email",
        "password",
        "rol"
    ];

    public $timestamps = false;

    protected $table = "usuario";

    public function __construct()
    {
        parent::__construct();
    }

    public function auth($username, $password){
        $colunm = ($this->is_valid_email($username)) ? "email" : "username";
        $usuario = $this
            ->where($colunm,$username)
            ->where("password",sha1($password))->first();

        if(!empty($usuario)){
            session(compact("usuario"));
            return $usuario;
        }
        return false;
    }

    function is_valid_email($str)
    {
        return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
    }


    public function Persona(){
        return $this->hasOne(Persona::class);
    }
}
