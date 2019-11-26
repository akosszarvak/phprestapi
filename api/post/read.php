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

// BlogPost query
$result = $post->read(); 
// Get row count
$num = $result->rowCount();

// Check if any posts
if($num > 0) {
    // BlogPosts array
    $post_arr = array();
    $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $post_item = array(
            'id' => $id,
            'title' => $title,
            'body' => html_entity_decode($body),
            'author' => $author,
            'category_id' => $category_id,
            'category_name' => $category_name,
        );

        // Push to "data"
        array_push($posts_arr['data'], $post_item);


    }
    // Turn it to JSON
    echo json_encode($posts_arr);
} else {
    // No posts
    echo json_encode(array('message' =>'There are no posts'));
}
?>