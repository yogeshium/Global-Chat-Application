const form = document.getElementById("form");
const submitbtn = document.getElementById("submit-btn");
const errormsg = document.getElementById("errormsg");
const username = document.getElementById("username");
const pass = document.getElementById("password");

submitbtn.onclick = (e) =>
{
    e.preventDefault(); 
    //console.log("clicked");

    var xhttp = new XMLHttpRequest();
    xhttp.open("POST","php/do_login.php",true);
    xhttp.onload=()=>
    {
        if(xhttp.readyState==4 && xhttp.status===200)
        {  
            let data = xhttp.response;
            if(data=="success")
            {
                location.href="users.php";   
            }
            else
            {
                errormsg.style.display="block";
                errormsg.textContent = data;
                if(data=="Password does not match")
                {
                    pass.value="";
                }
                else if(data=="Username does not exist")
                {
                    username.value="";
                    pass.value="";
                }   
            }
            // console.log(data);
        }
    }
    
    let formdata= new FormData(form);
    xhttp.send(formdata);
}
