<?php

include('db.php');
include('db2.php');
include('function.php');

if(isset($_POST["operation"]))
	{
		if($_POST["operation"] == "Add")
		{
			
				
						
						$statement = $connection->prepare("
							INSERT INTO roles (id_role,role_name) 
							VALUES (:ids,:role_name);

							INSERT INTO rolles_permission (roles_role_id,roles_permission_code) 
							VALUES (:ids,:code);
						");
						$result = $statement->execute(
							array(
								':role_name'	=>	$_POST["role_name"],
								':ids'	=>	$_POST["userid"],
								':code'	=>	$_POST["GFG_DOWN"],
							)
						);
						if(!empty($result))
						{
							echo 'Data Inserted';
						}
					
				
		}
	}
 
 if($_POST["operation"] == "Edit")
 {
	
	 $statement = $connection->prepare(
		 "UPDATE roles
		 SET role_name = :role_name, id_role = :id
		 WHERE id_role = :id

		 UPDATE rolles_permission
		 SET roles_permission_code = :code
		 WHERE roles_role_id = :id
		 "
	 );
	 $result = $statement->execute(
		 array(
			':role_name'	=>	$_POST["role_name"],
			 ':code'	=>	$_POST["GFG_DOWN"],
			 ':id'			=>	$_POST["user_id"]
		 )
	 );
	 if(!empty($result))
	 {
		 echo 'Data Updated';
	 }
 }

?>