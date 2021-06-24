<div class="container">
<form action="?controller=payment&action=update" method="POST">
  <div class="form-group">
    <label for="payment_id">Payment id:</label>
    <input type="text" class="form-control" name="payment_id" value=<?php echo $payment->payment_id?>>
    </div>
    <div class="form-group">
    <label for="customer_id">Customer id:</label>
    <input type="text" class="form-control" name="customer_id" value=<?php echo $payment->customer_id?>>
  </div>
  <div class="form-group">
    <label for="amount">Amount:</label>
    <input type="text" class="form-control" name="amount" value=<?php echo $payment->amount?>>
  </div>
  <div class="form-group">
    <label for="payment_date">Payment date:</label>
    <input type="text" class="form-control" name="payment_date" value=<?php echo $payment->payment_date?>>
  </div>
 
    <button type="submit" class="btn btn-default">Confirm</button>
</form> 
</div>