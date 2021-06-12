var list = ['0'];
var i = 0;
var ele;

function insert_list(){
    ele =document.getElementById("cname").value;
    console.log(ele);    
}

function push_list(){
    list.push(ele);
    i++;
    console.log(list);
    location.href = "../html/profile.html?"+list+":"+ele;
}

// function print_list(){
//     document.getElementById("clist").innerHTML = list;
// }

// (function (global) {
//     document.getElementById("output").value = global.localStorage.getItem("mySharedData");
// }(window));

// $(document).ready(function () {
//     var val = location.href.substr(
//         location.href.lastIndexOf('=') + 1
//     );
//     console.log('val : ' + val);
// });

function df(){
temp = location.href.split("?");
data=temp[1].split("/");
getElementById('output').innerHTML = ""+heart;
    console.log("TAGTAG : " + heart);    //콘솔에 전달받은 값 띄워서 확인하기
    alert("ghkrdls"+heart);
}

function dhf(){
    alert("찜을 하셨습니다! \n\n");
}