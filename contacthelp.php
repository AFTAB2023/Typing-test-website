<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
    echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'firstcontact');

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['msg'];

$data = "INSERT INTO allabout (FNAME, LNAME, EMAIL, MSG) VALUES ('$firstname', '$lastname', '$email', '$message')";

mysqli_query ($connection, $data);
header('location:contactsuccess.html');

?>