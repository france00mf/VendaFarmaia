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
       
     
function sum($x, $y) {
    $z = $x - $y;
    //$z = 10 - 4;
    return $z;
        }
             
      

echo "5 + 10 = " . sum(10,5) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
    ?>
       
  <br><br>     
       
      
       
   <?php      
function Lucro($Lucro) {
    echo "$Lucro %.<br>";
}

Lucro("40");

?>
    <br>
    
   <?php
function Margem($Margem) {
    echo "$Margem %.<br><br>";
}

Margem("60");

?>      
  
    
    
        
    </body>
</html>