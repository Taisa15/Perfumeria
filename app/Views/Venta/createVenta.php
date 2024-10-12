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
    <h1>Crear nueva Venta</h1>
    <form action="<?= base_url('venta/create')?>"method="POST" enctype="multipart/form-data">
    <label for="fecha">Fecha:</label>
    <input type="date"id="fecha"name="fecha"> <br><br>
    <label for="total">Total:</label>
    <input type="text"id="total"name="total"> <br><br>
    <label for="cliente">Cliente:</label>
    <input type="text"id="cliente"name="cliente"> <br><br>
    
    <button type="submit"class="btn-add">Guardar venta</button>
    </form>
     
    
 

<?php if (session()->getFlashdata('error')): ?>
        <div style="color: red;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    
</body>
</html>