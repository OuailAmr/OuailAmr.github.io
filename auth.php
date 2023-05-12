<?php
// start the session
session_start();

// check if the user is already logged in
if(isset($_SESSION['email'])) {
    header("Location: index.php"); // redirect to welcome page
    
}

// check if the form was submitted
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
    
    // retrieve the form data
    $email = $_POST['email2'];
    $password = $_POST['password3'];
    
    $hashedPw2 = base64_encode($password);
    
    // query the database to check if the email and password match
    $sql = "SELECT name, email FROM users WHERE email='$email' AND password='$hashedPw2'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    
    // close the database connection
    mysqli_close($conn);
    
    // if the email and password match, create a session and redirect to welcome page
    if($count == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row['name'];
        header("Location: index.php");
    } else {
        header("Location: index.php?error=".$hashedPw2."");
        
        
    }
}
?>