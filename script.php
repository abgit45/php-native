<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php 

if(isset($_POST['upload'])){ 

	
		$new_name = $_POST['new-name']; 

		

			
			
			
				
				$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

				
				move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/{$new_name}.{$ext}");

				
					$success = "File uploaded successfully"; 

					$uploaded_image = "uploads/{$new_name}.{$ext}";
					$name = "{$new_name}.{$ext}"; 
				

			

				

	}else
	{

	}



