<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleFacturaCompra extends Model
{
    protected $fillable = [
        "cantidad",
        "precio",
        "factura_compra_id",
        "libro_id"
    ];

    public $timestamps = false;
    protected $table = "detalle_factura_compra";

    public function __construct()
    {
        parent::__construct();
    }

    public function Libro(){
        return $this->belongsTo(Libro::class);
    }

    public function FacturaCompra(){
        return $this->belongsTo(FacturaCompra::class);
    }
}
