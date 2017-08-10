<?php




function ambienti(){
	
			include('../init.php');
			$azienda = $_POST['azienda'];
			$impianto = $_POST['imp'];
			$ambiente = $_POST['amb'];
			$immagine = $_POST['immagine'];

			if( mysqli_query($con,"INSERT INTO Ambienti(Azienda,Impianto,Ambiente,Immagine) VALUES('$azienda','$impianto','$ambiente','$immagine' );"))
			echo 'Successo';
			mysqli_close($con);
}

function clienti (){
			include('../init.php');
			$name = $_POST['name'];
			$pw = $_POST['psw'];
			$azienda = $_POST['azienda'];
			$mail = $_POST['mail'];
			$flag = $_POST['flag'];

			if( mysqli_query($con,"INSERT INTO Dati_clienti(Username,Password,Azienda,Mail,Proprietario) VALUES('$name','$pw','$azienda','$mail',$flag);"))	
            echo 'Successo';				
			mysqli_close($con);
}

function iot(){	
			
		   include('../init.php');
		   $name = $_POST['name'];
		   $pw = $_POST['psw'];
		   $ad = $_POST['adm'];
		   $sns = $_POST['sens'];
		   $am = $_POST['amb'];
		   
		   if( mysqli_query($con,"INSERT INTO Dati_iot(Username,Password,Admin,Sensorista,Ambientista) VALUES('$name','$pw',$ad,$sns,$am);"))
		   echo 'Successo';
		   mysqli_close($con);
}

function impianti(){
	
			include('../init.php');
			$azienda = $_POST['azienda'];
			$impianto = $_POST['impianto'];
			$sensore = $_POST['sensore'];
			$qta = $_POST['qta'];

			if( mysqli_query($con,"INSERT INTO Impianti(Azienda,Impianto,CodiceS,Quantità) VALUES('$azienda','$impianto','$sensore',$qta );"))
			echo 'Successo';			
			mysqli_close($con);	
}

function sensori(){
	        include('../init.php');
			$cod = $_POST['cod'];
			$tipo = $_POST['tipo'];
			$marca = $_POST['marca'];
			$anno = $_POST['anno'];


			if( mysqli_query($con,"INSERT INTO Sensori(CodiceS,Tipo,Marca,Anno) VALUES('$cod','$tipo','$marca',$anno );"))
			echo 'Successo';
			mysqli_close($con);
}




switch( $_GET['table'] ){
		
		case "Ambienti":
			ambienti();		    
			break;
		   
		case "Dati_clienti":
		    clienti();
		    break;
		   
		case "Dati_iot":
		   iot();		   
		   break;
		   
		case "Impianti":
			
			impianti();
		    break;
		   
		case "Sensori":
		 
			sensori();
			break;
		   
        default:
           echo 'Error';		
	}




?>