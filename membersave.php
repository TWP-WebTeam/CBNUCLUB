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
 $password=($_POST['pw2']);
 $email=$_POST['memberEmail'];

 $sql = "insert into ctm (stdnum, pw, email)";             // (입력받음)insert into 테이블명 (column-list)
 $sql = $sql. "values('$id','$password', '$email')";         // calues(column-list에 넣을 value-list)

 if($mysqli->query($sql)){                                                              //만약 sql로 잘 들어갔으면
  echo 'success inserting <p/>';                                                            //success inserting 으로 표시
  echo $id.'님 가입 되셨습니다.<p/>';                                   // id님 안녕하세요.
 }else{                                                                                //아니면
  echo 'fail to insert sql' .$mysqli->error;                                                            //fail to insert sql로 표시
 }

mysqli_close($mysqli);


?>
</html>
