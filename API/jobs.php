<?php

// Read JSON file
$json = file_get_contents('JOBS.json');

//Decode JSON
$json_data = json_decode($json,true);
header('Content-Type: application/json');
echo json_encode($json_data);
?>
