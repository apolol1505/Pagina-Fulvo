<?php
  $conexion = mysqli_connect('localhost','root','1040349990san','bdfutbol');
  $conexion2 = mysqli_connect('localhost','root','1040349990san','bdfutbol'); // Nueva conexión
  
  $sql = "SELECT * FROM jugadores";
  $result = mysqli_query($conexion, $sql);

  $sql2 = "SELECT * FROM eventos";
  $result2 = mysqli_query($conexion2, $sql2);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mi página de fútbol</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Eventos deportivos</h1>
  <h2>Tabla de jugadores</h2>
	<table class="jugadores">
	  <thead>
	    <tr>
	      <th>id</th>
	      <th>nombre</th>
	      <th>dorsal</th>
        <th>ciclo</th>
        <th>número de teléfono</th> 
        <th>género</th>

   
	    </tr>
	  </thead>
	  <tbody>
	  <?php
	    while($mostrar = mysqli_fetch_array($result)){
	  ?>
	    <tr>
	      <td><?php echo $mostrar ['id']?></td>
	      <td><?php echo $mostrar ['nombre_apellido']?></td>
        <td><?php echo $mostrar ['dorsal']?></td>
        <td><?php echo $mostrar ['genero']?></td>
        <td><?php echo $mostrar ['ciclo']?></td>
        <td><?php echo $mostrar ['numero_de_telefono']?></td>        


 
	    </tr>
	  <?php 
	    }
	  ?>
	  </tbody>
	</table>
  <h2>Tabla de eventos</h2>
	<table class="eventos">
	  <thead>
	    <tr>
	      <th>id</th>
	      <th>hora inicio</th>
	      <th>hora finalización</th>
	      <th>primer equipo</th>
	      <th>primer marcador</th>
	      <th>segundo equipo</th>
	      <th>segundo marcador</th>
	      <th>resultado</th>
	      <th>árbitro</th>
	    </tr>
	  </thead>
	  <tbody>
	  <?php
	    while($mostrar2 = mysqli_fetch_array($result2)){
	  ?>
	    <tr>
	      <td><?php echo $mostrar2 ['id']?></td>
	      <td><?php echo $mostrar2 ['hora_inicio']?></td>
	      <td><?php echo $mostrar2 ['hora_finalizacion']?></td>
	      <td><?php echo $mostrar2 ['primer_equipo']?></td>
	      <td><?php echo $mostrar2 ['primer_marcador']?></td>
	      <td><?php echo $mostrar2 ['segundo_equipo']?></td>
	      <td><?php echo $mostrar2 ['segundo_marcador']?></td>
	      <td><?php echo $mostrar2 ['resultado']?></td>
	      <td><?php echo $mostrar2 ['arbitro']?></td>  
	    </tr>
	  <?php 
	    }
	  ?>
	  </tbody>
	</table>
</body>
</html>


