<?php

function get_total_all_records()
{
	include('db.php');
	$statement = $connection->prepare("SELECT * FROM roles");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

?>