<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu de Consultas</title>
        <style>
            
            /* Style the footer */
.footer {
    background-color: #f1f1f1;
    padding: 10px;
    text-align: center;
}

      
                  .button {
  display: inline-block;
  padding: 10px 12px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
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
    text-shadow: 2px 2px 5px red;
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

#fname

{
    padding-left: 1px;
    padding-right: 15px
}

#Lapelido

{
    padding-left: 1px
    }
    
#LChegada
{
    padding-left: 320px
    }
#LHoje
{
    padding-left: 319px;
    padding-right: 25px
    }
#LIdentificacao
{
    padding-left: 316px;
    padding-right: 35px
    }
#LPartida
{
    padding-left: 316px;
    padding-right: 15px
    }
#LTrackingNumber
{
    padding-left: 310px;
    padding-right: 10px
    }

</style>
</head>
          

    <body>
        <div class="header">
        <h1>Menu de Consultas de Passageiros</h1>
        </div>
      
        <ul>
    <li><a href="index.php">Home</a></li>
 
    <li><a href="#news">News</a></li>
 
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Meet&Great</a>
    <div class="dropdown-content">
        <a href="Meet&Great.php">Adicionar Novos Dados</a>
        <a href="Menu_De_Consultas.php">Menu de Consultas</a>
        
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Vistos</a>
    <div class="dropdown-content">
      <a href="#">Embarques </a>
      <a href="#">Desembarques </a>
      <a href="#">Capitania do Porto Lda </a>
      <a href="#">Trabalho </a>
      <a href="#">Curta duração </a>
      <a href="#">Fronteiras </a>
      <a href="#">Turismo </a>
      <a href="#">Ordinário </a>
      
      <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Car Hire</a>
    <div class="dropdown-content">
      <a href="#">Data de Entrega</a>
      <a href="#">Data de Devolução </a>
      <a href="#">Tipo de Carro </a>
      <a href="#">Ano em Curso </a>
      <a href="#">Mês em Curso </a>
      <a href="#">Passageiro </a>
      <a href="#">Cliente \ Empresa </a>
      
      <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Viaturas</a>
    <div class="dropdown-content">
        <a href="Controle_Viaturas.php">Adicionar Novos Dados</a>
      <a href="#">Consumo</a>
      <a href="#">Manutençao</a>
      <a href="#">Documentaçao</a>
      <a href="#">Inventario</a>
      <a href="#">Mês em Curso </a>
      <a href="#">Dia em uso</a>
      <a href="#">Cliente \ Empresa </a>
      
    </div>
  </li>
</ul>
        <hr> 
          <div>
            <!-- Consulta pelo nome -->
            <form action="Relatorio_Nome.php" method="POST">
                <label id="fname">Nome</label>
                <input type="text" name="firstname">
                 <button class="button">Procurar</button>
            
            </form>
       
            <!-- Consulta pelo Apelido -->
            
            <form action="Consulta_Apelido_Pax.php" method="POST">
                <label id="Lapelido">Apelido</label>
                <input type="text" name="Lastname">
                <button class="button">Procurar</button>
             </form>
            
       </div>
        <hr> 
       
        <div>
            
            <!-- Consulta pelo Chegada -->
            <form action="Consulta_Data_Chegada.php" method="POST">
                <label id="LChegada">Data de Chegada:</label>
                <input type="Date" name="Chegada">
                <button class="button">Procurar</button>
            </form>
            
            <!-- Consulta pelo Chegada -->
            <form action="Consulta_Data_Hoje.php" method="POST">
                 <label id="LHoje">Data de Hoje:</label>
                 <input type="Date" name="DataHoje">
                <button class="button">Procurar</button>
             
            </form>           
              
            <!-- Consulta pelo Chegada -->
           
            <form action="Consulta_Data_Partida.php" method="POST">
                <label id="LPartida">Data de Partida:</label>
                   <input type="Date" name="Partida">
                <button class="button">Procurar</button>
             </form>
            
             </div>
               
        <hr> 
        
          <!-- Consulta pelo Identificacao -->
          
       
        <div>
            <form action="Consulta_ID_Pax.php" method="POST">
                <label id="LIdentificacao">Identificacao</label>
                <input type="text" name="Identificacao">
                <button class="button">Procurar</button>
             
            </form>
            <!-- Consulta pelo Identificacao -->
             
            <form action="Consulta_pelo_TrackingNumber.php" method="POST">
                <label id="LTrackingNumber">TrackingNumber:</label>
                <input type="text" name="TrackingNumber">
                <button class="button">Procurar</button>
             </form>
             </div>
       <br>
       

    <a href="index.php">❮</a>
  <a href="#">❯</a> 
</div>
        <div class="footer">
  <?php include 'footer.php';?>
</div>
    </body>
</html>
