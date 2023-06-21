<?

	$name = $_POST['name'];
	$email = $_POST['email'];

	$dbh = new PDO('mysql:host=localhost;dbname=cm66860_db', 'cm66860_db', 'Fz4eP@nf99@mCqQ');
	$stmt = $dbh->prepare("INSERT INTO `order`(`time`, name, email)
		VALUES (NOW(), :name, :email)");
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':email', $email);
	$stmt->execute();

	echo '1';
