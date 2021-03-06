
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
        <link rel="stylesheet" href="../css/clubpage3.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
        <title>CBNU CLUB</title>
        <!-- <script src="../js/profile.js"></script> -->
        <script src="../js/clubpage3.js"></script>
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

        <div class="content">
            <div class="community-list">
                <ul class="club-list">
                <li><a href="../php/clubpage_status.php" class="list 1">중앙동아리</a></li>
                    <li><a href="../php/clubpage1.php" class="list 2">전자정보대학</a></li>
                    <li><a href="../php/clubpage2.php" class="list 3">공과대학</a></li>
                    <li><a href="../php/clubpage3.php" class="list 4">생활과학대학</a></li>
                    <li><a href="../php/clubpage4.php" class="list 5">수의과대학</a></li>
                    <li><a href="../php/clubpage5.php" class="list 7">의과대학</a></li>
                </ul>
            </div>

            <div id="dp">
                <ul class="club-list">
                    <li><a href="#house" class="list 1">주거환경학과</a></li>
                    <li><a href="#child"class="list 2">아동복지학과</a></li>
                </ul>
            </div>

            <div id="dp1">
                <p style="font-size: 25px; padding-left: 20px;">찜 목록</p>
                <ul>
                    <li><p id ="cl1"></p><a href="" class="list 1"></a></p></li>
                    <hr>
                    <li><p id ="cl2"></p><a href="" class="list 2"></a></p></li>
                    <hr>
                    <li><p id ="cl3"></p><a href="" class="list 3"></a></p></li>
                    <hr>
                </ul>
            </div>

            <div class="community-content">
               
            <h1 id = "house">주거환경학과</h1>
            <div class="divbox">
            <div id = "content">
            <h3>한마루(HanMARU)</h3><div><img src="../img/heart0.png" id="heart1" class="heart" onclick ="changeheart('heart1')" ></div>
            <div>  <img class="clubimg"  id = "img1" src="../img/lifescience/img1.jpg" alt="club">
                <div id="pro1" onclick="Change_img(1);">
                    <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                </div>
            </div>
                <input type="button" class="join" value="가입하기" onClick="submit()"></input>
                <div class="promotion">
                  <span id="promo1">
                동아리소개<br>
                “한마루”는 뛰어난 인재, 산 정상을 뜻하는 순우리말로 주택분야의 전문가로 거듭나기 위한 발판을 마련하려는 취지로 설립하였다.
                주택 관련업계의 탐방과 특강을 통해 진로를 모색하고, 졸업 후 다양한 주택관련 업체에 진출해 있는 선배들과의 만남을 통해 수업만으로는 접하기 어려운 생생한 현장을 체험하며, 회원들 간의 다양한 정보교류, 모의면접 스터디를 통해 취업에 대비한 역량을 키우며, 상호협조와 선의의 경쟁을 유도하는데 목적이 있다.
            </span>
            <br>
            </div>
        </div>
            <hr>

            <div id ="content">
            <h3>그린스타터(Green-Sterter)</h3><div><img src="../img/heart0.png" id="heart2" class="heart" onclick ="changeheart('heart2')" ></div>
            <div>  <img class="clubimg" id="img2" src="../img/lifescience/img2.jpg"  alt="club">
            <div id="pro2" onclick="Change_img(2);">
                <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
            </div>
        </div>
        <input type="button" class="join" onClick="submit()" value="가입하기"></input>
          <div class="promotion">
            <span id="promo2">
                동아리소개<br>
