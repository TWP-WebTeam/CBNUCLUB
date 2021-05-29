<!doctype html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="../css/form.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
    <script src="../js/mySigninForm.js"></script>
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
                    <a href="club_status.php" style="text-decoration: none; color: black;">
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
                            <a href="register.php" class="sub-list">등록하기</a>
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
                            <a href="profile.php" class="sub-list">나의 프로필</a>
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
    <!-- onsubmit="return checkSubmit()" -->
    <div id="login-form" style="text-align: center;">
        <form action="./login2.php" method="post" class="form form-login" id="login">
        <h1 class="form__title" style="text-shadow: 2px 3px 5px rgba(126, 126, 126, 0.6);">
        로그인</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" name= "memberID" class="form__input" autofocus placeholder="학번을 입력해주세요"
                style="border-radius: 5px 5px 5px 5px; box-shadow: 3px 3px 10px rgba(170, 170, 170, 0.6);">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" name="memberPW" class="form__input" autofocus placeholder="비밀번호를 입력해주세요"
                style="border-radius: 5px 5px 5px 5px; box-shadow: 3px 3px 10px rgba(170, 170, 170, 0.6);">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit"
            style="border-radius: 5px 5px 5px 5px; box-shadow: 3px 3px 10px rgba(0, 131, 238, 0.6);">
            로그인</button>
            <p class="form__text">
                <a href="#" class="form__link">비밀번호 찾기</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="./signup.php">회원가입하기</a>
            </p>
            
        </form>
    </div>

</body>