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
    <?php include "dbcon.php"?>
</head>
<body>
    <div class="nav" style="" align="right">
        <label><?php session_start();
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
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Alumnos</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li><a href="fichaMatricula.php" style="background-color: #ebefe9">Ficha de matrícula</a></li>
                        <li><a href="estadoCuenta.php" style="background-color: #ebefe9">Estado de cuenta</a></li>
                        <li><a href="registroNotas.php"  style="background-color: #ebefe9">Registro de notas</a></li>
                    </ul>
                </li>
                <li  class="active"><a href="titulos.php">Títulos</a></li>
                <li><a href="convenios.php">Convenios</a></li>
                <li><a href="miCuenta.php">Tu cuenta</a></li>
                <li><a href="index.html"><span class="glyphicon glyphicon-off" style="top: 2px"></span>  Cerrar sesión</a></li>
            </ul>
        </nav>
        <div id="content" style="margin-top: 10px; width: 100%">
            <!--<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                <i class="glyphicon glyphicon-align-left"></i>
                Toggle Sidebar
            </button>-->
            <br><br><br>
            <div class="row-fluid" style="padding: 20px; width: 100%">
                <div class="col-md-8">
                    <h1>Títulos</h1>
                </div>
                <div class="col-md-4" style="top:30px">
                    <button type="button" class="btn btn-danger" onclick="printDiv()">Imprimir</button>
                </div>
                <div class="col-md-6" style="top:15px">
                    <div class="form-group">
                        <label for="nombreCompleto">Nombre completo</label>
                        <input type="text" class="form-control" id="nombreCompleto" placeholder="Apellidos y nombres" autofocus>
                    </div>
                </div>
                <div class="col-md-6" style="top:15px">
                    <div class="form-group">
                        <label for="dni">Documento de identidad</label>
                        <input type="text" class="form-control" id="dni" placeholder="DNI">
                    </div>
                </div>
                <div class="col-md-4" style="top:15px">
                    <div class="form-group">
                        <label for="carrera">Carrera</label>
                        <input type="text" class="form-control" id="carrera" placeholder="Carrera">
                    </div>
                </div>
                <div class="col-md-4" style="top:15px">
                    <div class="form-group">
                        <label for="dni">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
                    </div>
                </div>
                <div class="col-md-4" style="top:15px">
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" id="celular" placeholder="Celular">
                    </div>
                </div>
                <div class="col-md-2" style="top:15px">
                    <div class="form-group">
                        <label for="sede">Sede</label>
                        <input type="text" class="form-control" id="sede" placeholder="Sede">
                    </div>
                </div>
                <div class="col-md-5" style="top:15px">
                    <div class="form-group">
                        <label for="iniciotermino">Inicio/término</label>
                        <input type="text" class="form-control" id="iniciotermino" placeholder="Inicio/término">
                    </div>
                </div>
                <div class="col-md-5" style="top:15px">
                    <div class="form-group">
                        <label for="obs">Observaciones</label>
                        <input type="text" class="form-control" id="obs" placeholder="Observaciones">
                    </div>
                </div>
                <div class="col-md-12" style="top:15px" align="right">
                    <div class="col-md-3" align="right">
                        <div class="form-group">
                            <input type="text" class="form-control" id="buscar" placeholder="Buscar">
                            <br>
                        </div>
                    </div>
                    <div class="col-md-1" align="left">
                        <div class="form-group">
                            <input type="image" id="search" onclick="search()" src="images/search.png" name="image">
                            <br>
                        </div>
                    </div>
                    <button type="button" class="btn" style="background-color: #47525e; color: #FFFFFF; width: 180px">Cancelar</button>
                    <input type="button" href="javascript:;" class="btn" style="background-color: #47525e; color: #FFFFFF; width: 180px"
                    onclick="SaveTitulo($('#nombreCompleto').val(),$('#dni').val(),$('#carrera').val(),
                                        $('#telefono').val(),$('#celular').val(),$('#sede').val(),
                                        $('#iniciotermino').val(),$('#obs').val())" value="Agregar">

                </div>
                <div class="col-md-12" style="top: 40px;">
                    <table class="table table-striped" id="tabla">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Carrera</th>
                            <th scope="col">Seguimiento</th>
                        </tr>
                        </thead>
                        <tbody id="tbody">
                            <?php
                                $query = mysqli_query(conectar(),"select * from titulos")or die(mysqli_error(conectar()));
                                while($row = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id_titulo']?></td>
                                <td><?php echo $row['nombres']; ?></td>
                                <td><?php echo $row['dni']; ?></td>
                                <td><?php echo $row['telefono']; ?></td>
                                <td><?php echo $row['celular']; ?></td>
                                <td><?php echo $row['carrera']; ?></td>
                                <td>
                                    <div class="col-md-7" align="right">
                                    <select class="form-control" id="seguimiento<?php echo $row['id_titulo']?>" onchange="cambioColor(this.value, this.id)" style="width: 200px; font-weight: bold;">
                                        <?php if($row['seguimiento'] == 1){
                                            echo "<option value=\"1\" style=\"color: #63de83; font-weight: bold\" selected>Recibido</option>";
                                            echo "<option value=\"0\" style=\"color: #ebbd30; font-weight: bold\">En espera</option>";
                                            echo "<option value=\"2\" style=\"color: red; font-weight: bold\">Con observaciones</option>";
                                        }else if($row['seguimiento'] == 0){
                                            echo "<option value=\"1\" style=\"color: #63de83; font-weight: bold\" >Recibido</option>";
                                            echo "<option value=\"0\" style=\"color: #ebbd30; font-weight: bold\" selected>En espera</option>";
                                            echo "<option value=\"2\" style=\"color: red; font-weight: bold\">Con observaciones</option>";
                                        } else{
                                            echo "<option value=\"1\" style=\"color: #63de83; font-weight: bold\" >Recibido</option>";
                                            echo "<option value=\"0\" style=\"color: #ebbd30; font-weight: bold\" >En espera</option>";
                                            echo "<option value=\"2\" style=\"color: red; font-weight: bold\" selected>Con observaciones</option>";
                                        } ?>
                                    </select>
                                    </div>
                                    <div class="col-md-5" align="left">
                                    <?php
                                    echo "<button name='edit' id=".$row['id_titulo']." class=\"btn\" data-toggle=\"modal\" data-target=\"#MyModal\" onclick='editTitle(this.id)' ><span class=\"glyphicon glyphicon-edit\"></span></button>".
                                    "  <button id=".$row['id_titulo']." class=\"btn\" onclick='editTitleState(this.id)'><span class=\"glyphicon glyphicon-floppy-disk\"></span></button>";
                                    ?>
                                    </div>
                                </td>
                                <div id="MyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">EDITAR INFORMACIÓN DE TÍTULO</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="body-message" id="imprimirEsto">
                                                    <div class="col-md-6" style="top:15px">
                                                        <div class="form-group">
                                                            <label for="nombreCompleto">Nombre completo</label>
                                                            <input type="text" class="form-control" id="nombreCompletoE" placeholder="Apellidos y nombres" autofocus>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="top:15px">
                                                        <div class="form-group">
                                                            <label for="dni">Documento de identidad</label>
                                                            <input type="text" class="form-control" id="dniE" placeholder="DNI">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="top:15px">
                                                        <div class="form-group">
                                                            <label for="carrera">Carrera</label>
                                                            <input type="text" class="form-control" id="carreraE" placeholder="Carrera">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="top:15px">
                                                        <div class="form-group">
                                                            <label for="dni">Teléfono</label>
                                                            <input type="text" class="form-control" id="telefonoE" placeholder="Teléfono">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="top:15px">
                                                        <div class="form-group">
                                                            <label for="celular">Celular</label>
                                                            <input type="text" class="form-control" id="celularE" placeholder="Celular">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2" style="top:15px">
                                                        <div class="form-group">
                                                            <label for="sede">Sede</label>
                                                            <input type="text" class="form-control" id="sedeE" placeholder="Sede">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5" style="top:15px">
                                                        <div class="form-group">
                                                            <label for="iniciotermino">Inicio/término</label>
                                                            <input type="text" class="form-control" id="inicioterminoE" placeholder="Inicio/término">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5" style="top:15px">
                                                        <div class="form-group">
                                                            <label for="obs">Observaciones</label>
                                                            <input type="text" class="form-control" id="obsE" placeholder="Observaciones">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="divider"></div>
                                                <br><br><br><br><br><br><br><br><br><br><br><br>

                                            </div>
                                            <div class="modal-footer">
                                                <center>
                                                    <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                                                    <button id="btnDelete" type="button" class="btn btn-success" data-dismiss="modal" onclick="saveTitleEdited()">Guardar</button>
                                                </center>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<div id="editor"></div>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
<script type="application/javascript">
    function printDiv() {
        var doc = new jsPDF();
        var specialElementHandlers = {
            '#editor': function (element, renderer) {
                return true;
            }
        };
        doc.fromHTML($('#tabla').html(), 15, 15, {
            'width': 170,
            'elementHandlers': specialElementHandlers
        });
        doc.save('sample-file.pdf');

    }
    function search(){
        console.log($("#buscar").val());
        var parametros = {
            nombres  : $("#buscar").val()
        };
        $.ajax({
            data:  parametros,
            url:   'searchTitulos.php',
            type:  'post',
            beforeSend: function () {
            },
            success:  function (response){
                $("#tbody").empty();
                var data = response.split('|');
                var i = 0;
                $.each(data, function (index, element) {
                    var res = element.split(',');
                    if(i<res.length-1)
                    {
                        var options = "";
                        if(res[6] == 1){
                           options = "<option value=\"1\" style=\"color: #63de83; font-weight: bold\" selected>Recibido</option>" +
                            "<option value=\"0\" style=\"color: #ebbd30; font-weight: bold\">En espera</option>" +
                            "<option value=\"2\" style=\"color: red; font-weight: bold\">Con observaciones</option>";
                        }else if(res[6] == 0){
                            options = "<option value=\"1\" style=\"color: #63de83; font-weight: bold\" >Recibido</option>" +
                            "<option value=\"0\" style=\"color: #ebbd30; font-weight: bold\" selected>En espera</option>" +
                            "<option value=\"2\" style=\"color: red; font-weight: bold\">Con observaciones</option>";
                        } else{
                            options =  "<option value=\"1\" style=\"color: #63de83; font-weight: bold\" >Recibido</option>" +
                            "<option value=\"0\" style=\"color: #ebbd30; font-weight: bold\" >En espera</option>" +
                            "<option value=\"2\" style=\"color: red; font-weight: bold\" selected>Con observaciones</option>";
                        }
                        var nuevafila= "<tr><td>" +
                            res[0] + "</td><td>" +
                            res[1] + "</td><td>" +
                            res[2] + "</td><td>" +
                            res[3] + "</td><td>" +
                            res[4] + "</td><td>" +
                            res[5] + "</td><td>" +
                            "<div class=\"col-md-7\" align=\"right\">" +
                            "<select class=\"form-control\" id=\"seguimiento\" onchange=\"cambioColor(this.value, this.id)\" style=\"width: 200px; font-weight: bold;\">\n" +
                            options +
                            "</select></div><div class=\"col-md-5\" align=\"left\">"+

                            "<button name='edit' id='' class='btn' data-toggle=\"modal\" data-target=\"#MyModal\" onclick='editTitle(this.id)' disabled><span class=\"glyphicon glyphicon-edit\" ></span></button>" +
                            "<button id='' class='btn' onclick='editTitleState(this.id)' disabled><span class=\"glyphicon glyphicon-floppy-disk\" ></span></button>" +
                            "</div></td><tr>";

                        $("#tabla").append(nuevafila);
                        if(res[6] == 0){
                            $("#seguimiento").css("color", "#ebbd30");
                        }else if (res[6] == 1){
                            $("#seguimiento").css("color", "#63de83");
                        }else{
                            $("#seguimiento").css("color", "red");
                        }
                        i++;
                    }

                });
            }
        })
    }
    var i = 0;
    for(i = 1; i< 100; i++){
        var value = $("#seguimiento"+i).val();
        if(value == 0){
            $("#seguimiento"+i).css("color", "#ebbd30");
        }else if (value == 1){
            $("#seguimiento"+i).css("color", "#63de83");
        }else{
            $("#seguimiento"+i).css("color", "red");
        }
    }
    function cambioColor(value, id){
        if(value == 0){
            $("#"+id).css("color", "#ebbd30");
        }else if (value == 1){
            $("#"+id).css("color", "#63de83");
        }else{
            $("#"+id).css("color", "red");
        }
    }
    function SaveTitulo(v1, v2, v3, v4, v5, v6, v7, v8){
        var parametros = {
            "nombres" : v1,
            "dni" : v2,
            "carrera" : v3,
            "telefono" : v4,
            "celular" : v5,
            "sede" : v6,
            "inicio/termino" : v7,
            "observaciones" : v8,
        };
        $.ajax({
            data:  parametros,
            url:   'saveTitulo.php',
            type:  'post',
            beforeSend: function () {

            },
            success:  function (response) {
                $.jGrowl("Registro guardado con éxito", { header: 'Guardado' });
                setTimeout(location.reload.bind(location), 2000);
            }
        });
    }
    var parametros = {};
    var id = 0;
    function editTitle(value) {
        id = value;
        this.sId = (this.id) ; // button ID
        parametros = {
            "id" : value
        };
        $.ajax({
            data:  parametros,
            url:   'getTitulo.php',
            type:  'post',
            beforeSend: function () {
                $("#resultado").html("Procesando, espere por favor...");
            },
            success:  function (response) {
                var res = response.split(".");
                console.log(res[1]);
                $("#nombreCompletoE").val(res[1]);
                $("#dniE").val(res[2]);
                $("#carreraE").val(res[3]);
                $("#telefonoE").val(res[4]);
                $("#celularE").val(res[5]);
                $("#sedeE").val(res[6]);
                $("#inicioterminoE").val(res[7]);
                $("#obsE").val(res[8]);
            }
        });
    }
    function saveTitleEdited(){
        parametros = {
            "id": id,
            "nombreCompletoE" : $("#nombreCompletoE").val(),
            "dniE" : $("#dniE").val(),
            "carreraE" : $("#carreraE").val(),
            "telefonoE" : $("#telefonoE").val(),
            "celularE" : $("#celularE").val(),
            "sedeE" : $("#sedeE").val(),
            "inicioterminoE" : $("#inicioterminoE").val(),
            "obsE" : $("#obsE").val()
        };

        $.ajax({
            data:  parametros,
            url:   'editTitle.php',
            type:  'post',
            success:  function (response) {
                $.jGrowl("Registro actualizado con éxito", { header: 'Actualizado' });
                setTimeout(location.reload.bind(location), 2000);
            }
        });
    }
    function editTitleState(value) {
        id = value;
        parametros = {
            "id": value,
            "state": $("#seguimiento"+value).val()
        };
        $.ajax({
            data:  parametros,
            url:   'editTitleState.php',
            type:  'post',
            success:  function (response) {
                console.log(response);
                $.jGrowl("El estado del título ha sido cambiado", { header: 'Confimación' });
                setTimeout(location.reload.bind(location), 1500);
            }
        });
    }
</script>
</html>