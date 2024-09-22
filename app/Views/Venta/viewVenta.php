<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumeria loca</title>
</head>
<body>
    <table>
       <thead>
        <tr>         
            <th>ID</th>
            <th>Fecha</th>
            <th>Total</th>  
            <th>Acciones
            <button onclick="window.location.href='createVenta.php'">Agregar Nueva Venta</button>
            </th>      
        </tr>
       
       </thead>
       <tbody>
        <?php foreach ($venta as $venta): ?>
        <tr>
            <td><?= $venta['id'] ?></td>
            <td><?= $venta['fecha'] ?></td>
            <td><?= number_format($venta['total'], 2) ?> MXN</td>
        </tr>
        <?php endforeach; ?>
       </tbody>
    </table>
    <br>
</body>
</html>