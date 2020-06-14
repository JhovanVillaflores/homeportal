<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

include_once '../../config/Database.php';
include_once '../../models/User/User.php';

//Instantiate DB & connect
$database = new Database();
$db = $database->connect();

$user = new User($db);

$user->username = $_GET['username'];
$user->email = $_GET['email'];
$user->contact = $_GET['contact'];
$user->firstname = $_GET['firstname'];
$user->lastname = $_GET['lastname'];
$user->address = $_GET['address'];
$user->user_id = $_GET['user_id'];

echo json_encode(array(
  'username'=>$user->username,
  'email'=>$user->email,
  'contact'=>$user->contact,
  'firstname'=>$user->firstname,
  'lastname'=>$user->lastname,
  'address'=>$user->address,
  'user_id'=>$user->user_id
));
$user->update_profile();
