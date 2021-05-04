<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>test2</title>
</head>
<body>
	my name is <?php echo $_SESSION['username2']; ?>
	<a href="test3.php">test3</a>

</body>
</html>