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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="util/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
    <script src="util/jGrowl/jquery.jgrowl.js"></script>

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
                    <li ><a href="fichaMatricula.php" style="background-color: #ebefe9">Ficha de matrícula</a></li>
                    <li  class="active" ><a href="estadoCuenta.php" style="background-color: #47525e">Estado de cuenta</a></li>
                    <li><a href="registroNotas.php"  style="background-color: #ebefe9">Registro de notas</a></li>
                </ul>
            </li>
            <li  ><a href="titulos.php">Títulos</a></li>
            <li><a href="convenios.php">Convenios</a></li>
            <li><a href="miCuenta.php">Tu cuenta</a></li>
            <li><a href="index.html"><span class="glyphicon glyphicon-off" style="top: 2px"></span>  Cerrar sesión</a></li>
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
                <h1>Estado de cuenta</h1>

            </div>
            <div class="col-md-4" align="right">
                 <button type="button" class="btn btn-lg" style="background-color: #47525e; color: #FFFFFF; width: 180px"
               data-toggle="modal" data-target="#myModal">Agregar Registro</button>
            </div>
            <div class="col-md-5 col-md-offset-1" style="top:15px">
                <div class="form-group">
                    <label for="nombres">Nombres del alumno</label>
                    <input type="text" class="form-control" id="nombres" placeholder="Nombres" autofocus>
                </div>
                <div class="form-group">
                    <label for="apPaterno">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apPaterno" placeholder="Apellido Paterno">
                </div>
                <div class="form-group" style="padding-top: 30px;">

                    <button type="button" class="btn btn-danger" onclick="printDiv()" style="top: 50px">Imprimir</button>
                </div>
            </div>
            <div class="col-md-5" style="top:15px" >
                <div style=" width: 500px; height: 180px; margin-bottom:10px;">
                   				<div class="form-group">
                    <label for="apMaterno">Apellido Materno</label>
                    <input type="text" class="form-control" id="apMaterno" placeholder="Apellido Materno">
                </div>
                    <label for="semestree">Semestre</label>
                    <select id="semestree" class="form-control" required>
                        <option><< Seleccione >></option>
                        <option value="I Semestre">I Semestre</option>
                        <option value="II Semestre">II Semestre</option>
                        <option value="III Semestre">III Semestre</option>
                        <option value="IV Semestre">IV Semestre</option>
                        <option value="V Semestre">V Semestre</option>
                        <option value="VI Semestre">VI Semestre</option>
                        <option value="Diplomado">Diplomado</option>

                    </select>
                </div>
                <button type="button" class="btn btn-lg" style="background-color: #47525e; color: #FFFFFF; width: 180px">Cancelar</button>
                <input type="button" href="javascript:;" onclick="obtener($('#nombres').val(),
                                                                          $('#apPaterno').val(),
                                                                          $('#apMaterno').val(),
                                                                          $('#semestree').val(),);return false;"
                       class="btn btn-lg" style="background-color: #47525e; color: #FFFFFF; width: 180px" value="Buscar"/>

            </div>

            <div class="col-md-12" style="top: 40px;">
                <table class="table table-striped" id="tabla">
                    <thead>
                    <tr>
                    	<th scope="col">#</th>
                        <th scope="col">Recibo</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Concepto</th>
                        <th scope="col">Observaciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Agregar recibo</h3>
      </div>

            <div class="col-md-5 col-md-offset-1">
                <div class="form-group">
                    <label for="alumno">Nombres del alumno</label>
                    <input type="text" class="form-control" id="alumno" placeholder="Nombres">
                </div>
                <div class="form-group">
                    <label for="apePaterno">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apePaterno" placeholder="Apellido Paterno">
                </div>
                <div class="form-group">
                    <label for="apeMaterno">Apellido Materno</label>
                    <input type="text" class="form-control" id="apeMaterno" placeholder="Apellido Materno">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="NroMat">Nro. de Matrícula</label>
                    <input type="text" class="form-control" id="NroMat" placeholder="Nro. de Matrícula">
                </div>
                <div class="form-group">
                    <label for="especialidad">Especialidad</label>
                    <input type="text" class="form-control" id="especialidad" placeholder="Especialidad">
                </div>
               <div class="form-group">
                    <label for="turno">Turno</label>
                    <select id="turno" class="form-control" style="height: 40px" required>
                        <option><< Seleccione >></option>
                        <option value="Mañana">Mañana</option>
                        <option value="Tarde">Tarde</option>
                        <option value="Noche">Noche</option>

                    </select>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-0">
                <div class="form-group">
                    <label for="semestre">Semestre</label>
                    <select id="semestre" class="form-control" required>
                        <option><< Seleccione >></option>
                        <option value="I Semestre">I Semestre</option>
                        <option value="II Semestre">II Semestre</option>
                        <option value="III Semestre">III Semestre</option>
                        <option value="IV Semestre">IV Semestre</option>
                        <option value="V Semestre">V Semestre</option>
                        <option value="VI Semestre">VI Semestre</option>
                        <option value="Diplomado">Diplomado</option>

                    </select>
                </div>

            </div>
            <div class="col-md-4 col-md-offset-0">
                <div class="form-group">
                    <label for="recibo">Recibo</label>
                    <input type="text" class="form-control" id="recibo" placeholder="Recibo">
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="text" class="form-control" id="fecha" placeholder="Fecha">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="text" class="form-control" id="cantidad" placeholder="Cantidad S/.">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="concepto">Concepto</label>
                    <input type="text" class="form-control" id="concepto" placeholder="Concepto">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="observaciones">Observaciones</label>
                    <input type="text" class="form-control" id="observaciones" placeholder="Observaciones">
                </div>
            </div>
            <div class="col-md-12" align="center">
                <input type="button" href="javascript:;" class="btn" onclick="guardar($('#alumno').val(),$('#apePaterno').val(),$('#apeMaterno').val(),
                 $('#NroMat').val(),$('#especialidad').val(),$('#turno').val(),$('#semestre').val(),$('#recibo').val(),$('#fecha').val(),
                 $('#cantidad').val(),$('#concepto').val(),$('#observaciones').val())" style="background-color: #47525e; color: #FFFFFF; width: 180px"
               data-toggle="modal" data-target="#myModal" value="Guardar">
            </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
