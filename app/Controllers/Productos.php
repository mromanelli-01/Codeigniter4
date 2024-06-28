<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
    protected $productosModel;

    public function __construct()
    {
        $this->productosModel = new ProductosModel();  
    }

    public function index()
    {
        // Obtener todos los productos desde el modelo 
        $productos = $this->productosModel->findAll();

        // Pasar los datos a la vista
        return view('productos/index', ['productos' => $productos]);
    }

    public function view($id)
    {
        // Obtener el producto específico por ID
        $producto = $this->productosModel->find($id);

        // Verificar si el producto existe
        if (!$producto) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Producto no encontrado: ' . $id);
        }

        // Pasar los datos del producto a la vista
        return view('productos/detalle', ['producto' => $producto]);
    }
}
