<?php
include('db.php');
include('db2.php');
include('function.php');
if(isset($_POST["operation"]))
	{
		if($_POST["operation"] == "Add")
		{
			$firstname=$_POST["first_name"];
			$lastname=$_POST["last_name"];

			$sql ="SELECT * FROM users WHERE first_name='$firstname' AND last_name='$lastname'" ;
			$check=mysqli_query($conn,$sql);
			$checkrows=mysqli_num_rows($check);
			if($checkrows>0) {
				echo 'costom exist';
			 } else 
			 { 
				
						$image = '';
						if($_FILES["user_image"]["name"] != '')
						{
							$image = upload_image();
						}
						$statement = $connection->prepare("
							INSERT INTO users (first_name, last_name, email, pass, image, role_name) 
							VALUES (:first_name, :last_name, :email, :pass, :image, :role_name)
						");
						$result = $statement->execute(
							array(
								':first_name'	=>	$_POST["first_name"],
								':last_name'	=>	$_POST["last_name"],
								':email'	=>	$_POST["email"],
								':pass'	=>	$_POST["pass"],
								':image'		=>	$image,
								':role_name'	=>	$_POST["role_name"]
							)
						);
						if(!empty($result))
						{
							echo 'Data Inserted';
						}
					
				}
		}
	}

 if($_POST["operation"] == "Edit")
 {
	 $image = '';
	 if($_FILES["user_image"]["name"] != '')
	 {
		 $image = upload_image();
	 }
	 else
	 {
		 $image = $_POST["hidden_user_image"];
	 }
	 $statement = $connection->prepare(
		 "UPDATE users 
		 SET first_name = :first_name, last_name = :last_name, email = :email, pass = :pass, image = :image, :role_name = :role_name
		 WHERE id = :id
		 "
	 );
	 $result = $statement->execute(
		 array(
			 ':first_name'	=>	$_POST["first_name"],
			 ':last_name'	=>	$_POST["last_name"],
			 ':email'	=>	$_POST["email"],
			 ':pass'	=>	$_POST["pass"],
			 ':image'		=>	$image,
			 ':role_name'		=>	$_POST["role_name"]
		 )
	 );
	 if(!empty($result))
	 {
		 echo 'Data Updated';
	 }
 }

?>