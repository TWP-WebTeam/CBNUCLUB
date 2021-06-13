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
        <link rel="stylesheet" href="../css/clubpage2.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous">
        <link
            href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap"
            rel="stylesheet">
        <title>CBNU CLUB</title>
        <script src="../js/clubpage2.js"></script>
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

        <div class="content">
            <div class="community-list">
                <ul class="club-list">
                <li><a href="../php/clubpage_status.php" class="list 1">중앙동아리</a></li>
                    <li><a href="../php/clubpage1.php" class="list 2">전자정보대학</a></li>
                    <li><a href="../php/clubpage2.php" class="list 3">공과대학</a></li>
                    <li><a href="../php/clubpage3.php" class="list 4">생활과학대학</a></li>
                    <li><a href="../php/clubpage4.php" class="list 5">수의과대학</a></li>
                    <li><a href="../php/clubpage5.php" class="list 7">의과대학</a></li>
                    </li>
                </ul>
            </div>
            <div id="dp">
                <ul class="club-list">
                    <li>
                        <a href="#city" class="list 1">도시공학과</a>
                    </li>
                    <li>
                        <a href="#new" class="list 2">신소재공학과</a>
                    </li>
                    <li>
                        <a href="#engineering" class="list 3">기계공학부</a>
                    </li>
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
                <h1 id="city">도시공학과</h1>
                <div class="divbox">
                    <div id="content">
                        <h3>UFC(Urban Football Club)</h3>
                        <div><img
                            src="../img/heart0.png"
                            id="heart1"
                            class="heart"
                            onclick="changeheart('heart1')"></div>
                        <div>
                            <img src="../img/engine/img1.jpg" id="img1" alt="club" width="350px" height="250px">
                            <div id="pro1" onclick="Change_img(1);">
                                <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                            </div>
                        </div>
                        <input type="button" class="join" onClick="submit()"  value="가입하기"></input>
                        <div class="promotion">
                            <span id="promo1">
                                도시공학과에는 UFC(Urban Football Club)이라는 축구 동아리가 있습니다.재학생뿐만 아니라 졸업생들까지 모두 함께 참여할 수 있는
                                축구 모임이며, 오랜 기간 동안 이어지고 있는 전통 있는 모임입니다. UFC는 축구를 통하여 도시공학과 학우들의 건강, 체력 향상 및 친목도모의
                                목적으로 운영되고 있습니다.<br>
                                행사 안내 개강 후 신입회원 모집 및 첫 모임 개최<br>
                                학사 일정에 따라 공대 체육대회, 충북대학교 총장 배 축구대회 준비 및 참여<br>
                                학기 중 단톡방 투표를 통한 풋살 경기 및 축구 진행<br>
                                축구에 대해 관심이 많고 열정이 있는 학우 분들이라면 실력에 상관없이 참여 가능하니 부담 없이 신청하시면 됩니다.</span>
                        </div>
                    </div>
                    <hr>

                    <div id="content">
                        <h3>같이혜윰</h3>
                        <div><img
                            src="../img/heart0.png"
                            id="heart2"
                            class="heart"
                            onclick="changeheart('heart2')"></div>
                        <div>
                            <img src="../img/engine/img2.jpg" id="img2" alt="club" width="350px" height="250px">
                            <div id="pro2" onclick="Change_img(2);">
                                <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                            </div>
                        </div>
                        <input type="button" class="join" onClick="submit()" value="가입하기"></input>
                        <div class="promotion">
                            <span id="promo2">
                                혜윰은 ‘생각’이라는 뜻의 우리말로, 같이 생각해서 더 좋은 결과를 이루자는 뜻으로 동아리를 개설하였습니다.
                                <br>
                                행사 안내<br>
                                학사 일정에 따라,동아리원들과 활동계획 및 수립개강 후 신입회원 모집,활동 역할 분배활동 명목에 따라 별도 교내외 교육 이수
                                <br>전공과 관련된 특별한 활동을 ‘구상하고 계시거나, 찾고 계시다면’ 같이혜윰!</span>
                        </div>
                    </div>
                    <hr>
                    <div id="content">
                        <h3>LEGO</h3>
                        <div><img
                            src="../img/heart0.png"
                            id="heart3"
                            class="heart"
                            onclick="changeheart('heart3')"></div>

                        <div>
                            <img src="../img/engine/img3.jpg" id="img3" alt="club" width="350px" height="250px">
                            <div id="pro3" onclick="Change_img(3);">
                                <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                            </div>
                        </div>
                        <input type="button" class="join" onClick="submit()" value="가입하기"></input>
                        <div class="promotion">
                            <span id="promo3">
                                '레고'는 바쁜 일상과 학업 스트레스로 지쳐있는 학생들의 힐링과 추억을 만들기 위한 여행을 떠나자는 'Let's go'의 의미를 담아 동아리를
                                개설하였습니다. 활동 설명 : 레고는 동아리 내 부원들의 만족도가 가장 높은 동아리이며, 부담없은 모임을 가지며 선후배와의 친목도모를 통해
                                과생활에 대한 궁금증이나 학교 수업에 관한 정보들을 얻을 수 있습니다. 또한 방학때마다 한번씩 여행을 떠나 바쁜 현대인의 삶속에서 힐링을 느낄
                                수 있고, 졸업생분들과 함께하며 취업정보와 같은 미래에 대해 상담해볼수도 있습니다.
                                <br>
                                활동 안내<br>
                                여행은 방학 중 한번씩 일년에 걸쳐 두 번 가게 됩니다. 어디까지나 여행의 첨가여부는 자율적인 개인의 선택입니다. 여행의 주요 활동은 신환회,
                                국내답사, 해외답사 등이 있습니다. 이 외에도 각 회원들이 게릴라 모임을 주최할 수 있습니다. 모임은 크거나 작게 수시로 친목을 다지는
                                활동입니다. 이런 소소하지만 꾸준한 만남들로 인해 좋은 인연들은 많이 만나게 되고, 오랫동안 유지하게 됩니다.</span><br>
                        </div>
                    </div>
                </div>

                <h1 id="new">신소재공학과</h1>
                <div class="divbox">
                    <div id="content">
                        <h3>축구동아리 SINSA FC</h3>
                        <div><img
                            src="../img/heart0.png"
                            id="heart4"
                            class="heart"
                            onclick="changeheart('heart4')"></div>
                        <div>
                            <img src="../img/engine/img4.jpg" id="img4" alt="club" width="350px" height="250px">
                            <div id="pro4" onclick="Change_img(4);">
                                <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                            </div>
                        </div>
                        <input type="button" class="join" onClick="submit()" value="가입하기"></input>
                        <div class="promotion">
                            <span id="promo4">
                                안녕하십니까. 신소재공학과 축구동아리 SINSA FC입니다. 축구하는 것을 좋아하고 즐기는 학우들이라면 언제든지 환영입니다. 종종 선후배 간에
                                경기도 하고 서로 즐겁게 공을 차기위해 만들어진 모임입니다. 잘하고 못하고는 상관없습니다. 서로 즐거운 분위기에서 운동도하고 선후배간에
                                친목도모도 하는 과동아리인 만큼 많은 관심 부탁드립니다.
                            </span>
                            <br>
                        </div>
                    </div><hr>
                    <div id="content">
                        <h3>농구동아리 Buffalo</h3>
                        <div><img
                            src="../img/heart0.png"
                            id="heart5"
                            class="heart"
                            onclick="changeheart('heart5')"></div>
                        <div>
                            <img src="../img/engine/img5.jpg" id="img5" alt="club" width="350px" height="250px">
                            <div id="pro5" onclick="Change_img(5);">
                                <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                            </div>
                        </div>
                        <input type="button" class="join" onClick="submit()" value="가입하기"></input>
                        <div class="promotion">
                            <span id="promo5">
                                신소재공학과 농구동아리 Buffalo입니다. 저희 동아리는 농구를 좋아하고 농구에 대한 열정이 넘치는 사람들로 구성되어있습니다. 동아리는 실력에
                                상관없이 농구를 하며 이를 통해 친목을 도모하기 위해 만들어졌습니다. Buffalo는 매주 금요일, 토요일 오후에 2시간씩 농구를 하고 있으며,
                                농구를 처음 하는 분들에게는 기본기나 규칙을 가르쳐드리고 있습니다. 그리고 농구 후에는 동아리원간의 친목도모를 위한 모임을 가지고 있습니다.
                                농구에 대한 관심과 열정만 있다면 초보자여도 상관없이 가입이 가능합니다. 열정이 넘치는 신소재공학과 학우들의 많은 참여를 기다리겠습니다.
                                <br>
                            </span>
                        </div>
                    </div>
                </div>
                <h1 id="engineering">기계공학부</h1>
                <div class="divbox">
                    <div id="content">
                        <h3>타키온</h3>
                        <div><img
                            src="../img/heart0.png"
                            id="heart6"
                            class="heart"
                            onclick="changeheart('heart6')"></div>
                        <div>
                            <img src="../img/engine/img6.jpg" id="img6" alt="club" width="350px" height="250px">
                            <div id="pro6" onclick="Change_img(6);">
                                <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                            </div>
                        </div>
                        <input type="button" class="join" onClick="submit()" value="가입하기"></input>
                        <div class="promotion">
                            <span id="promo6">
                                TACHYON은 충북대학교 기계공학부 자동차 소모임이다. TACHYON이란 '빛보다 빠른 물질' 이란 뜻으로 빠르고 강한 자동차를 만들기 위한
                                뜻이 담겨져 있다. 1998년 선배들이 배워온 교과목을 접목시켜 자동차에 대한 설계와 제작을 목표로 창설하였다. 시작은 힘들었지만 한해 한해
                                기술을 습득하여 2003년 국내대회 우승이라는 쾌거를 거두고 2006년에는 모든 자작자동차인들의 꿈인 FomulaSAE(국재대회)에 참가하는 등
                                장족의 발전을 거두었다. 2009년 새롭게 도전한 오프로드 대회인 K-SAE Baja 대회에서 종합 5위에 입상하였고 2010년 Fomula
                                SAE대회에 TF-2를 제작, 참가하여 종합 26위의 성적을 거두었다. 2011년에는 전기차에 도전하여 창작신기술 1위라는 성적을 거두었으며
                                작년 2014년에는 K-SAE Fomula 대회에서 장려상을 거두었다.</span>
                        </div>
                    </div><hr>
                    <div id="content">
                        <h3>WISE M</h3>
                        <div><img
                            src="../img/heart0.png"
                            id="heart7"
                            class="heart"
                            onclick="changeheart('heart7')"></div>
                        <div>
                            <img src="../img/engine/img7.jpg" id="img7" alt="club" width="350px" height="250px">
                            <div id="pro7" onclick="Change_img(7);">
                                <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                            </div>
                        </div>
                        <input type="button" class="join" onClick="submit()" value="가입하기"></input>
                        <div class="promotion">
                            <span id="promo7">
                                wise.M은 충북대학교 자작로봇동아리이다. 학부 수업에서 배우는 내용들을 응용하여 직접 로봇을 만드는 동아리로써 배운 것을 직접 실습해 볼 수
                                있는 좋은 기회를 가질 수 있다. 이러한 기회들을 전공 내용들을 이해하는데 도움을 준다. 또한 하드웨어와 소프트웨어의 실질적인 응용을 통해 로봇
                                시스템을 제어, 개발한다.
                            </span>
                        </div>
                    </div>
                    <hr>
                    <div id="content">
                        <h3>생각대로 D</h3>
                        <div><img
                            src="../img/heart0.png"
                            id="heart8"
                            class="heart"
                            onclick="changeheart('heart8')"></div>
                        <div>
                            <img src="../img/engine/img8.jpg" id="img8" alt="club" width="350px" height="250px">
                            <div id="pro8" onclick="Change_img(8);">
                                <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                            </div>
                        </div>
                        <input type="button" class="join" onClick="submit()" value="가입하기"></input>
                        <div class="promotion">
                            <span id="promo8">
                                생각대로D는 Design의 약자로 그린카 활성화 사업의 일환으로서 동아리가 창설되었다. 기존에 존재하는 것들을 벗어나 동아리원의 생각을 최대한
                                반영하여 원하는 RC제품을 직접 설계하고 만들어 볼 수 있는 동아리이다.<br>
                                RC란 전파를 이용한 자동제어물 뜻하는데, 이러한 자동제어나 차체 설계를 통해서 전공과목에서 배운 것들을 적용, 응용해보기도하고 실제 일어나는
                                일들을 관찰하여 전공 지식을 더 쌓는데 목적이 있다. 또한 동아리 원들이 직접 설계하는 과정에서 함께 익견을 내고 토의를 하며. 동료들과
                                협력하는 방법을 익힌다.<br>
                                지금까지 RC카의 조립과 태양광을 동력으로 이용하는 RC카를 제작하였으며 현재 지금까지 했던 내욤욜 바탕으로 솔라카 설계 중에 있다. 솔라캬란
                                태앙광 에너지 자동차이며. 태양광은 요즘 친환경자동차들이 각광을 받으며 더옥 관심받고 있는 분야이다. 태양광 패널욜 이용하여 태양광을 발전하는
                                방법욜 사용하는데 그 발전되는 전력이 현재 기술로는 매우 미미한 수준이기 때문에 그 제한된 동력을 이용하여 RC카의 최대 속력욜 이끌어 낼 수
                                있는 방법과 에너지를 최대한으로 받욜 수 있는 방법을 연구하여 설계하는 것이 동아리의 목표라 할 수 있다. 현재 솔라카 대회 참여 예정에 있다.
                            </span>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="container-fluid"></footer>
        </body>
    </html>