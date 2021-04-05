<?php

	include("connection.php");
	session_start();
	
	if(isset($_GET["table"])){
		
		$table = $_GET["table"];
		if(isset($_GET["ID"]) && isset($_GET["val"]) && isset($_GET["param"])){
			
			$id = $_GET["ID"];
			$val = $_GET["val"];
			$param = $_GET["param"];
			if($table == "altf4_auto"){
				
				$sql = "UPDATE ".$table." SET ".$param." = '".$val."' WHERE TARGA = '".$id."'";
			}else
				$sql = "UPDATE ".$table." SET ".$param." = '".$val."' WHERE ID = '".$id."'";
			
			if ($conn->query($sql) === TRUE) {
					
				echo "ok";
			
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		
	}else if(isset($_POST["table"])){
		
		$table = $_POST["table"];
		if(isset($_POST["ID"]) && isset($_POST["val"]) && isset($_POST["param"])){
			
			$id = $_POST["ID"];
			$val = $_POST["val"];
			$param = $_POST["param"];
			
			$sql = "UPDATE ".$table." SET ".$param." = '".$val."' WHERE ID = '".$id."'";
			
			if ($conn->query($sql) === TRUE) {
					
				echo "ok";
			
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	}

?>