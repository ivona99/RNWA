<?php 
$conn=mysqli_connect("localhost", "root", "", "sakila");

$result=mysqli_query($conn, "SELECT * FROM customer");

$data=array();
while($row=mysqli_fetch_assoc($result))
{
    $data[]=$row;
}
echo json_encode($data);





?>