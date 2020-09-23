<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body style="background-color: gray;">
    <?php
    $con =mysqli_connect("localhost:3306","root","","sparks");
        if(isset($_POST['useradd'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $amt=$_POST['amount'];
        $query="INSERT into members(name,email,amount) values
        ('$name','$email','$amt')";
        $result=mysqli_query($con,$query);
        echo"<script type='text/javascript'>alert('user added');window.location.href='members.php'</script>";
        }
    
    ?>

</body>
</html>