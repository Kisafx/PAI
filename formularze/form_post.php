<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "5ina20";
    // create connection
    $conn = mysqli_connect($servername, $username, $password);
    //connection check
    if (!$conn) {
        die("Conncetion failed". mysqli_connect_error());
    }
    echo"Connected succesfully<br>";
    
    if(mysqli_select_db($conn, $database)) {
        echo "Database $database selected <br>";
    } else {
        echo "Error select database". mysqli_error($conn);
    }
    

    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql="INSERT INTO MyGuests (firstname, email) Values ('$name', '$email');";

    if(mysqli_query($conn, $sql)) {
        echo "New Record created successfully";
    } else {
        echo "Error: ". $sql . "<br>" .mysqli_error($conn);
    }
?>
