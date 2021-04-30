<?php

	include("connection.php");
	session_start();
	
	if(isset($_GET["tab"]) && isset($_GET["param"]) && isset($_GET["where"])){
		
		$tabella = $_GET["tab"];
		$param = $_GET["param"];
		$where = $_GET["where"];

		if($param != "*")
		{
			$sql = "SELECT ID,".$param;
		}else{
			$sql = "SELECT ".$param;
		}
		
		if($where != "generico")
			$sql.= " FROM ".$tabella." WHERE IDUtente = ".$where;
		else 
			$sql.= " FROM ".$tabella." WHERE 1";
		
		$result = $conn->query($sql);
		$code = "";
			
        if ($result->num_rows > 0){
        	
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
	}
?>