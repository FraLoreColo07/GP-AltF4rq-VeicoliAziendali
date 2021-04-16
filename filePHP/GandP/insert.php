<?php

	session_start();
	include("connection.php");
	
	if(isset($_GET["table"]) || isset($_POST["table"])){
			
		if($_GET["table"] == "altf4_utilizzo"){
			
			if(isset($_GET["data"]) && isset($_GET["oraIn"]) && isset($_GET["oraOut"]) && isset($_GET["idUtente"]) && isset($_GET["targaAuto"])){
				
				$data = $_GET["data"];
				$oraIn = $_GET["oraIn"];
				$oraOut = $_GET["oraOut"];
				$idUtente = $_GET["idUtente"];
				$targa = $_GET["targaAuto"];
				$table = $_GET["table"];
				
				$sql = "INSERT INTO ".$table." (data,oraIn,oraOut,IDUtente,TargaAuto) VALUES ('".$data."','".$oraIn."','".$oraOut."','".$idUtente."','".$targa."')";
				
				if($conn->query($sql) === TRUE) {
					
					echo "ok";
				
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		
		}else if($_POST["table"] == "altf4_utenti"){
			
			if(isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["username"]) && isset($_GET["password"]) && isset($_POST["dataNascita"]) && isset($_POST["cell"]) && isset($_POST["isEsterno"])){
				
				$nome = $_POST["nome"];
				$cognome = $_POST["cognome"];
				$username = $_POST["username"];
				$password = MD5($_POST["password"]);
				$dataNascita = $_POST["dataNascita"];
				$cell = $_POST["cell"];
				$isEsterno = $_POST["isEsterno"];
				
				$table = $_POST["table"];
				
				if($isEsterno == "0"){
					
					$sql = "INSERT INTO ".$table." (nome,cognome,username,password,dataNascita,cell) VALUES('".$nome."','".$cognome."','".$username."','".$password."','".$dataNascita."','".$cell."')";
					
				}else if($isEsterno == "1"){
					
					$sql = "INSERT INTO ".$table." (nome,cognome,username,password,dataNascita,cell,isEsterno) VALUES('".$nome."','".$cognome."','".$username."','".$password."','".$dataNascita."','".$cell."','".$isEsterno.",)";
				}
				
				if ($conn->query($sql) === TRUE) {
					
					echo "ok";
				
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			
		}else if($_GET["table"] == "altf4_storico"){
			
			if(isset($_GET["idUtilizzo"]) && isset($_GET["data"]) && isset($_GET["oraIn"]) && isset($_GET["oraOut"]) && isset($_GET["idUtente"]) && isset($_GET["targaAuto"])){
				
				$idUtilizzo = $_GET["idUtilizzo"];
				$data = $_GET["data"];
				$oraIn = $_GET["oraIn"];
				$oraOut = $_GET["oraOut"];
				$idUtente = $_GET["idUtente"];
				$targa = $_GET["targaAuto"];
				$table = $_GET["table"];
				
				$sql = "INSERT INTO ".$table." (IDUtilizzo,data,oraIn,oraOut,IDUtente,TargaAuto) VALUES ('".$idUtilizzo."','".$data."','".$oraIn."','".$oraOut."','".$idUtente."','".$targa."')";
				
				if($conn->query($sql) === TRUE) {
					
					echo "ok";
				
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		}else if($_GET["table"] == "altf4_prenotazione"){
			
			if(isset($_GET["idUtente"]) && isset($_GET["targaAuto"]) && isset($_GET["oraIn"]) && isset($_GET["data"])){
				

				$data = $_GET["data"];
				$oraIn = $_GET["oraIn"];
				$idUtente = $_GET["idUtente"];
				$targa = $_GET["targaAuto"];
				
				$table = $_GET["table"];
				
				$sql = "INSERT INTO ".$table." (IDUtente,targaAuto,data,oraIn) VALUES ('".$idUtente."','".$targa."','".$data."','".$oraIn."')";
				
				if($conn->query($sql) === TRUE) {
					
					echo "ok";
				
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		}else if($_GET["table"] == "altf4_auto"){
			
			if(isset($_GET["targaAuto"]) && isset($_GET["modello"]) && isset($_GET["marca"]) && isset($_GET["dataAcquisto"]) && isset($_GET["dataRevisione"])){
				

				$modello = $_GET["modello"];
				$marca = $_GET["marca"];
				$dataAcquisto = $_GET["dataAcquisto"];
				$dataRevisione = $_GET["dataRevisione"];
				$targa = $_GET["targaAuto"];
				
				$table = $_GET["table"];
				
				$sql = "INSERT INTO ".$table." (TARGA,modello,marca,dataAcquisto,dataRevisione) VALUES ('".$targa."','".$modello."','".$marca."','".$dataAcquisto."','".$dataRevisione."')";
				
				if($conn->query($sql) === TRUE) {
					
					echo "ok";
				
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}	
		}else if($_POST["table"] == "altf4_admin"){
			
			if(isset($_POST["username"]) && isset($_POST["password"])){
				
				$username = $_POST["username"];
				$password = MD5($_POST["password"]);
				
				$table = $_POST["table"];
				
				$sql = "INSERT INTO ".$table." (username,password) VALUES('".$username."','".$password."')";
					
				if ($conn->query($sql) === TRUE) {
					
					echo "ok";
				
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			
		}
	}

?>
