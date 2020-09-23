<html>
<head>

	<title>members</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color: lightblue;">


</body>
</html>
  <div id="myTable" class="table-responsive">
  <?php
  $con =mysqli_connect("localhost:3306","root","","sparks");
  $sql = "select * from members";
  $result = mysqli_query($con, $sql);
  echo "<table border='2' >
            <tr>
            <th>name </th>
            <th>email</th>
            <th>amount</th>
            </tr>";
            while ($row=mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>".$row['name']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "<td>".$row['amount']."</td>";
           }
            echo "</table>";
  if (!$result) {
      echo 'Error';
  }
  else {
       print_r(mysqli_fetch_array($result));
  }
  ?>
  </div>
<h1 id="transfer">Transfer credits here:</h1>
<html>
    <title></title>
    <body class="selected">
    	<form action="transfer.php" method="post">
      <div>
      <label for="email1"><h2>Select from user:</h2></label><select name="email1" class="sel">
          <?php 
          $con =mysqli_connect("localhost:3306","root","","sparks");
          $sql = "select email from members";
          $result = mysqli_query($con, $sql);
          while ($row=mysqli_fetch_array($result))
            echo "<option value='".$row['email']."'>".$row['email']."</option>";
          ?>
      </select>
    </div>
    <div class="selected">
			<label for="email2"><h2>Select to user:</h2></label><select name="email2" class="sel">
					<?php 
					$con =mysqli_connect("localhost:3306","root","","sparks");
					$sql = "select email from members";
					$result = mysqli_query($con, $sql);
					while ($row=mysqli_fetch_array($result))
						echo "<option value='".$row['email']."'>".$row['email']."</option>";
				  ?>
			</select>
    </div>
     <div style="margin: 20px;">
      <label>enter amount</label>
      <input type="number" name="amt" required="">
    </div>
      <input class="btndanger" type="submit" name="submit"> 
	</form>

	    <div style="text-align: center;">
	      <a href="index.html"><button class="btndanger">Home
	      </button></a>
        <a href="views.php"><button class="btndanger">Transactions
        </button></a>
	   	</div>
    </body>
</html>