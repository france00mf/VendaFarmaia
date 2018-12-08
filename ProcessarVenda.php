<?php
		session_start();
		include_once("conexao.php");

		if(isset($_POST['btn-vender'])){

				print_r($_SESSION['produto']);
				$cliente=mysqli_escape_string($conexao, $_POST['cliente']);
				$total=(int)$_SESSION['total'];
				$data= date('y-m-d H:i:s');
				$sql="INSERT INTO venda(cliente,total,data) VALUES ('$cliente','$total','$data')";

				
				if(mysqli_query($conexao, $sql)){
						header("Location: FrontOffice.php?acao=add&id=0&Vendido_com_sucesso");
				}else{
					header("Location: FrontOffice.php?acao=add&id=0?Erro_ao_Vender");
				}
		}
?>
