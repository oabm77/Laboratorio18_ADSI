<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Medico.php";
//Creamos el objeto Medico
$objMedico= new Medico();
$consultarMedico = $objMedico->consultarMedico($_REQUEST['identificacionL']);

if ($resultado = $consultarMedico->fetch_object()) {
	$_SESSION['html'] = "
	<form id='form1' name='form1' method='post' action='../Controlador/validarActualizarMedico.php'>
      <table width='42%' border='0' align='center'>
        <tr>
          <td width='28%' align='right' bgcolor='#fbec88'>Identificación</td>
          <td width='72%'>
          	<input type='hidden' name='idMedico' value='$resultado->idMedico' />
            <input type='text' name='identificacion' size='40' value='$resultado->medIdentificacion' required></td>
        </tr>
        <tr>
          <td align='right' bgcolor='#fbec88'>Nombres</td>
          <td><input name='nombres' type='text' id='nombres' size='40' value='$resultado->medNombres' required /></td>
        </tr>
        <tr>
          <td height='25' align='right' bgcolor='#fbec88'>Apellidos</td>
          <td><input name='apellidos' type='text' id='apellidos' size='40' value='$resultado->medApellidos' required/></td>
        </tr>
        <tr>
          <td align='right' bgcolor='#fbec88'>Especialidad</td>
          <td>
            <input type='text' name='especialidad' list='especialidadLista' placeholder='Seleccione de la lista o escriba una nueva' autocomplete='off' size='40' value='$resultado->medEspecialidad' required>
              <datalist id='especialidadLista'>";
$especialidades=$objMedico->consultarEspecialidades();
while ($registro = $especialidades->fetch_object()) {
	$_SESSION['html'].="<option value='$registro->medEspecialidad'>";
}
$_SESSION['html'].="</datalist>
          </td>
        </tr>
        <tr>
          <td height='25' align='right' bgcolor='#fbec88'>Telefono</td>
          <td><input name='telefono' type='tel' id='telefono' size='40' value='$resultado->medTelefono' required/></td>
        </tr>
        <tr>
          <td height='25' align='right' bgcolor='#fbec88'>Correo</td>
          <td><input name='correo' type='email' id='correo' size='40' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' placeholder='xxxx@xxxx.xx' value='$resultado->medCorreo' required/></td>
        </tr>
        <tr bgcolor='#cc0000' class='texto'>
          <td colspan='2' align='center' bgcolor='#cc0000'><input type='submit' name='button' id='button' value='Actualizar' /></td>
        </tr>
        </table>
    </form>
	";
	header ("location:../Vista/index2.php?pag=actualizarMedico&msj=1");
} else
	header ("location:../Vista/index2.php?pag=actualizarMedico&msj=2");

?>



