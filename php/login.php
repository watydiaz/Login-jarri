<?php

session_start();



include 'conexion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena']; 

$validar_login = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo;
    header("location: ../bienvenida.php");
    exit;
} else {
    echo '
            <script>
            alert("Usuario o contraseña incorrectos");
            window.location = "../index.php";
          </script>
          ';
    exit;
}
?>
