<?php

session_start();

?>

<html>

<style>
input
{
	margin : 10px;
	height : 40px;
	text-align : center ;
	border-radius : 5px;

}
img{
	margin : 20px;
	width : 200px;
	
}

</style>

<body style = "text-align : center ;  background-color : lightgrey; margin-left : 90px"><img src = "logo.png" >
<form method = "POST" action = "studentdetails.php">
<input type = "text" name = "username" placeholder = "Username"><br>

<input type = "password" name = "password" placeholder = "Password"><br>

<input type = "submit" name = "submit" value = "Submit"></a>

</form>

<?php

if(isset($_POST["submit"]))
{
	$username = $_POST["username"];
	$password = $_POST["password"];
	$invalid = "invalid";
	
	if($username == "admin" && $password  == "admin@123")
	{
		
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;
		
	}
	else
	{
		$_SESSION["username"] = $invalid;
	}
}

?>
</body>
</html>