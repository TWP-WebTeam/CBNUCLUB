var http = require('http');
var fs = require('fs')
var server = http.createServer(function (req, res) {
fs.readFile('../html/clubpage1.html', function(error, data) {
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