<?php require_once "Queue.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
</head>
<body>
<?php 
	
	$queue = new Queue();
	$queue->add(1);
	$queue->add(2);
	$queue->add(3);

	echo "<br>head(): " 	. $queue->head();
	echo "<br>shift(): " 	. $queue->shift();
	echo "<br>head(): " 	. $queue->head();

 ?>
</body>
</html>