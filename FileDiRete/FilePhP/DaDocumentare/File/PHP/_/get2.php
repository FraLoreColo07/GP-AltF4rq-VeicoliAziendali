<?php

	include("connection.php");
	session_start();
	
	include "JSON.php";
	$json = new Services_JSON();
	
	class Utilizzo {
	
		public $id;
		public $data;
		private $oraIn;
		private $oraOut;
		private $IDUtente;
		private $targa;


		public function setId($id1) {
			$this->id = $id1;
		}
		public function setData($data1) {
			$this->data = $data1;
		}
		public function setOraIn($oraIn1) {
			$this->oraIn = $oraIn1;
		}
		public function setOraOut($oraOut1) {
			$this->oraOut = $oraOut1;
		}
		public function setIdUtente($Utente) {
			$this->IDUtente = $Utente;
		}
		public function setTarga($targa1) {
			$this->targa = $targa1;
		}
	}
	
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
			
		$countUtilizzo = 0;
		while($row = $result->fetch_assoc()){
			
			$uti['utilizzo'.$count] = new Utilizzo;
			$uti['utilizzo'.$count]->setID($row["ID"]);
			$uti['utilizzo'.$count]->setData($row["data"]);
			$uti['utilizzo'.$count]->setOraIn($row["oraIn"]);
			$uti['utilizzo'.$count]->setOraOut($row["oraOut"]);
			$uti['utilizzo'.$count]->setIdUtente($row["IDUtente"]);
			$uti['utilizzo'.$count]->setTarga($row["TargaAuto"]);
			$count++;
		}
		$json_string = $json->encode($uti);
		echo $json_string;
	}
?>