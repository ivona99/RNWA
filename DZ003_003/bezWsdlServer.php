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
</style>
<?php 
$s = $_REQUEST["customer_id"];
$db = mysqli_connect("localhost", "root", "", "sakila");
if($db){

	$sql = "SELECT rental_id, rental_date, inventory_id, return_date, staff_id, last_update FROM rental WHERE customer_id = $s";
	$response = mysqli_query($db, $sql) or die("database error:". mysqli_error($db));	
	
	$n=mysqli_num_rows($response);
	if ($n > 0){
	
		echo "<table class=table>
			<thead>
			 <th>rental_id</th>
			 <th>rental_date</th>
			 <th>inventory_id</th>
			 <th>return_date</th>
			 <th>staff_id</th>
			 <th>last_update</th>
			
			</thead>";
	while ($myrow=mysqli_fetch_row($response)){
		 
		echo " <tbody>
			  <tr>
			    <td data-label='rental_id'>$myrow[0]</td>
			    <td data-label='rental_date'>$myrow[1]</td>
			    <td data-label='inventory_id'>$myrow[2]</td>
				<td data-label='return_date'>$myrow[3]</td>
				<td data-label='staff_id'>$myrow[4]</td>
				<td data-label='last_update'>$myrow[5]</td>
		    
			 </tr>
		       </tbody>";
			
			//echo "<div name=\"result2\" id=\"".$myrow[0]."\">" .$myrow[2].", ".$myrow[3]."</div>";
			

		}
		 echo "</table>";
	}
}
else {
	echo "<br>Nije proslo spajanje<br>";
	}

?>	