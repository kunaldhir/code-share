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
$result=mysql_query("SELECT * FROM data WHERE id='$id'") or die('Invalid query: ' . mysql_error());
	$data=mysql_fetch_array($result);
	
	echo "<center>"."<h2>"."Welcome ".$_SESSION['username']."</h2>"."</center>"; 
	
	
$expire = time();

?>