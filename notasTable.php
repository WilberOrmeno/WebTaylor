<?php  include("dbcon.php") ?>
<hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/><hr/>
<hr/>
<hr/>
<hr/>
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
<table class="table table-striped" id="tablaNotas">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Carrera</th>
        <th scope="col">Módulo</th>
        <th scope="col">Docente</th>
        <th scope="col">Periodo</th>
        <th scope="col">Créditos</th>
        <th scope="col">Detalle</th>
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
            <td>
                    <button id="<?php echo $row['id']; ?>" class="btn btn-info">Ver detalle</button>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

