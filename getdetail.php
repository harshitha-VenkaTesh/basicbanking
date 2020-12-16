<?php
session_start();
$con=mysqli_connect('localhost','root','','bankdatabase');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);


?>
<html>
<head>
   <title>viewUser</title>
   <link rel="stylesheet" href="button.css">

	<style>
		body{
			text-align:center;
		}
		.flat-table-1 {
			background: LightGray;
		}
		.flat-table-1 tr:hover {
			background: rgba(0,150,0,2);
		}
		h1{
			font-family: Arial, Times, serif;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border-collapse:collapse;
			}
		th{
			color:black;
			font-size:24px;
			padding:16px;
		}

		td{
			text-align:center;
			font-size:22px;
			color: black;
			padding: 0px 20px 0px 20px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
			text-shadow: 1px 1px black;
		}
		.css-button{
			margin-left:auto;
			margin-right:auto;
		}
		.view{
			top:50%;
			padding-top:20px;
			text-align:center;
		}
		.ho{
			padding-top:50px;
			padding-bottom:100px;
		}
		body{
		background-image:url("images/image4.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>

</head>

<body>
	<h1 style="color:white;">Customer Information</h1>
    <table class="flat-table-1">
		<thead>
			<th>Sl.no</th>
			<th>Customer Name</th>
			<th>Email</th>
			<th>Current Balance</th>
			<th></th>
		</thead>
		<tbody>
		<tr>
			<?php
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post"  class="view">
					<button class="primary_btn" type="submit" name="name" value="Bob">View</button>
				</form>
			</td>
		</tr>
		<tr>
			<?php
				$row=mysqli_fetch_array($result);
			?>
			<td> 2</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn" type="submit" name="name" value="Tim">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php
				$row=mysqli_fetch_array($result);
			?>
			<td> 3</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn" type="submit" name="name" value="Percy">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php
				$row=mysqli_fetch_array($result);
			?>
			<td> 4</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn" type="submit" name="name" value="Frank">View</button>
				</form>
			</td>


        </tr>
        <tr>
			<?php
				$row=mysqli_fetch_array($result);
			?>
			<td> 5</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn" type="submit" name="name" value="Tessa">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php
				$row=mysqli_fetch_array($result);
			?>
			<td> 6</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn" type="submit" name="name" value="Reynold">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php

				$row=mysqli_fetch_array($result);
			?>
			<td> 7</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn"type="submit" name="name" value="Brenden">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php
				$row=mysqli_fetch_array($result);
			?>
			<td> 8</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn"type="submit" name="name" value="Ben">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php
				$row=mysqli_fetch_array($result);
			?>
			<td> 9</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn"type="submit" name="name" value="Rose">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php
				$row=mysqli_fetch_array($result);
			?>
			<td> 10</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn"type="submit" name="name" value="Alice">View</button>
				</form>
			</td>
		</tr>
		</tbody>
	</table><br><br>

<div class="buttons">
	<a href="index.php">
    <button class="button">HOME</button>
	</a>
</div>
</body>
</html>
