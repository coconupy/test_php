<?php

if (file_exists('tel.json')) {
	$data = file_get_contents('tel.json');
	$data = json_decode($data, true);
} else {
	$data = array();
}

?>