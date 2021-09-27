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
     echo '1.feladat<br> <br>';
        echo date("y/m/w <br>");
        echo '<br>';
        $napok = Array("vasarnap","hetfo","kedd","szerda","csutortok","pentek","szombat");
        $nap=$napok[date("w")];
        print "Ma "  . " $nap van";
        echo "<br><br>";
        
echo '2.feladat<br> <br>';
      error_reporting(0);
        if(isset($_POST['submit'])){
            
            $a=$_POST['a'];
            $o=$_POST['o'];
            $b=$_POST['b'];
            
            
            switch ($o){
                
                case "+": $eredmeny=$a+$b;      break;
                case "-": $eredmeny=$a-$b;      break;
                case "*": $eredmeny=$a*$b;      break;
                case "/": $eredmeny=$a/$b;      break;
                
                default : print 'Helytelen muvelet';
            }
        }
          
        ?>
        <form method="post" action="">
            <input type="text" name="a" />
             <select name="o">
                 <option value="+"> + </option>
                 <option value="-"> - </option>
                 <option value="*"> * </option>
                 <option value="/"> / </option>
                     
             
             </select>
             <input type="text" name="b" />
             <input type="submit" name="submit" value="=" /> <?=$eredmeny;        echo '<br> <br>';?>
            
                   
        </form>
        
       
    <?php
      echo '3.feladat<br> <br>';
   
	$start  = 1;
	$end = 10;
?>

	<table border="1">
	<?php
		print("<tr>");
		print("<th></th>");
		for($szamol = $start; $szamol <= $end; $szamol++) 
		print("<th>".$szamol."</th>");
		print("</tr>");
		
		for($szamol = $start; $szamol <= $end; $szamol++) 
		{
		  print("<tr><th>".$szamol."</th>");
		  for($szamol2 = $start; $szamol2 <= $end; $szamol2++) 
		  {
			$eredmeny = $szamol / $szamol2; 
			printf("<td>%.3f</td>", $eredmeny);
		  }
		  print("</tr> \n");
		}	
	?>
	</table>
        <?php
      
                 echo '<br><br>';
                 echo '4.feladat<br> <br>';
       ?>
         <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
          <?php
            for($sor=1;$sor<=8;$sor++)
            {
                echo "<tr>";
                for($oszlop=1;$oszlop<=8;$oszlop++)
                    {
                        $teljes=$sor+$oszlop;
                        if($teljes%2==0)
                        {
                            echo "<td height=35px width=30px bgcolor=#FFFFFF></td>";
                        }
                        else
                        {
                            echo "<td height=35px width=30px bgcolor=#000000></td>";
                        }
                    }
                            echo "</tr>";
            }
        ?>
      </table>
    </body>
</html>
