<!DOCTYPE html>
     <html lang="en">
        <head> 
     <?php require("upload.php"); ?>
             <?php include ("config.php"); ?>
          <meta charset="UTF-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                         <title>Document</title>
                              <link rel="stylesheet" href="style22.css" wfd-invisible="true">                  
                                   </head>
                                   
                                        <body>
                                             <table> 
                                                  <tbody>
                                                     <tr> 
                                                <th></th> 
                                                        <th></th>
                                                             </tr> 
                                                            
                                                             
                                                             
                                                                                               
                                                             
                                                             <form action="" method="post" enctype="multipart/form-data">                                                                                                                                                                            
                                                                 <?php $conn = mysqli_connect ($serverName,$UserName, $password , $dbName ); ?>
                                                                      <?php
                                                                                                                             $sql = "SELECT * FROM users " ;
                                                                                                                             $result= mysqli_query($conn,$sql);

                                                                                                                             $query= "SELECT MAX(id) AS ids FROM users " ;
                                                                                                                             $result_query= mysqli_query($conn,$query);

                                                                                                                             $row = mysqli_fetch_assoc($result_query);     
                                                                                                                                  $output = ""." ".$row['ids'];
                                                                                                                                  
                                                                                                                                  
                                                                                                                                  ?>  
                                                                                                                                   <p id="demo"></p>
                                                                                          
                                                                                               
                                                                                                                                  
                                                                                                                             <tr> 
                                                                                                                             
                                                                                                                                  <td><label>upload</label></td>

                                                                                                                                       <td>  
                                                                                                                                       <input type="file"name="image" value="">		
                                                                                                                                                                                                                                                                           
                                                                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                       </td>
                                                                                                                                       
                                                                                                                             </tr> 
                                                                                                                            
                                                                                           <tr> 
                                                                                           <td><label>userid</label></td>
                                                                                               <td> <input class="" type="text" name="id" placeholder ="userid" value = "<?php echo $output +1 ;?>" > </td>
                                                                                               
                                                                                          </tr>
                                                                                          <tr>
                                                                                          
                                                                                          </tr>

                                                                                           <tr>
                                                                                           
                                                                                           <td><label>user</label></td>
                                                                                               <td><input class="" type="userName" name="user" placeholder="username"> </td>                                                                                         
                                                                                          </tr>

                                                                                           <tr> 
                                                                                           <td><label>pass</label></td>
                                                                                               <td>  <input class="" type="password" name="pass" placeholder="password"> </td> 
                                                                                          </tr>

                                                                                           <tr> 
                                                                                           <td><label>email</label></td>
                                                                                               <td> <input class="" type="email" name="email" placeholder="email">  </td>
                                                                                           </tr>

                                                                                           <tr>
                                                                                           <td><label>telnum</label></td>
                                                                                               <td> <input class="" type="telnum" name="telnum" placeholder="tel_num">  </td> 
                                                                                          </tr>

                                                                                           <tr>
                                                                                           <td></td>
                                                                                           <td> <button class ="bb" name ="upload" >insert</button>  </td> 
                                                                                          
                                                                                          </tr>
                                                                                           
                                                                                               
                                                                                          
                                                                                          <?php
                                                            
                                                            $conn = mysqli_connect ($serverName,$UserName, $password , $dbName );
                                                       if(!empty($_POST['user']))
                                                       
          {
 if ($_FILES['image']['size'] == 0)
{
     $hasimg = 0;
}
else
{
     $hasimg = 1;
}
                                                                      $usid = $_POST["id"];
                                                                 $Username = $_POST["user"];
                                                            $password = $_POST["pass"];
                                                       $email = $_POST["email"];
                                                  $telnum= $_POST["telnum"];
                                            
                                             //sql
                                        $sql="INSERT INTO `users` (`id`,`username`, `password`, `email`, `telnum`,`has_img`) VALUES ('$usid','$Username', '$password', '$email', '$telnum','$hasimg')";
                                   $result = mysqli_query($conn,$sql);
                              if (!$result) 
                    {     echo "is a problem in insert";    
               }else{           
               
                    echo '<script language="Javascript">
                    <!--
                    document.location.replace("login.php");
                    // -->
                    </script>';
                    
                    }
          }
     ?>           
                                       

</form>

</table>



</body>
</html>


