<?php 
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Medico.php";
$objMedico=new Medico();
 ?>
    <form id="formConsulta" name="formConsulta" method="post" action="../Controlador/validarConsultarMedico.php">
      <table width="42%" border="0" align="center">
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="3" align="center">ACTUALIZAR MEDICO</td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#fbec88">Identificación</td>
          <td width="52%">
            <select name="identificacionL" required>
              <option selected disabled>Seleccione de la lista</option>
              <?php
                  $identificaciones=$objMedico->consultarMedicos();
                  while ($registro = $identificaciones->fetch_object()) {
                    echo "<option value='$registro->medIdentificacion'>$registro->medIdentificacion</option>";
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
    echo '<p align="center" >Se ha Cargado el Médico Correctamente';
    break;
  case 2:
    echo '<p align="center">Problemas al Agregar el Médico, favor Revisar';
    break;
  case 3:
    echo '<p align="center">Se ha Actualizado el Médico Correctamente';
    break;
  case 4:
    echo '<p align="center">Problemas al Actualizar el Médico, favor Revisar';
    break;
}
?>