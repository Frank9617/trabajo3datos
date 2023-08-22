<?php
class FormularioRegistro {
    public function mostrarFormulario() {
        echo '<form method="post" action="">';
        echo '<label>Nombre de usuario:</label>';
        echo '<input type="text" name="username" required><br>';
        
        echo '<label>Correo electrónico:</label>';
        echo '<input type="email" name="email" required><br>';
        
        echo '<label>Contraseña:</label>';
        echo '<input type="password" name="password" required><br>';
        
        echo '<input type="submit" name="registrarse" value="Registrarse">';
        echo '</form>';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formulario = new FormularioRegistro();
    $formulario->mostrarFormulario();
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Aquí podrías guardar los datos en una base de datos o realizar otras acciones de registro
    echo "<p>¡Registro exitoso para $username!</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
</head>
<body>

<h2>Formulario de Registro</h2>

<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $formulario = new FormularioRegistro();
    $formulario->mostrarFormulario();
}
?>

</body>
</html>