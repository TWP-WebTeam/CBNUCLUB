<?php

$conn = mysqli_connect("localhost:3307", "root", "young2360", "cbnuclub");

// $mysqli = new mysqli($host, $user, $pw, $dbName);

//  $mysqli -> set_charset("utf8");


 $stdnum=$_POST['memberID'];
 $pw=($_POST['memberPW']);
 $email=$_POST['memberEmail'];

$sql = "INSERT INTO memberdb (
   stdnum, 
   pw, 
   email) VALUES(
      '$stdnum',
      '$pw', 
      '$email')";

$result = mysqli_query($conn, $sql);

if($result === false){
    echo mysqli_error($conn);
}
 if($conn->query($sql)){                                                   //만약 sql로 잘 들어갔으면
  echo 'success inserting <p/>';                                                            //success inserting 으로 표시
//   echo $row['stdnum'].'님 가입 되셨습니다.<p/>';                                   // id님 안녕하세요.
 }else{                                                                                //아니면
  echo 'fail to insert sql' .$conn->error;                                                         //fail to insert sql로 표시
 }

mysqli_close($conn);

?>
