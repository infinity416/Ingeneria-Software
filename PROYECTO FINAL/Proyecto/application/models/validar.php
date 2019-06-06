<?php
$Usuario=$_POST['Usuario'];
$Contraseña=$_POST['Contrasena'];

//conectar
$conexion=mysqli_connect("localhost", "root", "", "cidetec");
$consulta=$this->db->query("SELECT * FROM logina WHERE Usuario='$Usuario' and Contrsena='$Contrasena'");
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
    header("localhost:CIDETEC/application/views/prevista.php");
}
else{
    echo"../views/login.php";
}

mysqli_free_result($resultado);
mysqli_close($conexion);