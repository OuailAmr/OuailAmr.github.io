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
    $urname = $_POST["urname"];
    $position = $_POST["position"];
    $review = $_POST["review"];

    //sanitizing

    $urname = mysqli_real_escape_string($conn, $urname);
    $position = mysqli_real_escape_string($conn, $position);
    $review = mysqli_real_escape_string($conn, $review);


    $sql = "INSERT INTO reviews (fullName, position, review) VALUES ('$urname', '$position', '$review')";

    if (mysqli_query($conn, $sql)) {
        header("Location:index.php#testimonials");
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


   
    
    mysqli_close($conn);
}
    // retrieve the form data
?>

