<div class="modal fade" id="modalEditar" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar cuenta</h4>
            </div>
            <div class="modal-body">
                <?php
                include "dbcon.php";
                $user = $_SESSION['user'];
                $query = "SELECT * FROM `users` WHERE `username` = '$user'";
                $result = mysqli_query(conectar(), $query);
                $extraido = mysqli_fetch_array($result);
                ?>
                <div class="form-group">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="usename" class="form-control"
                           value="<?php echo $extraido['username']?>" style="width: 130px">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control"
                           value="<?php echo $extraido['password']?>" style="width: 130px">
                </div>
                <div class="form-group">
                    <label for="nombres">Nombres: </label>
                    <input type="text" id="nombres" name="nombres" class="form-control"
                           value="<?php echo $extraido['nombres']?>" style="width: 130px">
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" id="apellidos" name="password" class="form-control"
                           value="<?php echo $extraido['apellidos']?>" style="width: 130px">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control"
                           value="<?php echo $extraido['email']?>" style="width: 130px">
                </div>
                <style>
                    label {
                        text-align: right;
                        clear: both;
                        float:left;
                        margin-top: 10px;
                        margin-right:15px;
                    }
                </style>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Guardar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEliminar" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Eliminar cuenta</h4>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro(a) de que quieres eliminar esta cuenta?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#modalConfirmar">Eliminar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalConfirmar" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Confirmación</h4>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro(a) de que quieres eliminar esta cuenta?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">NO</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">SI</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalAdministrar" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Administrar cuenta</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Guardar</button>
            </div>
        </div>
    </div>
</div>

<script type="application/javascript">

</script>