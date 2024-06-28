<!DOCTYPE html>
<html>
<link rel="stylesheet" href="<?php echo base_url('css/estilos.css'); ?>">
<head>
    <title>Detalle del Producto</title>
</head>
<body>
<div class="nombre__whisky"> 
    <h1><?php echo $producto['nombre']; ?></h1>
    </div> <br>
    <p>Precio: <?php echo $producto['precio']; ?></p> <br>
    <p>Stock: <?php echo $producto['stock']; ?></p> <br>
    <p>Código: <?php echo $producto['id']; ?></p> <br>
   
</body>
</html>
