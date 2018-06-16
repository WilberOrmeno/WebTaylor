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
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true">Alumnos</a>
                <ul class="list-unstyled" id="homeSubmenu">
                    <li ><a href="fichaMatricula.php" style="background-color: #ebefe9">Ficha de matrícula</a></li>
                    <li ><a href="estadoCuenta.php" style="background-color: #ebefe9">Estado de cuenta</a></li>
                    <li  class="active"><a href="registroNotas.php"  style="background-color: #47525e">Registro de notas</a></li>
                </ul>
            </li>
            <li  ><a href="titulos.php">Títulos</a></li>
            <li><a href="convenios.php">Convenios</a></li>
            <li><a href="miCuenta.html">Tu cuenta</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-off" style="top: 2px"></span>  Cerrar sesión</a></li>
        </ul>
    </nav>
    <div id="content" style="margin-top: 20px; width: 100%">
        <br><br><br>
        <div class="row-fluid" style="padding: 40px; width: 100%">
            <div class="col-md-12">
                <h1>Registro de notas</h1>

            </div>
            <form enctype="multipart/form-data" id="formuploadajax" method="post">
            <div id="parte1" style="display: block;">
                <div class="col-md-5 col-md-offset-1" style="top:15px">
                    <div class="form-group">
                        <label for="carrera">Carrera profesional</label>
                        <input type="text" class="form-control" id="carrera" name="carrera" placeholder="Nombres">
                    </div>
                    <div class="form-group">
                        <label for="modulo">Módulo formativo N°</label>
                        <input type="text" class="form-control" id="modulo" name="modulo" placeholder="Apellido Paterno">
                    </div>
                    <div class="form-group">
                        <label for="denominacion">Denominación</label>
                        <input type="text" class="form-control" id="denominacion" name="denominacion" placeholder="Apellido Materno">
                    </div>
                    <div class="form-group">
                        <label for="docente">Docente</label>
                        <input type="text" class="form-control" id="docente" name="docente" placeholder="Apellido Materno">
                    </div>
                </div>
                <div class="col-md-5" style="top:15px" >
                    <div style=" width: 500px; padding-bottom: 20px">

                        <div class="form-group">
                            <label for="periodo">Periodo académico</label>
                            <input type="text" class="form-control" id="periodo" name="periodo" placeholder="Apellido Materno">
                        </div>
                        <div class="form-group">
                            <label for="creditos">Créditos</label>
                            <input type="text" class="form-control" id="creditos" name="creditos" placeholder="Apellido Materno">
                        </div>
                        <div class="form-group">
                            <label for="horas">Horas semanales</label>
                            <input type="text" class="form-control" id="horas" name="horas" placeholder="Apellido Materno">
                        </div>
                    </div>
                    <center>
                    <button type="button" class="btn btn-lg" style="background-color: #47525e; color: #FFFFFF; width: 180px">Cancelar</button>
                    <input type="button" href="javascript:;" onclick="next()"
                           class="btn btn-lg" style="background-color: #47525e; color: #FFFFFF; width: 180px" value="Siguiente"/>
                    </center>
                </div>
            </div>
            <div id="parte2" style="display: none">
                <div class="col-md-12" style="top:15px" >
                    <label for="apMaterno">Cantidad de alumnos</label>
                    <select name="cantidadAlumnos" onchange="rows()" class="form-control" id="cantidadAlumnos">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                    </select>
                    <br>
                    <br>
                </div>

                <div class="col-md-4" style="top:15px">
                    <label for="apMaterno">Alumnos</label>
                </div>
                <div class="col-md-1" style="top:15px">
                    <label for="apMaterno">Criterio 1</label>
                </div>
                <div class="col-md-1" style="top:15px">
                    <label for="apMaterno">Criterio 2</label>
                </div>
                <div class="col-md-1" style="top:15px">
                    <label for="apMaterno">Criterio 3</label>
                </div>
                <div class="col-md-1" style="top:15px">
                    <label for="apMaterno">Criterio 4</label>
                </div>
                <div class="col-md-1" style="top:15px">
                    <label for="apMaterno">Criterio 5</label>
                </div>
                <div class="col-md-1" style="top:15px">
                    <label for="apMaterno">Criterio 6</label>
                </div>
                <div class="col-md-1" style="top:15px">
                    <label for="apMaterno">Criterio 7</label>
                </div>
                <div class="col-md-1" style="top:15px" >
                    <label for="apMaterno">Criterio 8</label>
                </div>


                <div class="col-md-4" style="top:15px" id="container">
                    <div class="form-group">
                        <input type="text" class="form-control" name="alumno" placeholder="Alumno">
                    </div>

                </div>
                <div class="col-md-1" style="top:15px" id="c1">
                    <div class="form-group">
                        <input type="text" class="form-control" name="c10" placeholder="Criterio 1">
                    </div>
                </div>
                <div class="col-md-1" style="top:15px" id="c2">
                    <div class="form-group">
                        <input type="text" class="form-control" name="c20" placeholder="Criterio 2">
                    </div>
                </div>
                <div class="col-md-1" style="top:15px" id="c3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="c30" placeholder="Criterio 3">
                    </div>
                </div>
                <div class="col-md-1" style="top:15px" id="c4">
                    <div class="form-group">
                        <input type="text" class="form-control" name="c40" placeholder="Criterio 4">
                    </div>
                </div>
                <div class="col-md-1" style="top:15px" id="c5">
                    <div class="form-group">
                        <input type="text" class="form-control" name="c50" placeholder="Criterio 5">
                    </div>
                </div>
                <div class="col-md-1" style="top:15px" id="c6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="c60" placeholder="Criterio 6">
                    </div>
                </div>
                <div class="col-md-1" style="top:15px" id="c7">
                    <div class="form-group">
                        <input type="text" class="form-control" name="c70" placeholder="Criterio 7">
                    </div>
                </div>
                <div class="col-md-1" style="top:15px"  id="c8">
                    <div class="form-group">
                        <input type="text" class="form-control" name="c80" placeholder="Criterio 8">
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-3" style="top:15px" >
                    <center>
                        <button type="button" class="btn btn-lg" style="background-color: #47525e; color: #FFFFFF; width: 180px">Cancelar</button>
                        <button type="button" class="btn btn-lg" style="background-color: #47525e; color: #FFFFFF; width: 180px" onclick="previous()">Anterior</button>
                        <input type="submit" class="btn btn-lg" style="background-color: #47525e; color: #FFFFFF; width: 180px" value="Guardar"/>
                    </center>
                </div>
            </div>
            </form>

    </div>
