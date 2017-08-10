<?php

include('../init.php');
function ambienti(){
	
			include('../init.php');
			$id = $_POST['id'];
			$azienda = $_POST['azienda'];
			$impianto = $_POST['imp'];
			$ambiente = $_POST['amb'];

			if( mysqli_query($con,"UPDATE Ambienti SET Azienda='$azienda', Impianto  = '$impianto', Ambiente = '$ambiente' 
			WHERE Id = $id;"))
			echo 'Successo';

			mysqli_close($con);
}

function clienti (){
			include('../init.php');
			$id = $_POST['id'];
			$name = $_POST['name'];
			$pw = $_POST['psw'];
			$azienda = $_POST['azienda'];
			$mail = $_POST['mail'];
			$flag = $_POST['flag'];

			if( mysqli_query($con,"UPDATE Dati_clienti SET Username='$name', Password  = '$pw', Azienda = '$azienda', Mail = '$mail', Proprietario = $flag where Id = $id;"))
			echo 'Successo';

			mysqli_close($con);
}

function iot(){	
			
		   include('../init.php');
		   $id = $_POST['id'];
			$name = $_POST['name'];
			$pw = $_POST['psw'];
			$ad = $_POST['adm'];
			$sns = $_POST['sens'];
			$am = $_POST['amb'];


			if( mysqli_query($con,"UPDATE Dati_iot SET Username='$name', Password  = '$pw', Admin = $ad, Sensorista = $sns, Ambientista = $am where Id = $id;"))
			echo 'Successo';

			mysqli_close($con);
}

function impianti(){
	
			include('../init.php');
			 $id = $_POST['id'];
			$azienda = $_POST['azienda'];
			$impianto = $_POST['impianto'];
			$sens = $_POST['sensore'];
			$qta = $_POST['qta'];

			if( mysqli_query($con,"UPDATE Impianti SET Azienda='$azienda', Impianto  = '$impianto', CodiceS = '$sens', Quantità = $qta WHERE Id = $id;"))
			echo 'Successo';

			mysqli_close($con);	
}

function sensori(){
	        include('../init.php');
			$id = $_POST['id'];
			$cod = $_POST['cod'];
			$tipo = $_POST['tipo'];
			$marca = $_POST['marca'];
			$anno = $_POST['anno'];


			if( mysqli_query($con,"UPDATE Sensori SET CodiceS='$cod', Tipo  = '$tipo', Marca = '$marca', Anno = $anno where Id = $id;"))
			echo 'Successo';

			mysqli_close($con);
			
}

switch( $_GET['table'] ){
		
		case 'Ambienti':
		    ambienti();
			break;
		   
		case 'Dati_clienti':
		    clienti();
		    break;
		   
		case 'Dati_iot':
		   iot();
		   break;
		   
		case 'Impianti':
		    impianti();
		    break;
		   
		case 'Sensori':
		    sensori();
			break;
				   
        default:
           echo 'Error';		
	}

?>