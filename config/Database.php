<?php
    function initDatabase () {
        $database = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if ($database->connect_errno) {
            die("Lỗi " . $database->connect_errors);
        }
        return $database;
    }
?>