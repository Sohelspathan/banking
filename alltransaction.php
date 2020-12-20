<?php
session_start();
$con=mysqli_connect('localhost','root','',"sohel's bank");
$q="select *from ministatement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transaction</title>
		<link rel="stylesheet" href="button.css">
	<style>
			<style>
	
	body
	{
		text-align:center;
	}
		body{
		background-color: #BDD4E7; 
		background-repeat: no-repeat;
		background-size: cover; 

	}
	h1{
		color: rgb(167,129,239);
	}
	table{
		width: 800px;
		margin: auto;
		table-layout: auto;
		text-align: center;
		margin-top: 50px;
		font-family: cursive;
		color: #BDD4f9;
	}
	table,th,td{
		background: rgb(167,129,239);
		border: 1px dotted white;
		border-collapse: collapse;
		padding: 10px;
		font-size: 20px;

	}
	th{
		background-color: rgb(189,212,249);
		color:green;
			font-size:24px;
			padding:16px;
	}
	td{
		background-color: rgb(189,212,249);
		color: black;
	}

	</style>
	</style>
	</head>
	<body>
	<br>
		<h1 style="color:rgb(10,122,154);font-size: 45px"><caption><center><u>All Transactions</u> </center></caption></h1>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["Sender"]; ?></td>
				<td><?php echo $row["Receiver"]; ?></td>
				<td><?php echo $row["Amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<form action="index.php" method="post">
			
				<center><button class="btn btn2" type="submit" name="name">BACK</button>
			</center>
		</form>
		
	</body>
</html>