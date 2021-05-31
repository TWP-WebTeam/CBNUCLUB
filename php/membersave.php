
<html>
   <meta charset="utf-8">
<?php

$host = 'localhost:3307';
$user = 'root';
$pw = 'young2360';
$dbName = 'cbnuclub';

$mysqli = new mysqli($host, $user, $pw, $dbName);

 $mysqli -> set_charset("utf8");

 $id=$_POST['memberID'];
 $password=($_POST['memberPW']);
 $password2=($_POST['memberPW2']);
 $email=$_POST['memberEmail'];
 $type =$_POST['memberWho'];


 $sql = "insert into membertbl (memberID, memberEmail, memberPW, memberType)";             // (입력받음)insert into 테이블명 (column-list)
 $sql = $sql. "values('$id','$email', '$password', '$type')";         // calues(column-list에 넣을 value-list)

 if($mysqli->query($sql)){                                                               //만약 sql로 잘 들어갔으면
   echo("<script>location.replace('./home.php');</script>");                                // id님 안녕하세요.
 }else{                                                                                //아니면
  echo 'fail to insert sql' .$mysqli->error;                                                            //fail to insert sql로 표시
 }

mysqli_close($mysqli);

?>
</html>
