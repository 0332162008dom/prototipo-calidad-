<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>
	<br>
<h1><center><FONT SIZE=40 color=1A5F75>BIENBENIDO ALUMNO</font></center></h1>
<br>
<h2><center>LLENE SUS DATOS </center></h2>
<br>
<form action="i_pase.php" method="post">
	<fieldset id="grupo">
		<center>DATOS PERSONALES</center>
		<center>
			<tr>
				<td>Genero:</td>
			<td><select name="lsttdoc" class="listbox">
				<option value="MASCULINO">MASCULINO</option>
				<option value="FEMENINO">FEMENINO</option>
				
			</select></td>
			<td>Peso:</td>
			<td><input type="text" name="txtpeso" style="width:45%;" class="caja" placeholder=KG></td>
			<br>
			<td>Talla:</td>
			<td><input type="text" name="txttalla" id="" placeholder="centimetros"></td>
</tr>
			<td>Contextura:</td>
			<select name="lstcontextura" class="listbox">
				<option value="0">Contextura</option>
				<option value="1">Muy delgado</option>
				<option value="2">Delgado</option>
				<option value="3">Normal</option>
				<option value="4">Musculoso</option>
				<option value="5">Obeso</option>
				<option value="6">Muy Obeso</option>
			</select>
			<br>
			<tr>
<td>Considera usted que lleva una alimentacion adecuada?</td>

<td>
				<input type="radio" name="opcali" value="Si">Si
				<input type="radio" name="opcali" value="No">No
			</td>

			<br>
			<td>Considera usted que tiene los recursos necesarios para llevar una alimentacion adecuada:</td>
<br>
<td>
				<input type="radio" name="opcrec" value="Si">Si
				<input type="radio" name="opcrec" value="No">No
			</td>
<br>
<td>Padecimeinto:</td>
			<input type="text" name="txtap" style="width:60%;" class="caja" placeholder="DEscriba alguna enfermedad que padesca"></td>
			<br>

		
			<td>Ingrese su numero de celular para recibir la ayuda necesaria::</td>
			<input type="text" name="txtc" style="width:30%" class="caja" placeholder="Celular">
			</select>

</tr>



		</center>
	</fieldset>
	<fieldset id="grupo">
		
		<center>DATOS PSICOLOGICOS</center>
		<table>
			<tr>
			<td>Considera usted que la coyuntura actual lo a afectado psicologicamente?</td>

<td>
				<input type="radio" name="opcpsi" value="Si">Si
				<input type="radio" name="opcpsi" value="No">No
			</td>
</tr>
<tr>
			<td>Estado animico:</td>
			<td><select name="lstanimo" class="listbox">
				<option value="0">Muy mal</option>
				<option value="1">mal</option>
				<option value="2">Normal </option>
				<option value="3">Bien</option>
				<option value="4">Super bien</option>
				<option value="5">Genial</option>
			
				

			</select></td>
</tr>

			<tr>

			<td>considera que la coyuntura actual (pandemia) le acfecta con respecto a cumplir con sus deberes de estudiante?</td>

<td>
				<input type="radio" name="opcdeb" value="Si">Si
				<input type="radio" name="opcdeb" value="No">No
			</td>
</tr>

		<tr>
			<td>A padecido el contagio de covid 19?</td>

<td>
				<input type="radio" name="opcpsi" value="Si">Si
				<input type="radio" name="opcpsi" value="No">No
			</td>
</tr>
			
			
		</table>
	</fieldset>

<center><input type="submit" value="Enviar Informacion" class="listbox" style="background-color: #353A97; color:white; height:35px;">
</center>
</form>







</body>
</html>