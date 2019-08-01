<?php 
    require_once '../Model/database.php';
    require_once '../Model/student_db.php';
    require_once '../Model/generic_db.php';
    date_default_timezone_set('America/Chicago');

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
        case 'punch_in':
            session_start();
            //$start = getStartTime($_SESSION['username']);
            $user = get_user($_SESSION['username']);
            punch_in($user[0]);
            include('student.php');
            break;
        case 'punch_out':
            session_start();
            //$startTime = getStartTime($_SESSION['username']);
            $user = get_user($_SESSION['username']);
            punch_out($user[0]);
            include('student.php');
            break;
    }
?>