대학캠퍼스는 국내 에너지 소비량 상위권 건물로써 그린캠퍼스화는 지속가능한 사회를 위한 중요한 단계에 있다. 충북대학교가 충청북도를 대표하는 국립대학교인 만큼 그린캠퍼스로서의 환경 및 사회적 책임을 가져야 하나, 현재의 충북대학교는 그린캠퍼스를 위한 활동이 제대로 갖추어지지 않고 있는 실정이다.
이에 우리는 충북대학교 그린캠퍼스의 스타터가 되고자 동아리명을 "그린스타터(Green-Starter)"라 하고 충북대학교의 그린캠퍼스화를 위해 다양한 활동을 하며 노력하고 있다.
  </span> <br>
        </div>
        </div>
    </div>


            <h1 id="child">아동복지학과</h1>
            <div class="divbox">
                <div id="content">
            <h3>G.N. (Y.E.S)</h3>  <div><img src="../img/heart0.png" id="heart3" class="heart" onclick ="changeheart('heart3')" ></div>
            <div>  <img class="clubimg" id="img3" src="../img/lifescience/img3.jpg"  alt="club">
                <div id="pro3" onclick="Change_img(3);">
                    <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                </div>
            </div>
            <input type="button" class="join" value="가입하기" onClick="submit()"></input>
              <div class="promotion">
                <span id="promo3">
                    '굿네이버스 Y.E.S동아리'는 You Enough Special의 약자로 모두가 특별하고 서로의 마음을 이해해주고 지지하는 대학생들의 모임이라는 뜻을 가지고 있다. 본 동아리는 충북대학교 아동복지학과 과 동아리인 동시에
                <굿네이버스 대학생 자원봉사 동아리>라는 굿네이버스 법인의 사업에 소속되어 있으며, 주로 굿네이버스 충북아동보호전문기관의 사업을 수행하고 있고, 그 외에 청주 지역사회복지관과 연계하여 봉사활동을 하거나 봉사활동 이외에도 다양한 분야의 공모전에 참가 한다.
                <br>
                학습목표<br>
                ① 지역자원을 활용하여 활동계획을 세우고 실천한다.<br>
                ② 공모전 및 대외활동에 대한 정보를 공유하고 준비한다.<br></span>
                <br>
              </div>
            </div>
           <hr>

            <div id="content">
            <h3>心心풀이</h3>  <div><img src="../img/heart0.png" id="heart4" class="heart" onclick ="changeheart('heart4')" ></div>
            <div>  <img class="clubimg" id="img4" src="../img/lifescience/img4.jpg"  alt="club">
                <div id="pro4" onclick="Change_img(4);">
                    <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                </div>
            </div>
            <input type="button" class="join" onClick="submit()" value="가입하기"></input>
              <div class="promotion">
                <span id="promo4">
                '심심풀이(心心풀이)'는 서로의 마음과 마음을 이해해주고, 지지하는 대학생들의 모임이라는 뜻을 가지고 있다.
                ‘청주시 건강가정다문화가족지원센터’와 결연을 통해 예비 사회복지사로서의 현장 경험을 획득하여 전문성을 기르고자 한다.                <br>
                학습목적<br>
                ① 지역사회 연계활동을 통해 지역사회에 관심을 가지고, 지역사회 내에서 다양한 활동을 시도<br>
                ② 아동복지학과 선후배간 친목도모 및 활발한 정보교류 증진<br>
                ③ 사회복지에 대한 관심을 증대하고 식견을 넓힘<br>

                </span><br>
            </div>
            </div>
            <hr>
            <div>
                <div id="content">
                <h3>KEIKI</h3> <div><img src="../img/heart0.png" id="heart5" class="heart" onclick ="changeheart('heart5')" ></div>
                <div>  <img class="clubimg"  id ="img5" src="../img/lifescience/img5.jpg"  alt="club">
                <div id="pro5" onclick="Change_img(5);">
                    <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                </div>
            </div>
            <input type="button" class="join" onClick="submit()" value="가입하기"></input>
              <div class="promotion">
                <span id="promo5">
                    Keiki는 ‘어린이’란 뜻을 가진 하와이안어로, 2017년 신설된 우쿨렐레 연주 동아리다.
                    본 동아리에서는 우쿨렐레 연주 방법 습득 및 활용을 통해 유아교육 및 보육에 관심을 가진 학생들이 모여 예비 교사로서의 자질과 전문성을 기르고자 한다.                    <br>
                    학습목적<br>
                    ① 유아교육 및 보육에 대한 다양한 경험 제공 및 예비 보육교사, 유치원교사로서의 전문성 함양<br>
                    ② 동아리 활동을 통해 선후배간 친목 도모 및 활발한 정보교류 증진<br>
                    ③ 다양한 교수 방법에 대해 토의해보고, 이를 적용 및 활용해봄<br>
                </span>
                </div>
            </div>
        </div>
    </div>
        <footer class="container-fluid"></footer>
    </body>
</html>
