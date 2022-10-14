<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div class="container">

<?php

$api_url = 'https://dummy.restapiexample.com/api/v1/employees';
// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
$user_data = $response_data->data;

// Cut long data into small & select only first 10 records
$user_data = array_slice($user_data, 0, 9);

// Print data if need to debug
//print_r($user_data);

// Traverse array and display user data
foreach ($user_data as $user) {
  
	echo "Name: ".$user->employee_name;
	echo "<br />";
	echo "Age: ".$user->employee_age;
  echo "<br /> <br />";
  
}



?>


</div>
</body>