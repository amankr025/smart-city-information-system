<?php
//echo('hello');

$image=$_POST['image'];
$description=$_POST['description'];

if(!empty($image)||!empty($description))
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
       // $SELECT="SELECT emailid From userdata WHERE emailid =? Limit 1";
        $INSERT="INSERT into place (image,description)

        values (?,?)";
        //preapare statement
       // $stmt=$conn->prepare($SELECT);
       // $stmt->bind_param("s",$emailid);
       // $stmt->execute();
       // $stmt->bind_result($emailid);
       // $stmt->store_result();
       // $rnum=$stmt -> num_rows;
       // if($rnum==0)
       // {
         //   $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ss",$image, $description);
            $stmt->execute();
            echo 
            (
                '<script > 
                
                alert("New record inserted successfully");
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
        ("All feild are required");
        die();
    }
?>
      

