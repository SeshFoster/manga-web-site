<?
// Подключение к базе данных

require_once 'configs/bd.php';


$connection = new mysqli($host, $name, $pass, $database);
if($connection->connect_error) die('Error Connect');

$query = "SELECT * FROM users";
$result = $connection->query($query);

if (!$result) die('Error result');

$get_bd = "INSERT INTO `users`(`id_user`, `name`, `email`, `password`, `login`) VALUES ('1','Mark','vadfssfsd@gmail.com','fsfsfs','hahahah')";

// $bdg = $connection->prepare($get_bd);
// $bdg->execute();