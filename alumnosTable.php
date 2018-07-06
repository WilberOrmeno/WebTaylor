<?php  include("dbcon.php") ?>
<hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/>
<hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/>
<hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/>
<hr/><hr/><hr/>
<div class="col-md-6" style="padding-left: 40px;">
    <h1>Listado de alumnos</h1>
</div>
<div class="col-md-2" style="padding: 10px;">
    <button class="btn btn-lg btn-warning" id="resgistrarAlumnos">Registrar alumno</button>
</div>
<div class="col-md-3" align="right" style="padding: 15px;">
    <div class="form-group">
        <input type="text" class="form-control" id="buscar2" placeholder="Buscar">
        <br>
    </div>
</div>
<div class="col-md-1" align="left" style="padding-top: 15px; padding-left: -50px;">
    <div class="form-group">
        <input type="image" id="search" onclick="search()" src="images/search.png" name="image">
        <br>
    </div>
</div>
<table class="table table-striped" id="tablaAlumnos">
    <thead>
    <tr>
        <th class="text-center" scope="col">#</th>
        <th class="text-center" scope="col">Nombres y apellidos</th>
        <th class="text-center" scope="col">Telefono</th>
        <th class="text-center" scope="col">Celular</th>
        <th class="text-center" scope="col">Correo</th>
        <th class="text-center" scope="col">Especialidad</th>
        <th class="text-center" scope="col">Ciclo</th>
        <th class="text-center" scope="col">Turno</th>
        <th class="text-center" scope="col">Imprimir</th>
    </tr>
    </thead>
    <tbody id="tbodyAlumnos">
    <?php
    $query = mysqli_query(conectar(),"select * from `alumnos` ")or die(mysqli_error(conectar()));
    while($row = mysqli_fetch_array($query)) {
        $id = $row['id_alumno'];
        ?>
        <tr>
            <td><?php echo $row['id_alumno'];?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['celular']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <?php
                $query2 = "SELECT * FROM `datosacademicos` WHERE `id_alumno` = '$id'";
                $stmt2 = mysqli_query(conectar(),$query2);
                while ($row2 = mysqli_fetch_array($stmt2)){
                    echo "<td>".$row2['especialidad']."</td>";
                    echo "<td>".$row2['ciclo']."</td>";
                    echo "<td>".$row2['turno']."</td>";
            }

            ?>
            <td><button type="button" class="btn btn-info" onclick="printElement(<?php echo $row['id_alumno']?>)">Imprimir</button></td>
            <div id="<?php echo "printThis".$row['id_alumno'] ?>" style="display: block; position: absolute; z-index: -19; width: 900px; top: 50px;">
                <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-xs-12 col-sm-12 text-center">
                            <h1>FICHA DE MATRÍCULA</h1>
                        </div>
                        <div class="col-xs-4 col-sm-4 text-left"></div>
                        <div class="col-xs-4 col-sm-4 text-right">
                            <img src="images/cetapsi-sinfondo.png" id="logo" style="height: 200px;">
                        </div>
                    </div>
                    <div class="col-xs-12 col-xs-offset divider" style="top: 30px; ">
                        <div class="col-xs-4 col-xs-offset-1">
                            <hr><h4 style="font-weight: bold; margin: -5px">Nombres:</h4>
                            <hr><h4 style="font-weight: bold; margin: -5px">Especialidad: </h4>
                            <hr><h4 style="font-weight: bold; margin: -5px">Ciclo:</h4>
                            <hr><h4 style="font-weight: bold; margin: -5px">Turno:</h4>
                            <hr><h4 style="font-weight: bold; margin: -5px">Semestre:</h4>
                            <hr><h4 style="font-weight: bold; margin: -5px">Año: </h4>
                            <hr><h4 style="font-weight: bold; margin: -5px">Dirección:</h4>
                            <hr><h4 style="font-weight: bold; margin: -5px">Teléfono:</h4>
                            <hr><h4 style="font-weight: bold; margin: -5px">Celular:</h4>
                            <hr><h4 style="font-weight: bold; margin: -5px">Email:</h4>
                            <hr>
                        </div>
                        <div class="col-xs-6">
                            <?php
                            $query2 = "SELECT * FROM `datosacademicos` WHERE `id_alumno` = '$id'";
                            $stmt2 = mysqli_query(conectar(),$query2);
                                while ($row2 = mysqli_fetch_array($stmt2)){
                                    echo "<hr><h4 style='margin: -5px'>".$row['nombre']."</h4>";
                                    echo "<hr><h4 style='margin: -5px'>".$row2['especialidad']."</h4>";
                                    echo "<hr><h4 style='margin: -5px'>".$row2['ciclo']."</h4>";
                                    echo "<hr><h4 style='margin: -5px'>".$row2['turno']."</h4>";
                                    echo "<hr><h4 style='margin: -5px'>".$row2['Semestre']."</h4>";
                                    echo "<hr><h4 style='margin: -5px'>".$row2['anio']."</h4>";
                                    echo "<hr><h4 style='margin: -5px'>".$row['direccion']."</h4>";
                                    echo "<hr><h4 style='margin: -5px'>".$row['telefono']."</h4>";
                                    echo "<hr><h4 style='margin: -5px'>".$row['celular']."</h4>";
                                    echo "<hr><h4 style='margin: -5px'>".$row['email']."</h4><hr>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

<style>
    @media screen {
        #printSection {
            display: none;
        }
    }

    @media print {
        body * {
            visibility:hidden;
        }
        #printSection, #printSection * {
            visibility:visible;
        }
        #printSection {
            position:absolute;
            left:0;
            top:0;
        }
    }

</style>
<script type="application/javascript">

    function printElement(cod) {
        var elem = document.getElementById("printThis"+cod);
        var domClone = elem.cloneNode(true);

        var $printSection = document.getElementById("printSection");

        if (!$printSection) {
            var $printSection = document.createElement("div");
            $printSection.id = "printSection";
            document.body.appendChild($printSection);
        }

        $printSection.innerHTML = "";
        $printSection.appendChild(domClone);
        window.print();
    }


</script>


