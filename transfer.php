<?php
session_start();
$con=mysqli_connect('localhost','root','',"sohel's bank");
$q="select Name from customers";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: #BDD4E7;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#BDD4f9;
		padding:50px;
		border:2px ridge red;
	}
	button{

	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Ubed"){
				 var arr=["Vamshi","Mahmood","Mohsin","Shakib","Nikhil","Kalyan","Pavan","Misba","Najib"];
				 }
				 else if(a==="Vamshi"){
					var arr=["Ubed","Mahmood","Mohsin","Shakib","Nikhil","Kalyan","Pavan","Misba","Najib"];
				}
				else if(a==="Mahmood"){
					var arr=["Ubed","Vamshi","Mohsin","Shakib","Nikhil","Kalyan","Pavan","Misba","Najib"];
				}
				else if(a==="Mohsin"){
					var arr=["Ubed","Vamshi","Mahmood","Shakib","Nikhil","Kalyan","Pavan","Misba","Najib"];
				 }
				 else if(a==="Shakib"){
					var arr=["Ubed","Vamshi","Mahmood","Mohsin","Nikhil","Kalyan","Pavan","Misba","Najib"];
				 }
				 else if(a==="Nikhil"){
					var arr=["Ubed","Vamshi","Mahmood","Mohsin","Shakib","Kalyan","Pavan","Misba","Najib"];
				 }
				 else if(a==="Kalyan"){
					var arr=["Ubed","Vamshi","Mahmood","Mohsin","Shakib","Nikhil","Pavan","Misba","Najib"];
				 }
				 else if(a==="Pavan"){
					var arr=["Ubed","Vamshi","Mahmood","Mohsin","Shakib","Nikhil","Kalyan","Misba","Najib"];
				 }
				 else if(a==="Misba"){
					var arr=["Ubed","Vamshi","Mahmood","Mohsin","Shakib","Nikhil","Kalyan","Pavan","Najib"];
				 }
				 else if(a==="Najib"){
				 var arr=["Ubed","Vamshi","Mahmood","Mohsin","Shakib","Nikhil","Kalyan","Pavan","Misba"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1  style="color:rgb(10,122,154);font-size: 45px"><u>Transfer Money</u></h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: </label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Ubed">Ubed</option>
			<option value="Vamshi">Vamshi</option>
			<option value="Mahmood">Mahmood</option>
			<option value="Mohsin">Mohsin</option>
			<option value="Shakib">Shakib</option>
			<option value="Nikhil">Nikhil</option>
			<option value="Kalyan">Kalyan</option>
			<option value="Pavan">Pavan</option>
			<option value="Misba">Misba</option>
			<option value="Najib">Najib</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount:</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div >
		<button class ="btn btn1" type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">Transfer
		</button>
		</div>
	</form> 
	</div><br><br><br>
	<form action="index.php" method="post">
			
				<center><button class="btn btn2" type="submit" name="name">BACK</button>
			</center>
		</form>
		
</div>
</body>
</html>