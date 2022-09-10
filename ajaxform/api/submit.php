<?php
$host = "localhost";
$name = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=demo", $name, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$response = array('success' => false);

if(isset($_POST['name']) && $_POST['name']!='' && isset($_POST['pas'])  && $_POST['pas']!='' && isset($_POST['teltel'])  && $_POST['teltel']!='' && isset($_POST['mail']) && $_POST['mail']!='')
{
	$sql = "INSERT INTO users(username, password, telnum, email) VALUES('".addslashes($_POST['name'])."', '".addslashes($_POST['pas'])."', '".addslashes($_POST['teltel'])."', '".addslashes($_POST['mail'])."')";
	
	if($conn->query($sql))
	{
		$response['success'] = true;
	}
}

echo json_encode($response);