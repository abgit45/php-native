<?php
$file = $_POST ['file'] ;
$new_name= $_POST["eid"];	
if(!empty($file))
{
    
?><form action="login.php" method="POST"><?php
    $ext = pathinfo($_FILES["$file"]["name"], PATHINFO_EXTENSION);

    move_uploaded_file($_FILES["$file"]["tmp_name"], "upload/{$new_name}.{$ext}");

        $success = "File uploaded successfully"; 

        $exted_image = "upload/{$new_name}.{$ext}";

        $name = "{$new_name}.{$ext}"; 
}
?>

