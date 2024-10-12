<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumeria loca</title>
    <link rel="stylesheet" href="css/styles.css?v=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div id="container">
    <header> <h1> Ventas </h1> </header>
    <table>
       <thead>
        <tr>         
            <th>ID</th>  
            <th>Fecha</th>
            <th>Total</th>  
            <th>Acciones </th> 
            <th>Cliente</th>   
            <button class="btn-add" onclick="window.location.href='Venta/new'">Agregar Nueva Venta</button> 
             
        </tr>
       
       </thead>
       <tbody>
            <?php foreach ($ventas as $venta): ?>
            <tr>
                <td><?= $venta['id'] ?></td>
                <td><?= $venta['fecha'] ?></td>
                <td><?= number_format($venta['total'], 2) ?> MXN</td>
                <td><?= $venta['idCliente'] ?></td>
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
            <li>
            <a href="<?php base_url('')?>">
                    <i class="fas fa-user-alt">
                    </i> Cliente
                </a>
            </li>
        </ul>
    </nav>

</div>
</body>
</html>
