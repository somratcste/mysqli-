<?php

$query = 'select * from classics';
$result = $connection->query($query);

if(!$result)
	die($connection->error);

?>