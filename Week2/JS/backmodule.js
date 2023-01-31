const fs = require("fs");
let text = fs.readFileSync("msg.txt","utf-8")
text = text.replace('Sumit','Saket')
console.log("The content of the file is")
console.log(text);

console.log('creating a new file..')
fs.writeFileSync('saket.txt', text)