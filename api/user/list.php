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

// User query
$result = $user->list(); 
// Get row count
$num = $result->rowCount();

// Check if any posts
if($num > 0) {
    // Users array
    $user_arr = array();
    $users_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $user_item = array(
            'user_id' => $user_id,
            'user_name' => $user_name,
            'email' => $email,

        );

        // Push to "data"
        array_push($users_arr['data'], $user_item);


    }
    // Turn it to JSON
    echo json_encode($users_arr);
} else {
    // No users
    echo json_encode(array('message' =>'There are no users'));
}
?>