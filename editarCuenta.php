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
                    <input type="text" id="username" name="username" class="form-control"
                           value="<?php echo $extraido['username']?>" style="width: 250px" autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control"
                           value="<?php echo $extraido['password']?>" style="width: 250px">
                </div>
                <div class="form-group">
                    <label for="nombres">Nombres: </label>
                    <input type="text" id="nombres" name="nombres" class="form-control"
                           value="<?php echo $extraido['nombres']?>" style="width: 250px">
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" id="apellidos" name="password" class="form-control"
                           value="<?php echo $extraido['apellidos']?>" style="width: 250px">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control"
                           value="<?php echo $extraido['email']?>" style="width: 250px">
                </div>
                <style>
                    input {
                        margin-left: 210px;
                    }
                    label {
                        text-align: right;
                        clear: both;
                        float:left;
                        margin-top: 10px;
                        margin-right:15px;
                        margin-left: 90px;
                    }
                </style>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" onclick="updateAccount()" data-dismiss="modal">Guardar</button>
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
                <button type="button" class="btn btn-success" onclick="deleteAccount()" data-dismiss="modal">SI</button>
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
    function deleteAccount() {
        console.log("deleting");

        var data = {
            test: $( "#test" ).val()
        };
        var options = {
            url: "deleteAccount.php",
            dataType: "text",
            type: "POST",
            data: data,
            success: function( data, status, xhr ) {
                $.jGrowl("Usuario eliminado con éxito.", { header: 'Eliminado' });
                $.jGrowl("Tu sesión se cerrará.", { header: 'Aviso' });
                setTimeout(function(){ window.location = 'index.html'}, 5000);
            },
            error: function( xhr, status, error ) {
                $.jGrowl("Ocurrió un error al eliminar", { header: 'Error' });
            }
        };
        $.ajax( options );

    }

    function updateAccount() {
        var parametros = {
            "username" : $( "#username" ).val(),
            "password" : $( "#password" ).val(),
            "nombres" : $( "#nombres" ).val(),
            "apellidos" : $( "#apellidos" ).val(),
            "email" : $( "#email" ).val()
        };
        $.ajax({
            data:  parametros,
            url:   'editAccount.php',
            type:  'post',
            success:  function (response) {
                $.jGrowl("Datos actualizados con éxito", { header: 'Actualizado' });
                $.jGrowl("Tu sesión se cerrará, vuelve a ingresar tus credenciales", { header: 'Aviso' });
                setTimeout(function(){ window.location = 'index.html'}, 5000);
            }
        });
    }

</script>