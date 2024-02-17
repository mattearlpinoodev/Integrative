<?php
header('Content-type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Methods: OPTIONS, GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Authorization, X-Requested-With');
$servername = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'laptopsalessystem1';

$conn = new mysqli($servername, $username, $password);
$conn->query("USE $databaseName");
$data = $conn->query("SELECT * FROM customers");
if($data->num_rows > 0){
   $all =   $data->fetch_all(MYSQLI_ASSOC);
   echo json_encode($all);
}


?>