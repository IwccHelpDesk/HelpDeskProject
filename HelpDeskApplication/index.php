<?php 
require_once('Model/database.php');
require_once('Model/generic_db.php');
include('View/generic_login.php');
    // logic to check if student or admin and will redirect to the admin folder or student.
	
	$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'login';
    }
}
	
	$username = filter_input(INPUT_POST, 'UserName');
	$role = user_role($username);
	

	if($role != NULL)
	{
		if($role == "Admin")
		{
			session_start();
			include ('Admin/verify_password.php');
		}
		else
		{
			session_start();
			include ('Student/student.php');
		}
	}
	
?>