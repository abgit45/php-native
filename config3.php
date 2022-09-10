<?php
$host = "localhost";
$db ="demo";
$username = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$response = array('success' => false);

if(isset($_POST['uside']) && $_POST['uside']!='' && isset($_POST['teltel']) && $_POST['teltel']!='' && isset($_POST['names']) && $_POST['names']!='' && isset($_POST['pass']) && $_POST['pass']!='' && isset($_POST['email']) && $_POST['email']!='')
{
	$sql="INSERT INTO `users` (`uside`,`teltel`, `names`, `pass`, `email`) VALUES('".addslashes($_POST['uside'])."', '".addslashes($_POST['teltel'])."', '".addslashes($_POST['names'])."', '".addslashes($_POST['pass'])."', '".addslashes($_POST['email'])."')";
    $result = mysqli_query($conn,$sql);
	if($conn->query($sql))
	{
		$response['success'] = true;
	}
}

echo json_encode($response);