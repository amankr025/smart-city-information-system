<?php
echo('hello');
$name=$_POST['name'];
$phone_number=$_POST['phone_number'];
$email=$_POST['email'];
$message=$_POST['message'];
if(!empty($name)||!empty($phone_number)||!empty($email)||!empty($message))
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
        //$SELECT="SELECT emailid From contactus WHERE emailid =? Limit 1";
        $INSERT="INSERT into contactus (name,phone_number,email,message)

        values (?,?,?,?)";
       // echo 'helloinsert'; 
        //preapare statement
       // $stmt=$conn->prepare($SELECT);
       // $stmt->bind_param("s",$emailid);
       // $stmt->execute();
       // $stmt->bind_result($emailid);
       // $stmt->store_result();
       // $rnum=$stmt -> num_rows;
       // $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("siss", $name, $phone_number, $email, $message);
            $stmt->execute();
            echo 
            (
                '<script> 
                alert("New record inserted successfully");
                location.href = "http://localhost/smart-city/index3.html";
                </script>'
                 )
            ;
    
        $stmt->close();
       
        $conn->close();
    }

}
else
    {
        echo 
        (
            '<script> 
            alert("All feild are require");
            location.href = "http://localhost/smart-city/index3.html";
            </script>'
             );
        die();
    }
?>
      

