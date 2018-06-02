<?php  include("dbcon.php") ?>
<table class="table table-striped">
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
    <?php
    $query = mysqli_query(conectar(),"select * from recibos ")or die(mysqli_error(conectar()));
    while($row = mysqli_fetch_array($query)) {
        $id = $row['id_alumno'];
        ?>
        <tr>
            <td><?php echo $row['recibo']?></td>
            <td><?php echo $row['fecha']; ?></td>
            <td><?php echo $row['cantidad']; ?></td>
            <td><?php echo $row['concepto']; ?></td>
            <td><?php echo $row['observaciones']; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>