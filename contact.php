<?php
    $SENDER_NAME = $_REQUEST['sender_name'];
    $SENDER_EMAIL = $_REQUEST['sender_email'];
    $SENDER_SUBJECT = $_REQUEST['sender_subject'];
    $SENDER_MESSAGE = $_REQUEST['sender_message'];

    $connection = mysqli_connect("localhost","root","") or die ("Couldn't connect ot server");
    
    $create_db = "CREATE DATABASE IF NOT EXISTS CONNECT_WITH_ME";
    
    $link_db = mysqli_query($connection, $create_db) or die ("Query failed : " .mysql_error ($connection));
    
    $connect_db = mysqli_select_db($connection,"CONNECT_WITH_ME") or die ("Couldn't connect to database");
    
    $create_table = "CREATE TABLE IF NOT EXISTS Sender_Info (sender_name VARCHAR(20),  sender_email VARCHAR(50), sender_subject VARCHAR(50), sender_message VARCHAR(200))";
    
    $link_table = mysqli_query($connection, $create_table) or die ("Query failed : " . mysql_error ($connection));
    
    $insert_table = "INSERT INTO Sender_Info (sender_name, sender_email, sender_subject, sender_message) VALUES ('$SENDER_NAME','$SENDER_EMAIL','$SENDER_SUBJECT','$SENDER_MESSAGE')";
    
    $connect_info = mysqli_query($connection, $insert_table) or die ("Query failed : " . mysql_error ($connection));
    
    $query = "SELECT * FROM Sender_Info";

    $result = mysqli_query($connection, $query) or die ("Query Failed:".mysql_error());

    echo "<script>
        alert('MESSAGE SENT <br>, Thanks for reaching me, I will connect with you soon !');
        window.open('index.html','_self');
    </script>";

    $connection = mysqli_connect("localhost","root","") or die ("Coudn't connect to the server");

    $truncate_table = mysqli_query($connection, "TRUNCATE TABLE product");

?>