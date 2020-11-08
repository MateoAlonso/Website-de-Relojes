<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabajo WEB II</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">



        <!-- H1 tiene que variar con la pág que se clickea, está oculto -->

        <h1 class="d-none">Trabajo WEB II</h1>

        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">

            <!-- Logo -->

            <a href="index.php" class="navbar-brand ml-2">
                <img src="img/rolex-40x40.jpeg" alt="placeholder logo" width="40" height="40" class="img-fluid rounded-circle">
            </a>

            <!-- Hamburquesa -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="hamb">
                <ul class="navbar-nav ml-auto mr-2">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="php/contacto.php" class="nav-link">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>