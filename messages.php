<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysql";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //retrieve data
    $fname = $_POST["msgname"];
    $lname = $_POST["msglastname"];
    $msg = $_POST["message"];

    //sanitizing

    $fname = mysqli_real_escape_string($conn, $fname);
    $lname = mysqli_real_escape_string($conn, $lname);
    $msg = mysqli_real_escape_string($conn, $msg);


    $sql = "INSERT INTO messages (firstName, lastName, message) VALUES ('$fname', '$lname', '$msg')";

    if (mysqli_query($conn, $sql)) {
        header("Location:index.php#contact");
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


    $_SESSION['fullname'] = $fname." ".$lname ;
    
    mysqli_close($conn);
}
    // retrieve the form data
?>