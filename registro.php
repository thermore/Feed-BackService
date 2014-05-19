<?php
require_once(dirname(__FILE__) . "/connections/conexion.php");
function  ingles ($hoy) {
	
	$hoy2 = substr($hoy, 0, 10);	
	$cad2 = $hoy2;	
	$uno=substr($cad2, 6, 4);
	$dos=substr($cad2, 3, 2);
	$tres=substr($cad2, 0, 2);
	$hoy = ($uno."-".$dos."-".$tres.substr($hoy, 11, 17));	
	
	return ($hoy);
	
}
if(isset($_POST['passRegistro']) &&
        isset($_POST['nombre']) &&
        isset($_POST['apellidos']) && 
        isset($_POST['profesion']) && 
        isset($_POST['sexo']) && 
        isset($_POST['email'])&& 
        isset($_POST['fechaNac']) &&
        isset($_POST['aliasRegistro']) && 
        isset($_POST['provincia'])
        ){
   
    $query = $db->prepare("INSERT INTO usuarios (alias,nombre,apellidos,provincia,email,sexo,pass,fecha_nacimiento,profesion) VALUES (?,?,?,?,?,?,?,?,?)");
    
    $query->execute(array($_POST['aliasRegistro'],$_POST['nombre'],$_POST['apellidos'],$_POST['provincia'],$_POST['email'],$_POST['sexo'],md5($_POST['passRegistro']),ingles($_POST['fechaNac']),$_POST['profesion']));
   
    header("Location:home");
}
else{
    echo "Error";
}
?>


        
         
        
        
        
        