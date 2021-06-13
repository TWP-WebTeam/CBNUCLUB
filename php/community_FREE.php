<?php
include "../include/session.php";
include "../include/dbConnect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="community_FREE.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
      <title>CBNU CLUB</title>
      <script src="../js/community_FREE.js"></script>
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"></script>
  </head>
  <body>
  <div class="header">
            <div class="Logo">
                <a
                    href="../php/home.php"
                    style="text-decoration: none; color: black; position: fixed; padding-left: 20px; padding-top: 15px;">
                    CBNUCLUB</a>
            </div>
            <div class="menu-bar">
                <ul class="main-menu">
                    <li class="sub-menu">
                        <a href="" style="text-decoration: none; color: black;">
                            동아리 현황</a>
                        <ul class="sub-menu2">
                            <li>
                                <a href="../html/clubpage_status.html" class="sub-list" style="padding-top: 10px;">중앙동아리</a>
                            </li>
                            <li >
                                <a href="../html/clubpage1.html" class="sub-list" id="list1"
                                    onmouseover="Change_img();"
                                    onmouseout="Change_text();">전자정보대학</a>
                            </li>
                            <li>
                                <a href="../html/clubpage2.html" class="sub-list">공과대학</a>
                            </li>
                            <li>
                                <a href="../html/clubpage3.html" class="sub-list">생활과학대학</a>
                            </li>
                            <li>
                                <a href="../html/clubpage4.html" class="sub-list">수의과대학</a>
                            </li>

                            <li>
                                <a href="../html/clubpage5.html" class="sub-list">의과대학</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="" style="text-decoration: none; color: black;">동아리 신청하기</a>
                        <ul class="sub-menu2">
                            <li>
                                <a href="../html/register.html" class="sub-list">등록하기</a>
                            </li>
                            <li>
                                <a href="../html/apply.html" class="sub-list">신청하기</a>
                            </li> 
                            <li>
                                <a href="" class="sub-list">탈퇴 신청하기</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu" style="margin-top: 3px;">
                        <a href="../php/community_NOTI.php" style="text-decoration: none; color: black;">커뮤니티</a>

                        <ul class="sub-menu2">
                            <li>
                                <a href="../php/community_NOTI.php" class="sub-list">공지사항</a>
                            </li>
                            <li>
                                <a href="../php/community_FREE.php" class="sub-list">자유게시판</a>
                            </li>
                            <li>
                                <a href="../php/community_QNA.php" class="sub-list">QnA</a>
                            </li>
                            <li>
                                <a href="../php/community_FAQ.php" class="sub-list">FAQ</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="" style="text-decoration: none; color: black;">마이 페이지</a>

                        <ul class="sub-menu2">
                            <li>
                                <a href="../php/profile.php" class="sub-list">나의 프로필</a>
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
                <a href="logout.php" id="signout">로그아웃</a>
                <?php
                 }
                ?>
                </div>
            </div>
        </div>
        <div class="second">
          <div class="top">
            <span class="glyphicon glyphicon-home"></span>
            <span class="glyphicon glyphicon-play"></span>
            <label>커뮤니티</label>
            <span class="glyphicon glyphicon-play"></span>
            <label style="">자유게시판</label><br>

            <p style="font-size:30px;">자유게시판</p> <br>
          </div>

          <div class="middle">
            <hr>
            <div class="box">
              <div class="no" style=" position:static; float:left;">
                <h2>동아리 추천해주실분!</h2>
                <p style="font-size:15px;">신입생이고 일주일에 한번정도 참여할 수 있는 동아리 추천해주세요!!</p>  <br>
                <span style="font-size:18px;" class="glyphicon glyphicon-eye-open"></span>
                <label style="padding: 10px; color:grey; font-size:18px;">30</label>
                <span style="padding-right: 10px; font-size:18px; color:grey;" class="glyphicon glyphicon-thumbs-up" onclick="fun_up(this,0)" onmouseover="OnMouseIn_up(this,0)" onmouseout="OnMouseOut_up(this,0)"></span>
                <span style="padding-right: 10px; font-size:18px; color:grey;" class="glyphicon glyphicon-thumbs-down" onclick="fun_down(this,0)" onmouseover="OnMouseIn_down(this,0)" onmouseout="OnMouseOut_down(this,0)"></span>
                <span style="padding-right: 10px; font-size:18px; color:grey;" class="glyphicon glyphicon-heart" onclick="fun_heart(this,0)" onmouseover="OnMouseIn_heart(this,0)" onmouseout="OnMouseOut_heart(this,0)"></span>
              </div>
              <div class="im" style=" position:static; float:right; margin-right:100px; margin-bottom:20px;">
                <img src="../img/free/1.png" alt="1" height="100px" width="100px;">
              </div>
              <hr style="clear:both;">
            </div>

            <div class="box">
              <div class="no" style=" position:static; float:left;">
                <h2>학교주변 맛집 찾음</h2>
                <p style="font-size:15px;">몽키만두 존맛탱! 같이갈사람~~</p>  <br>
                <span style="font-size:18px;" class="glyphicon glyphicon-eye-open"></span>
                <label style="padding: 10px; color:grey; font-size:18px;">12</label>
                <span style="padding-right: 10px; font-size:18px; color:grey;" class="glyphicon glyphicon-thumbs-up" onclick="fun_up(this,1)" onmouseover="OnMouseIn_up(this,1)" onmouseout="OnMouseOut_up(this,1)"></span>
                <span style="padding-right: 10px; font-size:18px; color:grey;" class="glyphicon glyphicon-thumbs-down" onclick="fun_down(this,1)" onmouseover="OnMouseIn_down(this,1)" onmouseout="OnMouseOut_down(this,1)"></span>
                <span style="padding-right: 10px; font-size:18px; color:grey;" class="glyphicon glyphicon-heart" onclick="fun_heart(this,1)" onmouseover="OnMouseIn_heart(this,1)" onmouseout="OnMouseOut_heart(this,1)"></span>
              </div>
              <div class="im" style=" position:static; float:right; margin-right:100px;  margin-bottom:20px;">
                <img src="../img/free/2.png" alt="1" height="100px" width="100px;">
              </div>
              <hr style="clear:both;">
            </div>

            <div class="box">
              <div class="no" style=" position:static; float:left;">
                <h2>오늘 솔못 산책하다가 지갑주웠어요!</h2>
                <p style="font-size:15px;">쪽지로 연락주세요! 사진첨부합니다!</p>  <br>
                <span style="font-size:18px;" class="glyphicon glyphicon-eye-open"></span>
                <label style="padding: 10px; color:grey; font-size:18px;">68</label>
                <span style="padding-right: 10px; font-size:18px; color:grey;" class="glyphicon glyphicon-thumbs-up" onclick="fun_up(this,2)" onmouseover="OnMouseIn_up(this,2)" onmouseout="OnMouseOut_up(this,2)"></span>
                <span style="padding-right: 10px; font-size:18px; color:grey;" class="glyphicon glyphicon-thumbs-down" onclick="fun_down(this,2)" onmouseover="OnMouseIn_down(this,2)" onmouseout="OnMouseOut_down(this,2)"></span>
                <span style="padding-right: 10px; font-size:18px; color:grey;" class="glyphicon glyphicon-heart" onclick="fun_heart(this,2)" onmouseover="OnMouseIn_heart(this,2)" onmouseout="OnMouseOut_heart(this,2)"></span>
              </div>
              <div class="im" style=" position:static; float:right; margin-right:100px; margin-bottom:20px;">
                <img src="../img/free/3.jpg" alt="1" height="100px" width="100px;">
              </div>
              <hr style="clear:both;">
            </div>

            <div class="box">
              <div class="no" style=" position:static; float:left;">
                <h2>연탄봉사 동아리 질문이요!</h2>
                <p style="font-size:15px;">일년에 몇번정도 가나요?? 언제가는지도 알고 싶어요!.....</p>  <br>
                <span style="font-size:18px;" class="glyphicon glyphicon-eye-open"></span>
                <label style="padding: 10px; color:grey; font-size:18px;">25</label>
                <span style="padding-right: 10px; font-size:18px; color:grey;" class="glyphicon glyphicon-thumbs-up" onclick="fun_up(this,3)" onmouseover="OnMouseIn_up(this,3)" onmouseout="OnMouseOut_up(this,3)"></span>
                <span style="padding-right: 10px; font-size:18px; color:grey;" class="glyphicon glyphicon-thumbs-down" onclick="fun_down(this,3)" onmouseover="OnMouseIn_down(this,3)" onmouseout="OnMouseOut_down(this,3)"></span>
                <span style="padding-right: 10px; font-size:18px; color:grey;" class="glyphicon glyphicon-heart" onclick="fun_heart(this,3)" onmouseover="OnMouseIn_heart(this,3)" onmouseout="OnMouseOut_heart(this,3)"></span>
              </div>
              <div class="im" style=" position:static; float:right; margin-right:100px; margin-bottom:20px;">
                <img src="../img/free/4.png" alt="1" height="100px" width="100px;">
              </div>
              <hr style="clear:both;">
            </div>

            <div class="box">
              <div class="no" style=" position:static; float:left;">
                <h2>영어동아리!</h2>
                <p style="font-size:15px;">영어 스터디 동아리 만들려고 하는데 혹시 희망하는 분 계신가요??</p>  <br>
                <span style="font-size:18px;" class="glyphicon glyphicon-eye-open"></span>
                <label style="padding: 10px; color:grey; font-size:18px;">6</label>
                <span style="padding-right: 10px; font-size:18px; color:grey;" class="glyphicon glyphicon-thumbs-up" onclick="fun_up(this,4)" onmouseover="OnMouseIn_up(this,4)" onmouseout="OnMouseOut_up(this,4)"></span>
                <span style="padding-right: 10px; font-size:18px; color:grey;" class="glyphicon glyphicon-thumbs-down" onclick="fun_down(this,4)" onmouseover="OnMouseIn_down(this,4)" onmouseout="OnMouseOut_down(this,4)"></span>
                <span style="padding-right: 10px; font-size:18px; color:grey;" class="glyphicon glyphicon-heart" onclick="fun_heart(this,4)" onmouseover="OnMouseIn_heart(this,4)" onmouseout="OnMouseOut_heart(this,4)"></span>
              </div>
              <div class="im" style=" position:static; float:right; margin-right:100px; margin-bottom:20px;">
                <img src="../img/free/1.png" alt="1" height="100px" width="100px;">
              </div>
              <hr style="clear:both;">
            </div>
          </div>

          <div class="search">
            <button id="go_write" onmouseover="OnMouseIn_button(this)" onmouseout="OnMouseOut_button(this)" type="button" name="button"><a href="">작성하기</a></button> <br><br>
           <input style="height:35px; width:280px;  border : 1px solid rgb(206, 206, 206); border-radius: 5px 5px 5px 5px;" type="text" name="">
           <span onmouseover="OnMouseIn_button(this)" onmouseout="OnMouseOut_button(this)" style="background-color:black; color:white; padding:10px; border-radius: 5px 5px 5px 5px;" class="glyphicon glyphicon-search"></span>
          </div>

          <div class="bottom">
            <span onmouseover="OnMouseIn_button(this)" onmouseout="OnMouseOut_button(this)" style="background-color:black; color:white; padding:5px; border-radius: 100px 100px 100px 100px;" class="glyphicon glyphicon-chevron-left"></span>
            <button onmouseover="OnMouseIn_button(this)" onmouseout="OnMouseOut_button(this)" id="write" type="button" name="button"><a href="">1</a></button>
            <button onmouseover="OnMouseIn_button(this)" onmouseout="OnMouseOut_button(this)" id="write" type="button" name="button"><a href="">2</a></button>
            <button onmouseover="OnMouseIn_button(this)" onmouseout="OnMouseOut_button(this)" id="write" type="button" name="button"><a href="">3</a></button>
            <span onmouseover="OnMouseIn_button(this)" onmouseout="OnMouseOut_button(this)" style="background-color:black; color:white; padding:5px; border-radius: 100px 100px 100px 100px;" class="glyphicon glyphicon-chevron-right"></span>
          </div>
        </div>

        <section id="article">

        </section>

            <footer class="container-fluid" style="position: static; margin-top: 50px;background-color: rgba(255, 255, 255, 0.6)">
            <p> --------
            </p>
            <!-- <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d800.526906704922!2d127.45694896144974!3d36.62379589381584!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sko!2skr!4v1621859975902!5m2!1sko!2skr"
            width="200" height="200" style="border:0;" allowfullscreen=""
            loading="lazy"></iframe> -->
        </footer>
    </body>
</html>
