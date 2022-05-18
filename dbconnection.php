<?php
// define('DB_SERVER','localhost');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','project');
// $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

//  Check connection
// if (mysqli_connect_errno())
// {
//    echo "Failed to connect to MySQL: " . mysqli_connect_errno();
// }
//
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $detail = $_POST['detail'];
    $sql = "INSERT INTO `project1`.`contact` (`name`, `email`, `phno`, `detail`) VALUES ('$name', '$email', '$phno', '$detail', current_timestamp());";
?>

