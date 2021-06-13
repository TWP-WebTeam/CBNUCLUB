<?php
include "../include/session.php";
include "../include/dbConnect.php";


 if(empty($_SESSION['ses_userid'])){
            echo ("<script>alert('로그인이 필요합니다.');
                    location.replace('../php/signin.php');</script>");
    }else{?>

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
                <a
                    href="../php/home.php"
                    style="text-decoration: none; color: black; position: fixed; padding-left: 20px; padding-top: 15px;">
                    CBNUCLUB</a>
            </div>
            <div class="menu-bar">
                <ul class="main-menu">
                    <li class="sub-menu">
                        <a href="../php/clubpage_status.php" style="text-decoration: none; color: black;">
                            동아리 현황</a>
                        <ul class="sub-menu2">
                            <li>
                                <a href="../php/clubpage_status.php" class="sub-list" style="padding-top: 10px;">중앙동아리</a>
                            </li>
                            <li >
                                <a href="../php/clubpage1.php" class="sub-list" id="list1"
                                    onmouseover="Change_img();"
                                    onmouseout="Change_text();">전자정보대학</a>
                            </li>
                            <li>
                                <a href="../php/clubpage2.php" class="sub-list">공과대학</a>
                            </li>
                            <li>
                                <a href="../php/clubpage3.php" class="sub-list">생활과학대학</a>
                            </li>
                            <li>
                                <a href="../php/clubpage4.php" class="sub-list">수의과대학</a>
                            </li>

                            <li>
                                <a href="../php/clubpage5.php" class="sub-list">의과대학</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="" style="text-decoration: none; color: black;">동아리 신청하기</a>
                        <ul class="sub-menu2">
                            <li>
                                <a href="../php/registerform1.php" class="sub-list">등록하기</a>
                            </li>
                            <li>
                                <a href="../php/apply.php" class="sub-list">신청하기</a>
                            </li> 
                            <li>
                                <a href="../php/out.php" class="sub-list">탈퇴 신청하기</a>
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
                        <a href="../php/profile.php" style="text-decoration: none; color: black;">마이 페이지</a>

                        <ul class="sub-menu2">
                            <li>
                                <a href="" class="sub-list"></a>
                            </li>
                            <li>
                                <a href="" class="sub-list"></a>
                            </li>
                            <li>
                                <a href="" class="sub-list"></a>
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

        <section id="article">
            <div class="form">
                <form class="form-horizontal" action="../register.php" method="POST">
                    <h4 class="bold title" style="padding-left: 57px;">📌동아리 등록하기</h4>
                    <div class="form-group">
                      <label class="control-label col-sm-4">동아리명 :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="cname" name="clubname">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4">동아리 대표자명 :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="author">
                      </div>
                    </div>
                    <div class="form-group">
                        <label>동아리 회원 수 :</label>
                            <select name="total_member">
                                <option>-----</option>
                                <option value="1~20명">1~20명</option>
                                <option value="21~50명">21~50명</option>
                                <option value="51~100명">51~100명</option>
                            </select><br>
                    </div>
                    <div class="form-group">
                        <label for="">동아리 소개 :</label><br>
                        <div class="col-sm-8">
                            <textarea name="" id="" cols="35" rows="10" style="resize: none;"></textarea><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">동아리방 위치 :</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="ex) S4-1 / 106호"><br>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10"><br>
                        <input type="submit" name="" id="" value="등록하기"
                        style="background-color: rgb(131, 201, 252); border-radius: 5px 5px;"
                        onclick="push_list();">
                      </div>
                    </div>
                  </form>
            </div>


        </section>

        <footer class="container-fluid"></footer>
        <script language = "javascript">
            var list = ['0'];
            var i = 1;
            var ele;

            function insert_list(){
                ele =document.getElementById("cname").value;
                console.log(ele);
            }

            function push_list(){
                // list.push(ele);
                // i++;
                // console.log(list);
                // window.location.href = "profile.html?"+list+":"+ele;
            }

        </script>
    </body>
</html>
<?php } ?>