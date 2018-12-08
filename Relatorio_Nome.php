<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta_Nome_Pax</title>
        
    <h4>Relatorio por Nome</h4>
    </head>
    
    <body>

<?php

echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>Id</th><th>Nome</th><th>Nome_Tecnico</th><th>Mg</th><th>Ml</th><th>Tipo</th><th>Data_Fabrico</th><th>Data_Expiraçao</th><th>Lote</th><th>Fabricante</th><th>Codigo_Barra</th><th>Registro</th><th>Sugestao</th><th>Substitui</th><th>Anterior</th><th>Tamanho</th><th>V.Compra</th><th>V. Venda</th><th>Margem</th><th>Lucro</th><th>Quantidade</th></tr>";

class TableRows extends RecursiveIteratorIterator {  
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }
 
    function current() {
        return "<td style='width:50px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

if($_SERVER["REQUEST_METHOD"]=="POST")
    //collect value of input field
            $name = $_POST["firstname"];
//fim da recolha do front in


            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "farmacia";

 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT Id, Nome, Nome_Tecnico, mg, ml, Tipo, Data_Fabrico, Data_Expiracao, Lote, Fabricante, Codigo_Barra, Registro_n, Sugestao, Substitui, Anterior, Tamanho, Valor_Compra, Valor_Venda, Margem, Lucro, Quantidade FROM medicamentos WHERE Nome = '$name'"); 
    $stmt->execute();
 
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

?>
        
</body>
</html> 