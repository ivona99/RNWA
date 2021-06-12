<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
    border: 1px solid #ddd;
    padding: 8px;
}

th {text-align: left;
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #89a0c2;
    color: white;
}
.btn1{
  background-color:#89a0c2 ;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
<div class="container">
	<br>
    <center><h1>Payment</h1></center>
	<br>

  <a class="btn1" href="?controller=payment&action=verifyinsert" role="button">Dodaj</a>


  <div class="table-responsive"> 
    <table class="table">
        <tr>
            <th>Payment id</th>
            <th>Customer id</th>
            <th>Amount</th>
            <th>Payment date</th>
            <th>Uredi</th>
            <th>Izbrisi</th>
            
        </tr>
        <?php foreach ($payment as $row): ?>
        <tr>
            <td><?php echo $row->payment_id ?></td>
            <td><?php echo $row->customer_id ?></td>
            <td><?php echo $row->amount ?></td>
            <td><?php echo $row->payment_date ?></td>
            <td><a href="?controller=payment&action=verifyupdate&id=<?php echo $row->payment_id?>" class="btn btn-primary btn-xs"> Uredi</a></td>
            <td><a href="?controller=payment&action=verifydelete&id=<?php echo $row->payment_id?>" class="btn btn-danger btn-xs"> Izbrisi</a></td>

        </tr>
        <?php endforeach ?>
    </table>
	</div>
  </div>
 
    
