<?php

	include("connection.php");
	session_start();
	
	if(isset($_GET["table"]) && isset($_GET["ID"])){
		
		$table = $_GET["table"];
		$id = $_GET["ID"];
			
		if($table == "altf4_auto"){
			
			$sql = "DELETE FROM ".$table." WHERE TARGA = '".$id."'";
		}else
			$sql = "DELETE FROM ".$table." WHERE ID = '".$id."'";
		
		if ($conn->query($sql) === TRUE) {
				
			echo "ok";
		
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}	
	}

?>