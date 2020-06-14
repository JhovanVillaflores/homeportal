<?php
class Post{
  private $conn;
  private $table = 'post_tb';
  private $user_table = 'user_tb';


  public $user_id;
  public $post_id;
  public $title;
  public $price;
  public $address;
  public $description;
  public $type;
  public $datetime;
  public $image_path;

  public $filter;
  public $keyword;

  //Constructor with Database
  public function __construct($db) {
      $this->conn = $db;
  }

  public function read_post(){
    $query = "SELECT * FROM ". $this->table ." ORDER BY id DESC";

  $stmt = $this->conn->prepare($query);
  $stmt->execute();
  return $stmt;

  }

  public function read_user_post(){
    $query = 'SELECT * FROM '.$this->table. ' WHERE fld_user_id = :user_id';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':user_id', $this->user_id);
    $stmt->execute();
    $num = $stmt->rowCount();
    if($num > 0){
        //Post Array
        $posts_arr = array();
        $posts_arr['data'] = array();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $post_list = array(
              'id' => $id,
              'user_data' => $this->read_user_data($fld_user_id),
              'title' => $fld_title,
              'price' => $fld_price,
              'address' => 	$fld_property_address,
              'description' => $fld_description,
              'type' => $fld_type,
              'date' => $fld_date,
              'image_path' => $fld_image_path
            );
            array_push($posts_arr['data'], $post_list);
        }
        echo json_encode($posts_arr);
    }
  }

  public function read_single_post(){
    $query ='SELECT * FROM '.$this->table.' WHERE id = :post_id';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':post_id', $this->post_id);
    $stmt->execute();
    $num = $stmt->rowCount();
    if($num > 0){
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $post_list = array(
              'id' => $id,
              'user_data' => $this->read_user_data($fld_user_id),
              'title' => $fld_title,
              'price' => $fld_price,
              'address' => 	$fld_property_address,
              'description' => $fld_description,
              'type' => $fld_type,
              'date' => $fld_date,
              'image_path' => $fld_image_path
            );
        }
        echo json_encode($post_list);
    }
  }

  public function insert_post(){
    $query = 'INSERT INTO '.$this->table .
      ' (fld_user_id, fld_title, fld_price, fld_property_address, fld_description, fld_type, fld_date, fld_image_path)
      VALUES (:user_id, :title, :price, :address, :description, :type, :date, :image_path)';

      $this->title = htmlspecialchars(strip_tags($this->title));
      $this->price = htmlspecialchars(strip_tags($this->price));
      $this->address = htmlspecialchars(strip_tags($this->address));
      $this->description = htmlspecialchars(strip_tags($this->description));
      $this->type = htmlspecialchars(strip_tags($this->type));
      $this->image_path = htmlspecialchars(strip_tags($this->image_path));

      $stmt = $this->conn->prepare($query);

      $stmt->bindParam(':user_id', $this->user_id);
      $stmt->bindParam(':title', $this->title);
      $stmt->bindParam(':price', $this->price);
      $stmt->bindParam(':address', $this->address);
      $stmt->bindParam(':description', $this->description);
      $stmt->bindParam(':type', $this->type);

      $date = date("m d,Y");
      $time  = date("h:i a");

      $this->$datetime = $date ." ". $time;
      $this->image_path = "assets/img/scenery/image3.jpg";
      $stmt->bindParam(':date', $this->$datetime);
      $stmt->bindParam(':image_path', $this->image_path);

      $stmt->execute();
  }

  public function search_post(){
    $query ='SELECT * FROM  '.$this->table . ' WHERE fld_title LIKE :keyword OR fld_property_address LIKE :keyword';
    $stmt = $this->conn->prepare($query);
     $this->keyword = htmlspecialchars(strip_tags($this->keyword));

     $stmt->bindParam(':keyword', $this->keyword);
     $stmt->execute();
    $num = $stmt->rowCount();
    if($num > 0){
        $posts_arr = array();
        $posts_arr['data'] = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $post_list = array(
              'id' => $id,
              'user_data' => $this->read_user_data($fld_user_id),
              'title' => $fld_title,
              'price' => $fld_price,
              'address' => 	$fld_property_address,
              'description' => $fld_description,
              'type' => $fld_type,
              'date' => $fld_date,
              'image_path' => $fld_image_path
            );
            array_push($posts_arr['data'], $post_list);
        }
        echo json_encode($posts_arr);
    }else{
      echo json_encode(array(
        'result'=>'0'
      ));
    }
  }

  public function filter_post(){
    $query='SELECT * FROM '.$this->table. ' WHERE fld_type = :filter';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':filter', $this->filter);
    $stmt->execute();
    $num = $stmt->rowCount();
    if($num > 0){
        $posts_arr = array();
        $posts_arr['data'] = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $post_list = array(
              'id' => $id,
              'user_data' => $this->read_user_data($fld_user_id),
              'title' => $fld_title,
              'price' => $fld_price,
              'address' => 	$fld_property_address,
              'description' => $fld_description,
              'type' => $fld_type,
              'date' => $fld_date,
              'image_path' => $fld_image_path
            );
            array_push($posts_arr['data'], $post_list);
        }
        echo json_encode($posts_arr);
    }else{
      echo json_encode(array(
        'result'=>'0'
      ));
    }
  }

  public function read_user_data($user_id){
    $query = 'SELECT * FROM user_tb WHERE id = :uid';
      $stmt = $this->conn->prepare($query);
      $stmt->bindParam(':uid', $user_id);
      $stmt->execute();
      $num = $stmt->rowCount();
      if($num > 0){
          $user_arr = array();
          $user_arr['data'] = array();

          while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              extract($row);

              $user_list = array(
                  'id' => $id,
                  'first_name' => $fld_firstname,
                  'last_name' => $fld_lastname,
                  'email' => $fld_email,
                  'username' =>$fld_username,
                  'image_path' =>$fld_profile_image_path,
                  'contact' =>$fld_contact_no ,
              );
          }
          return $user_list;
      }
  }
}

?>
