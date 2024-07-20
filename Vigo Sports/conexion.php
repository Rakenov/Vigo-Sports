<?php
class CConexion {
    public static function ConexionBD() {
        $host = "localhost";
        $dbname = "dbphp";
        $username = "postgres";
        $password = "JetRyedx11";
        $connection = mysqli_connect($host, $username, $password, $dbname);

        if(!$connection) {
            die("No se ha podido conectar con el servidor: " . mysqli_connect_error());
        }
        return $connection;
    }

    public static function verificarUsuario($correo, $password) {
        $connection = self::ConexionBD();
        $correo = mysqli_real_escape_string($connection, $correo);
        $password = mysqli_real_escape_string($connection, $password);
        $sql = "SELECT * FROM empleado WHERE correo_electronico = '$correo' AND contraseña = '$password'";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            return true;
        } else {
            return false;
        }
    }
}
?>
