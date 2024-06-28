<?php

namespace App\Models;
use CodeIgniter\Model;

class ProductosModel extends Model{
    protected $table = 'productos';
    protected $primaryKet = 'id';
    protected $allowedField = ['nombre', 'stock', 'precio'];

    public function getProductos(){
        return $this -> findAll();
    }


}