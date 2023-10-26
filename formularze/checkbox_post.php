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
    echo"Connected succesfully"."<br>";


    if(mysqli_select_db($conn, $database)) {
        echo "Database $database selected <br>";
    } else {
        echo "Error select database". mysqli_error($conn);
    }

$name=$_POST["name"];
$email=$_POST["email"];
$vehicle1 = $_POST["vehicle1"];
$vehicle2 = $_POST["vehicle2"];


    echo"Pierwszy checkbox: ". $_POST["vehicle1"]."<br>";
    echo"Drugi checkbox: ". $_POST["vehicle2"]."<br>";

    $sql="INSERT INTO MyGuests (name, email,vehicle1,vehicle2) Values ('$name', '$email','$vehicle1','$vehicle2');";
    if(mysqli_query($conn, $sql)) {
        echo "New Record created successfully";
    } else {
        echo "Error: ". $sql . "<br>" .mysqli_error($conn);
    }

?>
