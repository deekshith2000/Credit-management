<!DOCTYPE html>
<html>
<head>
	<title>add user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: skyblue;">
	<h1 align="center">Add details</h1>
	<div >
	<form width="80%" action="add.php" method = "post" align="center" autocomplete="off">
		<div class="useradd">
        <label for="name">Name</label> <input class="myform" type="text" id="name" name="name" required=""><br /><br />
        <label for="email">email</label> <input class="myform" type="text" id="email" name="email" required=""><br /><br />
        <label for="amount">Amount</label> <input class="myform" type="text" id="amount" name="amount" required=""><br /><br />
        <button class="btndanger1" type="submit" name="useradd">Add details</button>
        </div>
    </form>
</div>
</body>

</html>
