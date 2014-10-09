<?php
include 'connection.php';

echo "<center><h2>Your information</h2></center>";
$result=mysql_query("SELECT * FROM data WHERE id='$id'") or die ('Invalid query :'.mysql_error());
$data=mysql_fetch_array($result);
	
	echo "Username :".$data['username']."<button>Edit username</button><br>";
	echo "Email ID :".$data['email']."<button>Edit email id</button><br>";
	echo "Password :".$data['password']."<button>Edit password</button><br>";

?>
