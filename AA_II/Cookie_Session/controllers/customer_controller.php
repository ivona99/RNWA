<?php
  class CustomerController {
    public function index() {
      // we store all the posts in a variable
      $customer = Customer::all();
      require_once('views/customer/index.php');
    }
  
    public function verifyinsert(){
      require_once('views/customer/insert.php');
    }

    public function insert()
    {
      Customer::insert($_POST['customer_id'],$_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['create_date'],$_POST['last_update']);
     return call('customer', 'index');
    }
  
  public function verifyupdate()
  {
    if (!isset($_GET['id']))
          return call('pages', 'error');
    $customer = Customer::find($_GET['id']);
    require_once('views/customer/update.php');
  }

  public function update()
  {
   
   Customer::update($_POST['customer_id'],$_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['create_date'],$_POST['last_update']);
   return call('customer', 'index');
  }

	public function delete() {
      if (!isset($_GET['id']))
        return call('pages', 'error');
      Customer::delete($_GET['id']);
      return call('customer', 'index');
    }

    public function verifydelete(){
      if (!isset($_GET['id']))
          return call('pages', 'error');
          require_once('views/customer/delete.php');
      }
  }
 ?>