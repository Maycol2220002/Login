<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Calcular el Porcentaje de Asistencia</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/iconos.js"></script>
</head>
<body>
	<?php include 'php/Porcentaje.php'; ?>
	<section id="sesion">
		 <div class="form_register">
			<h1><i class="far fa-edit fa-2x"></i> Calcular Asistencia del Estudiante</h1>
			<hr>
			<?php if (isset($alert)) { ?>
				<div class="alert" id="alertMensaje">
				<span class="delmensaje">
					<a href="index.php" style="color: white;text-decoration: none;">X</a>
				</span>
				<div class="alert">
				<?php echo $alert; ?>
			</div>
		<?php }else{ ?>
			<div class="alert">
				<?php echo isset($alert_error) ? $alert_error:''; ?>
			</div>
			<form action="" method="post">
			 <table>
                <tr>
			 	  <td>
			 	  	<label>Ausensia</label>
			 	  	<input type="number" name="Ausensia" placeholder="Ausensia del Estudiante">
			 	  </td>
			 	</tr>
			 	<tr>
			 	  <td>
			 	  	<label>Excusa</label>
			 	  	<input type="number" name="Excusa" placeholder="Excusa del Estudiante">
			 	  </td>
			 	</tr>
			 </table>  			 
			<button type="submit" name="btnAccion" value="Calcular_Porcentaje" 
				class="btn_enviar" onclick="return Asistencia()"><i class="far fa-save"></i> Enviar</button>
			</form>
			<script type="text/javascript">
				function Asistencia() {
					var confirma = confirm("Estas seguro de Calcular el Porcentaje?");

					if (confirma == true) {
						return true;
					}else{ 
                      return false;
					}
				}
			</script>
		<?php } ?>
		</div>
	</section>
</body>
<footer>
	<div>
		<label>@All rights reserved <br>Evelyn Carolina Reyes Bonilla <br>#37</label>
	</div>
</footer>
</html>