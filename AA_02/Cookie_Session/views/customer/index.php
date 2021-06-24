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
    <center><h1>Customer</h1></center>
	<br>

  <a class="btn1" href="?controller=customer&action=verifyinsert" role="button">Dodaj</a>


  <div class="table-responsive"> 
    <table class="table">
        <tr>
            <th>Customer id</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Email</th>
            <th>Datum kreiranja</th>
            <th>Posljednje azurirano</th>
            <th>Uredi</th>
            <th>Izbrisi</th>
            
        </tr>
        <?php foreach ($customer as $row): ?>
        <tr>
            <td><?php echo $row->customer_id ?></td>
            <td><?php echo $row->first_name ?></td>
            <td><?php echo $row->last_name ?></td>
            <td><?php echo $row->email ?></td>
            <td><?php echo $row->create_date ?></td>
            <td><?php echo $row->last_update ?></td>
            <td><a href="?controller=customer&action=verifyupdate&id=<?php echo $row->customer_id?>" class="btn btn-primary btn-xs"> Uredi</a></td>
            <td><a href="?controller=customer&action=verifydelete&id=<?php echo $row->customer_id?>" class="btn btn-danger btn-xs"> Izbrisi</a></td>

        </tr>
        <?php endforeach ?>
    </table>
	</div>
  </div>
 
    
