<?php 
        require_once '../Model/database.php';
        require_once '../Model/admin_db.php';

        $action = filter_input(INPUT_POST, 'action');
        if ($action == NULL) {
                $action = filter_input(INPUT_GET, 'action');
        }
        if ($action == NULL) {
                $action = 'login';
        }

        switch($action) {
                case 'login':
                        include('verify_password.php');
                        break;
                case 'login_test':
                        $pwd = filter_input(INPUT_POST, 'pwd');
                        $admin_pass = admin_login();
                        if ($pwd === $admin_pass[0]) {
                                $users = get_users();
                                include('admin.php');
                        } else {
                                include('verify_password.php');  
                        }
                        break;
                case 'index':
                        $users = get_users();
                        include('admin.php');
                        break;
                case 'enter_user':
                        $username = filter_input(INPUT_POST, 'uid');
                        $lname = filter_input(INPUT_POST, 'lname');
                        $fname = filter_input(INPUT_POST, 'fname');
                        create_user($username, $lname, $fname);
                        $users = get_users();
                        include('admin.php');
                        break;
                case 'Delete':
                        $id = filter_input(INPUT_POST, 'user_id');
                        delete_user($id);
                        $users = get_users();
                        include('admin.php');
                        break;
                case 'query':
                        $id = filter_input(INPUT_POST, 'user_id');
                        $username = get_username($id);
                        $user_info = reporting_info($id);
                        include('query.php');
                        break;
                case 'home':
                        $users = get_users();
                        include('admin.php');
                        break;

        }
?>