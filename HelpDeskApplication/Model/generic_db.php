<?php

//A function that will get user names of all users.
function get_users($username){
	global $db;
	//var_dump($db);
	//print_r($db);
	$query = 'SELECT userName FROM Users
			  WHERE userName = :username';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->execute();
	$result = $statement->fetch();
	$statement->closeCursor();
	return $result;
	}


//A function that will return the role of the desired user.
function user_role($username) {
    global $db;
    $query = 'SELECT userRole FROM Users
              WHERE userName = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();
    return $row;
}

?>
