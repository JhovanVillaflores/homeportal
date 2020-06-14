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

$data = json_decode(file_get_contents("php://input"));
//print_r($_POST);

$user->firstname = $_POST['first_name'];
$user->lastname = $_POST['last_name'];
$user->gender = $_POST['gender'];
$user->contact = $_POST['contact'];
$user->address = $_POST['address'];
$user->email = $_POST['email'];
$user->username = $_POST['username'];
$user->password = sha1($_POST['password']);
/*
$user->first_name = $data->first_name;
$user->last_name = $data->last_name;
$user->gender = $data->gender;
$user->contact = $data->contact;
$user->address = $data->address;
$user->email = $data->email;
$user->username = $data->username;
$user->password = sha1($data->password);
*/
if($user->register_user()) {
    echo json_encode(
        array(
            'message'=>'Registered Successfully',

        )
    );
}else{
    echo json_encode(
        array(
            'message'=>'Registration Failed'
        )
    );
}
