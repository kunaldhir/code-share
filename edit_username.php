<?php

include 'connection.php';

echo "Change username";

?>
<form method='POST' action='eval($_SERVER['PHP_SELF'];)'>
New username : <input type='text' name='new_username'><br><br>
Password : <input type='text' name='password'><br><br>
<input type='submit' value='username_submit' name='username_submit'>

<?php
	
	if (isset($_POST["username_submit"]){
		
		if ($data['password']==$_POST["password"]){
		
			$username=$_POST['username'];
			$result = mysql_query("UPDATE * SET username='$username' WHERE id='$id' ") or die('Invalid query: ' . mysql_error());
			echo "Data updated successfully !";
		}
	}
?>
