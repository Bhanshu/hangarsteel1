
<?php
$cookie_name=$_POST['name'];
$cookie_phonename=$_POST['phone'];
echo $cookie_emailname=$_POST['email'];

?>

<?php

if(['cookie_emailname'] == $cookie_emailname)
{ 
echo"1";
}
else
{ 
echo"0"; 
setcookie($cookie_emailname, $cookie_emailname, time() + (86400 * 30), "/"); // 86400 = 1 day
} 
?>