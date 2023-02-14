/*

AJAX : Asynchronous Javascript snd XML
AJAX is not a programming language. It is set of 
existing technologies.
AJAX helps in fetching data asynchronously without 
interfering with the exisiting page.
No page reload/refresh
Modern websites use JSON instead or XML for data transfer

AJAX uses XMLHttpRequest object (also called XHR object)
to achieve this.

*/

console.log("AJAX tutorial");

// let fetchBtn = document.getElementById("fetchbtn");
// fetchBtn.addEventListener("click", buttonClickHandler);

// function buttonClickHandler() {
//     console.log("You have clicked the fetchBtn");

//     //instantiate an xhr object
//   const xhr = new XMLHttpRequest();

//   //Open the object : method,url,async
//   // GET
//   // xhr.open("GET", "https://jsonplaceholder.typicode.com/todos/1", true);

//   // POST
//   xhr.open("POST", "https://dummy.restapiexample.com/api/v1/create", true);
//   xhr.getResponseHeader('Content-type','application/json');

//   //What to do on progress (optional)
//   xhr.onprogress = function () {
//     console.log("On progress");
//   };

//   //old 5 step
//   // xhr.onreadystatechange = function(){
//   //     console.log('Ready state is ',xhr.readyState);
//   // }

//   //What to do when response is ready : xhr step 4 : ready
//   xhr.onload = function () {
//     if (this.status === 200) {
//       console.log(this.responseText);
//     } else {
//       console.log("Some error occured");
//     }
//   };
//   //send the request
//   params = `{"name":"test567665634","salary":"123","age":"23"}`;
//   xhr.send(params);
//   console.log('We are done');

// }

let popBtn = document.getElementById('popBtn');
popBtn.addEventListener('click', popHandler);

function popHandler() {
    console.log('You have clicked the pop handler');

    // Instantiate an xhr object
    const xhr = new XMLHttpRequest();

    // Open the object
    xhr.open('GET', 'https://dummy.restapiexample.com/api/v1/employees', true);


    // What to do when response is ready
    xhr.onload = function () {
        if(this.status === 200){
            let obj = JSON.parse(this.responseText);
            console.log(obj);
            let list = document.getElementById('list');
            str = "";
            for (key in obj)
            {
                str += `<li>${obj[key].employee_name} </li>`;
            }
            list.innerHTML = str;
        }
        else{
            console.log("Some error occured")
        }
    }

    // send the request
    xhr.send();
    console.log("We are done fetching employees!");
    
}
