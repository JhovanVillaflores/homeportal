<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Post/Post.php';

//Instantiate DB & connect
$database = new Database();
$db = $database->connect();

$post = new Post($db);

$result = $post->read_post();
//Get Row Count
$num = $result->rowCount();


if($num > 0){
    //Post Array
    $posts_arr = array();
    $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $posts_list = array(
            'id' => $id,
            'user_data' => $post->read_user_data($fld_user_id),
            'title' => $fld_title,
            'price' => $fld_price,
            'address' => 	$fld_property_address,
            'description' => $fld_description,
            'type' => $fld_type,
            'date' => $fld_date,
            'image_path' => $fld_image_path
        );

        //push to data
        array_push($posts_arr['data'], $posts_list);
    }

    echo json_encode($posts_arr);
}else{
    echo json_encode(
        array(
            'message'=>'No Post Found',
            'no_post'=>0
        )
    );
}
?>
