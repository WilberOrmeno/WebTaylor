<?php  include("dbcon.php") ?>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Vencimiento</th>
        <th scope="col">Entidad</th>
        <th scope="col">Descargar</th>
    </tr>
    </thead>
    <tbody>
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
</table>

