<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="sohel's bank";
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$db);

if(!$con){
	die("connection failed".mysqli_connect_error());
}



$sql="SELECT CustomerID,Name,Balance,Email FROM customers";
$result=mysqli_query($con,$sql);
$row_count=mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Information</title>	
	<link rel="stylesheet" type="text/css" href="button.css">

	<style>
	
	body
	{
		text-align:center;
	}
		body{
		background-color: #BDD4E7; 
		
		background-size: cover; 

	}
	table{
		width: 800px;
		margin: auto;
		table-layout: auto;
		text-align: center;
		margin-top: 50px;
		font-family: cursive;
		color: #red;
	}
	table,th,td{
		background-color:#red;
		border: 1px dotted black;
		border-collapse: collapse;
		padding: 10px;
		font-size: 20px;	
	}
	td{
		color: black;
		background-color: rgb(189,212,249);
	}
	th{
		background-color: rgb(189,212,249);
		color:green;
			font-size:24px;
			padding:16px;
	}

	</style>
</head>
<body>
	<h1 style="color:rgb(10,122,154);font-size: 45px"><u>User Information</u></h1>
    <table >
		<thead>
			<th>NO</th>
			<th>CustomerID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Balance</th>
		</thead>
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["CustomerID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
			 
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2</td>
			<td><?php echo  $row["CustomerID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3</td>
			<td><?php echo  $row["CustomerID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4</td>
			<td><?php echo  $row["CustomerID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
			
   

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5</td>
			<td><?php echo  $row["CustomerID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6</td>
			<td><?php echo  $row["CustomerID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
			 
        </tr>
        <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td> 7</td>
			<td><?php echo  $row["CustomerID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
			
		</tr>
        <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8</td>
			<td><?php echo  $row["CustomerID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
			
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9</td>
			<td><?php echo  $row["CustomerID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
			
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10</td>
			<td><?php echo  $row["CustomerID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
		</tr>
		</tbody>
	</table><br><br>	

		<form action="index.php" method="post">
			
		<button class="btn btn2" type="submit" name="name">HOME</button>
			
		</form>
</body>
</html>