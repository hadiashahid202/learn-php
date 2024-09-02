<?php
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