const http=require('http')
const fs =require('fs')
const fileContent =fs.readFileSync('loops.html')

const sever = http.createServer((req,res)=>{
    res.writeHead(200,{'Content-type':'text/html'});
    req.end(fileContent)
})
Server.listen(80, '127.0.0.1', ()=>{
    console.log('listening on port 80')
})