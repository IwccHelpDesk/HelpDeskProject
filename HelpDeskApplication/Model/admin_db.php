<?php 
    function get_users() {
        global $db;
        $query = 'SELECT * FROM Users';
        try {
            $statement = $db->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }

    function create_user($username, $lname, $fname) {
        global $db;
        $query = 'INSERT INTO Users (userName, firstName, lastName, UserRole)
                  VALUES (:username, :firstname, :lastname, "student")';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':firstname', $fname);
        $statement->bindValue(':lastname', $lname);
        $statement->execute();
        $statement->closeCursor();
    }

    function delete_user($id) {
        global $db;
        $query = 'DELETE FROM Users
                where userIndexId = :id';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }

    function get_username($id) {
        global $db;
        $query = 'SELECT userName FROM Users
            WHERE userIndexId = :id ';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }

    function reporting_info($id) {
        global $db;
        $query = 'SELECT * FROM ReportingTable
            WHERE userId = :id ';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }
    

?>