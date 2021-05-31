<?php
 include "./include/session.php";
 include "./include/login.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Page</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- <script src="../js/profile.js"></script>  -->
  <link rel="stylesheet" href="../css/profile.css">
  <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css"> 
</head>

<body style="background-image: linear-gradient(to bottom, rgba(190, 255, 168, 0.5), rgba(26, 114, 255, 0.5));">

    <div class="header">
        <div class="Logo">
        <a href="home.php"
                    style="text-decoration: none; font-size: 20px; color: black; position: fixed; left: 13.2%; padding-top: 10px;">
                    CBNUCLUB</a>
        </div>
        <div class="menu-bar">
            <ul class="main-menu">
                <li class="sub-menu">
                    <a href="./" style="text-decoration: none; color: black;">
                        동아리 현황</a>
                    <ul class="sub-menu2">
                        <li>
                            <a href="" class="sub-list" style="padding-top: 10px;">중앙동아리</a>
                        </li>
                        <li >
                            <a
                                href=""
                                class="sub-list"
                                id="list1"
                                onmouseover="Change_img();"
                                onmouseout="Change_text();">전자정보대학</a>
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
                            <a href="./register.php" class="sub-list">등록하기</a>
                        </li>
                        <li>
                            <a href="./club_status.php" class="sub-list">신청하기</a>
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


  <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">

	<div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
	
		<div class="p-4 md:p-12 text-center lg:text-left">

			<div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/MP0IUfwrn0A')"></div>
            <?php
           
           if(!empty($_SESSION['ses_userid'])){
          ?>
      <h1 class="text-3xl font-bold pt-8 lg:pt-0"><?php echo $_SESSION['ses_userid'] ?></h1>
			<div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-blue-500 opacity-25"></div>
			<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start">
            <?php echo  $_SESSION['ses_userdpm'] ?></p>
			<p class="pt-8 text-sm">가입된 동아리</p>
            
      <?php
      }else{
      ?>
    <h1 class="text-3xl font-bold pt-8 lg:pt-0">이름</h1>
			<div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-blue-500 opacity-25"></div>
			<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start">
                학과 / 학년</p>
			<p class="pt-8 text-sm">가입된 동아리</p>
            
      <?php
       }
      ?>    
            <div id="clist">
            </div>

			<div class="pt-12 pb-8">
				<button class="font-bold py-2 px-4 rounded-full" style="background-color: rgb(49, 49, 49); color: white;">
				  수정
				</button> 
			</div>
		</div>
	</div>
	
	<div class="w-full lg:w-2/5">
		<img src="../img/flo.jpg" 
        class="rounded-none lg:rounded-lg shadow-2xl" 
        style="width: 300px; height: 340px; box-shadow: 5;">

	</div>
	  <div class="absolute top-0 right-0">
		<button class="js-change-theme focus:outline-none" 
        style="position: absolute; top: 50px; right: 10px;">
            🌙</button>
	  </div>

</div>
	<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/tippy.js@4"></script>
	<script>
		tippy('.link',{
		  placement: 'bottom'
		})

		const toggle = document.querySelector('.js-change-theme');
		const body = document.querySelector('body');
		const profile = document.getElementById('profile');
		
		
		toggle.addEventListener('click', () => {

		  if (body.classList.contains('text-gray-900')) {
			toggle.innerHTML = "☀️";
			body.classList.remove('text-gray-900');
			body.classList.add('text-gray-100');
			profile.classList.remove('bg-white');
			profile.classList.add('bg-gray-900');
		  } else
		  {
			toggle.innerHTML = "🌙";
			body.classList.remove('text-gray-100');
			body.classList.add('text-gray-900');
			profile.classList.remove('bg-gray-900');			
			profile.classList.add('bg-white');
			
		  }
		});


		
    </script>
    <script language = "javascript">
        function print_list(){
            var val = location.href.substr(
                location.href.lastIndexOf('?') + 1
            );
            console.log('val : ' + val + "?");
        };
    </script>
	
</body>

</html>