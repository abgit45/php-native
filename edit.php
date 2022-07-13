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
     <th>imag</th>
     <th>edit</th>
    

</tr>
   
    
 <?php

  ?>
<?php
//get data prepar edit
include('config.php');

if(!empty($_POST['id']))
{
    $id= $_POST["id"];
    $user= $_POST["user"];
    $pass= $_POST["pass"];
    $em= $_POST["email"];
    $tel= $_POST["telnum"];
    $im= $_POST["imag"];
    $hasimg = $_POST ['has'];
    
    
}else

{
     $id= "";
     $user= "";
     $pass= "";
     $em= "";
     $tel= "" ;
     $img= "" ;
     $hasimg = "";
}
//get data for edit


     ?>
  <tr>

<form action="edittest.php" method="POST" enctype="multipart/form-data">
<td> <input  class="" type="id" name="eid" placeholder ="id" value="<?php echo $id;?>" >  </td>
<td> <input  class="" type="userName" name="euser" placeholder ="username" value="<?php echo $user;?>" >  </td>
<td> <input  class="" type="password" name="epass" placeholder ="password" value="<?php echo $pass;?>" >  </td>
<td> <input  class="" type="email" name="eemail" placeholder ="email" value="<?php echo $em;?>" >  </td>
<td> <input  class="" type="telnum" name="etelnum" placeholder ="tel_num" value="<?php echo $tel;?>" >  </td>
<input  class="" type="hidden" name="im" placeholder ="im" value="<?php echo $hasimg;?>" >  
<td> 

<input  class="" type="image" name="eimage" src='upload/<?php echo $id.".png"; ?>' width="40px" height="40px">

<input   type="hidden" name="id2" id ="id2" value="<?php echo $id;?>" >
<input type="file" name="file" id ="file">
<?php 
$conn = mysqli_connect ($serverName,$UserName, $password , $dbName );
if($hasimg == 1)
{
  ?><input type="checkbox" name = "checkbox"><?php
}
else
{
   ?><input type="hidden"><?php  
}
?>
</td>

<td><button  class="btn btn-info " type="submit" name ="submit"> edit</button> </td>

</form>

</tr>

</table>


</body>
</html>


