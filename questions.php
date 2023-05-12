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
    $qname = $_POST["qname"];
    $qemail = $_POST["qemail"];
    $question = $_POST["question"];

    //sanitizing

    $qname = mysqli_real_escape_string($conn, $qname);
    $qemail = mysqli_real_escape_string($conn, $qemail);
    $question = mysqli_real_escape_string($conn, $question);


    $sql = "INSERT INTO questions (fullName, qemail, question) VALUES ('$qname', '$qemail', '$question')";

    if (mysqli_query($conn, $sql)) {
        header("Location:index.php#faq");
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


   
    
    mysqli_close($conn);
}
    // retrieve the form data
?>

