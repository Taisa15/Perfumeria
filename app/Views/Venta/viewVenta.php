<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumeria loca</title>
</head>
<body>
    <h1> ventaa </h1>
    <table>
       <thead>
        <tr>         
            <th>ID</th>
            <th>Fecha</th>
            <th>Total</th>  
            <th>Acciones
            
            </th>  
            <button onclick="window.location.href='createVenta.php'">Agregar Nueva Venta</button>    
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
</body>
</html>
