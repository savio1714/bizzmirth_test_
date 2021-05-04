<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>test3</title>
</head>
<body>
	my name is <?php echo $_SESSION['username2']; ?>
<a href="test2.php">test2</a>
</body>
</html>