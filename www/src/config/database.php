<?php

class Database {
    
    public static function getConnection() {
        $env_path = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($env_path);

        $conn = new mysqli($env['host'], $env['username'], $env['password'], $env['database']);

        if($conn->connect_error){
            die("Erro: " . $conn->connect_error);
        }

        return $conn;
    }

    public static function getResultFromQuery ($sql) {
        $conn = self::getConnection();
        $result = $conn->query($sql);

        $conn->close();
        return $result;
    }
}