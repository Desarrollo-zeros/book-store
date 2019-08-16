<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacturaCompra extends Model
{
    protected $table = "factura_compra";

    protected $fillable = ["fecha","proveedor_id"];

    public $timestamps = false;

    public function __construct()
    {
        parent::__construct();
    }

    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }

    public function DetalleFacturaCompra(){
        return $this->hasMany(DetalleFacturaCompra::class);
    }



}
