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
        <link rel="stylesheet" href="../css/clubpage1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
        <title>CBNU CLUB</title>
        <!-- <script src="../js/profile.js"></script> -->
        <script src="../js/clubpage1.js"></script>
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
                    <li><a href="#sw" class="list 1">소프트웨어학과</a></li>

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
              <h1 id = "sw">소프트웨어학과</h1>
              <div id="content">
              <h3>샘마루(SAMMaru)</h3>  <div><img src="../img/heart0.png" id="heart1" class="heart" onclick ="changeheart('heart1')" ></div>
              <div> <img src="../img/software/img1.jpg" id = "img1" alt="club">
                  <div id="pro1" onclick="Change_img(1);">
                      <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                  </div>
              </div>
              <input type="button" class="join" value="가입하기" onClick="submit()"></input>
                <div class="promotion">
                  <span id="promo1">
                      동아리명 샘마루는 'Security & Algorithm Management' 의 약자 SAM(샘)과 '최고', '하늘' 을 뜻하는 순우리말 마루(Maru)를 합쳐 만들어진 보안 및 알고리즘 동아리 입니다.
                      보안 스터디를 통해 동아리 원들과 함께 보안에 대해 연구하고 학습하며, 알고리즘의 학습을 위해 기초프로그래밍(C, C++)을 시작으로 자료구조를 공부하고 있습니다.
                      또한, 실력을 키워 각종 경진대회 및 해커톤 대회에서 수상을 목적으로 하며, 공모전에도 참여하고 있습니다.
                      그리고 체육대회, MT등을 통해 동아리 원들과의 친목을 다지고 타 동아리와의 교류 또한 활성화하고 있습니다.</span>
                  <br>
                </div>
              </div>
              <hr>

            <div id="content">
            <h3>CUVIC</h3> <div><img src="../img/heart0.png" id="heart2" class="heart" onclick ="changeheart('heart2')" ></div>
            <div>  <img src="../img/software/img2.jpg" id="img2" alt="club">
                <div id="pro2" onclick="Change_img(2);">
                    <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                </div>
            </div>
            <input type="button" class="join" onClick="submit()" value="가입하기"></input>
              <div class="promotion">
                <span id="promo2">
                CUVIC는 C/C++, JAVA 등 다양한 프로그래밍 언어를 바탕으로 PC, Android, IOS 등 기기에 사용되는 각종 응용프로그램이나 애플리케이션을 개발하고 다양한 대회에 참가하여 회원들의 전공 관련 능력 함양 및 대외활동을 통하여 다양한 경험을 해보는 것을 목표로 하고 있습니다.
                학과에서 가장 오래된 동아리인 만큼 졸업생, 재학생 선후배 간의 교류가 활발하고, 멘토링, 스터디, 세미나뿐만 아니라 벚꽃놀이, MT 등 다양한 활동을 통해 회원들이 더욱 학과 생활에 즐겁고 편안하게 적응하고, 진로를 개척해나갈 수 있도록 도와주는 것을 지향하는 동아리입니다.
                </span>
                <br>
              </div>
            </div>
            <hr>
            <div id="content">
            <h3>PDA-pro</h3> <div><img src="../img/heart0.png" id="heart3" class="heart" onclick ="changeheart('heart3')" ></div>
            <div>  <img src="../img/software/img3.jpg" id="img3" alt="club">
                <div id="pro3" onclick="Change_img(3);">
                    <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                </div>
            </div>
            <input type="button" class="join" onClick="submit()" value="가입하기"></input>
              <div class="promotion">
                <span id="promo3">
                PDA - pro 는 C/C++, Android 기반 연구동아리로써 1학년은 주 1회 세미나와 월 1회 개별 테스트를 통해 프로그래밍 실력 향상을 목표로 두고 2,3,4 학년은 각종 공모전을 통해 자신의 프로그래밍 실력을 한층 더 향상 시키는 것을 목표로 하고 있습니다. 또한 동아리 내에서의 MT와 모임 등을 추진하여 동아리 인원간의 화합을 도모합니다. 그리고 매 년 한번씩 동아리 1기 졸업자들부터 현재 재학생과의 총 동문회를 통해 졸업자와 재학생 간의 멘토 &멘티 시스템을 도입하였습니다.
                </span><br>
              </div>
            </div><hr>
            <div id="content">
            <h3>EMSYS</h3> <div><img src="../img/heart0.png" id="heart4" class="heart" onclick ="changeheart('heart4')" ></div>
            <div>  <img src="../img/software/img4.jpg" id="img4" alt="club">
                <div id="pro4" onclick="Change_img(4);">
                    <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                </div>
            </div>
            <input type="button" class="join" onClick="submit()" value="가입하기"></input>
              <div class="promotion">
                <span id="promo4">
                충북대학교 소프트웨어학과 학술동아리로서 동아리 회원들의 학업 능력 증진을 위한 스터디를 시행하며, 안드로이드 애플리케이션 개발과 아두이노, 드론 제작 및 연구를 진행하여 학부생으로서 학업 외 활동들을 동아리를 통해 경험할 수 있습니다. 그 외에도 소프트웨어 경진대회를 통해 프로그래밍과 코딩 능력을 기르며 동아리 회원들끼리의 대외활동과 MT, 선후배 체육대회 등을 통해 사회 경험과 친목을 다질 수 있는 동아리입니다.
                </span><br>
              </div>
            </div><hr>
            <div id="content">
            <h3>Nest.net</h3> <div><img src="../img/heart0.png" id="heart5" class="heart" onclick ="changeheart('heart5')" ></div>
            <div>  <img src="../img/software/img5.jpg" id="img5" alt="club">
                <div id="pro5" onclick="Change_img(5);">
                    <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                </div>
            </div>
            <input type="button" class="join" onClick="submit()" value="가입하기"></input>
              <div class="promotion">
                <span id="promo5">
                Nest.net이란? Nest (새의)둥지로 ‘프로그래머의 보금자리’라는 의미를 지닌 충북대학교 소프트웨어학과 연구동아리입니다. 2006학년도에 창단 되어 이건명 교수님의 지도하에 꾸준히 연구 활동을 진행 중입니다.
  Nest.net은 특정 분야만을 지향하지 않습니다. 최근 스마트 시대에 맞추어, 통신 서비스를 기반으로 장소와 시간에 관계없이 업무를 볼 수 있는 모바일/웹 Application을 연구, 개발 합니다. 뿐만 아니라 문제를 해결하기 위한 과정들을 나타내는 Algorithm, 초소형 컴퓨터 Raspberry Pi, 오픈소스를 지향하는 마이크로 컨트롤러 Arduino, 인체 동작인식 센서 Kinect, 미래 경쟁력을 좌우하는 핵심 자원 Big Data 등 다양한 분야 연구 활동을 통하여 결과물을 탄생 시키는 소프트웨어학과 연구 동아리입니다.
                </span><br>
              </div>
            </div><hr>
            <div id="content">
            <h3>NOVA</h3> <div><img src="../img/heart0.png" id="heart6" class="heart" onclick ="changeheart('heart6')" ></div>
            <div>  <img src="../img/noimg.jpg" id="img6" alt="club" width="270px">
                <div id="pro6" onclick="Change_img(6);">
                    <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                </div>
            </div>
                <input type="button" class="join"  onClick="submit()" value="가입하기"></input>
              <div class="promotion">
                <span id="promo6">
                최경주 교수님 지도아래 영상처리 및 기타 프로그래밍에 대한 공부를 하는 동아리 입니다.
  매달 체계적인 멘토링과 세미나 를 진행하여 프로그래밍에 대해 자발적인 참여를 유도하고 프로그래밍 외의 발표능력과 같은 부가적인 교육도 진행하고 있습니다. 학교생활을 더욱 즐기고 비상할 수 있는 디딤돌같은 동아리입니다
                </span> <br>
              </div>
            </div><hr>
            <div id="content">
            <h3>CGAC</h3> <div><img src="../img/heart0.png" id="heart7" class="heart" onclick ="changeheart('heart7')" ></div>
            <div>  <img src="../img/software/img7.jpg" id="img7" alt="club">
                <div id="pro7" onclick="Change_img(7);">
                    <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                </div>
            </div>
            <input type="button" class="join" onClick="submit()" value="가입하기"></input>
              <div class="promotion">
                <span id="promo7">
            CGAC(Contributing Group As Code) 동아리는 이름에 맞게 코드로서 실천하는 재능기부 동아리입니다. 주요 연구 분야는 웹, 안드로이드, 드론 입니다. 2014년 설립되어 짧은 기간동안 많은 실적을 소유하고 있으며 소프트웨어의 기술적 도움이 필요한 사람에게 재능 기부를 통해 각종 소프트웨어를 제공하고 있습니다. 소프트웨어적 실력을 향상시키기 위해 1, 2학년은 세미나활동을하며 3, 4학년을 주축으로 공모전을 진행하며 전학년 멘토&멘티 제도를 도입하였습니다. 친목 활동으로는 MT , 체육대회활동, 크고작은 소모임을 통해 깊은 유대감을 형성해 나가고 있습니다
            </span>
              </div>
            </div>
            <hr>
            <div id="content">
            <h3>TUX</h3> <div><img src="../img/heart0.png" id="heart8" class="heart" onclick ="changeheart('heart8')" ></div>
            <div>  <img src="../img/noimg.jpg" id="img8" alt="club" width="270px">
            <div id="pro8" onclick="Change_img(8);">
                <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
            </div>
            </div>
            <input type="button" class="join" onClick="submit()" value="가입하기"></input>
              <div class="promotion">
                <span id="promo8">
                TUX 란, Linux의 마스코트 캐릭터 이름 입니다 . 캐릭터의 귀여운 이미지를 통해 막연하고 어렵게 느껴지는 Linux 에 대해 더 천숙하게 접근하고, 연구하는 것을 기대 하며 결정된 저희 동아리의 시그니쳐 입니다 . 현장에서의 OSS에 대한 이해가 필수적으로 인식됨에 따라 이에 근간이 되는 리눅스와 함께 학과 내 OSS 연구 단체의 필요성이 부각되었습니다. 이에, 저희는 리눅스 시스템을 포함한 OSS에 대한 연구 및 자격증 취득과 공모전 활동을 통해 학과 내 리눅스&OSS에 대한 정보자료 및 세미나를 제공하여 학과 학부생 전체의 리눅스 및 OSS에 대한 이해도 확보에 도움을 줄 수 있는 활동을 계획 중에 있습니다. IT 인프라와 서버의 핵심인 리눅스에 대한 연구와 오픈소스SW에 대해 학습하여 리눅스와 오픈소스SW 전문가로 발전을 위해 연구 및 개발을 진행중입니다.
                </span><br>
            </div>
            </div>
      </div>

        <footer class="container-fluid"></footer>
    </body>
</html>