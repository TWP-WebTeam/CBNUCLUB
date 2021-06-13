function out(){
    var a = document.getElementById("cname").value;
    var b = document.getElementById("name").value;
    var c = document.getElementById("why").value;

    if(a != undefined && b != undefined && c != undefined){
        alert("탈퇴 신청이 접수되었습니다.");
    }
    else{
        alert("폼을 전부 작성해주세요.");
    }
}