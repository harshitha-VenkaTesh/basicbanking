<?php
session_start();
$con=mysqli_connect('localhost','root','','bankdatabase');
$q="select name from users";
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
		background-color: rgb(47,137,158);
		background-image:url("images/image4.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
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
		background-color:LightGray;
		padding:50px;
		border:3px ridge black;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#LightGray;
	}
	.button{
		width: 250px;
	  height:50px;
	  display: inline-block;
	  background: LightGray;
	  font-weight:bold;
	  padding: 0px 50px;
	  color: black;
	  font-family: "Serif", sans-serif;
	  font-size: 15px;
	  font-weight: 700;
	  line-height: 48px;
	  border: 2px solid black;
	  border-radius: 30px;
	  outline: LightGray;
	  box-shadow: LightGray;
	  text-align: center;
	  text-transform: uppercase;
	}
	.button:hover{
		background-color:green;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Bob"){
				 var arr=["Tim","Percy","Frank","Tessa","Reynold","Brenden","Ben","Rose","Alice"];
				 }
				 else if(a==="Tim"){
					var arr=["Bob","Percy","Frank","Tessa","Reynold","Brenden","Ben","Rose","Alice"];
				}
				else if(a==="Percy"){
					var arr=["Bob","Tim","Frank","Tessa","Reynold","Brenden","Ben","Rose","Alice"];
				}
				else if(a==="Frank"){
					var arr=["Bob","Tim","Percy","Tessa","Reynold","Brenden","Ben","Rose","Alice"];
				 }
				 else if(a==="Tessa"){
					var arr=["Bob","Tim","Percy","Frank","Reynold","Brenden","Ben","Rose","Alice"];
				 }
				 else if(a==="Reynold"){
					var arr=["Bob","Tim","Percy","Frank","Tessa","Brenden","Ben","Rose","Alice"];
				 }
				 else if(a==="Brenden"){
					var arr=["Bob","Tim","Percy","Frank","Tessa","Reynold","Ben","Rose","Alice"];
				 }
				 else if(a==="Ben"){
					var arr=["Bob","Tim","Percy","Frank","Tessa","Reynold","Brenden","Rose","Alice"];
				 }
				 else if(a==="Rose"){
					var arr=["Bob","Tim","Percy","Frank","Tessa","Reynold","Brenden","Ben","Alice"];
				 }
				 else if(a==="Alice"){
				 var arr=["Bob","Tim","Percy","Frank","Tessa","Reynold","Brenden","Ben","Rose"];
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
	<h1 style=" font-size:45px;color:LightGray;">Transfer Amount</h1><br>
	<div class="center">
	<form action="creditupdate.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Please Select</option>
			<option value="Bob">Bob</option>
			<option value="Tim">Tim</option>
			<option value="Percy">Percy</option>
			<option value="Frank">Frank</option>
			<option value="Tessa">Tessa</option>
			<option value="Reynold">Reynold</option>
			<option value="Brenden">Brenden</option>
			<option value="Ben">Ben</option>
			<option value="Rose">Rose</option>
			<option value="Alice">Alice</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Please Select</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;<input class="button" type="submit" name="submit" value="Transfer" style="height:50px; width:200px;">
		</div>
	</form>
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="button">HOME</button>
	</a>
</div>
</body>
</html>
