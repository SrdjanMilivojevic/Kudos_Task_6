<?php

$host = "localhost";
$user = "root";
$password = "";
$dbase = "srdjan";

$from = 'somemail@gmail.com'; //specify here the address that you want email to be sent from.

// Connection to DataBase
$conn = new mysqli($host, $user, $password, $dbase);
$result = $conn->query("SELECT * FROM mails");

while ($row = mysqli_fetch_array($result)) {
    $email = $row['email'];
    $subject = $row['subject'];
    $body = $row['body'];
    $body = str_replace("\n.", "\n..", $body);

    mail($email, $subject, $body, 'From:' . $from);

    echo 'Email sent to: ' . $email . '<br>';
}
$conn->close();
