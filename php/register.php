<?php
    include "./include/session.php";
    include "./include/dbConnect.php";

    // $host = 'localhost:3307';
    // $user = 'root';
    // $pw = 'young2360';
    // $dbName = 'cbnuclub';

    // $mysqli = new mysqli($host, $user, $pw, $dbName);

    // $mysqli -> set_charset("utf8");
    // $conn = mysqli_connect("localhost:3307", "root", "young2360", "cbnuclub");

    $clubname=($_POST['clubname']);
    $author=($_POST['author']);
    $total_member=($_POST['total_member']);
    $desc=($_POST['desc']);
    $location=($_POST['location']);

    $sql = "INSERT INTO clubdb (
        clubname, 
        author, 
        total_member,
        descrption,
        roomlocation
        ) VALUES(
            '$clubname',
            '$author', 
            '$total_member', 
            '$desc', 
            '$location')";                                                                       // (입력받음)insert into 테이블명 (column-list)
    // $sql = $sql."values('$clubname','$author', '$total_member', '$desc', '$location')";         // calues(column-list에 넣을 value-list)
   
    $result = mysqli_query($conn, $sql);
    if($result === false){
        echo mysqli_error($conn);
}
//     if($mysqli->query($sql)){                                                              //만약 sql로 잘 들어갔으면
//      echo 'success inserting <p/>';                                                            //success inserting 으로 표시
//      echo $id.'님 가입 되셨습니다.<p/>';                                   // id님 안녕하세요.
//     }else{                                                                                //아니면
//      echo 'fail to insert sql' .$mysqli->error;                                                            //fail to insert sql로 표시
//     }
   
//    mysqli_close($mysqli);
   
?>