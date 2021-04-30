<?php
	//Faccio eseguire la sessione
	session_start();
	
	//Apro il file per la connessione al database
	include("connection.php");
	
	//Se table è stato inserito nella risorsa GET o nella risorsa POST
	if(isset($_GET["table"]) || isset($_POST["table"]))
	{
		//Se la tabella inserita corrisponde a "altf4_utilizzo"
		if($_GET["table"] == "altf4_utilizzo")
		{
			//Se i dati sono stati inseriti
			if(isset($_GET["data"]) && isset($_GET["oraIn"]) && isset($_GET["oraOut"]) && isset($_GET["idUtente"]) && isset($_GET["targaAuto"]))
			{
				//Raccolgo le informazioni e creo la query SQL per l'inserimento dei dati nel database
				$data = $_GET["data"];
				$oraIn = $_GET["oraIn"];
				$oraOut = $_GET["oraOut"];
				$idUtente = $_GET["idUtente"];
				$targa = $_GET["targaAuto"];
				$table = $_GET["table"];
				
				$sql = "INSERT INTO " . $table . " (data,oraIn,oraOut,IDUtente,TargaAuto) VALUES ('" . $data . "','" . $oraIn . "','" . $oraOut . "','" . $idUtente . "','" . $targa . "')";
				
				//Se la connessione al database avviene
				if($conn->query($sql) === TRUE) 
				{
					//Viene eseguito l'inserimento
					echo "ok";
				
				} 
				else 
				{
					//Altrimenti viene visualizzato il messaggio di errore
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		
		}
		//Altrimenti se la tabella inserita corrisponde a "altf4_utenti"
		else if($_POST["table"] == "altf4_utenti")
		{
			//Se le credenziali sono stati inseriti
			if(isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["username"]) && isset($_GET["password"]) && isset($_POST["dataNascita"]) && isset($_POST["cell"]) && isset($_POST["isEsterno"]))
			{
				//Raccolgo informazioni
				$nome = $_POST["nome"];
				$cognome = $_POST["cognome"];
				$username = $_POST["username"];
				$password = MD5($_POST["password"]);
				$dataNascita = $_POST["dataNascita"];
				$cell = $_POST["cell"];
				$isEsterno = $_POST["isEsterno"];
				
				$table = $_POST["table"];
				
				if($isEsterno == "0")
				{	
					//Se è un utente creo la query SQL per l'inserimento delle credenziali ($isEsterno)
					$sql = "INSERT INTO " . $table . " (nome,cognome,username,password,dataNascita,cell) VALUES('" . $nome . "','" . $cognome . "','" . $username . "','" . $password . "','" . $dataNascita . "','" . $cell . "')";					
				}
				else if($isEsterno == "1")
				{
					//Altrimenti se è un utente amministratore creo la query SQL per l'inserimento delle credenziali (con $isEsterno)
					$sql = "INSERT INTO ".$table." (nome,cognome,username,password,dataNascita,cell,isEsterno) VALUES('" . $nome . "','" . $cognome . "','" . $username . "','" . $password . "','" . $dataNascita . "','" . $cell . "','" . $isEsterno . ",)";
				}
				
				//Se la connessione al database avviene
				if ($conn->query($sql) === TRUE) 
				{
					//Viene eseguito l'inserimento delle credenziali
					echo "ok";				
				} 
				else 
				{
					//Altrimenti viene visualizzato il messaggio di errore
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			
		}
		//Altrimenti se la tabella inserita corrisponde a "altf4_storico"
		else if($_GET["table"] == "altf4_storico")
		{
			//Se i dati sono stati inseriti
			if(isset($_GET["idUtilizzo"]) && isset($_GET["data"]) && isset($_GET["oraIn"]) && isset($_GET["oraOut"]) && isset($_GET["idUtente"]) && isset($_GET["targaAuto"]))
			{
				//Raccolgo le informazioni e creo la query SQL per l'inserimento dei dati
				$idUtilizzo = $_GET["idUtilizzo"];
				$data = $_GET["data"];
				$oraIn = $_GET["oraIn"];
				$oraOut = $_GET["oraOut"];
				$idUtente = $_GET["idUtente"];
				$targa = $_GET["targaAuto"];
				$table = $_GET["table"];
				
				$sql = "INSERT INTO " . $table . " (IDUtilizzo,data,oraIn,oraOut,IDUtente,TargaAuto) VALUES ('" . $idUtilizzo . "','" . $data . "','" . $oraIn . "','" . $oraOut . "','" . $idUtente . "','" . $targa . "')";
				
				//Se la connessione al database avviene
				if($conn->query($sql) === TRUE) 
				{
					//Viene eseguito l'inserimento
					echo "ok";
				
				} 
				else 
				{
					//Altrimenti viene visualizzato il messaggio di errore
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		}
		//Altrimenti se la tabella inserita corrisponde a "altf4_prenotazione"
		else if($_GET["table"] == "altf4_prenotazione")
		{
			//Se i dati sono stati inseriti
			if(isset($_GET["idUtente"]) && isset($_GET["targaAuto"]) && isset($_GET["oraIn"]) && isset($_GET["data"]))
			{
				//Raccolgo le informazioni e creo la query SQL per l'inserimento dei dati
				$data = $_GET["data"];
				$oraIn = $_GET["oraIn"];
				$idUtente = $_GET["idUtente"];
				$targa = $_GET["targaAuto"];
				
				$table = $_GET["table"];
				
				$sql = "INSERT INTO " . $table . " (IDUtente,targaAuto,data,oraIn) VALUES ('" . $idUtente . "','" . $targa . "','" . $data . "','" . $oraIn . "')";
				
				//Se la connessione al database avviene
				if($conn->query($sql) === TRUE) 
				{
					//Viene eseguito l'inserimento
					echo "ok";
				
				} 
				else 
				{
					//Altrimenti viene visualizzato il messaggio di errore
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		}
		//Altrimenti se la tabella inserita corrisponde a "altf4_auto"
		else if($_GET["table"] == "altf4_auto")
		{
			//Se i dati sono stati inseriti
			if(isset($_GET["targaAuto"]) && isset($_GET["modello"]) && isset($_GET["marca"]) && isset($_GET["dataAcquisto"]) && isset($_GET["dataRevisione"]))
			{
				//Raccolgo le informazioni e creo la query SQL per l'inserimento
				$modello = $_GET["modello"];
				$marca = $_GET["marca"];
				$dataAcquisto = $_GET["dataAcquisto"];
				$dataRevisione = $_GET["dataRevisione"];
				$targa = $_GET["targaAuto"];
				
				$table = $_GET["table"];
				
				$sql = "INSERT INTO " . $table . " (TARGA,modello,marca,dataAcquisto,dataRevisione) VALUES ('" . $targa . "','" . $modello . "','" . $marca . "','" . $dataAcquisto . "','" . $dataRevisione . "')";
				
				//Se la connessione al database avviene
				if($conn->query($sql) === TRUE) 
				{
					//Viene eseguito l'inserimento
					echo "ok";				
				} 
				else 
				{
					//Altrimenti viene visualizzato il messaggio di errore
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}	
		}
		//Altrimenti se la tabella inserita corrisponde a "altf4_admin"
		else if($_POST["table"] == "altf4_admin")
		{
			//Se le credenziali dell'amministratore sono stati inseriti
			if(isset($_POST["username"]) && isset($_POST["password"]))
			{
				//Raccolgo le informazioni e creo la query SQL per l'inserimento dei dati
				$username = $_POST["username"];
				$password = $_POST["password"];
				
				$table = $_POST["table"];
				
				$sql = "INSERT INTO " . $table . " (username,password) VALUES('" . $username . "','" . $password . "')";
				
				//Se la connessione al database avviene
				if ($conn->query($sql) === TRUE) 
				{
					//Viene eseguito l'inserimento delle credenziali
					echo "ok";				
				} 
				else 
				{
					//Altrimenti viene visualizzato il messaggio di errore
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}			
		}
	}
?>