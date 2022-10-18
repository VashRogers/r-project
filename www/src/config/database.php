<?php

class Database {
    
    public static function getConnection() {
        
        $env_path = realpath(dirname(__FILE__) . '/../env.ini');
        var_dump($env_path);
        $env = parse_ini_file($env_path);

        $conn = new mysqli($env['host'], $env['username'], $env['password'], $env['database']);

        if($conn->connect_error){
            die("Erro: " . $conn->connect_error);
        }

        return $conn;
    }

    public static function getResultFromQuery ($sql) {
        // echo "Entra em getResultFromQuery?";
        $conn = self::getConnection();
        var_dump($sql);
        $result = $conn->query($sql);
        // var_dump($result);
        $conn->close();
        return $result;
    }
}