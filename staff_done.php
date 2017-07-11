# shop
<?php
try{

	$name = $_POST['name'];
	$pass = $_POST['pass'];

     $dsn='mysql:dbname=shop3;host=localhost;charset=utf8';
     $username='root';
     $password='root';
	$pdo = new PDO($dsn, $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	 
	$sql='INSERT INTO staff(name,password) VALUES(?,?)';
	$stmt = $pdo->prepare($sql);
	$data[] = $name;
	 $data[] = $pass;
	$stmt->execute($data);
	$dbh = null;



	

	
	print '会員登録しました';




}
catch(Exception $e)
{
	print '接続できませんでした';
	exit();
}
?>
