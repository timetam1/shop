# shop
<body>
<?php

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
	print '<input type = "radio" name = "staffcode" value = "'.$rec['code'].'">';
	print $rec['name'];
	exit();


}
print '<input type = "submit" value = "修正" />'; 
print '</form>';

}
catch(Exception $e){
	print 'エラーです';
	exit();
}
?>
</body>
