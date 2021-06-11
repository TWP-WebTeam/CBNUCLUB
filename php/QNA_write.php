<?php

    $host = 'localhost';
    $user = 'root';
    $pw = 'rhrnak12!';
    $dbName = 'clubdb';

    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $conn = mysqli_connect($host, $user, $pw,  $dbName);
    $sql = "
    INSERT INTO qna
    (title, content, name, date)
    VALUE(
         '{$_POST['w_title']}',
       '{$_POST['content']}',
       '{$_POST['name']}',
       NOW()
    );";
    mysqli_query($conn, $sql);

    if (mysqli_connect_error()){
        echo "connect_error";
        echo mysqli_connect_error();
    }

?>
