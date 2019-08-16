<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LibroImg extends Model
{
    protected $table = "libro_img";

    protected $fillable = [
        "img",
        "libro_id"
    ];

    public $timestamps = false;

    public function __construct()
    {
        parent::__construct();
    }

    public function libro(){
        return $this->belongsTo(Libro::class);
    }


    public function imagLibro($id){
        return DB::select("select img from libro_img where libro_id = $id");
    }
}
