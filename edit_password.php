<?php

include"connection.php";

echo"<center><h1>Change Password</h1></center>";

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Old password : <input type="text" id="old_password"><br>
New password : <input type="text" id="new_password"><br>
Confirm : <input type="text"0 id="confirm_password"><br>
<input type="submit" id="submit">
</form>

<?php

if(isset($_POST["submit"]){

    if($_POST["old_password"]==$data['password']){
        
        if($_POST["new_password"]==$_POST["confirrm_password"]){
            
            $result=mysql_query("UPDATE * SET password='$_POST[`confirm_password`] WHERE id='$id' ") or die('Invalid query: ' . mysql_error());
            echo "Your password is changed successfully!"
        }
    }
}



