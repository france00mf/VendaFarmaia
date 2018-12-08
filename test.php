<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Farmacia Manuel Jr.</title>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="controle de operacoes.css">
      <title>Farmacia Manuel Jr.</title>             
            
    <style>
  
body {
  margin: 0;
}

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
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
  
#example1 {
        background-image: url('im2.jpg');
        background-position:100% 100%;
        background-size: 100% 100%;
        background-attachment: fixed;
        background-repeat:initial;
        height: 510px;
}        
   
* {
    box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.column {
    float: left;
    padding: 10px;
}

/* Middle column */
.column.middle {
    width: 50%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
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
  <h1>Farmacia Manuel Jr.</h1>
</div>
     
         
<ul>
    <li><a href="index.php">Home</a></li>
 
    <li><a href="#news">News</a></li>
 
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Meet&Great</a>
    <div class="dropdown-content">
        <a href="AdMedicamentos.php">Adicionar Novos Produtos</a>
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
          <!--
         <div id="example1">

</div>
-->

</div>
      <div id="example1" class=column middle">
    <h2>Main Content</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>


<div class="footer">
  <?php include 'footer.php';?>
</div>
  
<!--
<img src ="25 de Abril.jpg">
-->
</body>


</html>
