
<?php

session_start();

function logout()
{
	session_unset();
	session_destroy();
}

?>
<html>
<style>
p
{
	color : blue ;
	font-size : 30px;
	
}

</style>


<body style = "  background-color : lightgrey; margin-left : 300px ; border-style:solid; border-radius : 12px; border-color:blue; width:800px;">
<span> Welcome : &nbsp <?php echo $_POST["username"] ;  ?></span> &nbsp  &nbsp <a href = "login.php"><button style = "" name = "logout" onclick = <?php logout() ?> >Logout</button></a> 
<p>Student Details</p>
<table style = "border-style : solid ; border-width: 2px ;"><tr><th>First Name</th><th>Last Name</th> <th>Sex</th> <th>city<t/h> <th>Hobby</th><th>description</th></tr>
<?php echo "<tr><td>" . $_POST["firstname"] . "</td><td>" . $_POST["lastname"] . "</td><td>" . $_POST["sex"] . "</td><td>" . $_POST["city"] . "</td><td>" . $_POST["hobby"] .  "</td><td>" . $_POST["description"] ."</td></tr>" ; ?>
</table>

<?php



?>
</body>