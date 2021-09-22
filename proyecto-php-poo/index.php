<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Tienda</title>
</head>

<body>
    <div id="container">
        <!-- CABECERA -->
        <header id="header">
            <div id="logo"><img src="assets/img/t-shirt.png" alt="T-Shirt Logo" />
                <a href="index.php">
                    <h1>Tienda de camisetas</h1>
                </a>
            </div>
        </header>

        <!-- MENU -->
        <nav id="menu">
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Categoria 2</a></li>
                <li><a href="">Categoria 2</a></li>
                <li><a href="">Categoria 3</a></li>
                <li><a href="">Categoria 4</a></li>
                <li><a href="">Categoria 5</a></li>
            </ul>
        </nav>

        <div id="content">
            <!-- BARRA LATERAL -->
            <aside id="lateral">
                <div id="login" class="blog_aside">
                    <form action="" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                        <input type="submit" value="Enviar">
                    </form>
                    <a href="">Mis pedidos</a>
                    <a href="">Gestionar pedidos</a>
                    <a href="">Gestionar categorias</a>
                </div>
            </aside>

            <!-- CONTENIDO CENTRAL -->
            <div id="central">
                <div class="product">
                    <img src="assets/img/t-shirt.png" alt="">
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30€</p>
                    <a href="">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/t-shirt.png" alt="">
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30€</p>
                    <a href="">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/t-shirt.png" alt="">
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30€</p>
                    <a href="">Comprar</a>
                </div>
            </div>
        </div>

        <!-- PIE DE PÁGINA -->
        <footer id="footer">
            <p>Desarollado por Gagan &copy; <?= date('Y') ?></p>
        </footer>
    </div>
</body>

</html>