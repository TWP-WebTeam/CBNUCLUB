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
        <link rel="stylesheet" href="../css/clubpage4.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
        <title>CBNU CLUB</title>
        <script src="../js/profile.js"></script>
        <script src="../js/clubpage4.js"></script>
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
                    <li><a href="#vete" class="list 1">수의학과</a></li>
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
            <h1 id = "vete">수의과대학</h1>
            <div id="content">
            <h3>돋움</h3>
            <div><img src="../img/heart0.png" id="heart1" class="heart" onclick ="changeheart('heart1')" ></div>
              <div> <img class="clubimg" src="../img/vete/img1.jpg" id = "img1" alt="club">
                  <div id="pro1" onclick="Change_img(1);">
                      <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                  </div>
              </div>
              <input type="button" class="join" value="가입하기" onClick="submit()"></input>
                <div class="promotion">
                  <span id="promo1">
                    동아리소개<br>
                    충북대학교 수의과대학 편집위원회 돋움(DODOOM)은 수의과대학 유일의 언론기구로서 수의과대학의 크고 작은 소식 및 수의과대학 학생들의 의견을 반영합니다.
                    그리고 수의대 전체의 단합에 기여하고 자칫 좁아질 수 있는 학생들의 시야를 더 넓은 세상과 이어주는 창문 역할을 합니다.
                    또한 동아리원들이 학업뿐만 아니라 문예인으로서의 자기계발을 도모하며 서로간의 친목을 유도하고 서로의 정서적인 안식처가 되어줍니다.
                  </span><br>
                </div>
              </div>
              <hr>



              <div id="content">
                <h3>돌봄</h3> <div><img src="../img/heart0.png" id="heart2" class="heart" onclick ="changeheart('heart2')" ></div>
                <div>  <img  class="clubimg" src="../img/vete/img2.jpg" id="img2" alt="club">
                    <div id="pro2" onclick="Change_img(2);">
                        <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                    </div>
                </div>
                <input type="button" class="join" onClick="submit()"  value="가입하기"></input>
                  <div class="promotion">
                    <span id="promo2">
                        동아리소개<br>

                        '돌봄'은 충북대 수의과대학 봉사동아리 입니다.
                         틈틈이 유기동물 보호소에 방문하여 봉사활동을 다니던 학우들뿐만 아니라 더 많은 학우들과 함께하고, 수의학도로서 관련 질병에 대해 알아보고 유기동물을 돌본다는 취지로 2012년에 신설되었습니다.<br>

                         활동<br>
                        매주 봉사희망자들과 함께 유기동물 보호소를 방문하여 청소, 소독, 놀이, 미용이나 목욕봉사를 하고, 더 나아가 유기동물의 실태를 파악하고 그 안에서 자주 발견되는 질병에 대해서 공부하고 있습니다.
                        더불어 온라인 커뮤니티 등에 유기동물 임시보호, 입양에 대해 적극 홍보하여 유기동물의 입양을 독려하고 있습니다.<br>
                     </span>
                    <br>
                  </div>
                </div>
                <hr>

                <div id="content">
                <h3>바람소리</h3> <div><img src="../img/heart0.png" id="heart3" class="heart" onclick ="changeheart('heart3')" ></div>
                <div>  <img class="clubimg" src="../img/vete/img3.jpg" id="img3" alt="club">
                    <div id="pro3" onclick="Change_img(3);">
                        <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                    </div>
                </div>
                <input type="button" class="join" onClick="submit()" value="가입하기"></input>
                  <div class="promotion">
                    <span id="promo3">
                        바람소리는 2002년 11월 12일에 창단하여 지금까지 꾸준히 운동을 해 오고 있는 검도 동아리입니다. 저희 동아리는 스포츠화된 검도를 하는 동아리로서 그 규칙은 대한 검도회의 경기 규칙을 기본으로 합니다.
                        검도는 운동학적으로는 전신의 고른 발달과 지구력, 순발력, 민첩성 등을 키우기에 안성맞춤이며 정신 수련을 통해 정서함양과 예절 교육에도 한 몫 합니다.
                         교내 검도문화 보급을 통해 체력과 집중력을 기르고 학우들 간의 친애를 도모합니다.
                         호구와 죽도 등의 장비를 보유하고 있으며 바닥에는 매트가 깔려 있어 운동 시 안전을 보장 합니다.<br>
                        </span><br>
                  </div>
                </div><hr>
                <div id="content">
                <h3>비상</h3> <div><img src="../img/heart0.png" id="heart4" class="heart" onclick ="changeheart('heart4')" ></div>
                <div>  <img class="clubimg" src="../img/vete/img4.jpg" id="img4" alt="club">
                    <div id="pro4" onclick="Change_img(4);">
                        <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                    </div>
                </div>
                <input type="button" class="join" onClick="submit()" value="가입하기"></input>
                  <div class="promotion">
                    <span id="promo4">
                        비상은 수의과대학 그룹사운드로서 93학번을 주축으로 결성되어 활동하고 있습니다. 어려운 학과공부와 바쁜 학사일정 속에서도 매주 3일씩 모여서 취미가 비슷한 학우들과 음악을 통한 소통, 건전한 스트레스 해소, 강습을 통한 선후배간 관계유지, 대학생활의 낭만적인 추억 및 다양한 경험을 목적으로 활동하고 있습니다.<br>
                        활동 내용<br>
                        OT와 MT 축하공연을 시작으로 3월에는 신입생들을 모집해 1학기동안 10주 과정으로 각 악기별로 기본적인 강습을 매주 3회 2시간씩 진행합니다.
                        강습은 예과2학년이 주축이며 본과선배의 보조로 이루어집니다.
                        5월과 11월에 정기공연을 열며 6개 학년의 전 기수가 참여합니다.
                        그 밖에 학교축제나 행사에 축하공연을 준비합니다.                    </span><br>
                  </div>
                </div><hr>
                <div id="content">
                <h3>시너지</h3> <div><img src="../img/heart0.png" id="heart5" class="heart" onclick ="changeheart('heart5')" ></div>
                <div>  <img class="clubimg" src="../img/vete/img5.jpg" id="img5" alt="club">
                    <div id="pro5" onclick="Change_img(5);">
                        <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                    </div>
                </div>
                <input type="button" class="join" onClick="submit()" value="가입하기"></input>
                  <div class="promotion">
                    <span id="promo5">
                        동아리소개<br>

                        수의과대학 학생들 중 졸업 후 소동물 임상분야에 뜻이 있는 학우들이 모여 소동물 임상수의사가 되기 위해 필요한 기초지식에서부터 전문지식까지 공유하여 학습하는 것을 목적으로 만들어진 동아리입니다.
                                        </span><br>
                  </div>
                </div><hr>
                <div id="content">
                <h3>어절씨구</h3> <div><img src="../img/heart0.png" id="heart6" class="heart" onclick ="changeheart('heart6')" ></div>
                <div>  <img class="clubimg" src="../img/vete/img6.jpg" id="img6" alt="club" width="270px">
                    <div id="pro6" onclick="Change_img(6);">
                        <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                    </div>
                </div>
                    <input type="button" class="join" onClick="submit()" value="가입하기"></input>
                  <div class="promotion">
                    <span id="promo6">
                        어절씨구(풍물)는 우리의 음악인 풍물을 하는 동아리입니다. 북 장구, 징, 소고 등의 악기들과 우리들의 흥이 함께 어울려져 멋진 음악을 만들어 냅니다.

                        어절씨구는 풍물을 통해서 즐거움을 찾고 우리의 전통을 지켜나가자는 의미에서 1993년도에 창립해 현재까지 무수한 회원이 있으며 정으로 똘똘 뭉쳐있는 동아리입니다.
                        많은 사람들이 하루에도 몇 곡씩 수많은 음악들을 접하며 살아가고 있는 시대입니다.
                        대중음악에만 길들여져 전통음악은 잘 듣지 않는 요즈음 우리 풍물동아리 어절씨구를 통해 전통을 느끼고 직접 체험하면서 우리문화의 소중함을 느낄 수 있습니다.

                        직접 쇠와 장구를 치고, 상모를 돌리면서 여럿이서 함께 소리를 만들어내는 즐거움을 느낄 수 있습니다.
                        또한 사람과 사람사이의 조화와 호흡을 통하여 풍물의 매력도 느낄 수 있습니다.

            </span> <br>
                  </div>
                </div><hr>
                <div id="content">
                <h3>외야수</h3> <div><img src="../img/heart0.png" id="heart7" class="heart" onclick ="changeheart('heart7')" ></div>
                <div>  <img class="clubimg" src="../img/vete/img7.jpg" id="img7" alt="club">
                    <div id="pro7" onclick="Change_img(7);">
                        <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                    </div>
                </div>
                <input type="button" class="join" onClick="submit()" value="가입하기"></input>
                  <div class="promotion">
                    <span id="promo7">
                        외래성 야생동물 수의사 모임은 2011년 충북대학교 야생동물센터에서 수의사로 활동 중인 수의사의 도움으로 야생/외래 동물에 관심 있는 본과 1,2,3 학년 학생들이 자발적으로 모여 만든 동아리입니다.
                        특수동물이라 함은 개, 고양이를 제외한 햄스터, 토끼, 고슴도치, 앵무새, 기니피그, 페럿 등의 반려동물을 말합니다.
   </span>
                  </div>
                </div>
                <hr>
                <div id="content">
                <h3>페가수스</h3> <div><img src="../img/heart0.png" id="heart8" class="heart" onclick ="changeheart('heart8')" ></div>
                <div>  <img class="clubimg" src="../img/vete/img8.jpg" id="img8" alt="club" width="270px">
                <div id="pro8" onclick="Change_img(8);">
                    <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                </div>
                </div>
                <input type="button" class="join" onClick="submit()" value="가입하기"></input>
                  <div class="promotion">
                    <span id="promo8">
                        수의과대학 승마동아리 페가수스는 2000년 학생들의 정신건강과 신체단련을 목적으로 태어나서 많은 학우들과 말을 타며 민첩성, 판단력, 협동성을 기르고 나아가 서로서로 가슴 뜨거운 우애를 길러왔습니다.
                        또한 페가수스는 전국 체전 참가 등 많은 활동으로 그 기량을 전국에 알려왔으며 회원 모두가 스포츠 정신과 동물 애호 정신으로 많은 사람들의 사랑을 받고 있습니다. 또한 2005년에는 구학생회관에 동아리방을 마련함으로써 충북지역 내 최고의 승마동아리로서 발돋움하고 있습니다.
                         이에 저희 동아리는 고급스포츠인 승마의 보편화에 힘쓰면서 일반인에 대한 저변확대를 위한 강습을 열고 좀더 친숙한 자리를 마련하고 있습니다.
    </span><br>
                </div>
                </div>
             <hr>
             <div id="content">
                <h3>나르샤</h3> <div><img src="../img/heart0.png" id="heart9" class="heart" onclick ="changeheart('heart9')" ></div>
                <div>  <img class="clubimg" src="../img/vete/img9.jpg" id="img9" alt="club">
                    <div id="pro9" onclick="Change_img(9);">
                        <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                    </div>
                </div>
                <input type="button" class="join" onClick="submit()" value="가입하기"></input>
                  <div class="promotion">
                    <span id="promo9">
                        나르샤는 충북대학교 수의학과의 운동동아리입니다.
                        농구를 좋아하는 수의대 학생끼리 모여 만들어진 모임으로 학업에 지쳐 약해지기 쉬운 몸과 마음을 ‘농구’라는 운동을 통해 단련하고 서로 만나기 힘든 예과생과 본과생이 함께 운동함으로써 선후배, 동기간의 친목 도모를 하기 위한 동아리입니다.<br>

                                                            </span><br>
                  </div>
                </div><hr>
                <div id="content">
                <h3>LAMP</h3> <div><img src="../img/heart0.png" id="heart10" class="heart" onclick ="changeheart('heart10')" ></div>
                <div>  <img class="clubimg" src="../img/vete/img10.jpg" id="img10" alt="club">
                    <div id="pro10" onclick="Change_img(10);">
                        <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                    </div>
                </div>
                <input type="button" class="join" onClick="submit()" value="가입하기"></input>
                  <div class="promotion">
                    <span id="promo10">
                        LAMP는 Large Animal Medical Practice의 약자로서, 대동물(소) 임상 수의사를 꿈꾸는 학생들이 모여 활동하는 동아리입니다. 2011년 12월에 창단되어 동계 휴가 기간에 4학년 학생들 위주로 활동하고 있습니다. LAMP 동아리에서는 학부 교육 과정에 더하여 심층적인 대동물 임상의 지식과 경험을 쌓기 위해 구성원들이 함께 노력하고 있습니다.
                        활동 내용<br>
                        대동물(소)과 관련된 번식(산과), 일반진료(내, 외과), 발굽관리, 사양관리, 방역관리, 수정란 이식 등 다양한 학습활동을 하고 있으며 소의 보정, 직장검사, 초음파 검사 등의 실습활동과 목장 실습 및 일선 대동물 병원 실습 등의 현장경험도 쌓고 있습니다.
                        <br>                    </span><br>
                  </div>
                </div>

        </div>


        <footer class="container-fluid"></footer>
    </body>
</html>
