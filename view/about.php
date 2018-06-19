<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$about= new about();
		$content=$about->display($pdo);
		echo $content['text'];
	?>
</body>
</html>