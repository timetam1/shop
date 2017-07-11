# shop<?php

try{

     $dsn='mysql:dbname=shop3;host=localhost;charset=utf8';
     $username='root';
     $password='root';
	$pdo = new PDO($dsn, $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	 
	$sql='SELECT name,code FROM staff WHERE 1';
	$stmt = $pdo->prepare($sql);
	$stmt->execute();


	$dbh = null;

print '<form action="staff_branch.php" method = "post">';
while(true)

{
	$rec=$stmt->fetch(PDO::FETCH_ASSOC);
	print $rec['name'];
	exit();


}
print '<input type = "submit" value = "修正">'; 
print '</form>';

}
catch(Exception $e){
	print 'エラーです';
	exit();
}
?>
<body>
<form action = "staff_edit_check.php" method="post">
	<input type = "hidden" name = "code" value = "<?php print $staff_code;?>">
	<input type  = "text" name = "name" style = "width:200px" value = "<?php print $name;?>">
	パスワードを入力して下さい
	<input type  = "password" name = "pass">
	<input type = "submit" value = "OK">
</form>
</body>
