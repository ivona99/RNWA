<?php
  class Customer  {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $customer_id;
    public $first_name;
    public $last_name;
    public $email;
    public $create_date;
    public $last_update;


    public function __construct($customer_id,$first_name, $last_name, $email, $create_date , $last_update) {
      $this->customer_id      = $customer_id;
      $this->first_name      = $first_name;
      $this->last_name      = $last_name;
      $this->email      = $email;
      $this->create_date      = $create_date;
      $this->last_update     =$last_update;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM customer ORDER BY `customer_id` DESC LIMIT 100 ');
      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Customer($post['customer_id'], $post['first_name'], $post['last_name'], $post['email'], $post['create_date'], $post['last_update']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM customer WHERE customer_id = :id');
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Customer($post['customer_id'],$post['first_name'], $post['last_name'], $post['email'], $post['create_date'], $post['last_update']);
    }

    public static function insert($id,$first_name, $last_name, $email, $create_date , $last_update) {
      $db = Db::getInstance();
      $id = intval($id);
      $create_date = date($create_date);
      $last_update=date($last_update);
      $sql="INSERT INTO customer (customer_id,first_name, last_name, email, create_date, last_update)
      VALUES ('$id','$first_name', '$last_name', '$email', '$create_date',' $last_update')";
      $db->query($sql);
    }

    public static function update($id,$first_name, $last_name, $email, $create_date , $last_update) {
      $db = Db::getInstance();
      $id = intval($id);
      $create_date = date($create_date);
 
      $last_update=date($last_update);
      $sql="UPDATE customer SET  first_name='$first_name', last_name = '$last_name', email='$email', create_date = '$create_date', last_update='$last_update'
       WHERE customer_id = '$id' ";
      $db->query($sql);
    }

  	public static function delete($id) {
      $db = Db::getInstance();
      $sql="DELETE FROM customer WHERE customer_id = '$id'";
	    $db->query($sql);
		}
  }
  
?>