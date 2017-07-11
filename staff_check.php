# shop
<?php
$name = $_POST['name'];
$pass  = $_POST['pass'];

if($name == '')
{
	print '名前を記入して下さい';
}
else
{
	print '名前は'.$name.'です';
}
if($pass  == '')
{
	print 'パスワードを記入して下さい';
}
else
{
	 print '<form action = "staff_done.php" method = "post">';
	 print '<input type = "hidden" name = "name" value = "'.$name.'">';
	 print '<input type = "hidden" name = "pass" value = "'.$pass.'">';
	 print '<input type = "submit" value = "OK">';
	 print '</form>';
	 

}
?>
