<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/clubpage.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
        <title>CBNU CLUB</title>
        <script src="../js/profile.js"></script>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">
            <div class="Logo">
                <a
                    href="./home.php"
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
                                <a href="./clubpage1.php" class="sub-list" style="padding-top: 10px;">중앙동아리</a>
                            </li>
                            <li >
                                <a href="./clubpage1.html" class="sub-list" id="list1"
                                    onmouseover="Change_img();"
                                    onmouseout="Change_text();">전자정보대학</a>
                            </li>
                            <li>
                                <a href="./clubpage2.php" class="sub-list">공과대학</a>
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
                                <a href="./register.php" class="sub-list">등록하기</a>
                            </li>
                            <li>
                                <a href="./apply.php" class="sub-list">신청하기</a>
                            </li>
                            <li>
                                <a href="" class="sub-list">탈퇴 신청하기</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu" style="margin-top: 3px;">
                        <a href="" style="text-decoration: none; color: black;">커뮤니티</a>

                        <ul class="sub-menu2">
                            <li>
                                <a href="" class="sub-list">공지사항</a>
                            </li>
                            <li>
                                <a href="" class="sub-list">자유게시판</a>
                            </li>
                            <li>
                                <a href="" class="sub-list">QnA</a>
                            </li>
                            <li>
                                <a href="" class="sub-list">FAQ</a>
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
                    <a href="signin.php" id="signin" onclick="Login()">로그인</a>
                    <a href="signup.php" id="signup" onclick="Signup()">회원가입</a>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="community-list">
                <ul class="club-list">
                    <li><a href="./clubpage.php" class="list 1">중앙동아리</a></li>
                    <li><a href="./clubpage1.php" class="list 2">전자정보대학</a></li>
                    <li><a href="./clubpage2.php" class="list 3">공과대학</a></li>
                    <li><a href="./clubpage3.php" class="list 4">생활과학대학</a></li>
                    <li><a href="./clubpage4.php" class="list 5">수의과대학</a></li>
                    <li><a href="" class="list 6">약학대학</a></li>
                    <li><a href="" class="list 7">의과대학</a></li>
                    <li><a href="" class="list 8">사범대학</a></li>
                </ul>
            </div>
            <div id="dp" >
                <a href="#ct" style="text-decoraion: none;">중앙동아리</a>
            </div>

            <div class="community-content">
            <h1 id = "ct">중앙동아리</h1>
            <div>
            <h3>페가수스(승마)</h3>
            <div>  <img src="../img/central/pega.jpg"  alt="club"></div>
              <div class="promotion">
                승마를 통한 심신수련 및 호연지기
                <br>
                <input type="button" class="join" value="가입하기"></input>
              </div>
            </div>
            <hr>

            <div>
            <h3>홀리보이스</h3>
            <div>  <img src="../img/central/holly.jpg"  alt="club"></div>
              <div class="promotion">
              음악(합창)을 통한 정서함양
                <br>
                <input type="button" class="join" value="가입하기"></input>
              </div>
            </div>
            <hr>
            <div>
            <h3>Roll Dice</h3>
            <div>  <img src="../img/central/rolldice.jpg"  alt="club"></div>
              <div class="promotion">
              보드게임을 통한 건전문화 조성
                <br>
                <input type="button" class="join" value="가입하기"></input>
              </div>
            </div><hr>
            <div>
            <h3>아르페지오</h3>
            <div>  <img src="../img/central/arpeggio.jpg"  alt="club"></div>
              <div class="promotion">
              통기타 음악을 통한 정서함양
                <br>
                <input type="button" class="join" value="가입하기"></input>
              </div>
            </div><hr>
            <div>
            <h3>블랙홀</h3>
            <div>  <img src="../img/central/black.jpg"  alt="club"></div>
              <div class="promotion">
              락 음악을 통한 정서함양
                <br>
                <input type="button" class="join" value="가입하기"></input>
              </div>
            </div><hr>
            <div>
            <h3>늘해랑</h3>
            <div>  <img src="../img/central/neul.jpg"  alt="club"></div>
              <div class="promotion">
              액션 치어리딩을 통한 단결심 고취<br>
                <input type="button" class="join" value="가입하기"></input>
              </div>
            </div><hr>
            <div>
            <h3>한별(천문회)</h3>
            <div>  <img src="../img/central/han.jpg"  alt="club"></div>
              <div class="promotion">
              별관 측 및 천문 연구
                <input type="button" class="join" value="가입하기"></input>
              </div>
            </div>
            <hr>
            <div>
            <h3>위더스</h3>
            <div>  <img src="../img/central/wed.jpg"  alt="club"></div>
              <div class="promotion">
              집수리 봉사를 통한 희망 나눔
                <input type="button" class="join" value="가입하기"></input>
              </div>
            </div>
            <hr>
            <div>
            <h3>레오(LEO)</h3>
            <div>  <img src="../img/central/leo.jpg"  alt="club"></div>
              <div class="promotion">
              봉사활동을 통한 리더십 향상
                <br>
                <input type="button" class="join" value="가입하기"></input>
              </div>
            </div>
      </div>

        <footer class="container-fluid"></footer>
    </body>
</html>