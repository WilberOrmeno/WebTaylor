<hr/>
<div class="col-md-4" style="padding-left: 40px;">
    <h1>Lista de títulos</h1>
</div>
<div class="col-md-2" style="padding-top: 10px;" align="right">
    <button class="btn btn-lg btn-danger" onclick="printElement()">Imprimir</button>
</div>
<div class="col-md-2" style="padding: 10px;">
    <button class="btn btn-lg btn-warning" id="resgistrarTitulo">Registrar título</button>
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