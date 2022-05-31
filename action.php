<?php
    $name = '"' . $_POST['uname'] . '"';
    $email = '"' . $_POST['email'] . '"';
    $comments = $_POST['comment'] ? $_POST['comment'] : '';
    $comment = '"' . $comments . '"';

    $servername = "sql308.epizy.com";
    $username = "epiz_29947181";
    $password = "8PrgnBGxhRxmF";
    $dbname = "epiz_29947181_doughnuts";


// Creating connection
$conn = mysqli_connect($servername, $username, $password);
// Checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Creating a database named doughnuts
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (!mysqli_query($conn, $sql)) {
    echo "Error creating database: " . mysqli_error($conn);
}

// sql to create table
$sqlTable = "CREATE TABLE IF NOT EXISTS epiz_29947181_doughnuts.People (
    Name VARCHAR(40),
    Email VARCHAR(40),
    Comments Text(60000))";
    
    if ($conn->query($sqlTable) !== TRUE) {
      echo "Error creating table: " . $conn->error;
    }
     
        $sql = "INSERT INTO epiz_29947181_doughnuts.People (Name, Email, Comments)
VALUES ($name, $email, $comment)";
            
            if ($conn->query($sql) === TRUE) {
                echo '<div style="text-align:center; padding-top:13%;" id="default">
                <div>
                    <h1><strong>Заявка принята!</strong></h1>
                    <p><strong>Мы с вами свяжемся в ближайшее время</strong></p>
                      
                </div>
            </div>';
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }

// closing connection
mysqli_close($conn);
?>