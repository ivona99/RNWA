<?php
  class Payment  {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $payment_id;
    public $customer_id;
    public $amount;
    public $payment_date;

    public function __construct($payment_id,$customer_id,$amount, $payment_date) {
      $this->payment_id      = $payment_id;
      $this->customer_id      = $customer_id;
      $this->amount      = $amount;
      $this->payment_date      = $payment_date;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM payment ORDER BY `payment_id` ASC LIMIT 100 ');
      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Payment($post['payment_id'], $post['customer_id'], $post['amount'], $post['payment_date']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM payment WHERE payment_id = :id');
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Payment($post['payment_id'],$post['customer_id'], $post['amount'], $post['payment_date']);
    }

    public static function insert($id,$customer_id, $amount , $payment_date) {
      $db = Db::getInstance();
      $id = intval($id);
      $amount = intval($amount);
      $payment_date = date($payment_date);
      $sql="INSERT INTO payment (payment_id,customer_id,amount, payment_date)
      VALUES ('$id','$customer_id', '$amount', '$payment_date')";
      $db->query($sql);
    }

    public static function update($id,$customer_id, $amount, $payment_date) {
      $db = Db::getInstance();
      $id = intval($id);
      $payment_date = date($payment_date);
    
      $sql="UPDATE payment SET customer_id = '$customer_id', amount = '$amount', payment_date='$payment_date'
       WHERE payment_id = '$id' AND payment_date='$payment_date' ";
      $db->query($sql);
    }

  	public static function delete($id) {
      $db = Db::getInstance();
      $sql="DELETE FROM payment WHERE payment_id = '$id'";
	    $db->query($sql);
		}
  }
  
?>