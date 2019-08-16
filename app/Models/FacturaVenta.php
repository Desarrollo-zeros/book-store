<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacturaVenta extends Model
{
    protected $table = "factura_venta";

    protected $fillable = [
        "cantidad",
        "precio",
        "valorNeto",
        "factura_venta_id",
        "libro_id"
    ];

    public $timestamps = false;

    public function __construct()
    {
        parent::__construct();
    }

    public function DetalleFacturaVenta(){
        return $this->hasMany(DetalleFacturaVenta::class);
    }

    public function Persona(){
        return $this->belongsTo(Persona::class);
    }
}
