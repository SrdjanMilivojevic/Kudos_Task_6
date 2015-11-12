<?php

$host = "localhost";
$user = "root";
$password = "";
$dbase = "srdjan";

$from = 'coyotewise@gmail.com'; //specify here the address that you want email to be sent from.

// Connection to DataBase
$conn = mysqli_connect($host, $user, $password, $dbase);
$result = mysqli_query($conn, "SELECT * FROM mails");

while ($row = mysqli_fetch_array($result)) {
    $email = $row['email'];
    $subject = $row['subject'];
    $body = $row['body'];
    $body = str_replace("\n.", "\n..", $body);

    mail($email, $subject, $body, 'From:' . $from);

    echo 'Email sent to: ' . $email . '<br>';
}

mysqli_close($conn);
