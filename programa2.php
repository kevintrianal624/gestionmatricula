<html>
<html>

<head>
  <title>Programa 2</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "matricula") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into programa(id_programa,nombre_programa,creditos) values 
                       ('$_REQUEST[id_programa]','$_REQUEST[nombre_programa]','$_REQUEST[creditos]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "Se registro correctamente.";
  ?>
</body>

</html>