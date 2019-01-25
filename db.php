<?php

class DataBaseManager {
    private static $instance;

    public static function getInstance() {
        if (self::$instance === null){
            new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
        try {
            self::$instance = new PDO("sqlite:practice.sqlite3");
        } catch (PDOException $e){
            die("Подключение к базе данных не удалось: " . $e->getMessage());
        }
    }

}


