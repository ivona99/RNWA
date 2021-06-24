<div class="container">
<form action="?controller=customer&action=insert" method="POST">
 <div class="form-group">
    <label for="customer_id">Customer id:</label>
    <input type="text" class="form-control" name="customer_id">
    </div>
   <div class="form-group">
    <label for="first_name">Ime:</label>
    <input type="text" class="form-control" name="first_name">
  </div>
  <div class="form-group">
    <label for="last_name">Prezime:</label>
    <input type="text" class="form-control" name="last_name">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="create_date">Datum kreiranja:</label>
    <input type="text" class="form-control" name="create_date" >
  </div>
  <div class="form-group">
    <label for="last_update">Posljednje azurirano:</label>
    <input type="text" class="form-control" name="last_update" >
  </div>
    <button type="submit" class="btn btn-default">Potvrdi</button>
</form> 
</div>