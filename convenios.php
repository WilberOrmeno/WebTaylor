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
    <script src="dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="dist/min/dropzone.min.css">

</head>

<body>
<div class="nav" style="" align="right">
    <label>USERNAME</label>
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
                    <li><a href="registroNotas.php"  style="background-color: #ebefe9">Registro de notas</a></li>
                </ul>
            </li>
            <li><a href="titulos.php">Títulos</a></li>
            <li  class="active"><a href="convenios.php">Convenios</a></li>
            <li><a href="miCuenta.html">Tu cuenta</a></li>
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
            <div class="col-md-8">
                <h1>Convenios</h1>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="buscar" placeholder="Buscar">
                    <br>
                </div>
            </div>
            <form enctype="multipart/form-data" id="formuploadajax" method="post">
            <div class="col-md-5" style="top:15px">
                <div class="form-group">
                    <label for="nombreEntidad">Nombre de la entidad</label>
                    <input type="text" class="form-control" name="entidad" id="nombreEntidad" placeholder="Entidad">
                </div>
                <div class="form-group">
                    <label for="vencimiento">Vencimiento</label>
                    <input type="text" class="form-control" name="vencimiento" id="vencimiento" placeholder="dia/mes/año">
                </div>

            </div>

            <div class="col-md-7" style="left: 30px ;top:15px" align="right">
               <div style=" width: 500px; height: 180px; margin-bottom:10px; border: 1.5px dashed #0f0f0f " align="right">
                  <div class="col-md-4" align="center" style="top: 20px;" id="div1">
                       <img src="images/file.png" alt=""><br>
                       Convenios
                    </div>
                    <div class="col-md-8"  align="left" style="top:50px" id="div2">
                       <button type="button" class="btn" onclick="$('#docConvenio').click()" style="background-color: #47525e; color: #FFFFFF; width: 180px">Subir archivo</button>
                           <input type="file" name="docConvenio" id="docConvenio" style="display: none;"
                                  accept="application/pdf,.doc,.docx, image/*">
                       <br> Se permiten archivos .doc .docx .pdf .jpg
                    </div>
                   <div class="col-md-4" align="center" style="top: 20px; display: none" id="div3">
                       <img src="images/file.png" id="cargado" style="width: 100px; margin-top: 25px"><br>
                   </div>
                   <div class="col-md-8"  align="left" style="top:50px; display: none" id="div4">
                       Archivo Cargado:
                       <br>
                       <label id="fileName"></label><br>
                       <button type="button" class="btn" onclick="$('#docConvenio').click()"
                               style="background-color: #47525e; color: #FFFFFF; width: 180px">Cambiar archivo</button>

                   </div>
                </div>
                <button type="button" class="btn btn-lg" style="background-color: #47525e; color: #FFFFFF; width: 180px">Cancelar</button>
                <input type="submit" class="btn btn-lg" value="Agregar" style="background-color: #47525e; color: #FFFFFF; width: 180px"/>
            </div>
            </form>
            <div class="col-md-12" style="top: 40px;">
                <?php include("convenios_table.php")?>
            </div>
        </div>

    </div>

</div>
</body>
<script type="application/javascript">
    $("document").ready(function(){
        $("#docConvenio").change(function() {
            $("#div1").hide();
            $("#div2").hide();
            $("#div3").show();
            $("#div4").show();
            var filename = $('input[type=file]').val().replace(/C:\\fakepath\\/i, '')
            $("#fileName").text(filename);
            var ext = filename.split('.')
            if(ext[ext.length-1] == "doc" ||ext[ext.length-1] == "docx"  ){
                $("#cargado").attr("src","images/word.png");
            }
            if(ext[ext.length-1] == "pdf" ){
                $("#cargado").attr("src","images/pdf.png");
            }
            if(ext[ext.length-1] == "jpg" || ext[ext.length-1] == "png" || ext[ext.length-1] == "jpeg"){
                $("#cargado").attr("src","images/image.png");
            }
        });
    });
    $(function(){
        $("#formuploadajax").on("submit", function(e){
            e.preventDefault();
            var f = $(this);
            var formData = new FormData(document.getElementById("formuploadajax"));
            formData.append("dato", "valor");
            $.ajax({
                url: "addConvenios.php",
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
</html>