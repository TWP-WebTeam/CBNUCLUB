<?php
include "./include/session.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="community_QNA_write.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
      <title>CBNU CLUB</title>
      <script src="../js/home.js"></script>
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"></script>
  </head>
  <body>
      <div class="header">
          <div class="Logo">
              <a href="home.php"
                  style="text-decoration: none; font-size: 20px; color: black; position: fixed; left: 13.2%; padding-top: 10px;">
                  CBNUCLUB</a>
          </div>
          <div class="menu-bar">
              <ul class="main-menu">
                  <li class="sub-menu">
                      <a href="./clubpage1.php" style="text-decoration: none; color: black;">
                          동아리 현황</a>
                      <ul class="sub-menu2">
                          <li>
                              <a href="./club_status1.php" class="sub-list" style="padding-top: 10px;">중앙동아리</a>
                          </li>
                          <li >
                              <a href="" class="sub-list">전자정보대학</a>
                          </li>
                          <li>
                              <a href="" class="sub-list">공과대학</a>
                          </li>
                          <li>
                              <a href="" class="sub-list">생활과학대학</a>
                          </li>
                          <li>
                              <a href="" class="sub-list">수의과대학</a>
                          </li>
                          <li>
                              <a href="" class="sub-list">약학대학</a>
                          </li>
                          <li>
                              <a href="" class="sub-list">의과대학</a>
                          </li>
                          <li>
                              <a href="" class="sub-list">사범대학</a>
                          </li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="" style="text-decoration: none; color: black;">동아리 신청하기</a>
                      <ul class="sub-menu2">
                          <li>
                              <a href="registerform.php" class="sub-list">등록하기</a>
                          </li>
                          <li>
                              <a href="./club_status.html" class="sub-list">신청하기</a>
                          </li>
                          <li>
                              <a href="" class="sub-list">탈퇴 신청하기</a>
                          </li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="" style="text-decoration: none; color: black;">커뮤니티</a>

                      <ul class="sub-menu2">
                          <li>
                              <a href="community_NOTI.php" class="sub-list">공지사항</a>
                          </li>
                          <li>
                              <a href="community_FREE.php" class="sub-list">자유게시판</a>
                          </li>
                          <li>
                              <a href="community_QNA.php" class="sub-list">QnA</a>
                          </li>
                          <li>
                              <a href="community_FAQ.php" class="sub-list">FAQ</a>
                          </li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="" style="text-decoration: none; color: black;">마이 페이지</a>

                      <ul class="sub-menu2">
                          <li>
                              <a href="./profile.php" class="sub-list">나의 프로필</a>
                          </li>
                          <li>
                              <a href="" class="sub-list">신청목록</a>
                          </li>
                          <li>
                              <a href="" class="sub-list">현재 가입된 동아리</a>
                          </li>
                      </ul>
                  </li>
                  <div id="indicator"></div>
              </ul>
              <span class="menu-toggle-btn">
                  <span></span>
                  <span></span>
                  <span></span>
              </span>
              <div class="gnb">
              <?php
                   if(empty($_SESSION['ses_userid'])){
                  ?>
              <a href="signin.php" id="signin" onclick="Login()">로그인</a>
              <a href="signup.php" id="signup" onclick="Signup()">회원가입</a>
              <?php
              }else{
              ?>
              <a href="./logout.php" id="signout">로그아웃</a>
              <?php
               }
              ?>
              </div>
          </div>



    <div class="second">
      <div class="top">
        <span class="glyphicon glyphicon-home"></span>
        <span class="glyphicon glyphicon-play"></span>
        <label>커뮤니티</label>
        <span class="glyphicon glyphicon-play"></span>
        <label style="">QnA</label><br>

        <p style="font-size:30px;">작성하기</p>
      </div>

      <div class="middle">
        <div class="subtitle">
          <form class="write" action="../php/QNA_write.php" method="post">
            <label> 제목</label>
            <input type="text" id = "w_title"name="w_title"> <br>

            <label> 작성자</label>
            <input type="text" id = "name" name="name"> <br>

            <label> 내용</label>
            <input type="text" id = "content" name="content"> <br>

            <input id="write" type="submit">
          </form>
        </div>

      </div>


    </div>


        <section id="article">

        </section>

        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d800.526906704922!2d127.45694896144974!3d36.62379589381584!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sko!2skr!4v1621859975902!5m2!1sko!2skr" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
        <footer class="container-fluid" style="position: absolute; top: 1000px; background-color: rgba(255, 255, 255, 0.6)">
            <p> --------</p>
            <!-- <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d800.526906704922!2d127.45694896144974!3d36.62379589381584!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sko!2skr!4v1621859975902!5m2!1sko!2skr"
            width="200" height="200" style="border:0;" allowfullscreen=""
            loading="lazy"></iframe> -->
        </footer>
    </body>
</html>
