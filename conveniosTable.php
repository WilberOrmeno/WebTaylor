<?php  include("dbcon.php") ?>
<hr/>
<div class="col-md-3" style="padding-left: 40px;">
    <h1>Lista de convenios</h1>
</div>
<div class="col-md-2" style="padding-top: 10px;" align="right">
    <button class="btn btn-lg btn-danger" onclick="printElement()">Imprimir</button>
</div>
<div class="col-md-3" style="padding: 10px;">
    <button class="btn btn-lg btn-warning" id="resgistrarTitulo">Registrar convenio</button>
</div>
<div class="col-md-3" align="right" style="padding-top: 15px; padding-left: 30px">
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
        <th scope="col">Vencimiento</th>
        <th scope="col">Entidad</th>
        <th scope="col">Descargar</th>
    </tr>
    </thead>
    <tbody id="tbody">
    <?php
    $query = mysqli_query(conectar(),"select * from convenios ")or die(mysqli_error(conectar()));
    while($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['convenio']; ?></td>
            <td><?php echo $row['vencimiento']; ?></td>
            <td><?php echo $row['entidad']; ?></td>
            <td><form method="get" action="<?php echo $row['rutaConvenio']; ?>">
                    <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-download-alt"></span></button>
                </form>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

