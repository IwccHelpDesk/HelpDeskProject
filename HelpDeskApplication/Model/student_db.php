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
?>