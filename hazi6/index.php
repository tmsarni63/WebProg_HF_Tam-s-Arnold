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

        session_start();

        if (isset($_POST['elkuldott'])){
            if(isset($_SESSION['generaltszam']));
            jatek($_POST['talalgatas'],$_SESSION['generaltszam']);
        }else{
            $_SESSION['generaltszam']=rand(1,10);
            jatek($_POST['talalgatas'],$_SESSION['generaltszam']);
        }
        function jatek($kuldottszam,$generaltszam)
        {
            if ($_POST['talalgatas'] >= 1 && $_POST['talalgatas'] <= 10) {
                if ($kuldottszam > $generaltszam) {
                    echo "A szam kisebb:" .$kuldottszam;
                }
                elseif ($kuldottszam < $generaltszam) {
                    echo "A szam nagyobb:" .$kuldottszam;
                } else {
                    echo "Eltaláltad: " . $generaltszam . "Gratulalok!";
                    unset($_SESSION['generaltszam']);
                }

            }else {
                echo "A szám nem 1 és 10 között van";
            }
        }

        ?>
        <form method="post" action="">
            <input type="hidden" name="elkuldott" value="true">
            Melyik számra gondoltam 1 és 10 között?
            <input name="talalgatas" type="text">
            <br>
            <br>
            <input type="submit" value="Elküld">
        </form>

    </body>
</html>
