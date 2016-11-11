<?php
require_once("init.php");
$thestuff = array('Hello', 'this', 'is', 'my', 10, 'words', 'not', 'really');

$words = new ParentClass($thestuff);
$words2 = new ParentClass("This is my already made string");
$ext = new ChildClass($thestuff);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>
	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<?php
	  echo $words.'<br />';
		echo $words->scrambler().'<br />';
		echo $words2.'<br />';
		echo $words2->scrambler().'<br />';
		echo $ext.'<br />';
		echo $ext->scrambler().'<br />';
	?>
</body>
</html>