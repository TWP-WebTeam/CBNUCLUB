<?php
    $userid = $_SESSION['ses_userid'];

    $stmt = $db -> prepare("SELECT * FROM membertbl WHERE memberID=:userid");
    $stmt -> bindParam("userid",$userid);
    $stmt -> execute();
    $user = $stmt -> fetch()
    $sql = $db -> prepare("UPDATE register set pw=:pw, tel=:tel WHERE userid=:userid");
    $sql -> bindParam("pw",$pw1);
    $sql -> bindParam("tel",$tel);
    $sql -> bindParam("userid",$userid)
    if(!$pw1 || !$pw2){
        errMsg("비밀번호를 입력해주세요.");
    } elseif($pw1 != $pw2){
        errMsg("비밀번호가 일치하지 않습니다.");
    } elseif($pw1 == $user['pw']){
        errMsg("이전 비밀번호와 같습니다.");
    } elseif (!$tel) {
        errMsg("전화번호를 입력해주세요.");
    
    $sql -> execute();
    
    header('location:../main.php');
?>