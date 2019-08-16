<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleFacturaVenta extends Model
{
    protected $fillable = [
        "cantidad",
        "precio",
        "valorNeto",
        "factura_venta_id",
        "libro_id"
    ];

    public $timestamps = false;

    protected $table = "detalle_factura_venta";

    public function __construct()
    {
        parent::__construct();
    }

    public function Libro(){
        return $this->belongsTo(Libro::class);
    }

    public function FacturaVenta(){
        return $this->belongsTo(FacturaVenta::class);
    }
}
