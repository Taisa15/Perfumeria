<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nuevo</title>
</head>
<body>

<?php if (session()->getFlashdata('error')): ?>
        <div style="color: red;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('perfume/create')?>"method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre del perfume:</label>
    <input type="text"id="nombre"name="nombre"> <br><br>
    <label for="descripcion">Descripción:</label>
    <input type="text"id="descripcion"name="descripcion"> <br><br>
    <label for="ml">Mililitros (ml):</label>
    <input type="text"id="ml"name="ml"> <br><br>
    <label for="precio">Precio:</label>
    <input type="text"id="precio"name="precio"> <br><br>
    <input type="file" name="image" id="image">
    <label for="image">Imagen del perfume:</label>
    <button type="submit">Guardar perfume</button>
    </form>
   
</body>
</html>
        