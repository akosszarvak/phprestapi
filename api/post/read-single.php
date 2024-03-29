<?php 
// headers
header('Acces-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Import the DB and Post file
include_once '../../config/Database.php';
include_once '../../models/Post.php';

// Instantiate DB & Connect
$database = new Database();
$db = $database->connect();

// Instantiate BlogPost obj
$post = new Post($db);

// Get ID
$post->id = isset($_GET['id']) ? $_GET['id'] : die();

// Get BlogPost
$post->read_single();

// Create array
$post_arr = array(
    'id' => $post->id,
    'title' => $post->title,
    'body' => $post->body,
    'author' => $post->author,
    'category_id' => $post->category_id,
    'category_name' => $post->category_name
);

// Make JSON
print_r(json_encode($post_arr));

?>