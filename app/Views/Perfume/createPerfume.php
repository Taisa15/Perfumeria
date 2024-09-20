<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nuevo</title>
</head>
<body>
    <form action="<?php base_url()?>PerfumeController/createPerfume"method = "post">
    <label for="nombre"></label>
    <input type="text"id="nombre"name="nombre"> <br><br>
    <label for="descripcion"></label>
    <input type="text"id="descripcion"name="descripcion"> <br><br>
    <label for="ml"></label>
    <input type="text"id="ml"name="ml"> <br><br>
    <label for="precio"></label>
    <input type="text"id="precio"name="precio"> <br><br>
    <button type="submit">Enviar</button>
    </form>
   
</body>
</html>