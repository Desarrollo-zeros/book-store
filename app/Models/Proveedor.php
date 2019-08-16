<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = [
        "nombre",
        "tipo",
        "direccion",
        "telefono",
    ];

    public $timestamps = false;

    protected $table = "proveedor";

    public function __construct()
    {
        parent::__construct();
    }

    public function FacturaCompra(){
        return $this->hasMany(FacturaCompra::class);
    }
}
