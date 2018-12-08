<?php
		session_start();
		include_once("conexao.php");
		
			//CRIANDO A SESSÃO
		if(!isset($_SESSION['carrinho'])){
			$_SESSION['carrinho']=array();
		}

			//Adicionando ao carrinho

		if(isset($_GET['acao'])){
			if($_GET['acao'] == 'add'){
				$id=intval($_GET['id']);				
				if(!isset($_SESSION['carrinho'][$id])){
					$_SESSION['carrinho'][$id] = 1;
				}else{
					$_SESSION['carrinho'][$id] += 1;
				}
			}
		}	

			//Remover do Carrinho

			if($_GET['acao'] == 'del'){
				$id=intval($_GET['id']);
				if(isset($_SESSION['carrinho'][$id])){
					unset($_SESSION['carrinho'][$id]);
				}
			}


			//Reiniciando as compras
			if($_GET['id'] == 0){
				unset($_SESSION['carrinho'][$id]);
			}
?>


<!DOCTYPE html>
	<html lang="pt">
		<head>
			<meta charset="UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<title>FRONT OFFICE</title>
		
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

					.vender{
						float:left;

					}

					.Vnderh1{
						font-family:Roboto;
						padding-left:1%;
						font-weight:300;
						font-size:1.8rem;
						color:#666;
					}


						.vender button{
							background:#0000ff;
						font-family:Roboto;
						position:relative;
						left:1%;
						border:none;
						padding:7px;
						font-weight:300;
						border-radius:5px;
						font-size:.9rem;
						color:#fff;
						cursor:pointer;

					}


						.vender button:hover{
							background:#0000cd;
						
					}




						.vender tfoot a{
							background:#0000ff;
							font-family:Roboto;
							position:relative;
							left:1%;
							border:none;
							padding:7px;
							font-weight:300;
							border-radius:5px;
							font-size:.9rem;
							color:#fff;
							cursor:pointer;
							text-decoration:none;
					}


						.vender tfoot a:hover{
							background:#0000cd;
						
					}

						
							.vender   .i1 {
							color:#fff;
							background:#888;
							padding:4px;
							padding-bottom:4px;
							padding-top:2px;						
					}				


					.total {
						border-left:2px solid #888;
						float:right;
						width:25%;
						height:150px;
						padding-left:5px;
					}

					.total h1{
						font-family:Roboto;
						padding-left:1%;
						font-weight:300;
						font-size:1.8rem;
						color:#555;	
					}

					.total p{
						font-family:Roboto;
						padding-left:1%;
						font-weight:600;
						font-size:1.8rem;
						color:#228b22;	
					}

					table tr th {
						font-family:Roboto;
						padding:10px;
					}

					table tr td{
						font-family:Roboto;
						padding:10px;	
					}

					.notificacao1 {
						font-family:Roboto;
						padding-left:3%;
						color:#666;
						font-weight:300;
					}


					.txt{
						width:70%;
						background:#888;
						font-family:Roboto;
						border:none;
												
						padding:2px;
						color:#ddd;
					}


					.txt:focus{
						border:none;
					}

						.vender label{
						font-family:Roboto;
						padding-left:3%;
						font-weight:300;
						font-size:1rem;
						color:#222;
					}
					
			


					.footer{
						background:#0000ff;
						padding:1px;
						color:#fff;
						width:100%;
						position:fixed;
						top:93.5%;
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
		
				<h1 class="Vnderh1">Vender</h1>
				<hr>

			<div class="vender">
			
				<form method="post" action="ProcessarVenda.php">
					<label>Data : <?php $data_actual = date('d/m/y').' | '.date('H:i:s');  echo $data_actual; ?></label>  <br><br>
					<label>Cliente</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-user i1"></i><input type="text" name="cliente"  class="txt"/><br><br>
						
				<table>
					
					<thead>
						<tr>
							<th>Produto</th>
							<th>Quantidade</th>
							<th>Preço</th>
							<th>Subtotal</th>
							<th>Remover</th>
							
							
						</tr>

					</thead>

					<form method="post" action="?acao=up">
					
					
					<tbody>
						<?php
								include_once("conexao.php");
								if(count($_SESSION['carrinho']) == 0){
									echo "<p class='notificacao1'>Nenhum produto adicionado para venda</p>";
								}else{
									$total=(real)0;
									foreach($_SESSION['carrinho'] as $id => $qtd){
										$selecao="SELECT * FROM estoque WHERE Id='$id'";
										$lendo=mysqli_query($conexao, $selecao);
										$dados=mysqli_fetch_assoc($lendo);

										$nome=$dados['Nome'];
										$preco=$dados['Valor_Venda'];
										$subtotal= (($preco * 100) * $qtd)/100;
										


										if(1==1){
											$inserir=mysqli_query($conexao,"INSERT INTO venda_usuario (produto,quantidade,preco,subtotal) VALUES('$nome','$qtd','$preco','$subtotal')");
										}

										$total += $subtotal;
										

										echo '
											<tr>
												<td>'.$nome.'</td>
												<td>'.$qtd.'</td>
												<td>'.$preco.'</td>
												<td>'.$subtotal.'</td>
												<td><a  href="?acao=del&id='.$id.'" style="color: #ff0000" class="btn-floating red"><i class="material-icons">delete</i></a></td>

											</tr>

										';

									
									}																	
										
								}

						?>

					</tbody>

					<tfoot>
							<tr>
								<th><a href="pesquisa.php"><i class="fa fa-cart-plus"></i> Adicionar</a></th>
								<th><button type="submit" name="btn-vender"><i class="fa fa-money"></i> Vender</button></th>
							</tr>
					</tfoot>

		
				</form>
						</form>
				</table>
			</div>

			

				
			<br>
			<div class="total">
				<h1>Total (AKZ)</h1>
				<?php
					if(!empty($total)){
					echo '<p>'.$total.' Kz</p>';
				}else{
					$total = 0;
					echo '<p>'.$total.' Kz</p>';
				}
				$_SESSION['total'] = $total;
				?>
			</div>

			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="footer">
				<p>Copyright <i class="fa fa-copyright"></i> 2018 | 2018 Alfredo Chitela</p>
			</div>
		</body>
	</html>