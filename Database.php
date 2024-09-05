<?php
// connect to our mysql database
// class Person{
// 	public $name;
// 	public $age;

// 	public function breathe(){
// 		echo $this->name . ' is breathing';
// 	}
// }

// $person = new Person();
// $person->name = 'Hadia Shahid';
// $person->age = 19;
// // dd($person->breathe());
// $person->breathe();

class Database{
	public $connection;
	public function __construct($config){
		$dsn = 'mysql:' . http_build_query($config, '', ';');
		$this->connection = new PDO($dsn);
	}
	public function query($query){
		$statement = $this->connection->prepare($query);
		$statement->execute();
		return $statement;
	}
}
$config = require('config.php');
$db = new Database($config['database']);
$id = $_GET['id'];
$blogs = $db->query("SELECT * FROM aboutme where id = {$id}")->fetchAll(PDO::FETCH_ASSOC);
foreach($blogs as $blog){
	echo "<li>" . $blog['desc'] . "</li>";
	
}
?>

