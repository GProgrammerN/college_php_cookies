<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'compara.inc'; ?>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row area">
            <div class="cols-sm-12 bg-light">
            <?php 
if (isset($_COOKIE["corperso"])) {
    echo "<img src='img/" . $_COOKIE["corperso"] . ".jpg' class='img-fluid' width='100%'>";
} else {
    echo "<img src='img/azul' class='img-fluid' width='100%'>";
}
?>

            </div>
        </div>

        <br>

        <nav class="navbar navbar-expand-lg navbar-dark azul">
            <a class="navbar-brand" href="#">MINHA MARCA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Destaques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Preços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Desativado</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row area">
            <div class="cols-sm-12 bg-light">
                <h6 align="right">Personalize sua INTERFACE</h6>
                <a href="cookie.php?id=azul">
                    <img src=img/btnazul.png height=30 border=no>
                </a>
                <a href="cookie.php?id=vermelho">
                    <img src="img/btnvermelho.jpg" height=30 border=no>
                </a>
                <a href="cookie.php?id=verde">
                    <img src="img/btnverde.png" height=30 border=no>
                </a>
            </div>
        </div>

        <br>

        <div class="row area">
            <div class="cols-sm-12 bg-light">
                <h3>SOBRE NÓS</h3>
                <br><br>
                xxxxxxx <br>
                xxxxxxx <br>
                xxxxxxx <br>
            </div>
        </div>

        <div class="row rodape">
            <div class="cols-sm-12 text-light">
                <h4>rodape</h4>
            </div>
        </div>

    </div>
    <?php

    ?>

    <script src="javascript/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>