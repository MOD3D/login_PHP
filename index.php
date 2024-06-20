<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <script scr="js/enviarDatos.js"></script>
    <div class="container">
        <div>
        <center><img src="/images/logo.jpg" alt="" width="30%"></center>
    </div>   
    <br>
    <div class="login">
        <h2>BIENVENIDO</h2>
        <br>
        <form id="enviar_Datos">
            <div>
                <label for="usuario">USUARIO</label>
                <input type="usuario" class="form-control" id="usuario" placeholder="Nombre Usuario" name="usuario" required>
            </div>
            <br>
            <div>
                <label for="contraseña">CONTRASEÑA</label>
                <input type="password" class="form-control" id="contraseña" placeholder="Contraseña" name="contraseña" required>
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary" id="enviar">Ingresar</button>
            </div>
        </form>
    </div>
</div> 
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Alerta</h4>
                </div>
                <div class="modal-body">
                    <div id="impriResult"></div>
                    <h4>El usuario no existe</h4>
                    <button type="submit" class="btn btn-default" id="regresar">Regresar</button>
                </div>
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/enviarDatos.js"></script>
</body>
</html>