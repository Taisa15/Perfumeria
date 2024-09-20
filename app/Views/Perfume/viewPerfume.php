<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumeria loca</title>
</head>
<body>
    <h1>hola</h1>

    <table>
       <thead>
        <tr>         
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>ML</th>
            <th>Precio</th>  
            <th>Acciones
            <button onclick="window.location.href='createPerfume.php'">Agregar Nuevo Perfume</button>
            </th>      
        </tr>
       
            
      
       </thead>
       <tbody>
        <?php foreach ($perfumes as $perfume): ?>
        <tr>
            <td><?= $perfume['id'] ?></td>
            <td><?= $perfume['nombre'] ?></td>
            <td><?= $perfume['descripcion'] ?></td>
            <td><?= $perfume['ml'] ?></td>
            <td><?= number_format($perfume['precio'], 2) ?> MXN</td>
        </tr>
        <?php endforeach; ?>
       </tbody>
    </table>
    <br>
    <h5>haaha</h5>
</body>
</html>