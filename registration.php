<?php
//echo('hello');
$username=$_POST['username'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$emailid=$_POST['emailid'];
if(!empty($username)||!empty($password1)||!empty($password2)||!empty($emailid))
{
    $host= "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname="smart_city";
    
    
    // database connection
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
//create connection
if($conn -> connect_errno){
    die('connection failed('. mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else
    {
        $SELECT="SELECT emailid From userdata WHERE emailid =? Limit 1";
        $INSERT="INSERT into userdata (username,password1,password2,emailid)

        values (?,?,?,?)";
        //preapare statement
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$emailid);
        $stmt->execute();
        $stmt->bind_result($emailid);
        $stmt->store_result();
        $rnum=$stmt -> num_rows;
        if($rnum==0)
        {
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssss", $username, $password1, $password2, $emailid);
            $stmt->execute();
            echo 
            (
                '<script> 
               
                location.href = "http://localhost/smart-city/index3.html";
                alert("New record inserted successfully");
                </script>'
                 )
            ;
        }else{
            echo (
                '<script> 
                
                location.href = "http://localhost/smart-city/login.html";
                alert("someone already register using this email");
                </script>'
                 );
        }
        $stmt->close();
       
        $conn->close();
    }
}else
    {
        echo 
        (
            '<script> 
            
            location.href = "http://localhost/smart-city/login.html";
            alert("All feild are require");
            </script>'
             );
        die();
    }
?>
      

