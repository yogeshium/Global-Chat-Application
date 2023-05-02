const form = document.getElementById("form");
const submitbtn = document.getElementById("submit-btn");
const msg= document.getElementById("message");
const reciever = document.getElementById("reciever").value;
chatarea = document.getElementById("body");
submitbtn.onclick = (e) =>
{
    e.preventDefault(); 
    console.log("clicked");

    var xhttp = new XMLHttpRequest();
    xhttp.open("POST","php/put_chat.php",true);
    xhttp.onload=()=>
    {
        let data=xhttp.response;
        console.log(data);
        if(xhttp.readyState==4 && xhttp.status===200)
        {  
           msg.value="";
        }
    }
    
    let formdata= new FormData(form);
    xhttp.send(formdata);
}

setInterval(()=>{
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET","php/get_chat.php?username="+reciever,true);
    xhttp.onload=()=>
    {
        let data=xhttp.response;
        chatarea.innerHTML=data;
    }
    xhttp.send();
},10);
