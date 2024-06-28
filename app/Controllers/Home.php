<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Home extends BaseController
{
    protected $productosModel;
    public function __construct()
    {
      $this->productosModel = new ProductosModel();  
    }
    public function index()
    {
        //Obtener todos los productos desde el modelo 
$productos = $this->productosModel->findAll();

//Pasar los datos a la vista
$data['productos'] = $productos;
return view('home', $data);

    }

}