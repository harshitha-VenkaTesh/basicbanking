<?php
session_start();
$con=mysqli_connect('localhost','root','','bankdatabase');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title><?php echo $name?></title>
	<link rel="stylesheet" href="button.css">	<style>
		body {
			font-family: "Serif", sans-serif;
			margin: 0px;
			text-align:center;
			}

		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 10px;
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

		.nav-li a:hover:not(.active) {
		  background-color: #00ccff;
		}
		button{
			border-radius:10px;
			background-color:brown;
		}
		button:hover{
			background-color:green;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid black;
			border-collapse:collapse;
			}
		th{
			color:black;
			font-size:24px;
			padding:16px;
		}

		td{
			font-size:22px;
			color: black;
			padding: 11px 16px 11px 18px;
		}
		tr{
				transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove black;
		}
		body{
			background-image:url("images/image4.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size:cover;
		}
		.flat-table-1 {
			background: LightGray;
		}
		.btn {
			background-color:LightGray;
			border-radius:5px;
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
	<ul class="nav-ul" style="height:53px;">
		<li class="nav-li" style="float:right;height:53px;text-align:center;font-size:20px" ><a class="nav-link"><?php echo $name?></a></li>
	</ul>
	<br><br><br>
    <div class="view">
       <table class="flat-table-1">
			<tr>
				<th>Name</th>
				<td><?php echo $name?></td>
			</tr>

			<tr>
				<?php
					$row=mysqli_fetch_array($result);
				?>
				<th>Email</th>
				<td><?php echo $mail?></td>
			</tr>

           <tr>
				<?php
					$row=mysqli_fetch_array($result);
				?>
				<th> Credits</th>
				<td><?php echo $amount?></td>
			</tr>


        </table>

        </div>
		<br>
        <br>

	<a href="moneytransfer.php">
		<div class="buttons">
		<button class="button"> Transfer to</button>
	</a>
	</div>
	<br>
	<br>

    </body>
</html>

<div class="buttons">
<a href="getdetail.php">
	<button class="button">BACK</button>
</a>
</div>
