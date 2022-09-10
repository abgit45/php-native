<?php
if(isset($_POST['su'])){
  $ext = end(explode(".",$_FILES['su'] ['name']));
  if(in_array($ext))
  {
    if($_FILES["su"] ["size"]<5000)
    {
      $name = md5(rand()) . '.' . $ext;
      $folder = 'upload/'.$name ;
      move_uploaded_file($_FILES['su'] ['tmp_name'],$folder);
      header("location:uploads.php?file-name=".$name."" );
    }
    else
    {
      echo "big";
    }
  }
  else
  {
    echo"invalid upload image";
  }
  $img_name = $_FILES['fileToUpload'] ['name'];
  $tmp_img_name = $_FILES['fileToUpload'] ['tmp_name'];
  


}   

?>



<!DOCTYPE html>
<html>
<body>

<form action="insert.php" method="post" enctype="multipart/form-data">
<input type="text" name="new-name">
  <input type="file" name="fileToUpload" id="fileToUploadUpload">
  <input type="submit" value="up" name="su">
</form>