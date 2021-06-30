<?php
require_once 'connect.php';

$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
if(isset($_POST['ilosc_pytan'])){
    $ilosc_pytan = $_POST['ilosc_pytan'];
    if($ilosc_pytan == '1')
    {
        ?>
            <span style='font-weight:700;'>Pytanie 1</span>
            <input type="text" name="P1"/><br>
            <br>
            <input type="submit" value="Dodaj pytania"/><br>
            
        <?php
        if(isset($_POST["P1"])){
            $P1 = $_POST["P1"];

            $nazwa_ankiety = $_SESSION['nazwa_a'];
            $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P1','1','otwarte','$nazwa_ankiety')");
            echo "<span style='color:green'>Pytania zostały dodane</span>";
            }
    }                                  
    
    
    else if($ilosc_pytan == '2')  
    {
        ?>
    
            <span style='font-weight:700;'>Pytanie 1</span>
            <input type="text" name="P1"/><br>
            <span style='font-weight:700;'>Pytanie 2</span>
            <input type="text" name="P2"/><br><br>

            <input type="submit" value="Dodaj pytania"/><br>
        <?php
        if(isset($_POST["P2"])){
            $P1 = $_POST["P1"];
            $P2 = $_POST["P2"];

            $nazwa_ankiety = $_SESSION['nazwa_a'];
            $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P1','1','otwarte','$nazwa_ankiety')");
            $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P2','2','otwarte','$nazwa_ankiety')");
            echo "<span style='color:green'>Pytania zostały dodane</span>";
            }
        }                                  
    
    
    else if($ilosc_pytan == '3')
    {
        ?>
            <span style='font-weight:700;'>Pytanie 1</span>
            <input type="text" name="P1"/><br>
            <span style='font-weight:700;'>Pytanie 2</span>
            <input type="text" name="P2"/><br>
            <span style='font-weight:700;'>Pytanie 3</span>
            <input type="text" name="P3"/><br><br>

            <input type="submit" value="Dodaj pytania"/><br>
        <?php
        if(isset($_POST["P3"])){
            $P1 = $_POST["P1"];
            $P2 = $_POST["P2"];
            $P3 = $_POST["P3"];

            $nazwa_ankiety = $_SESSION['nazwa_a'];
            $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P1','1','otwarte','$nazwa_ankiety'),
                                                                                                                   ('$P2','2','otwarte','$nazwa_ankiety'),
                                                                                                                   ('$P3','3','otwarte','$nazwa_ankiety')");
            echo "<span style='color:green'>Pytania zostały dodane</span>";
            }
                                          
    }
    
    else if($ilosc_pytan == '4')
    {
        ?>
        <span style='font-weight:700;'>Pytanie 1</span>
        <input type="text" name="P1"/><br>
        <span style='font-weight:700;'>Pytanie 2</span>
        <input type="text" name="P2"/><br>
        <span style='font-weight:700;'>Pytanie 3</span>
        <input type="text" name="P3"/><br>
        <span style='font-weight:700;'>Pytanie 4</span>
        <input type="text" name="P4"/><br><br>

        <input type="submit" value="Dodaj pytania"/><br>
    <?php
    if(isset($_POST["P4"])){
        $P1 = $_POST["P1"];
        $P2 = $_POST["P2"];
        $P3 = $_POST["P3"];
        $P4 = $_POST["P4"];

        $nazwa_ankiety = $_SESSION['nazwa_a'];
        $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P1','1','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P2','2','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P3','3','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P4','4','otwarte','$nazwa_ankiety')");
        echo "<span style='color:green'>Pytania zostały dodane</span>";
        }
    }                                  

    
    else if($ilosc_pytan == '5') 
    {
        ?>
        <span style='font-weight:700;'>Pytanie 1</span>
        <input type="text" name="P1"/><br>
        <span style='font-weight:700;'>Pytanie 2</span>
        <input type="text" name="P2"/><br>
        <span style='font-weight:700;'>Pytanie 3</span>
        <input type="text" name="P3"/><br>
        <span style='font-weight:700;'>Pytanie 4</span>
        <input type="text" name="P4"/><br>
        <span style='font-weight:700;'>Pytanie 5</span>
        <input type="text" name="P5"/><br><br>

        <input type="submit" value="Dodaj pytania"/><br>
    <?php
    if(isset($_POST["P5"])){
        $P1 = $_POST["P1"];
        $P2 = $_POST["P2"];
        $P3 = $_POST["P3"];
        $P4 = $_POST["P4"];
        $P5 = $_POST["P5"];

        $nazwa_ankiety = $_SESSION['nazwa_a'];
        $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P1','1','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P2','2','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P3','3','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P4','4','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P5','5','otwarte','$nazwa_ankiety')");
    echo "<span style='color:green'>Pytania zostały dodane</span>";    
    }
    }                                  

    
    else if($ilosc_pytan == '6')
    {
        ?>
        <span style='font-weight:700;'>Pytanie 1</span>
        <input type="text" name="P1"/><br>
        <span style='font-weight:700;'>Pytanie 2</span>
        <input type="text" name="P2"/><br>
        <span style='font-weight:700;'>Pytanie 3</span>
        <input type="text" name="P3"/><br>
        <span style='font-weight:700;'>Pytanie 4</span>
        <input type="text" name="P4"/><br>
        <span style='font-weight:700;'>Pytanie 5</span>
        <input type="text" name="P5"/><br>
        <span style='font-weight:700;'>Pytanie 6</span>
        <input type="text" name="P6"/><br><br>

        <input type="submit" value="Dodaj pytania"/><br>
    <?php

if(isset($_POST["P6"])){
    $P1 = $_POST["P1"];
    $P2 = $_POST["P2"];
    $P3 = $_POST["P3"];
    $P4 = $_POST["P4"];
    $P5 = $_POST["P5"];
    $P6 = $_POST["P6"];

    $nazwa_ankiety = $_SESSION['nazwa_a'];
    $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P1','1','otwarte','$nazwa_ankiety'),
                                                                                                           ('$P2','2','otwarte','$nazwa_ankiety'),
                                                                                                           ('$P3','3','otwarte','$nazwa_ankiety'),
                                                                                                           ('$P4','4','otwarte','$nazwa_ankiety'),
                                                                                                           ('$P5','5','otwarte','$nazwa_ankiety'),
                                                                                                           ('$P6','6','otwarte','$nazwa_ankiety')");
    
    echo "<span style='color:green'>Pytania zostały dodane</span>";
}                                  
}
    
    else if($ilosc_pytan == '7')
    {
        ?>
        <span style='font-weight:700;'>Pytanie 1</span>
        <input type="text" name="P1"/><br>
        <span style='font-weight:700;'>Pytanie 2</span>
        <input type="text" name="P2"/><br>
        <span style='font-weight:700;'>Pytanie 3</span>
        <input type="text" name="P3"/><br>
        <span style='font-weight:700;'>Pytanie 4</span>
        <input type="text" name="P4"/><br>
        <span style='font-weight:700;'>Pytanie 5</span>
        <input type="text" name="P5"/><br>
        <span style='font-weight:700;'>Pytanie 6</span>
        <input type="text" name="P6"/><br>
        <span style='font-weight:700;'>Pytanie 7</span>
        <input type="text" name="P7"/><br><br>

        <input type="submit" value="Dodaj pytania"/><br>
    <?php
    if(isset($_POST["P7"])){
        $P1 = $_POST["P1"];
        $P2 = $_POST["P2"];
        $P3 = $_POST["P3"];
        $P4 = $_POST["P4"];
        $P5 = $_POST["P5"];
        $P6 = $_POST["P6"];
        $P7 = $_POST["P7"];

        $nazwa_ankiety = $_SESSION['nazwa_a'];
        $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P1','1','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P2','2','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P3','3','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P4','4','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P5','5','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P6','6','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P7','7','otwarte','$nazwa_ankiety')");
    echo "<span style='color:green'>Pytania zostały dodane</span>";    
    }
    }                                  

    
    else if($ilosc_pytan == '8') 
    {
        ?>
        <span style='font-weight:700;'>Pytanie 1</span>
        <input type="text" name="P1"/><br>
        <span style='font-weight:700;'>Pytanie 2</span>
        <input type="text" name="P2"/><br>
        <span style='font-weight:700;'>Pytanie 3</span>
        <input type="text" name="P3"/><br>
        <span style='font-weight:700;'>Pytanie 4</span>
        <input type="text" name="P4"/><br>
        <span style='font-weight:700;'>Pytanie 5</span>
        <input type="text" name="P5"/><br>
        <span style='font-weight:700;'>Pytanie 6</span>
        <input type="text" name="P6"/><br>
        <span style='font-weight:700;'>Pytanie 7</span>
        <input type="text" name="P7"/><br>
        <span style='font-weight:700;'>Pytanie 8</span>
        <input type="text" name="P8"/><br><br>

        <input type="submit" value="Dodaj pytania"/><br>
    <?php
    if(isset($_POST["P8"])){
        $P1 = $_POST["P1"];
        $P2 = $_POST["P2"];
        $P3 = $_POST["P3"];
        $P4 = $_POST["P4"];
        $P5 = $_POST["P5"];
        $P6 = $_POST["P6"];
        $P7 = $_POST["P7"];
        $P8 = $_POST["P8"];

        $nazwa_ankiety = $_SESSION['nazwa_a'];
        $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P1','1','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P2','2','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P3','3','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P4','4','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P5','5','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P6','6','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P7','7','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P8','8','otwarte','$nazwa_ankiety'),");
echo "<span style='color:green'>Pytania zostały dodane</span>";    
}
    }                                  


    else if($ilosc_pytan == '9')
    {
        ?>
        <span style='font-weight:700;'>Pytanie 1</span>
        <input type="text" name="P1"/><br>
        <span style='font-weight:700;'>Pytanie 2</span>
        <input type="text" name="P2"/><br>
        <span style='font-weight:700;'>Pytanie 3</span>
        <input type="text" name="P3"/><br>
        <span style='font-weight:700;'>Pytanie 4</span>
        <input type="text" name="P4"/><br>
        <span style='font-weight:700;'>Pytanie 5</span>
        <input type="text" name="P5"/><br>
        <span style='font-weight:700;'>Pytanie 6</span>
        <input type="text" name="P6"/><br>
        <span style='font-weight:700;'>Pytanie 7</span>
        <input type="text" name="P7"/><br>
        <span style='font-weight:700;'>Pytanie 8</span>
        <input type="text" name="P8"/><br>
        <span style='font-weight:700;'>Pytanie 9</span>
        <input type="text" name="P9"/><br><br>

        <input type="submit" value="Dodaj pytania"/><br>
    <?php

if(isset($_POST["P9"])){
    $P1 = $_POST["P1"];
    $P2 = $_POST["P2"];
    $P3 = $_POST["P3"];
    $P4 = $_POST["P4"];
    $P5 = $_POST["P5"];
    $P6 = $_POST["P6"];
    $P7 = $_POST["P7"];
    $P8 = $_POST["P8"];
    $P9 = $_POST["P9"];
    $nazwa_ankiety = $_SESSION['nazwa_a'];
    $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P1','1','otwarte','$nazwa_ankiety'),
                                                                                                           ('$P2','2','otwarte','$nazwa_ankiety'),
                                                                                                           ('$P3','3','otwarte','$nazwa_ankiety'),
                                                                                                           ('$P4','4','otwarte','$nazwa_ankiety'),
                                                                                                           ('$P5','5','otwarte','$nazwa_ankiety'),
                                                                                                           ('$P6','6','otwarte','$nazwa_ankiety'),
                                                                                                           ('$P7','7','otwarte','$nazwa_ankiety'),
                                                                                                           ('$P8','8','otwarte','$nazwa_ankiety'),
                                                                                                           ('$P9','9','otwarte','$nazwa_ankiety')");
echo "<span style='color:green'>Pytania zostały dodane</span>";    
}
}                                  



    else if($ilosc_pytan == '10')
    {
        ?>
        <span style='font-weight:700;'>Pytanie 1</span>
        <input type="text" name="P1"/><br>
        <span style='font-weight:700;'>Pytanie 2</span>
        <input type="text" name="P2"/><br>
        <span style='font-weight:700;'>Pytanie 3</span>
        <input type="text" name="P3"/><br>
        <span style='font-weight:700;'>Pytanie 4</span>
        <input type="text" name="P4"/><br>
        <span style='font-weight:700;'>Pytanie 5</span>
        <input type="text" name="P5"/><br>
        <span style='font-weight:700;'>Pytanie 6</span>
        <input type="text" name="P6"/><br>
        <span style='font-weight:700;'>Pytanie 7</span>
        <input type="text" name="P7"/><br>
        <span style='font-weight:700;'>Pytanie 8</span>
        <input type="text" name="P8"/><br>
        <span style='font-weight:700;'>Pytanie 9</span>
        <input type="text" name="P9"/><br>
        <span style='font-weight:700;'>Pytanie 10</span>
        <input type="text" name="P10"/><br><br>

        <input type="submit" value="Dodaj pytania"/><br>
    <?php
    if(isset($_POST["P10"])){
        $P1 = $_POST["P1"];
        $P2 = $_POST["P2"];
        $P3 = $_POST["P3"];
        $P4 = $_POST["P4"];
        $P5 = $_POST["P5"];
        $P6 = $_POST["P6"];
        $P7 = $_POST["P7"];
        $P8 = $_POST["P8"];
        $P9 = $_POST["P9"];
        $P10 = $_POST["P10"];
        $nazwa_ankiety = $_SESSION['nazwa_a'];
        $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P1','1','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P2','2','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P3','3','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P4','4','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P5','5','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P6','6','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P7','7','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P8','8','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P9','9','otwarte','$nazwa_ankiety'),
                                                                                                               ('$P10','10','otwarte','$nazwa_ankiety')");
echo "<span style='color:green'>Pytania zostały dodane</span>";
}
    }                                  
}

?>

