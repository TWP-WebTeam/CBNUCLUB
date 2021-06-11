  <?php
 include "./include/session.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/home.css">
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
        </div>
        <article>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../img/001.png" id="s1" alt="chungbuk" width="88%" height="550px"
                style="border: 1px solid rgb(119, 119, 119); border-radius: 3px; box-shadow: 0px 5px 6px rgb(143, 143, 143);">
              </div>
              <div class="carousel-item">
                <img src="../img/003.png" id="s1" alt="chungbuk" width="88%" height="550px"
                style="border: 1px solid rgb(119, 119, 119); border-radius: 3px; box-shadow: 0 5px 6px rgb(92, 92, 92);">
              </div>
              <div class="carousel-item">
                <img src="../img/002.png" id="s1" alt="chungbuk" width="88%" height="550px"
                style="border: 1px solid rgb(119, 119, 119); border-radius: 3px; box-shadow: 0 5px 6px rgb(92, 92, 92);">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

        <section class="content" style="position: absolute; left: 198px; top: 615px;">
            <div class="container"
                style="background-color: white; width: 365px; height: 330px; border-radius: 3px; border: 1px solid rgb(119, 119, 119);">
                <h5 style="padding: 7px; padding-bottom: 0px;">📌모집 중인 동아리</h5>
                <hr style="position: relative; width: 350px; left: -8px; margin: 1%;">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>동아리명</th>
                            <th>소속부서</th>
                            <th>모집기간</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 48px;">
                            <td><a href="" class="table-content"><div class="article-title">Nest.net</div></a></td>
                            <td><a href="" class="table-content"><div class="department">소프트웨어학과</div></a></td>
                            <td><a href="" class="table-content"><div class="due-date">2021.06.30</div></a></td>
                        </tr>
                        <tr style="height: 48px;">
                            <td><a href="" class="table-content"><div class="article-title">PDA</div></a></td>
                            <td><a href="" class="table-content"><div class="department">소프트웨어학과</div></a></td>
                            <td><a href="" class="table-content"><div class="due-date">2021.07.02</div></a></td>
                        </tr>
                        <tr style="height: 48px;">
                            <td><a href="" class="table-content"><div class="article-title">Emsys</div></a></td>
                            <td><a href="" class="table-content"><div class="department">소프트웨어학과</div></a></td>
                            <td><a href="" class="table-content"><div class="due-date">2021.08.29</div></a></td>
                        </tr>
                        <tr style="height: 48px;">
                            <td><a href="" class="table-content"><div class="article-title">CGAC</div></a></td>
                            <td><a href="" class="table-content"><div class="department">소프트웨어학과</div></a></td>
                            <td><a href="" class="table-content"><div class="due-date">2021.06.16</div></a></td>
                        </tr>
                        <tr style="height: 48px;"s>
                            <td><a href="" class="table-content"><div class="article-title">샘마루</div></a></td>
                            <td><a href="" class="table-content"><div class="department">소프트웨어학과</div></a></td>
                            <td><a href="" class="table-content"><div class="due-date">2021.09.02</div></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=""
                style="position: absolute; top: 0px; left: 379px; background-color: white; width: 365px; height: 330px; border-radius: 3px; border: 1px solid rgb(119, 119, 119);">
                <h5 style="padding: 7px; padding-bottom: 0px;">📌공지사항</h5>
                <hr style="position: relative; width: 350px; left: 2px; margin: 1%;">
                <ul class="list-group">
                    <li><a href="" class="list-group-item"><div class="article-title">제목</div><div class="created_at">게시날짜</div></a></li>
                    <li><a href="" class="list-group-item"><div class="article-title">제목</div><div class="created_at">게시날짜</div></a></li>
                    <li><a href="" class="list-group-item"><div class="article-title">제목</div><div class="created_at">게시날짜</div></a></li>
                    <li><a href="" class="list-group-item"><div class="article-title">제목</div><div class="created_at">게시날짜</div></a></li>
                    <li><a href="" class="list-group-item"><div class="article-title">제목</div><div class="created_at">게시날짜</div></a></li>
                </ul>
            </div>
            <div class=""
                style="position: absolute; top: 0px; left: 759px; background-color: white; width: 365px; height: 330px; border-radius: 3px; border: 1px solid rgb(119, 119, 119);">
                <h5 style="padding: 7px; padding-bottom: 0px;">📌자유게시판</h5>
                <hr style="position: relative; width: 350px; left: 2px; margin: 1%;">
                <ul class="list-group">
                    <li><a href="" class="list-group-item"><div class="article-title">제목</div><div class="created_at">게시날짜</div></a></li>
                    <li><a href="" class="list-group-item"><div class="article-title">제목</div><div class="created_at">게시날짜</div></a></li>
                    <li><a href="" class="list-group-item"><div class="article-title">제목</div><div class="created_at">게시날짜</div></a></li>
                    <li><a href="" class="list-group-item"><div class="article-title">제목</div><div class="created_at">게시날짜</div></a></li>
                    <li><a href="" class="list-group-item"><div class="article-title">제목</div><div class="created_at">게시날짜</div></a></li>
                </ul>
            </div>

        </section>


        <!-- 구글 맵 넣기 !! -->

        <footer class="container-fluid" style="position: absolute; top: 1000px; background-color: rgba(255, 255, 255, 0.6)">
            <p> --------
            </p>
            <!-- <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d800.526906704922!2d127.45694896144974!3d36.62379589381584!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sko!2skr!4v1621859975902!5m2!1sko!2skr"
            width="200" height="200" style="border:0;" allowfullscreen=""
            loading="lazy"></iframe> -->
        </footer>
        </article>
    </body>
</html>
