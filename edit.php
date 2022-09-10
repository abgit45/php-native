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
 $eid= $_POST["eid"];
$euser= $_POST["euser"];
$epass= $_POST["epass"];
$eem= $_POST["eemail"];
$etel= $_POST["etelnum"];
printf($eid,$euser,$epass,$eem,$etel);
$sql="UPDATE `users` SET `id` = '$eid' , `username` = '$euser', `password` = '$epass', `email` = '$eem', `telnum` = '$etel' WHERE id='$eid' ";


$result = mysqli_query($conn,$sql);
if ($result) {
 header("Refresh:1;url= https://localhost/crud/index.php");
}else

{
   echo "<font color='red'>is a error in your delete".mysqli_error($conn);
}
}
     ?>
  <tr>
<form action="edit.php" method="POST">
<td> <input  class="" type="number" name="eid" placeholder ="id" value="<?php echo $id;?>" >  </td>
<td> <input  class="" type="userName" name="euser" placeholder ="username" value="<?php echo $user;?>" >  </td>
<td> <input  class="" type="password" name="epass" placeholder ="password" value="<?php echo $pass;?>" >  </td>
<td> <input  class="" type="email" name="eemail" placeholder ="email" value="<?php echo $em;?>" >  </td>
<td> <input  class="" type="telnum" name="etelnum" placeholder ="tel_num" value="<?php echo $tel;?>" >  </td>
<td> <input class="btn btn-info " type="submit" value="edit" >  </td>
 


</form>
</tr>

</table>
</body>
</html>


