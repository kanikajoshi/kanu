
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
	background-color : skyblue;
	
}
p
{
	color : blue ;
	font-size : 50px;
	
}
select
{
	margin : 10px;
	height : 40px;
	text-align : center ;
	border-radius : 5px;
	background-color : skyblue;
	
	
}
textarea
{
	margin : 10px;
	
	text-align : center ;
	border-radius : 5px;
	background-color : skyblue;
	
	
}

</style>


<body style = "  background-color : lightgrey; margin-left : 300px ; border-style:solid; border-radius : 12px; border-color:blue; width:800px;">
<span> Welcome : &nbsp <?php echo $_POST["username"] ;  ?></span> &nbsp  &nbsp <a href = "login.php"><button style = "" name = "logout" onclick = <?php logout() ?> >Logout</button></a> 
<p>Student Details</p>
<form method = "POST" action = "showdetails.php">
<input type = "text" name = "firstname" placeholder = "First Name" size = "30px"><br>

<input type = "text" name = "lastname" placeholder = "Last Name" size = "30px"><br>

<input type = "radio" name = "sex" value = "male"><br>
 &nbsp Male<br>
<input type = "radio" name = "sex" value = "female"><br>
&nbsp Female<br>

<select name = "city"> <option value="" disabled selected>--City--</option>

<option value = "Scarborough">Scarborough</option>
<option value = "Brampton">Brampton</option>
<option value = "Markham">Markham</option></select><br>
<select name = "hobby">
<option value="" disabled selected>--Hobby--</option>
 <option value = "soccer">--Soccer--</option>
<option value = "hockey">---Hockey---</option></select> <br>



<input type = "text" name = "email" placeholder = "Email" size = "30px"><br>

<input type = "text" name = "contact" placeholder = "Contact" size = "30px"><br>
<textarea  name = "description"rows = "15" cols = "32" placeholder = "Description" >Description </textarea><br>
<a href = "login.php"><input type = "submit" name = "cancel" value = "Cancel" style = "margin-left : 40px; "></a>

<input type = "submit" name = "submit" value = "Submit" style = "margin-left : 40px; ">

</form>
<?php

function logout()
{
	session_unset();
	session_destroy();
}
?>


</body>