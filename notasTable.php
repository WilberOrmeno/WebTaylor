<?php  include("dbcon.php") ?>
<hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/>
<hr/>
<hr/>
<hr/>
<br>
<br>
<div class="col-md-6" style="padding-left: 40px;">
    <h1>Listado de notas</h1>
</div>
<div class="col-md-2" style="padding: 10px;">
    <button class="btn btn-lg btn-warning" id="resgistrarNotas">Registrar notas</button>
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
<table class="table table-striped" id="tablaNotas" style="width:100%">
    <thead style="padding-left: 30px">
    <tr>
        <th class="text-center" scope="col">#</th>
        <th class="text-center" scope="col">Carrera</th>
        <th class="text-center" scope="col">Módulo</th>
        <th class="text-center" scope="col">Docente</th>
        <th class="text-center" scope="col">Periodo</th>
        <th class="text-center" scope="col">Créditos</th>
        <th class="text-center" scope="col">Imprimir</th>
    </tr>
    </thead>
    <tbody id="tbodyNotas">
    <?php
    $query = mysqli_query(conectar(),"select * from `notas` ")or die(mysqli_error(conectar()));
    while($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['carrera']; ?></td>
            <td><?php echo $row['modulo']; ?></td>
            <td><?php echo $row['docente']; ?></td>
            <td><?php echo $row['periodo']; ?></td>
            <td><?php echo $row['creditos']; ?></td>
            <td><button type="button" class="btn btn-info" onclick="printElement(<?php echo $row['id']?>)">Imprimir</button></td>
            <div id="<?php echo "printThis".$row['id'] ?>" style="display: block; position: absolute; z-index: -19; width: 900px; top: 50px;">
                <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-xs-12 col-sm-12 text-center">
                            <h1>RESUMEN DE NOTAS</h1>
                        </div>

                    </div>
                    <br>
                    <div style="padding-left: 10%">
                        <div class="col-xs-3" align="left">
                            <h3 style="font-weight: bold;">Carrera: </h3>
                            <h3 style="font-weight: bold;">Módulo: </h3>
                        </div>
                        <div class="col-xs-3" align="left">
                            <h3><?php echo $row['carrera']; ?></h3>
                            <h3><?php echo $row['modulo']; ?></h3>
                        </div>

                        <div class="col-xs-3" align="left">
                            <h3 style="font-weight: bold;">Docente:</h3>
                            <h3 style="font-weight: bold;">Periodo:</h3>
                        </div>
                        <div class="col-xs-3" align="left">
                            <h3><?php echo $row['docente']; ?></h3>
                            <h3><?php echo $row['periodo']; ?></h3>
                        </div>
                    </div>
                    <div class="col-xs-12 col-xs-offset divider" style="top: 30px; ">
                        <div class="col-xs-4">
                            <hr><h4 style="font-weight: bold; margin: -5px">Alumno:</h4>
                        </div>
                        <div class="col-xs-1">
                            <hr><h4 style="font-weight: bold; margin: -5px">CR. 1:</h4>
                        </div>
                        <div class="col-xs-1">
                            <hr><h4 style="font-weight: bold; margin: -5px">Cr. 2:</h4>
                        </div>
                        <div class="col-xs-1">
                            <hr><h4 style="font-weight: bold; margin: -5px">Cr. 3:</h4>
                        </div>
                        <div class="col-xs-1">
                            <hr><h4 style="font-weight: bold; margin: -5px">Cr. 4:</h4>
                        </div>
                        <div class="col-xs-1">
                            <hr><h4 style="font-weight: bold; margin: -5px">Cr. 5:</h4>
                        </div>
                        <div class="col-xs-1">
                            <hr><h4 style="font-weight: bold; margin: -5px">Cr. 6:</h4>
                        </div>
                        <div class="col-xs-1">
                            <hr><h4 style="font-weight: bold; margin: -5px">Cr. 7:</h4>
                        </div>
                        <div class="col-xs-1">
                            <hr><h4 style="font-weight: bold; margin: -5px">Cr. 8:</h4>
                        </div>

                        <?php $query2 = mysqli_query(conectar(),"select * from `notasdetalle` WHERE idNotas = '$id'")or die(mysqli_error(conectar()));
                        while($row2 = mysqli_fetch_array($query2)) {
                        ?>
                            <div class="col-xs-4">
                                <hr><h4 style=" margin: -5px"><?php echo $row2['alumno']?></h4>
                            </div>
                            <div class="col-xs-1">
                                <hr><h4 style=" margin: -5px"><?php echo $row2['c1']?></h4>
                            </div>
                            <div class="col-xs-1">
                                <hr><h4 style=" margin: -5px"><?php echo $row2['c2']?></h4>
                            </div>
                            <div class="col-xs-1">
                                <hr><h4 style=" margin: -5px"><?php echo $row2['c3']?></h4>
                            </div>
                            <div class="col-xs-1">
                                <hr><h4 style=" margin: -5px"><?php echo $row2['c4']?></h4>
                            </div>
                            <div class="col-xs-1">
                                <hr><h4 style=" margin: -5px"><?php echo $row2['c5']?></h4>
                            </div>
                            <div class="col-xs-1">
                                <hr><h4 style=" margin: -5px"><?php echo $row2['c6']?></h4>
                            </div>
                            <div class="col-xs-1">
                                <hr><h4 style=" margin: -5px"><?php echo $row2['c7']?></h4>
                            </div>
                            <div class="col-xs-1">
                                <hr><h4 style=" margin: -5px"><?php echo $row2['c8']?></h4>
                            </div>
                            <?php
                        }

                        ?>
                        <div class="col-xs-4"><hr></div>
                        <div class="col-xs-1"><hr></div>
                        <div class="col-xs-1"><hr></div>
                        <div class="col-xs-1"><hr></div>
                        <div class="col-xs-1"><hr></div>
                        <div class="col-xs-1"><hr></div>
                        <div class="col-xs-1"><hr></div>
                        <div class="col-xs-1"><hr></div>
                        <div class="col-xs-1"><hr></div>
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

