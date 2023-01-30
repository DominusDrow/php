<?php

if($_POST['name'] == 'admin') {
		echo 'Hello admin';
} else {
		echo 'Hello guest';
}

?>

<!DOCTYPE html>
<html>
<head>
		<title>Hello World</title>
</head>
<body>
	<form action="hello.php" method="post">
		<input type="text" name="name">
		<input type="submit" value="Submit">
</form>


</body>
</html>

