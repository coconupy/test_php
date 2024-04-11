<?php

	include('get_contacts.php');

	array_push($data, ["name" => $_POST['name'], "phone" => $_POST['phone']]);

	$jsonData = json_encode($data, true);
	file_put_contents('tel.json', $jsonData);

	header('Location: index.php');

?>