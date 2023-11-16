<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link href="./../public/img/logos/logoPes.png" type="image/x-icon" rel="shortcut icon"/> 
    	<title>Pedido</title>
    	<link rel="stylesheet" href="./../public/css/EstiloPedido.css">
    </head>
	<body>
		<div class="login-box">
			<img class="avatar" src="./../public/img/logos/pedido.jpg" alt="">
			<h1>Mi pedido</h1>
			<form action = "FormularioPedidoP.php" method="POST">
				<!--USERNAME-->
				<label for="username">Nombre</label>
				<input type="text" value="<?php echo $nombre." ".$apellido; ?>" placeholder="Ingrese su nombre">
				<!--Correo-->
				<label for="correo">Correo</label>
				<input type="text" value="<?php echo $correo; ?>" placeholder="Ingrese su correo">
				<!--Serie Modelos-->
				<label for="serie">Serie Modelo</label>
				<input type="text" value="<?php echo $Mod; ?>" placeholder="">
				<!--Modelos-->
				<label for="modelo">Modelo</label>
				<input type="text" value="<?php echo $nomMode; ?>" placeholder="">
				<!--Cantidad-->
				<label for="cantidad">Cantidad</label><br>
				<select name="cantidadPro_P" id="cantidad">
					<option value=1>1</option>
					<option value=2>2</option>
					<option value=3>3</option>
					<option value=4>4</option>
					<option value=5>5</option>
					<option value=6>6</option>
					<option value=7>7</option>
					<option value=8>8</option>
					<option value=9>9</option>
					<option value=10>10</option>
				</select><br>
				<!--Sexo-->
				<label for="envio"><br>Envío</label><br>
				<input type="radio" name="envio" value="León">León Gto
				<input type="radio" name="envio" value="Nacional">Nacional
				<input type="radio" name="envio" value="Internacional">Internacional
				<!--Fecha-->
				<label for="fecha">Fecha del Pedido</label>
				<input type="text" value="<?php echo $fecha; ?>" placeholder="">
				<!--País-->
				<label for="pais">País</label>
				<input type="text" value="<?php echo $pais; ?>" placeholder="Ingrese nombre del país">
				<!--Estado-->
				<label for="estado">Estado</label>
				<input type="text" value="<?php echo $estado; ?>" placeholder="Ingrese nombre del estado">
				<!--calle-->
				<label for="calle">Calle</label>
				<input type="text" value="<?php echo $calle; ?>" placeholder="Ingrese nombre de la calle">
				<!--colonia-->
				<label for="colonia">Colonia</label>
				<input type="text" value="<?php echo $colonia; ?>" placeholder="Ingrese nombre de la colonia">
				<!--numero-->
				<label for="numero">Núm</label>
				<input type="text" value="<?php echo $numCasa; ?>" placeholder="Ingrese número de casa">
				<!--cp-->
				<label for="cp">Código Postal</label>
				<input type="text" value="<?php echo $codigo; ?>" placeholder="Ingrese código postal">
				<!--telefono-->
				<label for="telefono">Teléfono</label>
				<input type="text" value="<?php echo $tel; ?>" placeholder="(ejem. 4771234567)">
				<!--Botón-->
				<input name= "sum" type="submit" value="Confirmar Pedido"><br><br>
			</form>
		</div>
	</body>    
</html>