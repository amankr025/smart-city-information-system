<?php
echo "hello";
$emailid=$_POST['emailid'];
$password2=$_POST['password2'];
//database connection
$con=new mysqli("localhost","root","","smart_city");
if($con -> connect_errno){
    die('connection failed('. mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else
    {
        $stmt=$con->prepare("SELECT * from userdata WHERE emailid=?");
        $stmt->bind_param("s",$emailid);
        $stmt->execute();
        $stmt_result=$stmt-> get_result();
        if($stmt_result->num_rows>0){
        $data=$stmt_result->fetch_assoc();
       if($data['password2']===$password2)
        {
              echo('<script> 
              
            
              location.href = "http://localhost/smart-city/addcontent.html";
              alert("Successfully Login");
              </script>');
        }else{
            echo('<script> 
            
            
            location.href = "http://localhost/smart-city/adminlogin.html";
            alert("Invalid Email or Password");
            </script>');

        }
        }else{
            echo('<script> 
            
           
            location.href = "http://localhost/smart-city/adminlogin.html";
            alert("Invalid Email or Password");
            </script>');
        }
    }

?>