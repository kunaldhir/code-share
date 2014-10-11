<?php
include 'connection.php';

echo "<center><h2>Your information</h2></center>";
$result=mysql_query("SELECT * FROM data WHERE id='$id'") or die ('Invalid query :'.mysql_error());
$data=mysql_fetch_array($result);
	
	echo "Username :".$data['username']."<button id="edit_user">Edit username</button><br>";
	echo "Email ID :".$data['email']."<button>Edit email id</button><br>";
	echo "Password :".$data['password']."<button>Edit password</button><br>";

if (isset($_POST["edit_user"])){
	
	echo"<form method='POST' action='eval($_SERVER['PHP_SELF'];)'>";
	echo"New username : <input type='text' name='new_username'><br><br>";
	echo"Password : <input type='text' name='password'><br><br>";
	echo"<input type='submit' value='username_submit' name='username_submit'>";
	
	if (isset($_POST["username_submit")){
		
		if ($data['password']==$_POST["password"]){
		
			$username=$_POST['username'];
			$result = mysql_query("UPDATE * SET username='$username' WHERE id='$id' ") or die('Invalid query: ' . mysql_error());
			echo "Data updated successfully !";
		}
	}
	
}
?>
