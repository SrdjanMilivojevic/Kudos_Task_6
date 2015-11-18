<?php
header('Content-type: text/javascript');

$host = "localhost";
$user = "root";
$password = "";
$dbase = "srdjan";
if ($_POST['email'] != '' && $_POST['subject'] != '' && $_POST['body'] != '') {
    // Connection to DBase

    $conn = new mysqli($host, $user, $password, $dbase);
    $email = strip_tags(mysqli_real_escape_string($conn, $_POST['email']));
    $subject = strip_tags(mysqli_real_escape_string($conn, $_POST['subject']));
    $body = strip_tags(mysqli_real_escape_string($conn, $_POST['body']));

    $query = "INSERT INTO mails VALUES('','{$email}','{$subject}','{$body}')";
    $conn->query($query);
    $conn->close();
}
