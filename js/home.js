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
res.write(data); 
res.end();
}
});
});
server.listen(3000);
