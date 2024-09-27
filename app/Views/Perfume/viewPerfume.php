<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumeria loca</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
    
        <div id="container">
            <header>
                <h1>Perfumeria :D</h1>
            </header>

            <style>
                body{
                    background-color: lightgrey;
                }

                #container {
                margin: 0px auto;    
                width: 1100px;
                height: 60px;
                }

                header{
                    background-color: palevioletred;
                    text-align: center;
                    color: whitesmoke;
                }

                .article{
                    background-color: rebeccapurple
                }

                aside{
                    background-color: pink;
                    color: rebeccapurple;
                    text-align: center; 
                }

                tr{
                    font-family: Arial, Helvetica, sans-serif;
                    background-color: wheat;
                    border-collapse: collapse;
                    text-align: left;                  
                }

                tr,td{
                    
                    padding: 10px;
                }
       
                th{
                    background-color: hotpink;
                }

                table{
                    margin: 0px auto; 
                }

                 h2{
                    font-size: 20px;
                 }
            </style>

            <section id="content">
                <article class="article">
                    <h2>Barato</h2>
                    <p>Los mejores perfumes a los mejores precios para la gente criticona</p>
                    <table>
       <thead>
        <tr>         
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>ML</th>
            <th>Precio</th>  
            <th>Acciones
        *   /* <button onclick="window.location.href='createPerfume.php'">Agregar Nuevo Perfume</button>*//*
            </th>      
        </tr>
       
            
      
       </thead>
                </article>
            </section>

            <aside>
                <h2>Agregar nuevo perfume</h2>
                <form>
                    <input type="text">
                    <input type="submit" value="Agregar"/>
                </form>
            
                <footer>Distribuidor Autorizado</footer>
    
   
            </aside>

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

        <img width="150px" src="https://www.dior.com/dw/image/v2/BGXS_PRD/on/demandware.static/-/Sites-master_dior/default/dwd7d26ce7/Y0996347/Y0996347_C099600764_E01_GHC.jpg?sw=1850&sh=1850" />
        <img width="150px" src="data:image/jpeg;base64,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"/>
        <img width="132px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0NoNyv7e95uC-t77JIbyJdXAP34_lbf9Jkg&s"/>     
        <img width="113px" src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQy74gPmOLb8siJguNlNQKcY6lMHJXREzo14g&s"/>
         <img width="150px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcfwVbfCbiMqAel8nvBhUjU22JcH4kk0HJZQ&s"/>
        <img width="112px" src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-sQQQZ_mbV_8AJWCaFdlsnyYvQEh9yuXpgA&s"/>
         <img width="112px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6ZojViJ1hXblH5PWehW8g-XEY59yD5OdVUA&s"/>
         <img width="150px" src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQr67EYBsktiibCwLhRLDQgQluBaEKjHxKkUg&s"/>
        </div>

</body>
</html>