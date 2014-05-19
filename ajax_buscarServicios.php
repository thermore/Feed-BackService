<?php
require_once(dirname(__FILE__) . "/connections/conexion.php");
$sector=$_POST["sector"];
$queryServicios = $db->prepare("SELECT nomservicio FROM servicios WHERE sector=?");
 
$queryServicios->execute(array($sector));
$listaSector = $queryServicios->fetchAll(PDO::FETCH_OBJ);


$arrayServicios[]=array() ;


foreach($listaSector as $servicios){
    
   
    array_push($arrayServicios, $servicios->nomservicio);
}
//var_dump($arrayServicios);
echo json_encode($arrayServicios);

?>

