<?php
    include "./include/session.php";
    include "./include/dbConnect.php";
    /*echo "<pre>";
    var_dump($_POST);*/
    $memberId = $_POST['memberID'];
    $memberPw = $_POST['memberPW'];

    if(!$memberId){
        // 경고창 보여주고 이전 페이지로 이동 [JS의 history객체 이동]
        // history.go(-1); : 이전 페이지로
        echo "
        <script>
            alert('아이디를 입력하세요.');
            history.go(-1);
        </script>
        ";
         exit;
    }
    if(!$memberPw){
        // 경고창 보여주고 이전 페이지로 이동 [JS의 history객체 이동]
        // history.back(); : 이전 페이지로
        echo "
        <script>         
            history.back();
            alert('비밀번호를 입력하세요.');
        </script>
        ";
         exit;
    }


    $sql = "SELECT * FROM memberdb WHERE stdnum = '{$memberId}' AND pw = '{$memberPw}'";
    // $result= mysqli_query($conn,$sql);

    // $rowNum= mysqli_num_rows($result);

    // if(!$rowNum){
    //     echo "
    //     <script>
    //         alert('아이디와 비밀번호를 확인하세요.');
    //         history.back();
    //     </script>
    //     ";
    //     exit;
    // }
 
    // exit가 안되었다면 로그인이 되었다는 것임!!
    // 다른 페이지에서 로그인 되었다고 인지하기 위해, 회원정보를 세션에 저장
    // 해당하는 id의 회원정보 얻어오기
    // $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
 
    // 세션에 저장
    session_start();
    $_SESSION['stdnum']=$memberId;
    $_SESSION['pw']=$memberPw;
    // $_SESSION['email']=$row['email'];
 
    // 세션저장이 되었으니 home.php페이지로 이동
    echo "
        <script>
            location.href='home.php';
        </script>
    ";
?>

