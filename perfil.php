<?php

require_once(dirname(__FILE__) . "/connections/conexion.php");
echo $_SESSION['id'];
$queryUsuario = $db->prepare("SELECT * FROM usuarios WHERE id_usuario=?");
$queryUsuario->execute(array($_SESSION['id']));
$usuario = $queryUsuario->fetch(PDO::FETCH_OBJ);

?>
<div class="row">
<form method="POST" name="formularioPerfil" id="formularioPerfil">
    <div class="col-md-4 col-xs-4 col-lg-4">
        <img src="img/<?php echo $usuario->foto; ?>">
    </div>
    <div class="col-md-8 col-xs-8 col-lg-8">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
                Nombre: <input type="text" value="<?php echo $usuario->nombre." ".$usuario->apellidos; ?>" name="nombre">
            </div>
            <div class="col-md-12 col-xs-12 col-lg-12">
                Provincia: <?php echo $usuario->provincia;?>
            </div>
            <div class="col-md-12 col-xs-12 col-lg-12">
                Email: <input type="text" value="<?php echo $usuario->email; ?>" name="email">
            </div>
            <div class="col-md-12 col-xs-12 col-lg-12">
                Sexo: <input type="text" placeholder="<?php echo $usuario->sexo; ?>" name="sexo">
            </div>
            <div class="col-md-12 col-xs-12 col-lg-12">
                Fecha de Nacimiento: <input type="text" value="<?php echo $usuario->fecha_nacimiento; ?>" name="email">
            </div>
            <div class="col-md-12 col-xs-12 col-lg-12">
                Profesión: <input type="text" value="<?php echo $usuario->profesion; ?>" name="profesion">
            </div>
        </div>
    </div>
