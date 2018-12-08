<?php 
		$servidor="localhost";
		$usuario="root";
		$chave="";
		$dbnome="farmacia";

		$conexao=mysqli_connect($servidor,$usuario,$chave,$dbnome);

		if(mysqli_connect_error()){
				echo " Falha ao servidor ".mysqli_connect_error();
		}
?>