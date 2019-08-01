<?php 
    function punch_in($id) {
        $date = date('Y-m-d H:i:s');
        global $db;
        $query = 'INSERT INTO ReportingTable
            (userId, startTime)
            VALUES
            (:id, :time)';
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->bindValue(':time', $date);
        $statement->execute();
        $statement->closeCursor();
    }

    function getStartTime($username){
        global $db;
        $query = 'SELECT startTime from ReportingTable
            WHERE (SELECT userIndexId from Users WHERE userName = :userName) 
            AND DATE(startTime) = CURDATE()
            ORDER BY startTime DESC';
        $statement = $db->prepare($query);
        $statement->bindValue(':userName', $userName);
        $statement->execute();
        $statement->closeCursor();
    }

    function punch_out($id) {
        $date = date('Y-m-d H:i:s');
        global $db;
        $query = 'UPDATE ReportingTable 
                  SET endTime = :time 
                  WHERE DATE(startTime) = CURDATE() and userId = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->bindValue(':time', $date);
        $statement->execute();
        $statement->closeCursor();
    }
?>