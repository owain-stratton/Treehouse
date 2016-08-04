var router = require('./router.js');
//Problem: We need a simple way to look at a user's badge count and JavaScript points from a web browser

//Solution: Use node.js to perform the profile lookups and serve our template via HTTP

// Create a web server
var http = require('http');

http.createServer(function (request, response) {
    router.home(request, response);
    router.user(request, response);
    //response.end('Hello World');
}).listen(1337, '127.0.0.1');
console.log('server is running at http://127.0.0.1:1337');

