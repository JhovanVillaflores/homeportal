<?php
class User{
  private $conn;
  private $table = 'user_tb';


  public $firstname;
  public $gender;
  public $lastname;
    public $address;
  public $email;
  public $username;
  public $contact;
  public $user_id;
  public $password;

  //Constructor with Database
  public function __construct($db) {
      $this->conn = $db;
  }


  public function read_user(){

  }

  public function read_single_user(){
    $query = 'SELECT * FROM '. $this->table .
      ' WHERE id = :uid';
      $stmt = $this->conn->prepare($query);
      $this->user_id = htmlspecialchars(strip_tags($this->user_id));
      $stmt->bindParam(':uid', $this->user_id);
      $stmt->execute();

      $num = $stmt->rowCount();


      if($num > 0){
          //Post Array
          $user_arr = array();
          $user_arr['data'] = array();

          while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              extract($row);

              $user_list = array(
                  'id' => $id,
                  'first_name' => $fld_firstname,
                  'last_name' => $fld_lastname,
                  'gender' => $fld_gender,
                  'age' => $fld_age,
                  'birth_date' => $fld_birthdate,
                  'contact_no' => $fld_contact_no,
                  'address' => $fld_address,
                  'username' => $fld_username,
                  'email' => $fld_email,
                  'image_path' => $fld_profile_image_path,
              );
          }

          echo json_encode($user_list);
      }else{
          echo json_encode(
              array(
                  'message'=>'No User Found'
              )
          );
      }
  }

  public function register_user(){
    $query = 'INSERT INTO '. $this->table .
              ' (fld_firstname,fld_lastname,fld_gender, fld_contact_no, fld_address, fld_username, fld_email, fld_password)
              VALUES (:first_name,:last_name,:gender,:contact,:address,:username,:email,:password)';
    $this->first_name = htmlspecialchars(strip_tags($this->firstname));
    $this->last_name = htmlspecialchars(strip_tags($this->lastname));
    $this->gender = htmlspecialchars(strip_tags($this->gender));
    $this->contact = htmlspecialchars(strip_tags($this->contact));
    $this->address = htmlspecialchars(strip_tags($this->address));
    $this->email = htmlspecialchars(strip_tags($this->email));
    $this->username = htmlspecialchars(strip_tags($this->username));
    $this->password = htmlspecialchars(strip_tags($this->password));
    //Prepare Statement
    $stmt = $this->conn->prepare($query);
    //Bind data
    $stmt->bindParam(':first_name', $this->first_name);
    $stmt->bindParam(':last_name', $this->last_name);
    $stmt->bindParam(':gender', $this->gender);
    $stmt->bindParam(':contact', $this->contact);
    $stmt->bindParam(':address', $this->address);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':username', $this->username);
    $stmt->bindParam(':password', $this->password);
    $stmt->execute();

  }

  public function update_profile(){
    $query = 'UPDATE '.$this->table. ' SET
    fld_username = :username,
    fld_email = :email,
    fld_contact_no = :contact,
    fld_firstname = :firstname,
    fld_lastname = :lastname,
    fld_address = :address WHERE id = :user_id';
    $stmt = $this->conn->prepare($query);
    $this->first_name = htmlspecialchars(strip_tags($this->firstname));
    $this->last_name = htmlspecialchars(strip_tags($this->lastname));
    $this->contact = htmlspecialchars(strip_tags($this->contact));
    $this->address = htmlspecialchars(strip_tags($this->address));
    $this->email = htmlspecialchars(strip_tags($this->email));
    $this->username = htmlspecialchars(strip_tags($this->username));
    $stmt->bindParam(':firstname', $this->firstname);
    $stmt->bindParam(':lastname', $this->lastname);
    $stmt->bindParam(':contact', $this->contact);
    $stmt->bindParam(':address', $this->address);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':username', $this->username);
    $stmt->bindParam(':user_id', $this->user_id);
    $stmt->execute();
    header("Location: ../../profile?uid=".$this->user_id);
  }
}

?>
