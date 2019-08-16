<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Persona extends Model
{
    protected $table = "persona";

    public $db = null;

    protected $fillable = [
        "primerNombre",
        "SegundoNombre",
        "primerApellido",
        "segundoApellido",
        "usuario_id",
    ];

    public $timestamps = false;

    public function __construct()
    {
        parent::__construct();
    }


    public function Usuario(){
        return $this->belongsTo(Usuario::class);
    }

    public function FacturaVenta(){
        return $this->hasMany(FacturaVenta::class);
    }
}
