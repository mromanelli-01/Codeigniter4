<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('css/estilos.css'); ?>">
    <title>Home</title>
</head>
<body>
<div class="home__inicio">

    <div class="nombre__whiskeria">
<h1>Whiskeria Wild Grouse</h1>
    </div> <br>
    <h3>Whiskies disponibles</h3> <br>
    <ul>
        <?php foreach ($productos as $producto): ?>
            <li>
                <a href="<?php echo site_url('productos/view/'.$producto['id']); ?>">
                    <?php echo $producto['nombre'];  ?>
                </a>
                
            </li>
            <br>
        <?php endforeach; ?>
    </ul>

   <br> 
<p> En Whiskeria Wild Grouse podrás venír a disfrutar de los mejores ejemplares de espirituosos que hay en el país. 
Podrás comprar medidas del espirituoso de tu gusto, o podrás comprar directamente la botella, para la cual tenemos salones para que puedas venir a degustar con tus seres queridos.</p>

</body>
</div>
</html>
