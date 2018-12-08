<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            /* The snackbar - position it at the bottom and in the middle of the screen */
#snackbar {
    visibility: hidden; /* Hidden by default. Visible on click */
    min-width: 250px; /* Set a default minimum width */
    margin-left: -125px; /* Divide value of min-width by 2 */
    background-color: #333; /* Black background color */
    color: #fff; /* White text color */
    text-align: center; /* Centered text */
    border-radius: 2px; /* Rounded borders */
    padding: 16px; /* Padding */
    position: fixed; /* Sit on top of the screen */
    z-index: 1; /* Add a z-index if needed */
    left: 50%; /* Center the snackbar */
    bottom: 30px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
    visibility: visible; /* Show the snackbar */

/* Add animation: Take 0.5 seconds to fade in and out the snackbar. 
However, delay the fade out process for 2.5 seconds */
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
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
    text-shadow: 2px 2px 5px green;
}

input[type=text], select {
    width: 15%;
    padding: 5px 20px;
    margin: 15px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=Date], select {
    width: 15%;
    padding: 5px 20px;
    margin: 15px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=Time], select {
    width: 10%;
    margin: 15px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing:border-box
}

input[type=select], select {
    width: 15%;
    margin: 15px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing:border-box
}

input[type=submit] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 15px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
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

#Lfname

{padding-left: 1px;
padding-right: 22px;
}

#Ltecnico
{padding-left: 23px;
 padding-right: 10px;

}

#Lfabricante
{padding-left: 20px;}

#LDatafabrico
{padding-left: 20px;
padding-right: 15px;
}

#Llote
{padding-left: 1px;
padding-right: 15px;
}

#Lcodigobarra
{padding-left: 20px;}

#Lregisto
{padding-left: 20px;
padding-right: 2px;

}

#LDataexpiracao
{padding-left: 20px;
padding-right: 1px;

}


#LvalorC

{padding-left: 1px;
padding-right: 8px;
}

#LvalorV
{padding-left: 30px;
padding-right: 1px;
}

#Lmargem
{padding-left: 20px;
padding-right: 12px;
}

#Llucro
{padding-left: 20px;
padding-right: 13px;
}

#Lsugestao
{padding-left: 1px;
padding-right: 1px;
}

#Lsubstitui
{padding-left: 30px;
padding-right: 1px;
}

#Lanterior
{padding-left: 20px;
padding-right: 10px;
}

#Lquantidade
{padding-left: 20px;
padding-right: 10px;
}

#Ltipo
{padding-left: 1px;
padding-right: 30px;
}

#Lfrasco
{padding-left: 82px;
padding-right: 1px;
}

#Lmg
{padding-left: 67px;
padding-right: 1px;
}

#Lml
{padding-left: 120px;
padding-right: 1px;
}

