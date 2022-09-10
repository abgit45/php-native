<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<link rel="stylesheet" href="style3.css">
<table>
<tr>
     
     
     <th>username</th>
     <th>password</th>
     <th>email</th>
     <th>telnum</th>
     <th>insert</th>
    

</tr>
   
    
 <?php

  ?>

  <tr>
<form action="insert.php" method="POST">


<td> <input  class="" type="userName" name="user" placeholder ="username">  </td>
<td> <input  class="" type="password" name="pass" placeholder ="password">  </td>
<td> <input  class="" type="email" name="email" placeholder ="email">  </td>
<td> <input  class="" type="telnum" name="telnum" placeholder ="tel_num">  </td>
<td> <input class="btn btn-info " type="submit" value="insert" >  </td>
 
<?php
include('config.php'); 
$conn = mysqli_connect ($serverName,$UserName, $password , $dbName );
if(!empty($_POST['user']))
{
   $Username = $_POST["user"];
    $password = $_POST["pass"];
    $email = $_POST["email"];
    $telnum= $_POST["telnum"];
  //sql
   $sql="INSERT INTO `users` (`username`, `password`, `email`, `telnum`) VALUES (' $Username', '$password', '$email', '$telnum')";
     $result = mysqli_query($conn,$sql);
     if (!$result) 
      {
         echo "is a problem in insert";
      }
      else
         {
              header("location:login.php");
         }
}
     ?>

</form>
</tr>

</table>
</body>
</html>


