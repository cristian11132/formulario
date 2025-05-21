<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="esti1.css">
    <title>Formulario</title>
</head>
 
<body>
<?php
$conectar = mysqli_connect("localhost", "root", "", "formulario");
 
if (!empty($_POST["ingresar"])) {
    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];
    $edad = $_POST["edad"];
    $profesion = $_POST["profesion"];
 
   
    $insertar = "INSERT INTO datos (cedula, nombre, apellido, direccion, ciudad, edad, profesion)
    VALUES ($cedula, '$nombre', '$apellido', '$direccion', '$ciudad', $edad, '$profesion')";
    mysqli_query($conectar, $insertar);
 
}
 
 
if (isset($_POST['update'])) {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $edad = $_POST['edad'];
    $profesion = $_POST['profesion'];
 
    $update_query = "UPDATE datos SET nombre='$nombre', apellido='$apellido', direccion='$direccion', ciudad='$ciudad', edad=$edad, profesion='$profesion' WHERE cedula=$cedula";
    mysqli_query($conectar, $update_query);
}
 
 
if (isset($_POST['delete'])) {
    $cedula = $_POST['cedula'];
    $delete_query = "DELETE FROM datos WHERE cedula=$cedula";
    mysqli_query($conectar, $delete_query);
}
 
?>
 
    <div class="container">
        <h1>Registro de Usuario</h1>
        <p class="subtitle">Registro</p>
 
    <form method="POST" action="formulario.php">
        Cedula <input type="number" name="cedula">
        Nombre <input type="text" name="nombre">
        Apellido <input type="text" name="apellido">
 
       
        Direccion <input type="text" name="direccion">
        Ciudad <input type="number" name="ciudad">
        Edad <input type="number" name="edad">
        Profesion <input type="text" name="profesion">
       
        <input type="submit" name="ingresar" value="Ingresar">
        <input type="submit" name="update" value="Actualizar">
        <input type="submit" name="delete" value="Eliminar">
    </form>
</div>
  <div class="container">
        <?php
    $consulta = "SELECT * FROM datos";
    $resultado = mysqli_query($conectar, $consulta);
    if (mysqli_num_rows($resultado) > 0) {
    echo "<h4>Registros actuales</h4>";
    echo "<table border='1'>
            <tr>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Edad</th>
                <th>Profesión</th>
            </tr>";

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
                <td>{$fila['cedula']}</td>
                <td>{$fila['nombre']}</td>
                <td>{$fila['apellido']}</td>
                <td>{$fila['direccion']}</td>
                <td>{$fila['ciudad']}</td>
                <td>{$fila['edad']}</td>
                <td>{$fila['profesion']}</td>
              </tr>";
              
    }

    echo "</table>";
} else {
    echo "<p>No hay registros en la base de datos.</p>";
}
?>

</div>

</body>
</html>