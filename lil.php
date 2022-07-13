<?php
$id = $_POST['id'];
echo $id ;
if(!empty($_FILES['file'])){ 

$new_name = $id ; 

    $ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

    
    move_uploaded_file($_FILES["file"]["tmp_name"], "upload/{$new_name}.{$ext}");

    

      $exted_image = "upload/{$new_name}.{$ext}";
      $name = "{$new_name}.{$ext}"; 

    

}
?>