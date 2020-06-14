<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');

include_once '../../config/Database.php';
include_once '../../models/Post/Post.php';

//Instantiate DB & connect
$database = new Database();
$db = $database->connect();

$post = new Post($db);

$data = json_decode(file_get_contents("php://input"));


$post->user_id = $_POST['user_id'];
$post->title = $_POST['title'];
$post->price = $_POST['price'];
$post->address = $_POST['address'];
$post->description = $_POST['Description'];
$post->type = $_POST['type'];
//$post->image_path = $_POST['image'];
/*
$post->user_id = $data->user_id;
$post->title = $data->title;
$post->price = $data->price;
$post->address = $data->address;
$post->description = $data->Description;
$post->type = $data->type;
$post->image_path = $data->image_path;
*/

if($post->insert_post()) {
}else{
  /*
    echo json_encode(
        array(
            'message'=>'Post Successfully',
            'uid'=>$post->$data->user_id
        )
    );*/

    header("Location: ../../home?uid=".$post->user_id);
}
