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
            echo 'fhweiwie' .'<br>';
            
            print('fewjflwejlfjwel') .'<br>';
            var_dump('dlvownvo') .'<br>';
            $cars=array("volvo" .'<br>', "ww" .'<br>',"aston martin");
            var_dump($cars);
            
            $x=0;
            while($x<10){
                if($x==4)
                {
                    break;
                }
                echo "A szam: $x <br>";
                $x++;
                
            }
            
            // Vallami valllami vallllami
            $a=23;
            $A=12;
            $c=33;
            $s='alma';
            echo "kis valtozo= $a , nagy betus valtozo= $A, string= $s <br>";
            $b=(string)$a;
            echo gettype($a). '<br>';
            echo gettype($b). '<br>';
            echo gettype($c). '<br>';
            $A=null;
            var_dump($A);
            echo "<br>";
            
           
        ?>
    </body>
</html>
