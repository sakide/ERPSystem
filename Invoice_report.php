<?php 
$host ="localhost";
$username ="root";
$pass ="";

$con =mysqli_connect($host,$username,$pass,"assignment");
if (!$con)
{
    die('Could not connect:'.mysqli_error());
}

$sql = "select invoice_no, date, customer, district, item_count, amount from invoice";

$result = $con-> query($sql);

if($result-> num_rows > 0){
	while ($row = $result-> fetch_assoc()){
		echo "<tr><td>". $row["invoice_no"] . "</td><td>".$row["date"]."</td><td>".$row["customer"] . "</td><td>".$row["district"]."</td><td>".$row["item_count"]."</td><td>".$row["amount"]."</td><tr>";
	}
	echo "</table>";
}
else{
	echo "0 result";
}
$con->close();

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Invoice report</title>
</head>
<body>
	<thead>
		<tr>
			<th>Invoice number</th>
			<th>Date</th>
			<th>Customer</th>
			<th>Customer district</th>
			<th>Item count</th>
			<th>Invoice amount</th>
		</tr>
	</thead>

</body>
</html>