<!-- Variables, Associative array, Function, Filter Function, Lambda function, Conditionals  -->

<!DOCTYPE html>
<html>
<head>
	<title>The Fundamentals</title>
</head>
<body>
	<?php require "main.php"; ?>
	<?php foreach ($filteredBooks as $book): ?>
	<ul>
		<li><?= $book['name']; ?> (<?= $book['releaseyear']; ?>) By <?= $book['author']; ?></li>
	</ul>
	<?php endforeach; ?>
</body>
</html>