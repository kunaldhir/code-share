<?php

include"connection.php";

echo"<center><h1>Change Password</h1></center>";

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Old password : <input type="text" id="old_password"><br>
New password : <input type="text" id="new_password"><br>
Confirm : <input type="texxt id="confirm_password"><br>
<input type="submit" id="submit">
</form>

<?php

if(isset($_POST["submit"]){
    
    if($_POST["old_password"]==$data['password']){
        if




