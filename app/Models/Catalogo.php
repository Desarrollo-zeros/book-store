<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $fillable = ["categoria","detalle","fecha"];

    protected $table = "catalogo";

    public $timestamps = false;

    public function __construct()
    {
        parent::__construct();
    }


    public function LibroPorCatalogo(){
        return $this->hasMany(LibroPorCatalogo::class);
    }

}
