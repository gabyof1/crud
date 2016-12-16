<html>
	<head>
	</head>
	<body>
		<?
			$conexion = new mysqli("mysql.hostinger.es","u263134681_gaby","gaby2016",'u263134681_gaby');
			if($conexion->conect_errno){
				echo "Error al connectar a la BBDD".
					$conexion->connect_errno.",".
					$conexion->connect_error;
				exit();
			}else{
				$conexion->set_charset("utf8");
			}
		?>
	</body>
</html>