</div>
</div>

<script>
    function  next() {
        $("#parte1").hide();
        $("#parte2").show();
    }
    function previous() {
        $("#parte2").hide();
        $("#parte1").show();
    }

    function rows(){

        var number = $("#cantidadAlumnos").val();
        // Container <div> where dynamic content will be placed
        var container = document.getElementById("container");
        var c1 = document.getElementById("c1");
        var c2 = document.getElementById("c2");
        var c3 = document.getElementById("c3");
        var c4 = document.getElementById("c4");
        var c5 = document.getElementById("c5");
        var c6 = document.getElementById("c6");
        var c7 = document.getElementById("c7");
        var c8 = document.getElementById("c8");
        // Clear previous contents of the container
        while (container.hasChildNodes()) {
            container.removeChild(container.lastChild);
            c1.removeChild(c1.lastChild);
            c2.removeChild(c2.lastChild);
            c3.removeChild(c3.lastChild);
            c4.removeChild(c4.lastChild);
            c5.removeChild(c5.lastChild);
            c6.removeChild(c6.lastChild);
            c7.removeChild(c7.lastChild);
            c8.removeChild(c8.lastChild);
        }
        for (i=0;i<number;i++){
            var form = document.createElement("div");
            form.setAttribute("class", "form-group");
            form.id = "form" + i;
            container.appendChild(form);

            var container2 = document.getElementById("form" + i);
            console.log(container2);
            var input = document.createElement("input");
            input.type = "text";
            input.name = "alumno" + i;
            input.placeholder = "Alumno"
            input.setAttribute("class", "form-control");
            container2.appendChild(input);
        }
        for (i=0;i<number;i++){
            var form = document.createElement("div");
            form.setAttribute("class", "form-group");
            form.id = "formc1" + i;
            c1.appendChild(form);

            var container2 = document.getElementById("formc1" + i);
            console.log(container2);
            var input = document.createElement("input");
            input.type = "text";
            input.name = "c1" + i;
            input.placeholder = "Criterio 1";
            input.setAttribute("class", "form-control");
            container2.appendChild(input);
        }
        for (i=0;i<number;i++){
            var form = document.createElement("div");
            form.setAttribute("class", "form-group");
            form.id = "formc2" + i;
            c2.appendChild(form);
            var container2 = document.getElementById("formc2" + i);
            console.log(container2);
            var input = document.createElement("input");
            input.type = "text";
            input.name = "c2" + i;
            input.placeholder = "Criterio 2";
            input.setAttribute("class", "form-control");
            container2.appendChild(input);
        }
        for (i=0;i<number;i++){
            var form = document.createElement("div");
            form.setAttribute("class", "form-group");
            form.id = "formc3" + i;
            c3.appendChild(form);
            var container2 = document.getElementById("formc3" + i);
            console.log(container2);
            var input = document.createElement("input");
            input.type = "text";
            input.name = "c3" + i;
            input.placeholder = "Criterio 3";
            input.setAttribute("class", "form-control");
            container2.appendChild(input);
        }
        for (i=0;i<number;i++){
            var form = document.createElement("div");
            form.setAttribute("class", "form-group");
            form.id = "formc4" + i;
            c4.appendChild(form);
            var container2 = document.getElementById("formc4" + i);
            console.log(container2);
            var input = document.createElement("input");
            input.type = "text";
            input.name = "c4" + i;
            input.placeholder = "Criterio 4";
            input.setAttribute("class", "form-control");
            container2.appendChild(input);
        }
        for (i=0;i<number;i++){
            var form = document.createElement("div");
            form.setAttribute("class", "form-group");
            form.id = "formc5" + i;
            c5.appendChild(form);
            var container2 = document.getElementById("formc5" + i);
            console.log(container2);
            var input = document.createElement("input");
            input.type = "text";
            input.name = "c5" + i;
            input.placeholder = "Criterio 3";
            input.setAttribute("class", "form-control");
            container2.appendChild(input);
        }
        for (i=0;i<number;i++){
            var form = document.createElement("div");
            form.setAttribute("class", "form-group");
            form.id = "formc6" + i;
            c6.appendChild(form);
            var container2 = document.getElementById("formc6" + i);
            console.log(container2);
            var input = document.createElement("input");
            input.type = "text";
            input.name = "c6" + i;
            input.placeholder = "Criterio 6";
            input.setAttribute("class", "form-control");
            container2.appendChild(input);
        }
        for (i=0;i<number;i++){
            var form = document.createElement("div");
            form.setAttribute("class", "form-group");
            form.id = "formc7" + i;
            c7.appendChild(form);
            var container2 = document.getElementById("formc7" + i);
            console.log(container2);
            var input = document.createElement("input");
            input.type = "text";
            input.name = "c7" + i;
            input.placeholder = "Criterio 7";
            input.setAttribute("class", "form-control");
            container2.appendChild(input);
        }
        for (i=0;i<number;i++){
            var form = document.createElement("div");
            form.setAttribute("class", "form-group");
            form.id = "formc8" + i;
            c8.appendChild(form);
            var container2 = document.getElementById("formc8" + i);
            console.log(container2);
            var input = document.createElement("input");
            input.type = "text";
            input.name = "c8" + i;
            input.placeholder = "Criterio 8";
            input.setAttribute("class", "form-control");
            container2.appendChild(input);
        }
    }

    $(function(){
        $("#formuploadajax").on("submit", function(e){
            e.preventDefault();
            var f = $(this);
            var formData = new FormData(document.getElementById("formuploadajax"));
            formData.append("dato", "valor");
            $.ajax({
                url: "addNotas.php",
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