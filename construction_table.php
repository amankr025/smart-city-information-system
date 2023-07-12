<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="cons.css">
    <title>construction</title>
  </head>
  <body>
    <div class="container">
    <br>
    <a href="addconstruction.html" class="btn btn-primary">Add</a>
    <br>
    <br>
      <div class="row">
      
        <div class="col-md-12">
       
        <div class ="card">
         <div class="card-head">
        
          <center><h4 class="text-red" > construction</h4></center>
          </div>
          <div class="card-body">
            <?php
            $conn=mysqli_connect("localhost","root","","smart_city");
            $query="SELECT * FROM construction";
            $query_run=mysqli_query($conn,$query);
            ?>
            <table class="table" >
              <thead>
                <tr>
                  <th>state</th>
                  <th>city</th>
                  <th>Project Name</th>
                  <th>Sector</th>
                  <th>project_by</th>
                  <th>project_cost</th>
               <!--   <th>EDIT</th>
                  <th>DELETE</th>-->
                 
                
                </tr>
                <tbody>
                  <?php
                   if(mysqli_num_rows($query_run)>0)
                   { 
                    foreach($query_run as $row )
                    {
                     
                     ?>
                     <tr>
                      <td><?php echo $row['state'];  ?></td>
                    
                      <td><?php echo $row['city'];  ?></td> 
                  
                      <td><?php echo $row['project_name'];  ?></td>
                      
                    
                      
                      <td><?php echo $row['sector'];  ?></td>
                      
                     
                      <td><?php echo $row['project_by'];  ?></td>
                      
                      
                      <td><?php echo $row['project_cost'];  ?></td>
                    <!--  <td><a href="#" class="btn btn-success">EDIT</a></td>
                       <td><a href="#" class="btn btn-danger">DELETE</a></td>-->
                      
                    
                      </tr>
                      <?php
                    }
                   }
                   else
                   {
                    ?>
                    <tr>
                      <td>No record available</td>
                    </tr>
                    <?php
                    

                   }

                  ?>
                  

                </tbody>
              </thead>
            </table>
          </div> 
            
         </div>
      </div>
    </div>
</div>

    
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
  </body>
</html>