/* Style the footer */
.footer {
    background-color: #f1f1f1;
    padding: 10px;
    text-align: center;
}


        </style>
        
        
    </head>
    
    
    <body>
        <div class="header">
        <h1>Adicionar Novos Medicamentos</h1>
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
        <br>
        
        
        
             <div>
            <!-- Meet & Great -->
            <form action="#" method="POST" onsubmit="norefresh_form();return false">
               
                <label id="Lfname">Nome</label>
                 <input type="text" id="fname" name="firstname" placeholder="Nome do medicamento..">
                 
                 <label id="Ltecnico">Nome Tecnico</label>
                <input type="text" id="tecnico" name="tecnico" placeholder="Designaçao Tecnica...">

                <label id="Lfabricante">Fabricante</label>
                <input type="text" id="fabricante" name="fabricante" placeholder="fabricante..">

                 <label id="LDatafabrico">Data de Fabrico</label>
                <input type="date" id="Datafabrico" name="Datafabrico" placeholder="fabrico..">

               
    <br>
              
            <label id="Llote">Lote n.</label>
             <input type="text" id="lote" name="lote" placeholder="serie..">
    
            
             <label id="Lcodigobarra">Codigo de Barra</label>
             <input type="text" id="codigobarra" name="codigobarra" placeholder="codigobarra..">
    
    
            <label id="Lregisto">Registo n.</label>
            <input type="text" id="registo" name="registo" placeholder="N. registo do fab...">
            
            <label id="LDataexpiracao">Data de Expiracao</label>
             <input type="date" id="Dataexpiracao" name="Dataexpiracao" placeholder="Expiração..">
   
             
            
    <br>           
       
     <label id="Ltipo">Tipo</label>
                <select id="tipo" name="tipo">
                <option value="xarope">xarope</option>
                <option value="comprimido">comprimido</option>
                <option value="Ampolas">Ampolas</option>
               </select>
     
    <label id="Lfrasco">Frasco</label>
                <select id="frasco" name="frasco">
                <option value="100ml">100ml</option>
                <option value="150ml">150ml</option>
                <option value="200ml">200ml</option>
                <option value="250ml">250ml</option>
                <option value="300ml">300ml</option>
                </select>  
    
          
             <label id="Lmg">mg</label>
                <select id="mg" name="mg">
                <option value="100mg">100mg</option>
                <option value="150mg">150mg</option>
                <option value="200mg">200mg</option>
                <option value="250mg">250mg</option>
                <option value="300mg">300mg</option>
                </select>
                     
             
                <label id="Lml">ml</label>
                <select id="ml" name="ml">
                <option value="100ml">100ml</option>
                <option value="150ml">150ml</option>
                <option value="200ml">200ml</option>
                <option value="250ml">250ml</option>
                <option value="300ml">300ml</option>
                </select>
                
                
     <br> 
             
            <label id="LvalorC">Compra</label>
            <input type="text" id="valorC" name="valorC" placeholder="Valor de Compra..">
    
              <label id="LvalorV">Valor de Venda</label>
            <input type="text" id="valorV" name="valorV" placeholder="Valor de Venda..">
           
             <label id="Lmargem">Margem</label>
             <input type="text" id="margem" name="margem" placeholder="margem %..">
          
             <label id="Llucro">Lucro por Venda</label>
             <input type="text" id="lucro" name="lucro" placeholder="diferença %..">
    
    <br>
    
             <label id="Lsugestao">Sugestao</label>
             <input type="text" id="sugestao" name="sugestao" placeholder="sugestao..">
    
             <label id="Lsubstitui">Substituido por</label>
             <input type="text" id="substitui" name="substitui" placeholder="substituido pelo..">
             
             <label id="Lanterior">Anterior</label>
             <input type="text" id="anterior" name="anterior" placeholder="Anterior a este produto..">
             
              <label id="Lquantidade">Quantidade / Ent.</label>
             <input type="text" id="quantidade" name="quantidade" placeholder="Quantidade de produto..">
     
    </div>
    
               <input type="submit"/>
            </form>

                            <div class="footer">
                            <?php include 'footer.php';?>
                            </div>
        
        <div id="snackbar"> Passageiro adicionado com Sucesso</div><br>
        
        <script>
            function norefresh_form(){
                //read input
                var dados_fname = document.getElementById("fname").value;
                var dados_tecnico = document.getElementById("tecnico").value;
                var dados_fabricante = document.getElementById("fabricante").value;
                var dados_Datafabrico = document.getElementById("Datafabrico").value;
                var dados_lote = document.getElementById("lote").value;
                var dados_codigobarra = document.getElementById("codigobarra").value;
                var dados_registo = document.getElementById("registo").value;
                var dados_Dataexpiracao = document.getElementById("Dataexpiracao").value;
                var dados_tipo = document.getElementById("tipo").value;
                var dados_frasco = document.getElementById("frasco").value;
                var dados_mg = document.getElementById("mg").value;
               var dados_ml = document.getElementById("ml").value;
               var dados_valorC = document.getElementById("valorC").value;
               var dados_valorV = document.getElementById("valorV").value;
               var dados_margem = document.getElementById("margem").value;
               var dados_lucro = document.getElementById("lucro").value;
              var dados_sugestao = document.getElementById("sugestao").value;
             var dados_substitui = document.getElementById("substitui").value;
              var dados_anterior = document.getElementById("anterior").value;
              var dados_quantidade = document.getElementById("quantidade").value;
               
        //delete input
                document.getElementById("fname").value = "";
                 document.getElementById("tecnico").value = "";
                  document.getElementById("fabricante").value = "";
                  document.getElementById("Datafabrico").value = "";
               document.getElementById("lote").value = "";
               document.getElementById("codigobarra").value = "";
               document.getElementById("registo").value = "";
             document.getElementById("Dataexpiracao").value = "";
            document.getElementById("tipo").value = "";
            document.getElementById("frasco").value = "";
          document.getElementById("mg").value = "";
          document.getElementById("ml").value = "";
         document.getElementById("valorC").value = "";
         document.getElementById("valorV").value = "";
         document.getElementById("margem").value = "";
         document.getElementById("lucro").value = "";
         document.getElementById("sugestao").value = "";
         document.getElementById("substitui").value = "";
         document.getElementById("anterior").value = "";
          document.getElementById("quantidade").value = "";
           
                //display read input
                //document.getElementById("output").innerHTML = dados_in;
                
var param="name="+dados_fname+"&tecnico="+dados_tecnico+"&fabricante="+dados_fabricante+"&Datafabrico="+dados_Datafabrico+"&lote="+dados_lote+"&codigobarra="+dados_codigobarra+"&registo"+dados_registo+"&Dataexpiracao="+dados_Dataexpiracao+"&tipo="+dados_tipo+"&frasco="+dados_frasco+"&mg="+dados_mg+"&ml="+dados_ml+"&valorC="+dados_valorC+"&valorV="+dados_valorV+"&margem="+dados_margem+"&lucro="+dados_lucro+"&sugestao="+dados_sugestao+"&substitui="+dados_substitui+"&anterior="+dados_anterior+"&quantidade="+dados_quantidade;
   
   
                //AJAX Operation to the database
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                        //document.getElementById("output").innerHTML = this.responseText;
                        //document.getElementById("output").innerHTML = "Base de Dados Actualizada com SUCESSO !!!";
                        
                        var x=document.getElementById("snackbar");
                        x.className = "show";
                        setTimeout(function(){x.className = x.className.replace("show","");}, 3000);
                    }
                };
                xhttp.open("POST", "estoque.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(param);
            }
        </script>
        <?php
        // put your code here
        ?>
    </body>
</html>
