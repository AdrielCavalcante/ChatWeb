const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
    e.preventDefault();
}

sendBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest(); //Objeto XML
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                inputField.value = '';  
                scrollToBottom();
            }
        }
    }
    //Ajax para php
    let formData = new FormData(form);
    xhr.send(formData); //enviando para o php  
}

chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}

chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}

setInterval( ()=>{
    let xhr = new XMLHttpRequest(); //Objeto XML
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                chatBox.innerHTML = data;
                if (!chatBox.classList.contains("active")) {
                    scrollToBottom();
                }
            }
        }
    }
    //Ajax para php
    let formData = new FormData(form);
    xhr.send(formData); //enviando para o php   
}, 700); //A função executará após 0.7seg

function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}