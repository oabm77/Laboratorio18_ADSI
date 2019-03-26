<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Paciente.php";
//Creamos el objeto Paciente
$objPaciente= new Paciente();
$consultarPaciente = $objPaciente->consultarPaciente($_REQUEST['identificacionL']);

if ($resultado = $consultarPaciente->fetch_object()) {
	$_SESSION['html'] = "
	<form id='form1' name='form1' method='post' action='../Controlador/validarActualizarPaciente.php'>
      <table width='42%' border='0' align='center'>
        <tr>
          <td width='28%' align='right' bgcolor='#fbec88'>Identificación</td>
          <td width='72%'>
          	<input type='hidden' name='idPaciente' value='$resultado->idPaciente' />
            <input type='text' name='identificacion' size='40' value='$resultado->pacIdentificacion' required></td>
        </tr>
        <tr>
          <td align='right' bgcolor='#fbec88'>Nombres</td>
          <td><input name='nombres' type='text' id='nombres' size='40' value='$resultado->pacNombres' required /></td>
        </tr>
        <tr>
          <td height='25' align='right' bgcolor='#fbec88'>Apellidos</td>
          <td><input name='apellidos' type='text' id='apellidos' size='40' value='$resultado->pacApellidos' required/></td>
        </tr>
        <tr>
          <td height='25' align='right' bgcolor='#fbec88'>Fecha Nacimiento</td>
          <td><input name='fechaNacimiento' type='date' id='fechaNacimiento' size='40' value='$resultado->pacFechaNacimiento' required/></td>
        </tr>
        <tr>
          <td height='25' align='right' bgcolor='#fbec88'>Sexo</td>
          <td>
            <select name='sexo' id='sexo' required>";
            $requiredM = $resultado->pacSexo=='Masculino'?'selected':'';
            $requiredF = $resultado->pacSexo=='Femenino'?'selected':'';
$_SESSION['html'] .= "<option value='Masculino' $requiredM>Masculino</option>
              <option value='Femenino' $requiredF>Femenino</option>
            </select>
          </td>
        </tr>
        <tr bgcolor='#cc0000' class='texto'>
          <td colspan='2' align='center' bgcolor='#cc0000'><input type='submit' name='button' id='button' value='Actualizar' /></td>
        </tr>
        </table>
    </form>
	";
	header ("location:../Vista/index2.php?pag=actualizarPaciente&msj=1");
} else
	header ("location:../Vista/index2.php?pag=actualizarPaciente&msj=2");

?>



