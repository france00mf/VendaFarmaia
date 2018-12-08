<!DOCTYPE html>
	<html lang="">
		<head>
			<meta charset="UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<title>PESQUISAR ARTIGO</title>
		
			<style>
				
					@font-face{
							font-family:Roboto;
							src:url(RobotoCondensed-Light.ttf);
					}

					body{
						margin:0;
					}
					.header{
						background:#0000ff;
						padding:1px;
						color:#fff;
					}

					.header p{
						font-family:Roboto;
						padding-left:1%;
					}

					.header a{
						font-family:Roboto;

						float:right;
						color:#fff;
						position:relative;
						right:30px;
						top:6px;
						text-decoration:none;
						padding:10px;
					}


					.header a:hover{
						background:#0000CD;
						padding:10px;
						border-radius:50px;
					}

						.header a i{
						font-size:.99rem;
					}


						.header p i{
						font-size:1.2rem;
					}

					.produto  p{
							font-family:Roboto;
						padding-left:1%;
						font-weight:300;
						font-size:1rem;
						color:#228b22;
					}


					.produto  a{
									background:#0000ff;
							font-family:Roboto;
							position:relative;
							
							border:none;
							padding:7px;
							font-weight:300;
							border-radius:5px;
							font-size:.9rem;
							color:#fff;
							cursor:pointer;
							text-decoration:none;
					}
					.produto a:hover{
							background:#0000cd;
						
					}


								.footer{
						background:#0000ff;
						padding:1px;
						color:#fff;
						width:100%;
						position:fixed;
						top:92.5%;
					}

					.footer p{
						font-family:Roboto;
						text-align:center;
						font-size:.9rem;
					}

			</style>

		</head>

		<body>
			<div class="header">
				<a href="RelatorioVenda.php"><i class="fa fa-map"></i> Relatório de Venda</a>
				<p><i class="fa fa-user"></i> Francisco José <b>( operador )</b></p>
			</div>

			<br><br>

			<div class="produto">
			<?php
				require_once("conexao.php");
				$selecao="SELECT * FROM estoque";
				$lendo=mysqli_query($conexao, $selecao);

				while($dados=mysqli_fetch_assoc($lendo)){
					echo "<br>";
					echo '<p> <b>'.$dados['Nome'].'</b><br></p>';
					echo "<p>Preço :  <b>Kz ".number_format($dados['Valor_Venda'],2,'.',',').' </b><br> </p>';
					echo '<p> <a href="FrontOffice.php?acao=add&id='.$dados['Id'].'"><i class="fa fa-cart-plus"></i> Adicionar</a> </p>';
					echo "<hr>";
				}
			?>
		</div>


			<br><br><br><br><br><br><br><br>

				<div class="footer">
				<p>Copyright <i class="fa fa-copyright"></i> 2018 | 2018 Alfredo Chitela</p>
			</div>
		</body>
	</html>