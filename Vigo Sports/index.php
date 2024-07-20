<?php
include_once("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    if (CConexion::verificarUsuario($correo, $password)) {
        // Redirigir al usuario a index1.php
        header("Location: index1.php");
        exit();
    } else {
        echo "<script>alert('Correo electrónico o contraseña incorrectos.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Vigo Sports</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #7fffd4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #ffffff;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }

        .login-container img {
            width: 100px;
            margin-bottom: 20px;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #333333;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }

        .login-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .login-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .login-container p {
            margin-top: 10px;
            color: #666666;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="unnamed.png" alt="Vigo Sports Logo">
        <h2>Login</h2>
        <form action="conexion.php" method="post">
            <input type="text" name="correo" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="submit" value="Ingresar">
        </form>
        <p>&copy; 2024 Vigo Sports</p>
    </div>
</body>
</html>
