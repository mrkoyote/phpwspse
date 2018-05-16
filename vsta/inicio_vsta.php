<html>
<head>
	<title>PHPWSPSE</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	<script>
		$( document ).ready(function() 
		{
			$("#infobank").hide();
		});	

		function mbankss()
		{
			// se muestra listado depues de elegir el tipo de cuenta
			$("#infobank").show();	
		}

	</script>

</head>
<body>
<form class="form-horizontal" action="ctrl/procesar_form_inicio.php" method="POST">
	<div class="container">
		<div class="form-group">
			<label>Usuario Realiza pago con debito</label>
			<br>
			<label>Tipo de cuenta donde se Pagara</label>
			<label class="radio-inline">
			 	<input type="radio" name="tipocuenta" onclick="mbankss()">Corriente
			 </label>
			<label class="radio-inline">
				<input type="radio" name="tipocuenta" onclick="mbankss()">Ahorros
			</label>
		</div>	
	</div>	

	<div id="infobank"  class="container">		
			<div class="form-group">
	    		<label>Tipo de Banca</label>
					<select name="tipobanca" class="form-control"> 
						<option value="0">PERSONAS</option>
						<option value="1">EMPRESAS</option>
					</select>
					<br>
					<label><b>Seleccione de la lista la entidad Financiera con la que desea realizar el pago</b></label>
				<?php
					//se lista el select de los bancos
					echo "<select name='banco' class='form-control'>";
					for($i=0;$i<$max;$i++)
								{			
								  echo "<option value='".$bancos[$i]->bankCode."'>".$bancos[$i]->bankName."</option>";
								}   
					echo "</select>";
				?>
				<br>
				<button type="submit" class="btn btn-default">
					Siguiente
				</button>
			</div>
	</div>
</form>
</div>
</body>
</html>





