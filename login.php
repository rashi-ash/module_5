<html>

<head><title>Login</title></head>

<body>

<?php

$host = "localhost"; 
$user = "postgres"; 
$pass = "8435"; 
$db = "customer"; 

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n"); 
$query="SELECT username, password FROM login WHERE username='$_POST[username]' and password='$_POST[password]'";

$result=pg_query($con,$query);

$row=pg_fetch_assoc($result);

if(($row[username]==trim($_POST[username]))&&($row[password]==trim($_POST[password])))

{

echo "<h3> Welcome $row[username]! You have Succesfully logged in</h3><br>

<input type=submit name=logout value='logout' onclick=\"parent.location='login.html'\">";

}

else{

echo "<h3> Invalid username or password!</h3>

<br><hr><input type=submit name=logout value='go back to login page' onclick=\"parent.location='login.html'\">";

}

?>

</html>