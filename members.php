<?php
session_start();
global $start;
global $expire;
if(!isset($_SESSION['id'])){header('Location:login.php');}

    $start=$_SESSION['start'];
	$expire=time();
	$diff=($expire-$start)/60;
	if($diff>15)
	{ 
		session_destroy();
      echo '<script>alert("your session has been expired");window.location.reload();</script>';
	 	  
	}

	$_SESSION['start']=time();
include 'connection.php';

global $id;
$username = $_SESSION['username'];
$users=mysql_query("SELECT * FROM data WHERE id='$id'") or die('Invalid query: ' . mysql_error());
	$userdata=mysql_fetch_array($users);
	
	echo "<center>"."<h2>"."Welcome ".$_SESSION['username']."</h2>"."</center>"; 
?>

<center>
<nav>
<a href="notifications.php">Notifications</a>
<a href="user_data.php">Your info</a>
<a href="logout.php">Log Out</a>
</nav>
<center>
<h3>Your projects</h3>

<?php

$projects=mysql_query("SELECT * FROM projects WHERE username='$username'") or die('Invalid query:'.mysql_error());
	
	while($projectdata=mysql_fetch_array($projects);){
	
	echo "<ul><li>Project name :".$projectdata['name']."</li>";
	echo "<li>Contributions :"$projectdata['contributions']."</li></ul>";}

$expire = time();

?>
