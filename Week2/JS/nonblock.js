//Synchronous or blocking 
// - Line by Line Execution
//Asynchronous or non-blocking
// - Line by Line Execution not guaranteed 
// - callbacks will fire

// asynchronous
const fs = require("fs");
fs.readFile("msg.txt","utf-8",(err,data)=>{
    console.log(data)
})
console.log('This is msg will print before call back fire')
