<?php //SELECT 정보가져오기
    include "./include/session.php";
    include "./include/dbConnect.php";
    /*echo "<pre>";
    var_dump($_POST);*/
    $memberId = $_POST['memberID'];
    $memberPw = $_POST['memberPW'];


    $sql = "SELECT * FROM memberdb WHERE stdnum = '{$memberId}' AND pw = '{$memberPW}'";
    $res = $dbConnect->query($sql);

        $row = $res->fetch_array(MYSQLI_BOTH);
        if ($row != null) {
            $_SESSION['stdnum'] = $row['memberID'];
            header ('Location: home.php');
        }

        if($row == null){
            echo "
            <script>
                alert('아이디와 비밀번호를 확인하세요.');
                history.back();
            </script>
            ";
            exit;
            // echo '로그인 실패 아이디와 비밀번호가 일치하지 않습니다.';
        }
?>
<!-- $_SESSION['stdnum'].'님 안녕하세요'; -->
<!-- echo "<a href='./signin.php'>로그아웃 하기</a>"; -->