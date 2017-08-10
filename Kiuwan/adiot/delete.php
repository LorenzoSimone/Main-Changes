<?php

include('../init.php');
$id = $_POST['id'];
$table = $_GET['table'];
if( mysqli_query($con,"DELETE FROM $table  WHERE id = $id;"))
	
echo 'Rimozione con successo';
else echo 'Error';
mysqli_close($con);
?>