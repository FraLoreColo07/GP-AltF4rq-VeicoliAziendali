<?php

	include("connection.php");
	session_start();
	$att = "";
	
	if(isset($_GET["tab"]) && isset($_GET["att1"]) && isset($_GET["id"]) && isset($_GET["nParam"])){
		
		$tabella = $_GET["tab"];
		$att = $_GET["att1"];
		$id = $_GET["id"];
		$num = $_GET["nParam"];
		
		$sql = "SELECT ";
		if($att != ""){
			
			$sql.= $id.",".$att;
		}else
			$sql.= $id;
		
		
		$sql.= " FROM ".$tabella." WHERE 1";
		
		$result = $conn->query($sql);
		$code = "";
		if($id != "*"){
			
			while($row = $result->fetch_row()){
				
				for($i = 0; $i< $num ;$i++)
					$code.= $row[$i].",";
				$code.= ";";
			}
			echo $code;
		}else {
			
			while($row = $result->fetch_row()){
				$ind = count($row);
				
				for($i = 0; $i< $ind ;$i++)
					$code.= $row[$i].",";
				$code.= ";";
			}
			echo $code;
		}
		
	}
?>