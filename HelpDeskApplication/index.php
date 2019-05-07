<?php 
require_once('Model/database.php');
require_once('Model/generic_db.php');
	
	$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'login';
    }
}

switch ($action) {
	case 'login':
		include ('View/generic_login.php');
		break;
	case 'login_test':
		$username = filter_input(INPUT_POST, 'userName');
		$role = user_role($username);
		if($role[0] != NULL)
		{
			if($role[0] == "Admin")
			{
				session_start();
				header('location:Admin/index.php');
			}
			else
			{
				session_start();
				header('location:Student/index.php');
			}
		} else {
			include ('View/generic_login.php');
		}
		break;
}
?>