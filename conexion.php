<?php
class Cconexion{
    public static function ConexionDB(){
        $host = 'localhost';
        $dbname = 'db_test';
        $username = 'root';
        $password = '';

        try{
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            echo "Conectado a $dbname en $host con éxito.";
        } catch(PDOException $exp){
            echo ("No se logró conectar correctamente a la base de datos: $dbname :" . $exp->getMessage());
        }
        return $conn;
        
    }
}
?>