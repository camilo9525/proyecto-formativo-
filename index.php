<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="le-edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>PICK BROASTED &copy;</title>
</head>

<!--aqui empieza el menu-->
<img src="imagenes/pepsilogo.jpg" width="128" height="128" class="img-fluid navbar-brand">
<nav class="navbar navbar-expand-lg navbar-orange bg-orange">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">INICIO <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">COMBOS ESTUDIANTILES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </div>
</nav>
<!-- aqui termina el menu-->
<img class="baner" src="imagenes/Banner.jpg" width="1200px" height="400px">

<!--formulario de registro-->
<form method="post" action="">
    <fieldset>
        <legend style="font-size: 18pt"><b>Registro</b></legend>
        <div class="form-group">
            <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
            <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
        </div>
        <div class="form-group">
            <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu email</b></label>
            <input type="text" name="nick" class="form-control" required placeholder="Ingresa mail" />
        </div>
        <div class="form-group">
            <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu Password</b></label>
            <input type="password" name="pass" class="form-control" placeholder="Ingresa contraseña" />
        </div>
        <div class="form-group">
            <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
            <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
        </div>
        <input class="btn btn-danger" type="submit" name="submit" value="Registrarse" />
    </fieldset>
</form>
</div>
<?php
if (isset($_POST['submit'])) {
    require("registro.php");
}
?>
<!--Fin formulario registro -->

</td>
</tr>
</table>
</div>
</center>
</div>
</center>


</body>

</html>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="iconofijo">
    <a class="pantallagrande linkimg" href="tel:2653400"><img class="icono" src="imagenes/iconodellamada.png" /></a>

    <a class="pantallachica linkimg" href="tel:2653400"><img class="icono" src="imagenes/iconollamadapequeno.png" /></a>
</div>


</body>

</html>
