<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the data from the form input
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =  $_POST['password'];
    $password_comfirmation = $_POST['password2'];

    $hashedPw = base64_encode($password);

    // Sanitize the data to prevent SQL injection attacks
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Write an SQL query to insert the data into the database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPw')";

    // Execute the SQL query
    if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
        echo("Hello World");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>