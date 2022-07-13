<?php
if(!empty($_FILES['file'])){ 
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
}
?>
