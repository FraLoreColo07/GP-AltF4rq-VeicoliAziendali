<?php

	include("connection.php");
	session_start();
	
	if(isset($_GET["tab"]) && isset($_GET["param"])){
		
		$tabella = $_GET["tab"];
		$param = $_GET["param"];

		if($param != "*")
		{
			$sql = "SELECT ID,".$param;
		}else{
			$sql = "SELECT ".$param;
		}
		$sql.= " FROM ".$tabella." WHERE 1";
		
		$result = $conn->query($sql);
		$code = "";
			
		while($row = $result->fetch_row()){
			
			$ind = count($row);
			for($i = 0; $i< $ind ;$i++){
				
				$code.= $row[$i];
				if($i != ($ind - 1))
					$code.= ",";
			}
			$code.= ";";
		}
		echo $code;	
	}
?>