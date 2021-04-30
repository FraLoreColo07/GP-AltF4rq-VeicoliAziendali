<?php
	include("connection.php");
	session_start();
	
	
	if(isset($_POST["tab"])){
		
		if($_POST["tab"] == "altf4_utenti"){
			
			$user = $_POST["username"];
			$pwd = $_POST["password"];
			
			$sql = "SELECT ID FROM altf4_utenti";
			$sql .= " WHERE username='".$user."' AND password='".$pwd."'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
              	while($row = $result->fetch_assoc()){
                	$id = $row["ID"];
                }
			  echo $id;
			}
			 else{
				 echo "utente-nonverificato";
			 }
		
		}else if($_POST["tab"] == "altf4_admin"){
	
			$user = $_POST["username"];
			$pwd = $_POST["password"];
			
			$sql = "SELECT ID FROM altf4_admin";
			$sql .= " WHERE username='".$user."' AND password='".$pwd."'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			 while($row = $result->fetch_assoc()){
                	$id = $row["ID"];
               }
               echo $id;
			}
			 else{
				 echo "utente-nonverificato";
			 }
		}
				
	}
	
?>