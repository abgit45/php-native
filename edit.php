<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<link rel="stylesheet" href="style22.css">
<table>
<tr>
     
     <th></th>
     <th></th>
    

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

<form action="edittest.php" method="POST" enctype="multipart/form-data">
     <tr>
     <td><label>image</label></td>
     <td> 
     <input  class="im" type="image" name="eimage" src='upload/<?php echo $id.".png"; ?>' width="70px" height="70px"> 
     <input type="hidden" name="id2" id ="id2" value="<?php echo $id;?>" >
     
<input class = "file" type="file" name="file" id ="file">
<br>

<?php 
$conn = mysqli_connect ($serverName,$UserName, $password , $dbName );
if($hasimg == 1)
{
  ?><input class = "check" type="checkbox" name = "checkbox"> supp<?php 
}
else
{
   ?><input type="hidden"><?php  
}
?>
</td>
     </tr>
<tr>
<td><label>id</label></td>
<td><input  class="" type="id" name="eid" placeholder ="id" value="<?php echo $id;?>" ></td>

</tr>

<tr>
<td><label>user</label></td>
<td> <input  class="" type="userName" name="euser" placeholder ="username" value="<?php echo $user;?>" ></td>

</tr>

<tr>
<td><label>pass</label></td>
<td> <input  class="" type="password" name="epass" placeholder ="password" value="<?php echo $pass;?>" >  </td>

</tr>
<tr>
<td><label>email</label></td>
<td> <input  class="" type="email" name="eemail" placeholder ="email" value="<?php echo $em;?>" >  </td>

</tr>

<tr>
<td><label>telnum</label></td>
<td> <input  class="" type="telnum" name="etelnum" placeholder ="tel_num" value="<?php echo $tel;?>" >  </td>

</tr>
<input  class="" type="hidden" name="im" placeholder ="im" value="<?php echo $hasimg;?>" >  
<tr>



</tr>
<tr>
<td></td>
<td><button  class="btn btn-info " type="submit" name ="submit"> edit</button> </td>

</tr>

</form>



</table>


</body>
</html>


