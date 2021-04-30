<?php
	//Viene aperto il file per la connessione al database
	include("connection.php");
	
	//Faccio eseguire la sessione
	session_start();
	
	//Se table e ID sono stati inseriti
	if(isset($_GET["table"]) && isset($_GET["ID"]))
	{
		//Raccolgo le informazioni
		$table = $_GET["table"];
		$id = $_GET["ID"];
		
		//Se la tabella interessata alla rimozione del dato è "altf4_auto"
		if($table == "altf4_auto")
		{	
			//Elimino un dato in base alla targa
			$sql = "DELETE FROM " . $table . " WHERE TARGA = '" .$id. "'";
		}
		else
		{	
			//Altrimenti elimino un dato in base all'ID
			$sql = "DELETE FROM " . $table . " WHERE ID = '" . $id . "'";
		}
		
		//Se la connessione al database avviene
		if ($conn->query($sql) === TRUE) 
		{		
			//Viene eseguita la rimozione
			echo "ok";		
		} 
		else 
		{	
			//Altrimenti viene visualizzato il messaggio di errore
			echo "Error: " . $sql . "<br>" . $conn->error;
		}	
	}
?>