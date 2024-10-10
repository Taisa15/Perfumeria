<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumeria loca</title>
    <link rel="stylesheet" href="css/styles.css?v=1.0"/>
</head>
<body>
<div id="container">
    <header> <h1> Ventas </h1> </header>
    <table>
       <thead>
        <tr>         
            <th>ID</th> <break> 
            <th>Fecha</th>
            <th>Total</th>  
            <th>Acciones
            </th>  
            <button class="btn-add" onclick="window.location.href='Venta/new'">Agregar Nueva Venta</button> 
             
        </tr>
       
       </thead>
       <tbody>
            <?php foreach ($ventas as $venta): ?>
            <tr>
                <!-- Escapar las variables con htmlspecialchars -->
                <td><?= htmlspecialchars($venta['id'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars($venta['fecha'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= number_format(htmlspecialchars($venta['total'], ENT_QUOTES, 'UTF-8'), 2) ?> MXN</td>
            </tr>
            <?php endforeach; ?>
       </tbody>
    </table>
    <br>



    <nav>
        <ul>
            <li>
                <a href="<?php base_url('')?>">
                    <i class="fas fa-spray-can">
                    </i> Perfume
                </a>
            </li>
            <li>
            <a href="<?php base_url('')?>">
                    <i class="fas fa-shopping-cart">
                    </i> Venta
                </a>
            </li>
        </ul>
    </nav>

</div>
</body>
</html>
