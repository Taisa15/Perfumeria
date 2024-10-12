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
            <th>Email</th>
            <th>idPerfume</th>   
        </tr>   
       </thead>
                </article>
            </section>

                <tbody>
                        <?php foreach ($perfumes as $perfume): ?>
                        <tr>
                            <td><?= $perfume['id'] ?></td>
                            <td><?= $perfume['nombre'] ?></td>
                            <td><?= $perfume['email'] ?></td>
                            <td><?= $perfume['idPerfume'] ?></td>
                            
                            <td>
                            

            </td>                
          
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                    <a href="<?= base_url('cliente/new') ?>" class="btn">Agregar cliente</a>

                    <br>

        <nav>
            <ul>
                <li>
                <a href="<?= base_url('cliente/new')?>">
                <i class="fas fa-spray-can"></i> Agregar perfume
            </a>
                </li>
                <li>
                <a href="Venta/viewVenta.php">
                <i class="fas fa-shopping-cart"></i> Venta
            </a>
                </li>
                <li>
                <a href="Cliente/viewCliente.php">
                <i class="fas fa-user-alt"></i> Cliente
                </li>
         
            </a>

            </ul>
        </nav>

       
        </div>
</body>
</html>