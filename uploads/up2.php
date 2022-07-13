<?php
$id = $_POST ['id'];
unlink("upload/$id.png");
if(isset($_POST['submit']))
{
 $png = ".png";
  $img_name = $_FILES ['file'] ['name'];
  $tmp_img_name = $_FILES ['file'] ['tmp_name'];
  $folder = 'upload/';
  move_uploaded_file($tmp_img_name,$folder.$img_name);
  rename($folder.$img_name,$folder.$id.$png);
}

?>