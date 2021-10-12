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
        
        echo "1.feladat <br>";
        $tomb = array(5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200');

        foreach ($tomb as $value) {
            if (is_numeric($value)) {
                echo $value . " típusa: " . gettype($value)
                    . "<br>numerikus: " . "Igen" . "<br>";
            } else {
                echo $value . " típusa: " . gettype($value)
                    . "<br>numerikus: " . "Nem" . "<br>";
            }
        }
        echo "<br>";
        echo "2.feladat <br>";
        
        $orszagok = array( " Magyarország "=>" Budapest", " Románia"=>" Bukarest",
       "Belgium"=> "Brussels", "Austria" => "Vienna", "Poland"=>"Warsaw");
        
   foreach ($orszagok as $orszag=>$varos){
      
       print_r ($orszag . " fovarosa" . $varos . "<br>");
   } 
   
        echo "<br>";
        echo "3.feladat <br>";
        
        $napok = array(
    	"HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    	"EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    	"DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
        );

        foreach ($napok as $nyelv=>$nap){
              echo $nyelv.": ";
            foreach($nap as $napok){
                echo $napok.",";
            }
            echo "<br>";
        }
         echo "<br>";
        echo "4.feladat <br>";
        
       $allatok = array('A' => 'Kutya', 'B' => 'Macska', 'c' => 'Lo');
       
       foreach ($allatok as $allat){
           echo $allat . ",";
       }
       function atalakit(array $tomb, string $meret): array
        {
            switch ($meret) {
             case "kisbetus":
                  foreach ($tomb as $ertek) {
                      $ertek = strtolower($ertek);
                      echo strtolower($ertek);
                  }
                     break;
             case  "nagybetus":
                  foreach ($tomb as $ertek) {
                       $ertek = strtoupper($ertek);
                       echo strtoupper($ertek);
          }
            break;
        default:
            echo "Hibas parameterek";
    }

    return $tomb;
}
            
   

        ?>
    </body>
</html>
