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
        <th scope="col">#</th>
        <th scope="col">Nombres y apellidos</th>
        <th scope="col">Telefono</th>
        <th scope="col">Celular</th>
        <th scope="col">Correo</th>
        <th scope="col">Especialidad</th>
        <th scope="col">Ciclo</th>
        <th scope="col">Turno</th>
        <th scope="col">Imprimir</th>
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
                while ($row = mysqli_fetch_array($stmt2)){
                    echo "<td>".$row['especialidad']."</td>";
                    echo "<td>".$row['ciclo']."</td>";
                    echo "<td>".$row['turno']."</td>";
            }

            ?>
            <td><button id="<?php echo $row['id_alumno'];?>" class='btn btn-danger'>Imprimir</button></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

