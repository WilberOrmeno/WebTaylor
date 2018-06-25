<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Web Taylor</title>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/main.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/miCuenta.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="nav" style="" align="right">
    <label><?php  session_start(); echo $_SESSION['user'] ?></label>
    <img class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
</div>
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header" align="center">
            <img src="images/iconlogo.png" alt="" style="width: 150px">
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Alumnos</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="fichaMatricula.php" style="background-color: #ebefe9">Ficha de matrícula</a></li>
                    <li><a href="estadoCuenta.php" style="background-color: #ebefe9">Estado de cuenta</a></li>
                    <li><a href="#"  style="background-color: #ebefe9">Registro de notas</a></li>
                </ul>
            </li>
            <li><a href="titulos.php">Títulos</a></li>
            <li ><a href="convenios.php">Convenios</a></li>
            <li class="active"><a href="miCuenta.php">Tu cuenta</a></li>
            <li><a href="registroNotas.php"><span class="glyphicon glyphicon-off" style="top: 2px"></span>  Cerrar sesión</a></li>
        </ul>
    </nav>
    <div id="content" style="margin-top: 180px; width: 100%">
      

<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
         <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2><?php echo $_SESSION['user'] ?></h2>
                    <p><strong>Nombres: </strong> <?php echo $_SESSION['nombres'] ?> </p>
                    <p><strong>Apellidos: </strong> <?php echo $_SESSION['apellidos'] ?> </p>
                    <p><strong>Correo electrónico: </strong> <?php echo $_SESSION['email'] ?></p>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <figcaption class="ratings">
                            <p>Nivel
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                 <span class="fa fa-star"></span>
                            </a>
                            </p>
                        </figcaption>
                        <img class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />

                    </figure>
                </div>
            </div>
             <?php include "editarCuenta.php"?>
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">

                    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#modalEliminar"><span class="fa fa-plus-circle"></span> Eliminar </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">

                    <button class="btn btn-info btn-block" data-toggle="modal" data-target="#modalEditar"><span class="fa fa-user"></span> Editar </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalAdministrar"><span class="fa fa-gear"></span> Administrar </button>
                </div>
            </div>
         </div>
        </div>
    </div>
</div>
    </div>

</div>
</body>
</html>