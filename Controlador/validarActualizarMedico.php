<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Medico.php";
//Creamos el objeto Medico
$objMedico= new Medico();
$resultado =$objMedico->ActualizarMedico($_REQUEST['idMedico'],$_REQUEST['identificacion'],$_REQUEST['nombres'],$_REQUEST['apellidos'],$_REQUEST['especialidad'],$_REQUEST['telefono'],$_REQUEST['correo']);

if ($resultado)
	header ("location:../Vista/index2.php?pag=actualizarMedico&msj=3");
else
	header ("location:../Vista/index2.php?pag=actualizarMedico&msj=4");

?>