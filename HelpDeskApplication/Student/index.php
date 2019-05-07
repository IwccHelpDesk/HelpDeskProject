<?php 
    require_once '../Model/database.php';
    require_once '../Model/student_db.php';

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'student';
        }
    }

    switch ($action) {
        case 'student': 
            include('student.php');
            break;
    }
?>