</div>
<script>
    function guardar(alumno, apePaterno, apeMaterno, NroMat, especialidad, turno, semestre, recibo, fecha, cantidad, concepto, observaciones){
        var parametros = {
            "nombres" : alumno,
            "apePaterno" : apePaterno,
            "apeMaterno" : apeMaterno,
            "NroMat" : NroMat,
            "especialidad" : especialidad,
            "turno" : turno,
            "semestre" : semestre,
            "recibo" : recibo,
            "fecha" : fecha,
            "cantidad" : cantidad,
            "concepto" : concepto,
            "observaciones" : observaciones,
        };
        console.log(parametros);
        $.ajax({
            data:  parametros,
            url:   'addRecibo.php',
            type:  'post',
            beforeSend: function () {
            },
            success:  function (response){
                $.jGrowl("Registro guardado con éxito", { header: 'Guardado' });
                setTimeout(location.reload.bind(location), 2000);
            }
        })
    }
    function obtener(nombres, apePaterno, apeMaterno, semestre){
        $('#tabla tbody').html('');
        var parametros = {
            "nombres" : nombres,
            "apePaterno" : apePaterno,
            "apeMaterno" : apeMaterno,
            "semestre" : semestre,
        };
        $.ajax({
            data:  parametros,
            url:   'getRecibos.php',
            type:  'post',
            beforeSend: function () {
            },
            success:  function (response) {
                $("#tabla").show();
                console.log(response);
                console.log('');
                var data = response.split('|');
                var i = 0;
                $.each(data, function (index, element) {
                    var res = element.split(',');
                    if(i<res.length-1)
                    {
                        var nuevafila= "<tr><td>" +
                            i+1 + "</td><td>" +
                            res[0] + "</td><td>" +
                            res[1] + "</td><td>" +
                            res[2] + "</td><td>" +
                            res[3] + "</td><td>" +
                            res[4] + "</td></tr>";
                        $("#tabla").append(nuevafila);
                        i++;
                    }

                });
            }
        });
    }
</script>
</body>
</html>