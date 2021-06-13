<html>
   <meta charset="utf-8">
<?php

$host = 'localhost';
$user = 'root';
$pw = 'qwer1234!';
$dbName = 'clubdb';

$mysqli = new mysqli($host, $user, $pw, $dbName);

 $mysqli -> set_charset("utf8");

 $id=$_POST['memberID'];
 $password=($_POST['memberPW']);
 $department=($_POST['memberdpm']);
 $email=$_POST['memberEmail'];
 $type =$_POST['memberWho'];


 $sql = "insert into membertbl (memberID, memberEmail, memberPW, memberdpm ,memberType)";             // (입력받음)insert into 테이블명 (column-list)
 $sql = $sql. "values('$id','$email', '$password', '$department' ,'$type')";         // calues(column-list에 넣을 value-list)

 if($mysqli->query($sql)){                                                               //만약 sql로 잘 들어갔으면
   echo("<script>location.replace('../php/home.php');</script>");                                // id님 안녕하세요.
 }else{                                                                                //아니면
  echo 'fail to insert sql' .$mysqli->error;                                                            //fail to insert sql로 표시
 }

mysqli_close($mysqli);


?>
</html>
