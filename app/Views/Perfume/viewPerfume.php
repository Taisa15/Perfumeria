<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumeria loca</title>
    <link rel="stylesheet" href="css/styles.css?v=1.0"/>
    <?= time(); ?>
</head>
<body>
    
        <div id="container">
            <header>
                <h1>Perfumeria</h1>
            </header>

           
            <section id="content">
                <article class="article">
                    <br>
                    <table>
       <thead>
        <tr>         
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>ML</th>
            <th>Precio</th>  
            <th>Imagen</th>   
        </tr>   
       </thead>
                </article>
            </section>

                <tbody>
                        <?php foreach ($perfumes as $perfume): ?>
                        <tr>
                            <td><?= $perfume['id'] ?></td>
                            <td><?= $perfume['nombre'] ?></td>
                            <td><?= $perfume['descripcion'] ?></td>
                            <td><?= $perfume['ml'] ?></td>
                            
                            <td><?= number_format($perfume['precio'], 2) ?> MXN</td>
                            <td>
                            <img src="<?= base_url('images/' . $perfume['imagen']); ?>" alt="<?= $perfume['nombre']; ?>" style="max-width: 200px; height: auto;" />


            </td>                
          
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                    <a href="<?= base_url('perfume/new') ?>" class="btn">Agregar perfume</a>

                    <br>

        <nav>
            <ul>
                <li>
                <a href="<?= base_url('perfume/new')?>">
                <i class="fas fa-spray-can"></i> Perfume
            </a>
                </li>
                <li>
                <a href="venta/">
                <i class="fas fa-shopping-cart"></i> Venta
            </a>
                </li>
                
                <li>
                <a href="Venta/viewVenta.php">
                <i class="fas fa-user-alt"></i>Cliente
            </a>
                </li>

            </ul>
        </nav>

       
        </div>
</body>
</html>