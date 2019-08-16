<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LibroPorCatalogo extends Model
{
    protected $fillable = ["catalogo_id","libro_id"];
    protected $table = "libro_por_catalogos";

    public function __construct()
    {
        parent::__construct();
    }

    public $timestamps = false;


    public function Libro(){
        return $this->belongsTo(Libro::class);
    }

    public function Catalogo(){
        return $this->belongsTo(Catalogo::class);
    }
}
