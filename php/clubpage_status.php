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
        <link rel="stylesheet" href="../css/clubpage.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous">
        <link
            href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap"
            rel="stylesheet">
        <title>CBNU CLUB</title>
        <script src="../js/clubpage.js"></script>
        <script src="../js/calendar.js"></script>
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
                    <li><a href="#ct" class="list 1">중앙동아리</a></li>
                </ul>
            </div>

            <div class="community-content">
                <h1 id="ct">중앙동아리</h1>
                <div id="content">
                    <h3>페가수스(승마)</h3>
                   <div> <img src="../img/heart0.png" id="heart0" class="heart" onclick ="changeheart('heart0')" ></div>
                    <div><img src="../img/central/img1.jpg" alt="club" id="img1">
                        <div id="pro1" onclick="Change_img(1);">
                            <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                        </div>
                    </div>
                    <input type="button" class="join" value="가입하기"></input>
                    <div class="promotion">
                        <span id="promo1">승마를 통한 심신수련 및 호연지기</span>
                        <br>
                    </div>
                </div>
                <hr>

                <div id="content">
                    <h3>홀리보이스</h3> <div><img src="../img/heart0.png" id="heart1" class="heart" onclick ="changeheart('heart1')" ></div>
                    <div>
                        <img src="../img/central/img2.jpg" alt="club" id="img2">
                        <div id="pro2" onclick="Change_img(2);">
                            <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                        </div>
                    </div>
                    <input type="button" class="join" value="가입하기"></input>
                    <div class="promotion">
                        <span id="promo2">음악(합창)을 통한 정서함양</span>
                        <br>
                    </div>
                </div>
                <hr>
                <div id="content">
                    <h3>Roll Dice</h3> <div><img src="../img/heart0.png" id="heart2" class="heart" onclick ="changeheart('heart2')" ></div>
                    <div>
                        <img src="../img/central/img3.jpg" alt="club" id="img3">
                        <div id="pro3" onclick="Change_img(3);">
                            <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                        </div>
                    </div>
                    <input type="button" class="join" value="가입하기"></input>
                    <div class="promotion">
                        <span id="promo3">보드게임을 통한 건전문화 조성</span>
                        <br>
                    </div>
                </div><hr>
                <div id="content">
                    <h3>아르페지오</h3> <div><img src="../img/heart0.png" id="heart3" class="heart" onclick ="changeheart('heart3')" ></div>
                    <div>
                        <img src="../img/central/img4.jpg" alt="club" id="img4">
                        <div id="pro4" onclick="Change_img(4);">
                            <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                        </div>
                    </div>
                    <input type="button" class="join" value="가입하기"></input>
                    <div class="promotion">
                        <span id="promo4">통기타 음악을 통한 정서함양</span>
                        <br>
                    </div>
                </div><hr>
                <div id="content">
                    <h3>블랙홀</h3> <div><img src="../img/heart0.png" id="heart4" class="heart" onclick ="changeheart('heart4')" ></div>
                    <div>
                        <img src="../img/central/img5.jpg" alt="club" id="img5">
                        <div id="pro5" onclick="Change_img(5);">
                            <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                        </div>
                    </div>
                    <input type="button" class="join" value="가입하기"></input>
                    <div class="promotion">
                        <span id="promo5">
                            락 음악을 통한 정서함양</span>
                        <br>
                    </div>
                </div><hr>
                <div id="content">
                    <h3>늘해랑</h3> <div><img src="../img/heart0.png" id="heart5" class="heart" onclick ="changeheart('heart5')" ></div>
                    <div>
                        <img src="../img/central/img6.jpg" alt="club" id="img6">
                        <div id="pro6" onclick="Change_img(6);">
                            <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                        </div>
                    </div>
                    <input type="button" class="join" value="가입하기"></input>
                    <div class="promotion">
                        <span id="promo6">액션 치어리딩을 통한 단결심 고취</span>
                        <br>
                    </div>
                </div><hr>
                <div id="content">
                    <h3>한별(천문회)</h3> <div><img src="../img/heart0.png" id="heart6" class="heart" onclick ="changeheart('heart6')" ></div>
                    <div>
                        <img src="../img/central/img7.jpg" alt="club" id="img7">
                        <div id="pro7" onclick="Change_img(7);">
                            <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                        </div>
                    </div>
                    <input type="button" class="join" value="가입하기"></input>
                    <div class="promotion">
                        <span id="promo7">
                            별관 측 및 천문 연구</span>
                    </div>
                </div>
                <hr>
                <div id="content">
                    <h3>위더스</h3> <div><img src="../img/heart0.png" id="heart7" class="heart" onclick ="changeheart('heart7')" ></div>
                    <div>
                        <img src="../img/central/img8.jpg" alt="club" id="img8">
                        <div id="pro8" onclick="Change_img(8);">
                            <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                        </div>
                    </div>
                    <input type="button" class="join" value="가입하기"></input>
                    <div class="promotion">
                        <span id="promo8">
                            집수리 봉사를 통한 희망 나눔</span>
                    </div>
                </div>
                <hr>
                <div id="content">
                    <h3>레오(LEO)</h3> <div><img src="../img/heart0.png" id="heart8" class="heart" onclick ="changeheart('heart8')" ></div>
                    <div>
                        <img src="../img/central/img9.jpg" alt="club" id="img9">
                        <div id="pro9" onclick="Change_img(9);">
                            <span id="p">Click하면 동아리 소개를 볼 수 있어요!</span>
                        </div>
                    </div>
                    <input type="button" class="join" value="가입하기"></input>
                    <div class="promotion">
                        <span id="promo9">
                            봉사활동을 통한 리더십 향상</span>
                        <br>
                    </div>
                </div>
            </div>

            <footer class="container-fluid">
                <!-- Wrapper -->
                <div id="wrapper">
                    <!-- Calendar element -->
                    <div id="events-calendar"></div>
                    <!-- Events -->
                    <div id="events"></div>
                    <!-- Clear
                    <div class="clear"></div>
                </div>
                <div class="clear"></div> -->

                <!-- Create the calendar -->
                <script type="text/javascript">
                    // Get elements
                    var elements = {
                        // Calendar element
                        calendar: document.getElementById("events-calendar"),
                        // Input element
                        events: document.getElementById("events")
                    }

                    // Create the calendar
                    elements.calendar.className = "clean-theme";
                    var calendar = jsCalendar.new(elements.calendar);

                    // Create events elements
                    elements.title = document.createElement("div");
                    elements.title.className = "title";
                    elements.events.appendChild(elements.title);
                    elements.subtitle = document.createElement("div");
                    elements.subtitle.className = "subtitle";
                    elements.events.appendChild(elements.subtitle);
                    elements.list = document.createElement("div");
                    elements.list.className = "list";
                    elements.events.appendChild(elements.list);
                    elements.actions = document.createElement("div");
                    elements.actions.className = "action";
                    elements.events.appendChild(elements.actions);
                    elements.addButton = document.createElement("input");
                    elements.addButton.type = "button";
                    elements.addButton.value = "추가하기";
                    elements.actions.appendChild(elements.addButton);

                    var events = {};
                    var date_format = "YYYY/MM/DD";
                    var current = null;

                    var showEvents = function (date) {
                        // Date string
                        var id = jsCalendar.tools.dateToString(date, date_format, "en");
                        // Set date
                        current = new Date(date.getTime());
                        // Set title
                        elements.title.textContent = id;
                        // Clear old events
                        elements.list.innerHTML = "";
                        // Add events on list
                        if (events.hasOwnProperty(id) && events[id].length) {
                            // Number of events
                            elements.subtitle.textContent = events[id].length + "개의 일정이 있습니다.";
                            var div;
                            var close;
                            // For each event
                            for (var i = 0; i < events[id].length; i++) {
                                div = document.createElement("div");
                                div.className = "event-item";
                                div.textContent = (i + 1) + ". " + events[id][i].name;
                                elements.list.appendChild(div);
                                // close = document.createElement("div");

                                // div.appendChild(close);
                                // close.addEventListener("click", (function (date, index) {
                                //     return function () {
                                //         removeEvent(date, index);
                                //     }
                                // })(date, i), false);
                            }
                        } else {
                            elements.subtitle.textContent = "일정이 없습니다";
                        }
                    };

                    var removeEvent = function (date, index) {
                        // Date string
                        var id = jsCalendar.tools.dateToString(date, date_format, "en");

                        // If no events return
                        if (!events.hasOwnProperty(id)) {
                            return;
                        }
                        // If not found
                        if (events[id].length <= index) {
                            return;
                        }

                        // Remove event
                        // events[id].splice(index, 1);

                        // Refresh events
                        showEvents(current);

                        // If no events uncheck date
                        if (events[id].length === 0) {
                            calendar.unselect(date);
                        }
                    }

                    // Show current date events
                    showEvents(new Date());

                    // Add events
                    calendar.onDateClick(function (event, date) {
                        // Update calendar date
                        calendar.set(date);
                        // Show events
                        showEvents(date);
                    });

                    elements.addButton.addEventListener("click", function () {
                            // Get event name
                            var names = [];
                            var name = prompt(
                                "동아리 일정을 입력하세요."
                            );

                            //Return on cancel
                            if (name === null || name === "") {
                                return;
                            }

                            // Date string
                            var id = jsCalendar.tools.dateToString(current, date_format, "en");

                            // If no events, create list
                            if (!events.hasOwnProperty(id)) {
                                // Create list
                                events[id] = [];
                            }

                            // If where were no events
                            if (events[id].length === 0) {
                                // Select date
                                calendar.select(current);
                            }

                            // Add event
                            events[id].push({name: name});

                            // Refresh events
                            showEvents(current);
                        }, false);
                </script>
            </footer>
        </body>
    </html>
