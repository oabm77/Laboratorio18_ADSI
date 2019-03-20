<?php 
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Medico.php";
$objMedico=new Medico();
 ?>
    <form id="form1" name="form1" method="post" action="../Controlador/validarInsertarMedico.php">
      <table width="42%" border="0" align="center">
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center">INSERTAR MEDICO</td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#fbec88">Identificación</td>
          <td width="72%"><label for="identificacion"></label>
          <input name="identificacion" type="text" id="identificacion" size="40"  required /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Nombres</td>
          <td><input name="nombres" type="text" id="nombres" size="40" required /></td>
        </tr>
        <tr>
          <td height="25" align="right" bgcolor="#fbec88">Apellidos</td>
          <td><input name="apellidos" type="text" id="apellidos" size="40" required/></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Especialidad</td>
          <td>
            <input type="text" name="especialidad" list="especialidadLista" placeholder="Seleccione de la lista o escriba una nueva" autocomplete="off" size="40" required>
              <datalist id="especialidadLista">
                <?php
                  $especialidades=$objMedico->consultarEspecialidades();
                  while ($registro = $especialidades->fetch_object()) {
                    echo "<option value='$registro->medEspecialidad'>";
                  }
                ?>
              </datalist>
          </td>
        </tr>
        <tr>
          <td height="25" align="right" bgcolor="#fbec88">Telefono</td>
          <td><input name="telefono" type="tel" id="telefono" size="40" required/></td>
        </tr>
        <tr>
          <td height="25" align="right" bgcolor="#fbec88">Correo</td>
          <td><input name="correo" type="email" id="correo" size="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="xxxx@xxxx.xx" required/></td>
        </tr>
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center" bgcolor="#cc0000"><input type="submit" name="button" id="button" value="Enviar" /></td>
        </tr>
      </table>
    </form>
    
    <?php
if ($msj==1)
	echo '<p align="center" >Se ha Agregado el Médico Correctamente';
if ($msj==2)
	echo '<p align="center"> Problemas al Agregar el Médico, favor Revisar';

?>