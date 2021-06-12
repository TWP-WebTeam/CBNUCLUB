<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/register.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
        <title>CBNU CLUB</title>
        <!-- <script src="../js/profile.js"></script>  -->
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">
            <div class="Logo">
                <a href="home.php"
                    style="text-decoration: none; font-size: 20px; color: black; position: fixed; left: 13%; padding-top: 10px;">
                    CBNUCLUB</a>
            </div>
            <div class="menu-bar">
                <ul class="main-menu">
                    <li class="sub-menu">
                        <a href="./clubpage.php" style="text-decoration: none; color: black;">
                            동아리 현황</a>
                        <ul class="sub-menu2">
                            <li>
                                <a href="" class="sub-list" style="padding-top: 10px;">중앙동아리</a>
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
                                <a href="./profile.html" class="sub-list">나의 프로필</a>
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
                    <a href="signin.html" id="signin" onclick="Login()">로그인</a>
                    <a href="signup.html" id="signup" onclick="Signup()">회원가입</a>
                </div>
            </div>
        </div>
        <!-- action="home.php" -->
        <section id="article">
            <div class="form">
                <form class="form-horizontal"  method="POST" id="form">
                    <h4 class="bold title" style="padding-left: 57px;">📌동아리 등록하기</h4>
                    <div class="form-group">
                      <label class="control-label col-sm-4">동아리명 :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="clubname" name="clubname">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">동아리 대표자명 :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="author" id="author">
                      </div>
                    </div>
                    <div class="form-group">
                        <label>동아리 소속 :</label>
                            <select name="clubgroup" id="clubgroup">
                                <option>-----</option>
                                <option value="중앙동아리">중앙동아리</option>
                                <option value="전자정보대학">전자정보대학</option>
                                <option value="공과대학">공과대학</option>
                                <option value="생활과학대학">생활과학대학</option>
                                <option value="수의과대학">수의과대학</option>
                                <option value="약학대학">약학대학</option>
                                <option value="의과대학">의과대학</option>
                                <option value="사범대학">사범대학</option>
                            </select><br>
                    </div>                  
                    <div class="form-group">
                        <label>동아리 회원 수 :</label>
                            <select name="total_member" id="total_member">
                                <option>-----</option>
                                <option value="1~20명">1~20명</option>
                                <option value="21~50명">21~50명</option>
                                <option value="51~100명">51~100명</option>
                            </select><br>
                    </div>
                    <div class="form-group">
                        <label for="">동아리 소개 :</label><br>
                        <div class="col-sm-8">
                            <textarea name="desc" id="desc" cols="35" rows="10" style="resize: none;"></textarea><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">동아리방 위치 :</label>
                        <div class="col-sm-8">
                            <input type="text" id="loca" name="location" placeholder="ex) S4-1 / 106호"><br>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10"><br>
                        <a href="home.php"
                        style="background-color: rgb(131, 201, 252); border-radius: 5px 5px;"
                        onclick="push_list();">등록하기</a>
                      </div>
                    </div>
                  </form>
            </div>
            

        </section>

        <footer class="container-fluid"></footer>
        <script language = "javascript">
            function struct_club(){
                var clubname = '';
                var author = '';
                var clubgroup = '';
                var total_member = '';
                var desc = '';
                var loca = '';

            }

            function push_list(){
                var info = new struct_club();
                info.clubname = document.getElementById('clubname').value;
                // info.author = document.getElementById('author').value;
                info.clubgroup = document.getElementById('clubgroup').value;
                // info.total_member = document.getElementById('total_member').value;
                // info.desc = document.getElementById('desc').value;
                // info.loca = document.getElementById('loca').value;
                // document.getElementById('form').action="location.href='home.php'";
                console.log(info.clubname);
                location.href="home.php?" + info.clubname + ":" + info.clubgroup;
            }

        </script>
    </body>
</html>