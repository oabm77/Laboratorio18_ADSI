<?php 
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Paciente.php";
$objPaciente=new Paciente();
 ?>
    <form id="formConsulta" name="formConsulta" method="post" action="../Controlador/validarConsultarPaciente.php">
      <table width="42%" border="0" align="center">
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="3" align="center">ACTUALIZAR PACIENTE</td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#fbec88">Identificación</td>
          <td width="52%">
            <select name="identificacionL" required>
              <option selected disabled>Seleccione de la lista</option>
              <?php
                  $identificaciones=$objPaciente->consultarPacientes();
                  while ($registro = $identificaciones->fetch_object()) {
                    echo "<option value='$registro->pacIdentificacion'>$registro->pacIdentificacion</option>";
                  }
                ?>
            </select>            
          </td>
          <td width="20%">
            <input type="submit" name="btn_consulta" id="btn_consulta" value="consultar"> 
          </td>
        </tr>
      </table>
    </form>
    <?php

switch ($msj) {
  case 1:
    echo $_SESSION['html'];
    echo '<p align="center" >Se ha Cargado el Paciente Correctamente';
    break;
  case 2:
    echo '<p align="center">Problemas al Agregar el Paciente, favor Revisar';
    break;
  case 3:
    echo '<p align="center">Se ha Actualizado el Paciente Correctamente';
    break;
  case 4:
    echo '<p align="center">Problemas al Actualizar el Paciente, favor Revisar';
    break;
}
?>