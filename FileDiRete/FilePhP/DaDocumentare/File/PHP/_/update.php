<?php
	//Apro il file per la connessione al database
	include("connection.php");
	
	//Faccio eseguire la sessione
	session_start();
	
	//Se la tabella è stata inserita tramite risorsa GET
	if(isset($_GET["table"]))
	{
		//Raccolgo l'informazione
		$table = $_GET["table"];
		
		//Se ID, val e param sono stati inseriti
		if(isset($_GET["ID"]) && isset($_GET["val"]) && isset($_GET["param"]))
		{
			//Raccolgo le informazioni
			$id = $_GET["ID"];
			$val = $_GET["val"];
			$param = $_GET["param"];
			
			//Se la tabella inserita corrisponde a "altf4_auto"
			if($table == "altf4_auto")
			{
				//Creo la query SQL per modificare un dato in base alla targa
				$sql = "UPDATE " . $table . " SET " . $param . " = '" . $val . "' WHERE TARGA = '" . $id . "'";
			}
			else
			{
				//Altrimenti creo la query SQL per modificare un dato in base all'ID
				$sql = "UPDATE " . $table . " SET " . $param . " = '" . $val . "' WHERE ID = '" . $id . "'";
			}
			
			//Se la connessione al database avviene
			if ($conn->query($sql) === TRUE) 
			{
				//Viene eseguita la modifica
				echo "ok";			
			} 
			else 
			{
				//Altrimenti viene visualizzato il messaggio di errore
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}	
	}
	//Altrimenti se la tabella è stata inserita tramite risorsa POST
	else if(isset($_POST["table"]))
	{	
		//Raccolgo l'informazione
		$table = $_POST["table"];
		
		//Se ID, val e param sono stati inseriti
		if(isset($_POST["ID"]) && isset($_POST["val"]) && isset($_POST["param"]))
		{
			//Raccolgo le informazioni e creo la query SQL per modificare un dato in base all'ID
			$id = $_POST["ID"];
			$val = $_POST["val"];
			$param = $_POST["param"];
			
			$sql = "UPDATE " . $table . " SET " . $param . " = '" . $val . "' WHERE ID = '" . $id . "'";
			
			//Se la connessione al database avviene
			if ($conn->query($sql) === TRUE) 
			{
				//Viene eseguita la modifica
				echo "ok";
			} 
			else 
			{
				//Altrimenti viene visualizzato il messaggio di errore
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	}
?>