<div class="container">
<form action="?controller=payment&action=insert" method="POST">
 <div class="form-group">
    <label for="payment_id">Payment id:</label>
    <input type="text" class="form-control" name="payment_id">
    </div>
   <div class="form-group">
    <label for="customer_id">Customer id:</label>
    <input type="text" class="form-control" name="customer_id">
  </div>
  <div class="form-group">
    <label for="amount">Amount:</label>
    <input type="text" class="form-control" name="amount">
  </div>
  <div class="form-group">
    <label for="payment_date">Paymnet date:</label>
    <input type="text" class="form-control" name="payment_date">
  </div>
    <button type="submit" class="btn btn-default">Potvrdi</button>
</form> 
</div>