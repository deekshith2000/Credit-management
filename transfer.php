<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>List</title>
</head>
<body style="background-color: blue;">
	<h2><label>Transfer Funds</label></h2>
		
	<?php
		$con =mysqli_connect("localhost:3306","root","","sparks");
		if(isset($_POST['submit'])){
			$email1=$_POST['email1'];
			$email2=$_POST['email2'];
			$amt=$_POST['amt'];
			$credit="SELECT amount from members where email='$email1'";
			$result=mysqli_query($con,$credit);
			$newamt=mysqli_fetch_row($result);
			if($email1==$email2){
				echo "<script>alert('Transfering to same person not allowed'); window.location.href='members.php';</script>";
			}
			else if ($amt<=0) {
				echo "<script>alert('Amount should be greater than zero'); window.location.href='members.php';</script>";
			}
			else if($amt > $newamt[0]){
				echo "<script>alert('You have insufficient money'); window.location.href='members.php';</script>";
			}
			else if($amt < =$newamt[0]) {
				$sqlupdate="UPDATE members set amount=amount-'$amt' WHERE email='$email1'";
				$res=mysqli_query($con,$sqlupdate); 
				$sqlupdate1="UPDATE members set amount=amount+'$amt' WHERE email='$email2'";
				$res=mysqli_query($con,$sqlupdate1);
				$tr="INSERT into transactions (Formuser,touser,credits) VALUES ('$email1','$email2','$amt')";
				$r=mysqli_query($con,$tr);	
				echo "<script>alert('Successful transaction'); window.location.href='index.html';</script>";
		}
	}
		?>     
	</body>
</html>
