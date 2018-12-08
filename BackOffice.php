
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Back Office</title>
        <style>
 
             #example1 {
        background-image: url('im3.jpg');
        background-position:100% 100%;
        background-size: 100% 100%;
        background-attachment: fixed;
        background-repeat:initial;
        height: 510px;
}        

   .header {
    background-color: #f1f1f1;
    padding: 5px;
    text-align: center;
    }

     ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            }

            li {
            float: left;
            }

        li a, .dropbtn {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }   

    li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
    }

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
                    color: blue;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                    text-align: left;
                    }

         .dropdown-content a:hover {background-color: #f1f1f1}

           .dropdown:hover .dropdown-content {
    display: block;
}
  
    

h1 {
    text-shadow: 2px 2px 5px blue;
}




input[type=submit]:hover {
    background-color: #45a049;
}
<!--  -->
    div {
    border-radius: 5px;
    background-color:#ccc;
    padding: 20px;
    }

.pagination
{
   border-radius: 5px;
    background-color:antiquewhite; 
}

.cotainer
{
   border-radius: 5px;
   background-color:#ced5d3; 
}


/* Style the footer */
.footer {
    position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
    background-color: #f1f1f1;
    padding: 10px;
    text-align: center;
}




        </style>
        
        
    </head>
    
    
    <body>
        <div class="header">
        <h1>Administração da Farmacia Manuel Jr.</h1>
        </div>
      <ul>
          <li><a href="index.php">Home</a></li>
   
  <li><a href="#news">News</a></li>
 
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Ficheiro</a>
    <div class="dropdown-content">
        <a href="AdMedicamentos.php">Adicionar Novo Produto</a>
        <a href="Menu_De_Consultas.php">Abrir Produto</a>
        <a href="Menu_De_Consultas.php">Imprimir</a>
      <a href="Menu_De_Consultas.php">Sair</a>
      </li>
        
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Editar</a>
    <div class="dropdown-content">
      <a href="#">Atualizar</a>
      <a href="#">Excluir</a>
      </li>
      
      <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Relatorio</a>
    <div class="dropdown-content">
      <a href="#">Nome</a>
      <a href="#">Nome Tecnico</a>
      <a href="#">Data de Fabrico</a>
      <a href="#">Data de Expiração</a>
      <a href="#">Lote</a>
      <a href="#">Codigo de Barra</a>
      <a href="#">Numero de Registo</a>
      <a href="#">Data de Entrada</a>
      <a href="#">Data de Saida</a>
      <a href="#">Data de Fabrico</a>
      <a href="#">Data de Expiração</a>
      <a href="#">Lista de Produtos</a>
      <a href="#">Vendas</a>
      <a href="#">Stock</a>
      </li>
      
      <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Contabilidade</a>
    <div class="dropdown-content">
      <a href="#">Valor de Vendas</a>
      <a href="#">Quantidade Atendidos</a>
      <a href="#">Compras Efectuadas</a>
      <a href="#">Contas a Receber</a>
      <a href="#">Contas a Pagar</a>
      <a href="#">Faturas</a>
       <a href="#">Vendas</a>
       <a href="#">Stock</a>
      </li>
</ul>
        
        <div id="example1" class=column middle>
  <h2>Atenção que todas alteraçoes feitas neste área não serão revertidas</h2>
  <p>Todos os dados encontrados e retidos deste programa so devem ser usados pela Farmacia Manuel Jr.</p>
 
</div>
        
                                    <div class="footer">
                            <?php include 'footer.php';?>
                            </div>
        
       
        <?php
        // put your code here
        ?>
    </body>
</html>