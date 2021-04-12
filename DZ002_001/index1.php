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
// get the q parameter from URL
$s = $_REQUEST["s"];
$hint = "";

// lookup all hints from array if $q is different from "" 
if ($s !== "") {
    $s = strtolower($s);
    $len=strlen($s);
    /*
	foreach($a as $name) {
        if (stristr($s, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
	
	*/
	

/**********************************************************/
$db = mysqli_connect("localhost","root","");

if($db) {

$result = mysqli_select_db($db, "sakila") or die("Doslo je do problema prilikom odabira baze...");
$sql="SELECT * FROM customer where first_name LIKE '$s%' OR last_name LIKE '$s%' ";
//echo $sql;
$result2 = mysqli_query($db, $sql) or die("Doslo je do problema prilikom izvrsavanja upita...");
$n=mysqli_num_rows($result2);



if ($n > 0){
  echo "<table>
<tr>
<th>Ime</th>
<th>Prezime</th>
<th>Email</th>
</tr>";

	while ($myrow=mysqli_fetch_row($result2)){
    echo "<tr>";
    echo "<td>" . $myrow[2] . "</td>";
    echo "<td>" . $myrow[3] . "</td>";
    echo "<td>" . $myrow[4] . "</td>";
    echo "</tr>";
   // echo $myrow[0].",".$myrow[1].",".$myrow[2];
			//$hint .= "<div name=\"result\" id=\"".$myrow[1]."\">".$myrow[2]." ".$myrow[3].",</div>";

		}
    echo "</table>";
	}
else {
//echo "No patern rows returned<br>";
}	
}
else {
echo "<br>Nije proslo spajanje<br>";
}
/**********************************************************/
	
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;

?>