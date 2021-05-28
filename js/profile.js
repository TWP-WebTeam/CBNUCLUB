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