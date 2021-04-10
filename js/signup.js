const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    console.log("Hello, world");

    /* Parte Backend

    let xhr = new XMLHttpRequest(); //Objeto XML
    xhr.open("POST", "signup.php", true);
    xhr.onload = ()=>{

    }
    xhr.send();*/
}