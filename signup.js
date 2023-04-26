const form = document.getElementById("form");
const submitbtn = document.getElementById("submit-btn");
const errormsg = document.getElementById("errormsg");
const username = document.getElementById("username");
const pass = document.getElementById("password");
const re_pass = document.getElementById("re_password");

submitbtn.onclick = (e) =>
{
    e.preventDefault(); 
    //console.log("clicked");

    var xhttp = new XMLHttpRequest();
    xhttp.open("POST","php/do_signup.php",true);
    xhttp.onload=()=>
    {
        if(xhttp.readyState==4 && xhttp.status===200)
        {  
            let data = xhttp.response;
            if(data=="success")
            {
                location.href="chat.php";   
            }
            else
            {
                errormsg.style.display="block";
                errormsg.textContent = data;
                if(data=="Password didn't match. Try again")
                {
                    pass.value="";
                    re_pass.value="";
                }
                else if(data=="Username already exists. Please try with another one")
                {
                    username.value="";
                    pass.value="";
                    re_pass.value="";
                }   
            }
            //console.log(data);
        }
    }
    
    let formdata= new FormData(form);
    xhttp.send(formdata);
}
