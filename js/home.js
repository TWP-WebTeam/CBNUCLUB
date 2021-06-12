// let _article;

// function Signup(){
    
//     _article = <form>
//         <label>학번</label>
//         <input type="text"></input>
//     </form>
//     document.getElementById("article").innerHTML = _article;
// }

// function Change_img(){
//     var element = document.getElementById("list1");
   
//     element.innerHTML = '<img src="../img/website.png" alt="11" style="width: 25px; height: 25px;"/>';
// }

// function Change_text(e){
//     var origin_element = document.getElementById("list1");
//     origin_element.innerHTML = "전자정보대학";
// }

// temp = location.href.split("?");
// data = temp[1].split(":");
// clubname = data[0];
// clubgroup = data[1];
// console.log(clubname);
// document.getElementById('clubname').innerHTML = clubname;
// document.getElementById('clubgroup').innerHTML = clubgroup;
// document.getElementById('clubname').innerHTML = clubname;
var http = require('http');
var fs = require('fs')
var server = http.createServer(function (req, res) {
fs.readFile('../html/home.html', function(error, data) {
if (error) {
res.writeHead(404);
res.write(error);
res.end();
} else {
res.writeHead(200, {'Content-Type': 'text/html'});
res.write(data); //The ‘data’ is our actual index.html file
res.end();
}
});
});
server.listen(3000);