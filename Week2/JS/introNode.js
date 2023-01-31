// console.log('Hello World !')
const http = require('http');
const { REPLServer } = require('repl');

const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/html');
    //   res.end('Hello World !');
    res.end(`<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Transition</title>
      <!-- <link rel="stylesheet" href="transition.css"> -->
      <style>
          body{
      background-color: black;
  }
  h3,p{
      color: rgb(255, 0, 242);
      font-weight: bold;
   }
  #box{
      display:flex ;
      height: 200px;
      width: 200px;
      background-color: aqua;
      justify-content: center;
      align-items: center;
      /* transition-property: background-color;
      transition-duration: 1s;
      /* animation-timing-function: ease-in-out;
      transition-delay: 0.3s; */
      /* shorthand  */
      transition: all 1s ease-in-out 0.3s;
  
  }
  #box:hover{
      background-color: rgb(81, 255, 0);
      height: 400px;
      width: 300px;
      border-radius: 100px;
      font-size: 30px;
  }
      </style>
  </head>
  <body>
      <h3>This is css Transition tutorial</h3>
      <div class="container">
          <div id="box">
             <p>This is my box</p> 
          </div>
      </div>
  </body>
  </html>`);
});

server.listen(port, hostname, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});
// REPL Read Evaluate Print Loop means when we open node and code
//for next line :ctrl+ c
// exit : .exit
// _(underscore) means previous variable
/*
> a=34
34
> _
34
> a=455
455
> _
455
> _+5
460

> s='sumit'
'sumit'
> _+' vajarinkar'
'sumit vajarinkar'

press tab 2 times gives variable
*/