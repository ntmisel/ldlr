<?php
	$url = "https://api.cambio.today/v1/full/USD/json?key=13740|btNOvrGRiJirxE5JzFTCSdBpeciwDo26";
	$var = file_get_contents($url);
	$datos = json_decode($var, true);


	$conver = $datos["result"];
	$conver2 = $conver2["conversion"][94]["rate"];




	var_dump($conver2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultas</title>
  <link rel="stylesheet" href="estilo.css" title="Color">
<center>
  <h1>TIPO DE CAMBIO</h1>
  </center>

</head>
<body bgcolor="gray" title="1 dolar = ">
<p>La <a href="https://cambio.today">conversión moneda</a> proporcionada por cambio.today.</p>
</body>
</html>
