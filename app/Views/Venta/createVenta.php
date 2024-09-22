<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nueva venta</title>
</head>
<body>
    <form action="<?php base_url()?>VentaController/createVenta"method = "post">
    <label for="fecha"></label>
    <input type="text"id="fecha"name="fecha"><br><br>
    <label for="total"></label>
    <input type="text"id="total"name="total"> <br><br>
    <button type="submit">Enviar</button>
    </form>
   
</body>
</html>