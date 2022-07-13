<!-- sql update !-->
<?php
if(!empty($_POST['eid']))
{

include('config.php');
$conn = mysqli_connect ($serverName,$UserName, $password , $dbName );
$id= $_POST["eid"];
$euser= $_POST["euser"];
$epass= $_POST["epass"];
$eem= $_POST["eemail"];
$etel= $_POST["etelnum"];
$file = $_POST ["file"];
$checkbox= $_POST["checkbox"];
$hasimg = $_POST ["im"];
$sql="UPDATE `users` SET `id` = '$id' , `username` = '$euser', `password` = '$epass', `email` = '$eem', `telnum` = '$etel' , `has_img` = '$hasimg' WHERE id='$id' ";
$result = mysqli_query($conn,$sql);
}
else
{
$id   = "";
$euser = "";
$epass = "";
$eem   ="" ;
$etel  ="" ;
$file  ="";
$checkbox = "";
$hasimg   ="";
}
// sql delete
if(!empty($checkbox))
{
  unlink("upload/$id.png");

}

else
{
}
// upload
if(isset($_POST['submit']))
{
 $png = ".png";
  $img_name = $_FILES['file']['name'];
  $tmp_img_name = $_FILES['file']['tmp_name'];
  $folder = 'upload/';
  move_uploaded_file($tmp_img_name,$folder.$img_name);
  rename($folder.$img_name,$folder.$id.$png);

}
header("location:http://localhost/0.7/login.php");

?>





