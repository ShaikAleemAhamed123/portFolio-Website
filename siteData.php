<?php
        $username = $_POST['username'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "root";
        $dbName = "siteData";


        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if($conn->connect_error){
            die('Connection Failed : ' .$conn->error));
        }
        else{
            $stmt=$conn->prepare("insert into sitedatamessages(username,email,message)
            values(?,?,?");
            $stmt->bind_param("sss",$username,$email,$message);
            $stmt->execute();
            echo "Message Sent Successfully..";
            $stmt->close();
            $conn->close();
        }
?>