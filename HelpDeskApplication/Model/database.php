<?php 
    $dsn = 'mysql:host=student.ecc.iwcc.edu;dbname=';
    $username = 'iwcchelpdesk';
    $password = 'help2019';
    
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include 'errors/db_error_connect.php';
        exit;
    }
?>