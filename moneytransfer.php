<?php
session_start();
$con=mysqli_connect('localhost','root','','bankdatabase');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
?>


<html>
<head>
   <title>Transfer</title>
   <link rel="stylesheet" href="button.css">
	<style>
		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			verflow: hidden;

			}

		.nav-li {
		  float:left;
		}

		.nav-li a {

		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 5px 5px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		body{
			background-color: rgb(47,137,158);
			background-image:url("images/image4.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.form{
			text-align:center;

		}
		.button{
			text-align:center;
		}
		button{
			border-radius:10px;
			background-color:brown;
		}
		button:hover{
			background-color:green;
		}
		table{
			background-color:LightGray;
			padding:50px;
			border:2px ridge black;
		}
		.btn {
			background-color:LightGray;
			border: none;
			color: black;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}

		.btn:hover {
			background-color:green;
		}
	</style>
</head>
<body>
	<center>
		<div class="view">
			<br><br><h2 style=" font-size:45px;color:white;">Transfer Amount</h2>
			<form action="credit.php" method="post" >
				<div class="border">
				<table>
					<tr>
						<td style="font-size:12pt;color:#010114;">
							<label for="sender" align="left">Receiver Name:</label>
							&nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
                <option  selected>Please select</option>
           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
			</td>
		</tr><br>
		<tr>
			<td>
			<br><label for="transfer">Amount:</label>
			 &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 35px; width:290px;" required></td>
		</tr>
       <tr>
			<td>
				<br> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
        <button type="submit" class="button" value="Credit" style="color:black;font-size:18px;height:50px; width:300px;">Transfer Money</button>
				</div>
		   </td>
        </tr>
       </table>
	   </div>
      </form>
    </div><br>
	<form action="user.php" method="post">
			<div class="buttons">
				<button class="button" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			</div>
	</form>
</center>
</body>
</html>
