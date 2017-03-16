<?php
	include ('config.php');
?>
<?php
if (!empty($_GET['otsi'])) {
	//kasutaja tekst vormist
	$otsi = $_GET['otsi'];
	//Päring
	$paring = 'SELECT = FROM SYNNID WHERE L_nimi LIKE "'.$otsi.'"';
}
?>
