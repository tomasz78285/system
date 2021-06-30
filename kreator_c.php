<?php 
    session_start();

        if($_SESSION['rola']=='user') require_once 'header_zalogowany.php';
        else require_once 'header_admin.php';

?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Kreator ankiet</title>

        <meta name="description" content="Strona do ankietyzacji online">
        <meta name="keywords" content="system, ankietyzacji, online">
        <meta name="author" content="Tomasz Kadłubowski">
        <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="css/fontello.css" type="text/css" />
        <script src="script.js" asyns></script>
	
    </head>
    <body>
        <main>
                
                    <div class="tytul">
                        <h1>Kreator ankiet</h1>                            
                    </div>
                    
                    <form method="post">
                    
                    <div id="scenter3">
                    <?php 
                        
                            echo "<span style='font-weight:700;'>Tworzenie ankiety: </span>".$_SESSION['nazwa_a'];
                        
                    ?><br><br>
                           
                               <?php 
                               if(isset($_GET['typ']))
                               {
                                $typ = $_GET['typ'];
                                if($typ == 'Zamkniete') 
                                {
                                    ?>
                                    
                                     
                                     
                                    <?php require_once 'ile_odp.php'; ?>
                                    <br>
                                    <p><span style='font-weight:700;'>Dodaj pytanie zamknięte</span></p>
                                    <span style='font-weight:700;'>Ilość odpowiedzi</span>:  
                                    <input type="number" name="ilosc_odpowiedzi" value='<?php if(isset($_POST['ilosc_odpowiedzi'])) echo $_POST['ilosc_odpowiedzi']; ?>'>
                                    <input type="submit" value="Wybierz" /><br><br>

                                    <a href="wybierz_rodzaj_pytania.php"><p> <span style='font-weight:700;color:purple'>Dodaj pytanie otwarte</span> </p></a>
                                     <br><?php
                                }
                                else 
                                {?>
                                
                                <span style='font-weight:700;'>Pytanie otwarte:</span>
                               <input type="text" name="P1"/>
                                <br>
                               
                            <?php
                            if(isset($_POST["P1"])){
                                $P1 = $_POST["P1"];
                                require_once 'connect.php';
                                $nazwa_ankiety = $_SESSION['nazwa_a'];
                                $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
                                $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P1','1','otwarte','$nazwa_ankiety')");
                                }
                                ?>
                                <input type="submit" value="Dodaj pytanie" /><br><br>
                                <a href="wybierz_rodzaj_pytania.php"><p> <span style='font-weight:700; color:green;'>Dodaj pytanie zamknięte</span> </p></a>
                               <?php 
                                }
                                
                               }
                               ?>
                               
                                
                    </div>
                   
                        
    

                    </div>
                    <div id="scenter4">
                        <a href="koniec_tworzenia.php">Stwórz ankietę</a>
                    </div>
                </form>
                      
            
                                

<?php 
    require_once 'footer.php';
?>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>   
    </body>
</html>