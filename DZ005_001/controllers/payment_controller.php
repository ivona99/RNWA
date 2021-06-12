<?php
  class PaymentController {
    public function index() {
      // we store all the posts in a variable
      $payment = Payment::all();
      require_once('views/payment/index.php');
    }
  
    public function verifyinsert(){
      require_once('views/payment/insert.php');
    }

    public function insert()
    {
      Payment::insert($_POST['payment_id'],$_POST['customer_id'],$_POST['amount'],$_POST['payment_date']);
     return call('payment', 'index');
    }
  
  public function verifyupdate()
  {
    if (!isset($_GET['id']))
          return call('pages', 'error');
    $payment = Payment::find($_GET['id']);
    require_once('views/payment/update.php');
  }

  public function update()
  {
   
   Payment::update($_POST['payment_id'],$_POST['customer_id'],$_POST['amount'],$_POST['payment_date']);
   return call('payment', 'index');
  }

	public function delete() {
      if (!isset($_GET['id']))
        return call('pages', 'error');
      Payment::delete($_GET['id']);
      return call('payment', 'index');
    }

    public function verifydelete(){
      if (!isset($_GET['id']))
          return call('pages', 'error');
          require_once('views/payment/delete.php');
      }
  }
 ?>