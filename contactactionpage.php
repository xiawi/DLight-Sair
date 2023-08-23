<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $servername = "localhost";
    $username = "root";
    $password = NULL;
    $dbname = "dlightsair";

    $handler = mysqli_connect($servername, $username, $password, $dbname);

    $query = "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')";

    mysqli_query($handler, $query);
    mysqli_close($handler);
    header('Location: contactsuccess.html');
    exit;

?>