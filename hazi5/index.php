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
      /*  $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $email=$_POST["email"];
        $attend=$_POST["attend"];
        $tshirt=$_POST["tshirt"];
        $abstract=$_POST["abstract"]['size'] < 1024 * 1024 * 3;
        $checkbox=$_POST["checkbox"];
        $submit=$_POST["submit"];*/
        $pdf_file = array("application/pdf");
        if(isset($_POST["submit"])){

            if ((isset($_POST['firstName']) && $_POST['firstName'] !== '') && (isset($_POST['lastName']) && $_POST['lastName'] !== '') && (isset($_POST['email']) && $_POST['email'] !== '')
                && isset($_POST['attend'])
                && isset($_POST['terms'])){
                echo "Sikeresen elkuldve <br>";
                echo "First name: " . $_POST['firstName'] . "<br>";
                echo "Last name: " . $_POST['lastName'] . "<br>";
                echo "Email: " . $_POST['email'] . "<br>";
                echo "Attend: ";
                foreach ($_POST['attend'] as $attend) {
                    echo $attend . " ";
                }
                echo "<br>";
            }
            if (empty(isset($_POST['firstName']))) {
                echo "A first name mezo ures!<br>";
            }else{ echo "First name: " . $_POST['firstName'] . "<br>"; }
            if (empty(isset($_POST['lastName']) )) {
                echo "A last name mezo ures!<br>";
            }else{ echo "Last name: " . $_POST['lastName'] . "<br>"; }
            if (empty(isset($_POST['email']) )) {
                echo "Az email mezo ures!<br>";
            }else{echo "Email: " . $_POST['email'] . "<br>";}

            if (!isset($_POST['attend'])) {
                echo "Nem valasztott attend-et!<br>";
            }else{ echo "Attend: ";
                foreach ($_POST['attend'] as $attend) {
                    echo $attend . " <br>";
                }}
            if (isset($_POST['tshirt'])){
                if (!empty( $_POST['tshirt']=='P')){
                    echo "Nincs meret valasztva!<br>";
                }else{
                    echo "Polo meret: " . $_POST['tshirt'] . "<br>";
                }
            }



             /*   if (!empty($_FILES['abstract']['error'] == 0)) {
                    echo "Hibas feltoltes!<br>";
                }
                elseif(($_FILES['abstract']['size'] < 1024 * 1024 * 3)) {
                    echo "A feltoltott file tul nagy!<br>";
                }
                elseif (!(in_array($_FILES['abstract']['type'], $pdf_file))) {
                    echo "A valasztott file nem PDF!<br>";
                }*/
                if (!(isset($_POST['terms']))) {
                    echo "Nem fogadta el a felteteleket!";
                }

        }


        ?>
        <h3>Online conference registration</h3>

        <form method="post" action="">
            <label for="fname"> First name:
                <input type="text" name="firstName">
            </label>
            <br><br>
            <label for="lname"> Last name:
                <input type="text" name="lastName">
            </label>
            <br><br>
            <label for="email"> E-mail:
                <input type="text" name="email">
            </label>
            <br><br>
            <label for="attend"> I will attend:<br>
                <input type="checkbox" name="attend[]" value="Event1">Event 1<br>
                <input type="checkbox" name="attend[]" value="Event2">Event2<br>
                <input type="checkbox" name="attend[]" value="Event3">Event2<br>
                <input type="checkbox" name="attend[]" value="Event4">Event3<br>
            </label>
            <br><br>
            <label for="tshirt"> What's your T-Shirt size?<br>
                <select name="tshirt">
                    <option value="P">Please select</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
            </label>
            <br><br>
            <label for="abstract"> Upload your abstract<br>
                <input type="file" name="abstract"/>
            </label>
            <br><br>
            <input type="checkbox" name="terms" value="">I agree to terms & conditions.<br>
            <br><br>
            <input type="submit" name="submit" value="Send registration"/>
        </form>

    </body>
</html>
