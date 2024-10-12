<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nuevo</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>"/>

    <?= time(); ?>
</head>
<body>
    <h1>Crear nuevo Cliente</h1>
    <form action="<?= base_url('venta/create')?>"method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label>
    <input type="text"id="nombre"name="nombre"> <br><br>
    <label for="email">Email:</label>
    <input type="text"id="email"name="email"> <br><br>
    <label for="idPerfume">idPerfume:</label>
    <input type="text"id="idPerfume"name="idPerfume"> <br><br>
    
    <button type="submit"class="btn-add">Guardar cliente</button>
    </form>
     
    
 

<?php if (session()->getFlashdata('error')): ?>
        <div style="color: red;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    
</body>
</html>