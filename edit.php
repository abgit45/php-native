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
     
     <th>id</th>
     <th>username</th>
     <th>password</th>
     <th>email</th>
     <th>telnum</th>
     <th>edit</th>
    

</tr>
   
<form action="login.php" method="post" enctype="multipart/form-data">
 <?php

  ?>
<?php
//get data prepar edit
include('config.php');
$conn = mysqli_connect ($serverName,$UserName, $password , $dbName );
if(!empty($_POST['id']))
{
    $id= $_POST["id"];
    $user= $_POST["user"];
    $pass= $_POST["pass"];
    $em= $_POST["email"];
    $tel= $_POST["telnum"];
   
    
}else

{
     $id= "";
     $user= "";
     $pass= "";
     $em= "";
     $tel= "" ;
}
//get data for edit
if(!empty($_POST['eid']))
{
 $eid= $_POST["id"];
$euser= $_POST["username"];
$epass= $_POST["password"];
$eem= $_POST["email"];
$etel= $_POST["telnum"];
printf($eid,$euser,$epass,$eem,$etel);
$sql="UPDATE `users` SET `id` = '$eid' , `username` = '$euser', `password` = '$epass', `email` = '$eem', `telnum` = '$etel' WHERE id='$eid' ";


$result = mysqli_query($conn,$sql);
if ($result) {
    header("Refresh:1;url= https://localhost/0.3/login.php");
}else

{
   echo "<font color='red'>is a error in your delete".mysqli_error($conn);
}
}
?> 
  <tr>
<td> <input  class="" type="number" name="id" placeholder ="id" value="<?php echo $id;?>" >  </td>
<td> <input  class="" type="userName" name="user" placeholder ="username" value="<?php echo $user;?>" >  </td>
<td> <input  class="" type="password" name="pass" placeholder ="password" value="<?php echo $pass;?>" >  </td>
<td> <input  class="" type="email" name="email" placeholder ="email" value="<?php echo $em;?>" >  </td>
<td> <input  class="" type="telnum" name="telnum" placeholder ="tel_num" value="<?php echo $tel;?>" >  </td>
<td> <input class="btn btn-info " type="submit" value="edit" >  </td>
 


</tr>
</form>

</table>
</body>
</html>


