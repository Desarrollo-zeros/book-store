<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Libro extends Model
{
    protected $table = "libro";
    private $db = null;

    protected $fillable = [

        "ISBN",
        "titulo",
        "autor",
        "descripcion",
        "precioCompra",
        "precioVenta",
        "cantidadActual",
        "fechaPublicacion",
        "descuento",
        "estado",
    ];

    public $timestamps = false;

    public function __construct()
    {
        $this->db = new DB();
        parent::__construct();
    }

    public function LibroPorCatalogo(){
        return $this->hasMany(LibroPorCatalogo::class);
    }

    public function DetalleFacturaCompra(){
        return $this->hasMany(DetalleFacturaCompra::class);
    }

    public function DetalleFacturaVenta(){
        return $this->hasMany(DetalleFacturaVenta::class);
    }

    public function LibroImg(){
        return $this->hasMany(LibroImg::class);
    }


    public function Libros(){
        $libro = DB::select("select l.id,ISBN, titulo, descripcion, autor, precioCompra, precioVenta, cantidadActual, fechaPublicacion, descuento, estado, categoria from catalogo c inner join libro_por_catalogos lc on c.id = lc.catalogo_id inner join libro l on l.id = lc.libro_id");

        for($i=0;$i<count($libro);$i++){
            $libro[$i]->imagen =  LibroImg::where("libro_id",$libro[$i]->id)->get("img")->first()["img"];
        }
        return $libro;
    }

    public function LibroPorCatalogoQuerys($id =0){
        $libros = array();
        if($id == 0){
            $libro = DB::select("select distinct l.id, l.cantidadActual,  l.ISBN, l.titulo, l.fechaPublicacion, l.autor, l.descripcion, l.precioVenta, l.precioCompra, l.descuento, c.id as catalogo_id from libro l inner join libro_por_catalogos lc on l.id = lc.libro_id inner join catalogo c on c.id = lc.catalogo_id");

            foreach ($libro as $row){
                if(!$this->exist($libros,$row->id)){
                    $row->img = DB::select("select img from libro_img where libro_id = '{$row->id}' ");
                    array_push($libros,$row);
                }
            }
        }else{
            $libro = DB::select("select distinct l.id, l.cantidadActual,  l.ISBN, l.titulo, l.fechaPublicacion, l.autor, l.descripcion, l.precioVenta, l.precioCompra, l.descuento, c.id as catalogo_id from libro l inner join libro_por_catalogos lc on l.id = lc.libro_id inner join catalogo c on c.id = lc.catalogo_id where l.id = $id");
            foreach ($libro as $row){
                if(!$this->exist($libros,$row->id)){
                    $row->img = DB::select("select img from libro_img where libro_id = '$id' ");
                    array_push($libros,$row);
                }
            }
        }

        return $libros;
    }

    public function exist($libro, $id){
        foreach ($libro as $row){
            if($row->id == $id){
                return true;
            }
        }
        return false;
    }

}
