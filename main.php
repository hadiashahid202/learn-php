<?php
	function dd($value){
		echo "<pre>";
		var_dump($value);
		echo "</pre>";
		die();
	}
	echo $_SERVER['REQUEST_URI'];
	// dd($_SERVER);
	$books = [
	  	[
	  		'name'        => "The silent patient",
	  		'author'      => "Alex Michaelides",
	  		'releaseyear' => "1977"
	  	],
	  	[
	  		'name'        => "Lord of the Flies",
	  		'author'      => "William Golding",
	  		'releaseyear' => "1954"
	  	],
	  	[
	  		'name'        => "The Old Man and the Sea",
	  		'author'      => "Ernest Hemingway",
	  		'releaseyear' => "1952"
	  	]
	];

	// function filter($items, $key, $value){
	//   	$filtereditems = [];
	//   	foreach($items as $item){
	//   		if($item[$key] === $value){
	//   			$filtereditems[] = $item;
	//   		}
	//   	}
	//   	return $filtereditems;
	// }
	// $filteredBooks  = filter($books, 'name', "The silent patient");

	$filteredBooks = array_filter($books, function($book){
		return $book['releaseyear'] < 1977;
	});
?>

<?php foreach ($filteredBooks as $book): ?>
	<ul>
		<li class="<?php echo $_SERVER['REQUEST_URI']==='/learn-php/'?'text-white bg-green-500':'text-white bg-red-300'; ?>" ><?= $book['name']; ?> (<?= $book['releaseyear']; ?>) By <?= $book['author']; ?></li>
	</ul>
	<?php endforeach; ?>