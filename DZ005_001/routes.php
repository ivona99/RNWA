<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');
    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
	    case 'customer':
        require_once('models/customer.php');
		$controller = new CustomerController();
      break;
      case 'payment':
        require_once('models/payment.php');
		$controller = new PaymentController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' 		=> ['home', 'error'],
                       'customer' 	=> ['index','verifyinsert','insert','verifyupdate','update','delete','verifydelete'],
                       'payment' 	=> ['index','verifyinsert','insert','verifyupdate','update','delete','verifydelete']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>