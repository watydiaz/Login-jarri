<?php
include 'conexion.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
    VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";


$verificar_correo = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo='$correo'");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
    alert("El Correo Ya Existe");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

$verificar_usuario = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario='$usuario'");

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
    <script>
    alert("El Usuario Ya Existe");
    window.location = "../index.php";
    </script>
    ';
    exit();
}




$ejecutar =mysqli_query($conn, $query);

if($ejecutar){
    echo '
        <script>
        alert("Usuario Registrado");
        window.location = "../index.php";
        </script>
    
    
    ';

}else{
    echo '
    <script>
    alert("Error al registrar el usuario");
    window.location = "../index.php";
    </script>
    
    
    ';
    
}
mysqli_close($conn);


?>