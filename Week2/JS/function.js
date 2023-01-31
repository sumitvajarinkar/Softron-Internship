console.log('This is function tutorial')

// with arguments
function greet(name, msg='Default value')
{
    console.log(msg + ' ' + name)
    console.log(name +" is a good boy")

}

let name1='sumit'
let name2='shubham'
let name3='saket'
let name4='mit'
let msg='GM'
greet(name1,msg)
greet(name2,msg)
greet(name3,msg)
greet(name4)

//return type
function sum(a,b,c)
{
    let d=a+b+c
    return d
    // unrechable code
    // console.log('This will not print')
}
let returnval=sum(1,2,3)
console.log(returnval)
// console.log(n1 +" is a good boy")
// console.log(`${n1} is a good boy`)
// console.log(`${n2} is a good boy`)
// console.log(`${n3} is a good boy`)
// console.log(`${n4} is a good boy`)
