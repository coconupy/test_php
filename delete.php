<?php

	include('get_contacts.php');
	
	$to_delete = (int)$_POST['delete'];
	array_splice($data, $to_delete, 1);

	$jsonData = json_encode($data, true);
	file_put_contents('tel.json', $jsonData);

	header('Location: index.php');

?>