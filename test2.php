<?php 

include ("config.php"); 
?>


<?php
$sql = "SELECT * FROM users " ;

$result= mysqli_query($conn,$sql);


$query= "SELECT MAX(id) AS ids FROM users " ;
$result_query= mysqli_query($conn,$query);

 


$conn = mysqli_connect ($serverName,$UserName, $password , $dbName );
  $x=0;
  
  ?>


<div class="row">
      <table>
<thead>
        <tr>
          <th>id</th>
          
              
     
  </tr>
      </thead>
 

      <?php
      
      

        
      
        
      
      $row2 = mysqli_fetch_assoc($result_query);
      
      $output = ""." ".$row2['ids'];
      
      
        
             ?>
                <tr>
                    <form action="login.php" method="POST">                                          
                      <td><?php echo $output; ?></td>
  
                    </form>
                </tr>
            <?php
         
    
      $x++;
      

      ?>











 