
<?php
  session_start();
  if(empty($_SESSION['stdnum'])){
?>
<li><a href="signin.php">로그인</a></li>
<li><a href="signup.php">회원가입</a></li>
<?php
  }else{
?>
<li><a href="logout.php">로그아웃</a></li>
<li><a href="#">마이페이지</a></li>
<?php
  }
?>