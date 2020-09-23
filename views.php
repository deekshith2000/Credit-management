<!DOCTYPE html>
<html>
<head>
	<title>Transactions</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
</head>
<body style="background-color: #FFDAB9;">
	<h1>Transction History</h1>
	<div >
	<?php
		$con =mysqli_connect("localhost:3306","root","","sparks");
		$sql = "select * from transactions";
		$result = mysqli_query($con, $sql);
		echo "<table class='table' border='2'width='80%' >
          <tr>
          <th>From </th>
          <th>To</th>
          <th>credits</th>
          </tr>";
          while ($row=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row['Formuser']."</td>";
            echo "<td>".$row['touser']."</td>";
            echo "<td>".$row['credits']."</td>";
         }
          echo "</table>";
if (!$result) {
    echo 'Error';
}
else{
	print_r(mysqli_fetch_array($result));
}
	?>
</div>
<div style="margin: 10px; margin-left: 200px;">
<button class="btndanger" onclick="window.location.href='index.html'">Home</button>
</div>
</body>
</html>