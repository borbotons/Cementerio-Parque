<?php

		//Conexion a DB
		
		class CONEXION {
			
		var $host;
		var $dbUser;
		var $dbPass;
		var $dbName;
		var $dbConn;
		var $connectError;
		var $errorMsg;
	
		function CONEXION($host,$dbUser,$dbPass,$dbName)
		{
			$this->host 	= $host;
			$this->dbUser 	= $dbUser;
			$this->dbPass	= $dbPass;
			$this->dbName	= $dbName;
			$this->connect();
		}

		function connect() {
			// Realiza la conexion con el servidor
			if (!$this->dbConn = mysqli_connect($this->host, $this->dbUser, $this->dbPass)) {
				$this->errorMsg = 'Could not connect to server';
				$this->connectError = true;
			// Selecciona la BD
			} else if ( !mysqli_select_db($this->dbConn, $this->dbName) ) {
				$this->errorMsg = 'Could not select database';
				$this->connectError = true;
			}
		}
		

		function isError() 
		{
			if ( $this->connectError ) { return true; }
			$this->errorMsg = mysqli_error($this->dbConn);
			
			if ( empty($this->errorMsg) ) {
				return false;
			} else {
				return true;
			}
		}
	

		function  query($sql) 
		{
			if (!$this->query = @mysqli_query($this->dbConn,$sql)) {
				$this->errorMsg = 'Query failed: ' . mysqli_error($this->dbConn) . ' SQL: ' . $sql;
			}
			return $this->query;
		}
    
		function select($sql) 
		{
			if (!$query = mysqli_query($this->dbConn, $sql)) {
				$this->errorMsg = 'Query failed: ' . mysqli_error($this->dbConn) . ' SQL: ' . $sql;return false;	}
			if(mysqli_num_rows($query)>0){
			$resultado=array();
			while( $row = mysqli_fetch_array($query,MYSQLI_ASSOC) ) {
			   array_push($resultado,$row);
			   }
			 }else{
				return null;
			 }
			 return $resultado;
		}
		
		function cerrar_sesion() 
		{
			mysqli_close($this->dbConn);
		}
    
}
?>