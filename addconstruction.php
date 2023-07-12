<?php
//echo('hello');
$state=$_POST['state'];
$city=$_POST['city'];
$project_name=$_POST['project_name'];
$sector=$_POST['sector'];
$project_by=$_POST['project_by'];
$project_cost=$_POST['project_cost'];
if(!empty($state)||!empty($city)||!empty($project_name)||!empty($sector) ||!empty($project_by)||!empty($project_cost))
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
        $INSERT="INSERT into construction (state,city,project_name,sector,project_by,project_cost)

        values (?,?,?,?,?,?)";
        //preapare statement
       // $stmt=$conn->prepare($SELECT);
      //  $stmt->bind_param("s",$emailid);
       // $stmt->execute();
       // $stmt->bind_result($emailid);
       // $stmt->store_result();
       // $rnum=$stmt -> num_rows;
       // if($rnum==0)
       // {
         //   $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssssss",$state,$city,$project_name,$sector,$project_by,$project_cost);
            $stmt->execute();
            echo '<span style="color:#AFA;text-align:center;"><center>New data Inserted</center></span>';
        
        $stmt->close();
       
        $conn->close();
    }
}

else
    {
        echo 
           "All feild are require";
        die();
    }
?>
      

