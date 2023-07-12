function Getdata()
{
    var user=document.getElementById("user").value;
    var pass=document.getElementById("pass").value;
    //document.write("username: "+user+"<br>");
   // document.write("password: "+pass);
    if(user=="Aryan"&& pass=="123")
    {
        alert("Successfully login");
        window.location = "index2.html"
    }
    else 
    {
        alert("Invalid userid or password");
    }

}