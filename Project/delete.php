<?php
        $servername = "localhost";
        $database = "druzhini";
        $username = "druzhini";
        $password = "fa3Aphie";
        $id = $_GET["type"];
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        // sql to delete a record
        $sql = "DELETE FROM tblPolscy WHERE idPolscy=$id";

        if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        } else {
        echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
        


?>