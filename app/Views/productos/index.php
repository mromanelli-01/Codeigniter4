

<h2>Listado de productos</h2>  

<table border="1">
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Stock</th>
<th>Precio</th>

</tr>

<?php foreach ($productos as $producto) : ?>
    <tr>
        <td><?php echo $producto ['id'] ?></td>
        <td><?php echo $producto ['nombre'] ?></td>
        <td><?php echo $producto ['stock'] ?></td>
        <td><?php echo "$". $producto  ['precio'] ?></td>

    </tr>
    <?php endforeach; ?>
</table>