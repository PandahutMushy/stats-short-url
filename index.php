<?php 
$plrGet = "";
if (isset ($_GET['p']))
	$plrGet = $_GET['p'];
$actual_link = "https://stats.pandahut.net/player/$plrGet";
echo $actual_link;

//header("Location: $actual_link"); 

?>