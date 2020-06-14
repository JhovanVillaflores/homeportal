<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');

include_once '../../config/Database.php';
include_once '../../models/Post/Post.php';

//Instantiate DB & connect
$database = new Database();
$db = $database->connect();

$post= new Post($db);
$post->filter = $_GET['filter'];
$post->filter_post();
?>
