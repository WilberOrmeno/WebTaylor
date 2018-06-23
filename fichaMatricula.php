<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Web Taylor</title>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="util/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
    <script src="util/jGrowl/jquery.jgrowl.js"></script>
    <style>
        input[type=text]{
            height: 40px;
        }
        td,th {
            text-align: center;
        }
        .uploader {
            position:relative;
            overflow:hidden;
            background:#f3f3f3;
            border:2px dashed #e8e8e8;
        }

        #filePhoto{
            position:absolute;
            width:150px;
            height:200px;
            top:0px;
            left:0;
            z-index:2;
            opacity:0;
            cursor:pointer;
        }

        .uploader img{
            position:absolute;
            top:-1px;
            left:-1px;
            z-index:1;
            border:none;
        }
    </style>
</head>
<body>
<div class="nav" style="" align="right">
    <label><?php     session_start();
        echo $_SESSION['user'] ?></label>
    <img class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
</div>
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header" align="center">
            <img src="images/iconlogo.png" alt="" style="width: 150px">
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true">Alumnos</a>
                <ul class="list-unstyled" id="homeSubmenu">
                    <li class="active"  ><a href="fichaMatricula.php" style="background-color: #47525e">Ficha de matrícula</a></li>
                    <li><a href="estadoCuenta.php" style="background-color: #ebefe9">Estado de cuenta</a></li>
                    <li><a href="registroNotas.php"  style="background-color: #ebefe9">Registro de notas</a></li>
                </ul>
            </li>
            <li  ><a href="titulos.php">Títulos</a></li>
            <li><a href="convenios.php">Convenios</a></li>
            <li><a href="miCuenta.php">Tu cuenta</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-off" style="top: 2px"></span>  Cerrar sesión</a></li>
        </ul>
    </nav>
    <div id="content" style="margin-top: 20px; width: 100%">
        <!--<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
            <i class="glyphicon glyphicon-align-left"></i>
            Toggle Sidebar
        </button>-->
        <br><br><br>
        <div class="row-fluid" style="padding: 40px; width: 100%">
            <div class="col-md-12">
                <h1>Ficha de matrícula</h1>

            </div>
            <form enctype="multipart/form-data" id="formuploadajax" method="post">
                <div class="col-md-2">
                    <div class="uploader" onclick="$('#filePhoto').click()" style="height: 200px; width: 152px;" >
                        <img id="imagePreview" src="images/uploadImage.jpg" style="height: 200px; width: 152px;">
                        <input type="file" name="userprofile_picture" id="filePhoto" accept="image/*"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="especialidad">Especialidad</label>
                        <input type="text" class="form-control" id="especialidad" name="especialidad" placeholder="Especialidad ">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="ciclo">Ciclo</label>
                        <input type="text" class="form-control" id="ciclo" name="ciclo" placeholder="Ciclo">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="turno">Turno</label>
                        <input type="text" class="form-control" id="turno" name="turno" placeholder="Turno">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="nombre">Apellidos y nombres</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Apellidos y nombres">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Sexo">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="eCivil">Estado civil</label>
                        <input type="text" class="form-control" id="eCivil" name="eCivil" placeholder="Estado civil">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="ocupacion">Ocupación</label>
                        <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Ocupación">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control" id="dni"  name="dni" placeholder="DNI">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="COB">CED. O BOL</label>
                        <input type="text" class="form-control" id="COB" name="COB" placeholder="CED. O BOL">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="otros">Otros</label>
                        <input type="text" class="form-control" id="otros" name="otros" placeholder="Otros">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" style="padding-top: 13px">
                        <h3>Lugar de nacimiento</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Departamento">Departamento</label>
                        <input type="text" class="form-control" id="Departamento" name="Departamento" placeholder="Departamento">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Provincia">Provincia</label>
                        <input type="text" class="form-control" id="Provincia" name="Provincia" placeholder="Provincia">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Distrito">Distrito</label>
                        <input type="text" class="form-control" id="Distrito" name="Distrito" placeholder="Distrito">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fecnac">Fecha de nacimiento</label>
                        <input type="text" class="form-control" id="fecnac" name="fecnac" placeholder="dia/mes/año">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="text" class="form-control" id="fecnac"  name="fecnac" placeholder="Edad">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="direccion">Dirección actual</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección actual">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Distrito2">Distrito</label>
                        <input type="text" class="form-control" id="Distrito2" name="Distrito2" placeholder="Distrito">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="dni">telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sec">I.E. Secundaria</label>
                        <input type="text" class="form-control" id="sec" name="sec" placeholder="I.E. Secundaria">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="centro">¿Otro centro superior?¿Cuál?</label>
                        <input type="text" class="form-control" id="centro" name="centro" placeholder="Centro superior">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="uCiclo">Último ciclo de término</label>
                        <input type="text" class="form-control" id="uCiclo" name="uCiclo" placeholder="Ciclo">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="Semestre">Semestre</label>
                        <input type="text" class="form-control" id="Semestre" name="Semestre" placeholder="Semestre">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="anio">Año</label>
                        <input type="text" class="form-control" id="anio" name="anio" placeholder="Año">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group" style="padding-top: 13px">
                        <h3>ACTIVIDADES CULTURALES Y DEPORTIVAS ¿Qué actividades le agradaría practicar?</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="checkbox" value="1" id="musica"  name="musica"  style="width: 20px; height: 20px;">
                        <label for="musica">Música</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="checkbox" value="1" id="Canto" name="Canto" style="width: 20px; height: 20px;">
                        <label for="Canto">Canto</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="checkbox" value="1" id="Teatro" name="Teatro" style="width: 20px; height: 20px;">
                        <label for="Teatro">Teatro</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="deportes">¿Qué deportes practicas?</label>
                        <input type="text" class="form-control" id="deportes" name="deportes" placeholder="Deportes">
                    </div>
                </div>
                <div class="col-md-12" style="top:15px; padding-bottom: 50px;" align="right">
                    <button type="button" class="btn" style="background-color: #47525e; color: #FFFFFF; width: 180px">Cancelar</button>
                    <button type="submit" class="btn" style="background-color: #47525e; color: #FFFFFF; width: 180px">Agregar</button>
                </div>
            </form>
    </div>
    </div>

</div>
<script>
    var imageLoader = document.getElementById('filePhoto');
    imageLoader.addEventListener('change', handleImage, false);

    function handleImage(e) {
        var reader = new FileReader();
        reader.onload = function (event) {
            $('.uploader img').attr('src',event.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    }
    $(function(){
        $("#formuploadajax").on("submit", function(e){
            e.preventDefault();
            var f = $(this);
            var formData = new FormData(document.getElementById("formuploadajax"));
            formData.append("dato", "valor");
            $.ajax({
                url: "addAlumno.php",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            })
            .done(function(res){
                $.jGrowl("Registro agregado con éxito", { header: 'Agregado' });
                setTimeout(location.reload.bind(location), 1500);
            });
        });
    });
</script>
</body>
</html>