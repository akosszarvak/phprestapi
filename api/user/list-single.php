<?php 
// headers
header('Acces-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Import the DB and Post file
include_once '../../config/Database.php';
include_once '../../models/User.php';

// Instantiate DB & Connect
$database = new Database();
$db = $database->connect();

// Instantiate User obj
$user = new User($db);


// Get ID
$user->id = isset($_GET['id']) ? $_GET['id'] : die();

// Get BlogPost
$user->listSingle();

// Create array
$user_arr = array(
    'user_id' => $user->user_id,
    'user_name' => $user->user_name,
    'email' => $user->email
);

// Make JSON
print_r(json_encode($user_arr));

?>