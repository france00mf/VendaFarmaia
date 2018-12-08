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
    </head>
    <body>
        <?php
        // put your code here
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            //collect value of input field
            $name = $_POST["name"];
            $tecnico = $_POST["tecnico"];
            $fabricante = $_POST["fabricante"];
            $Datafabrico = $_POST["Datafabrico"];
            $lote = $_POST["lote"];
            $codigobarra = $_POST["codigobarra"];
            $registo = $_POST["registo"];
            $Dataexpiracao = $_POST["Dataexpiracao"];
            $tipo = $_POST["tipo"];
            $frasco = $_POST["frasco"];
            $mg = $_POST["mg"];
            $ml = $_POST["ml"];
            $valorC = $_POST["valorC"];
            $valorV = $_POST["valorV"];
            $margem = $_POST["margem"];
            $lucro = $_POST["lucro"];
            $sugestao = $_POST["sugestao"];
            $substitui = $_POST["substitui"];
            $anterior = $_POST["anterior"];
            $quantidade = $_POST["quantidade"];
            
            
            
            if(empty($name)){
                echo "Name is empty !!!";
            }else{
                
                //Connect to Database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "farmacia";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    $stmt = $conn->prepare("INSERT INTO `medicamentos`(`Nome`, `Nome_Tecnico`,`mg`, `ml`, `Tipo`, `Data_Fabrico`, `Data_Expiracao`, `Lote`,`Fabricante`, `Codigo_Barra`, `Registro_n`,`Sugestao`,`Substitui`, `Anterior`, `Tamanho`, `Valor_Compra`, `Valor_Venda`, `Margem`, `Lucro`, `Quantidade`) VALUES ('$name', '$tecnico', '$mg', '$ml', '$tipo', '$Datafabrico', '$Dataexpiracao', '$lote', '$fabricante',  '$codigobarra', '$registo', '$sugestao', '$substitui', '$anterior', '$frasco',  '$valorC', '$valorV', '$margem', '$lucro',   '$quantidade')"); 
                   
                    $stmt->execute();

                    
                    }
                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
            $conn = null;
            }
        }

        ?>
    </body>
</html>