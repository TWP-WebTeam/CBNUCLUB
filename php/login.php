<?php

// $host = 'localhost:3307';
// $user = 'root';
// $pw = 'young2360';
// $dbName = 'cbnuclub';

// $mysqli = new mysqli($host, $user, $pw, $dbName);

//  $mysqli -> set_charset("utf8");
//     // include "../include/session.php";
//     // include "../include/dbConnect.php";
//     /*echo "<pre>";
//     var_dump($_POST);*/
//     $memberId = $_POST['memberID'];
//     $memberPw = $_POST['memberPW'];

//     $sql = "SELECT * FROM membertbl WHERE memberID = '{$memberId}' AND memberPW = '{$memberPw}'";
//     $res = $mysqli->query($sql);

//         $row = $res->fetch_array(MYSQLI_BOTH);

//         if ($row != null) {
//             $_SESSION['ses_userid'] = $row['memberID'];
//              echo("<script>location.replace('./home.php');</script>"); 
//             // var_dump( $_SESSION );
//         }
//         if($row == null){
//             echo "<script>
//             alert('아이디와 비밀번호를 확인하세요.');
//             history.back();
//                 </script>";
//             exit;
//         }
    include "../include/session.php";
    include "../include/dbConnect.php";
    /*echo "<pre>";
    var_dump($_POST);*/
    $memberId = $_POST['memberID'];
    $memberPw = $_POST['memberPW'];
    $logout = $_POST['login'];

    $sql = "SELECT * FROM membertbl WHERE memberID = '{$memberId}' AND memberPW = '{$memberPw}'";
    $res = $dbConnect->query($sql);
        $row = $res->fetch_array(MYSQLI_BOTH);

        if ($row != null) {
            $_SESSION['ses_userid'] = $row['memberID'];
            echo("<script>location.replace('../php/home.php');</script>"); 
       // var_dump( $_SESSION );

        }
        if($row == null){
            echo '로그인 실패 아이디와 비밀번호가 일치하지 않습니다.';
        }

?>