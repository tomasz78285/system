<?php 
    require_once 'header_zalogowany.php';
    require_once 'connect.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Ankiety Online - Udostępnianie</title>

        <meta name="description" content="Strona do ankietyzacji online">
        <meta name="keywords" content="system, ankietyzacji, online">
        <meta name="author" content="Tomasz Kadłubowski">
        <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="css/fontello.css" type="text/css" />
        <script src="js/script.js" asyns></script>
	
    </head>
    <body>
        <br><br>
        <main>
            <section class="rodzaj_ankiet">
                <div class = "container">
                <?php
                        if(isset($_GET['nazwa'])){
                            $a = $_GET['nazwa'];
                            ?><h1><?php echo $a; ?> </h1> <?php
                        }
                ?>
                    <h1>Wybierz opcję udostępnienia</h1>

                    <div class="row">
                    

                        <div class="col-sm-4" id="scenter">
                            <h1>Skopiuj link</h1>
                            <input type="text" value="http://localhost/System_ankietyzacji_online/metoda_udostepniania.php?nazwa=<?php echo $a; ?>" />
                        
                        </div>
                        <?php
                            if(isset($_REQUEST['adresat']))
                            {                          
                                $od  = "From: kad.tom@wp.pl \r\n";
                                $adres = $_REQUEST['adresat'];
                                $tytul = "Zaproszenie do wypełnienia ankiety";
                                $wiadomosc = "Witaj, ".$_SESSION['user']."zaprasza Cię do wypełnienia ankiety. Możesz to zrobić klikając w link: http://localhost/System_ankietyzacji_online/metoda_udostepniania.php?nazwa=<?php echo $a; ?>";

                                mail($adres, $tytul, $wiadomosc, $od);
                            }
                            ?>

                        <form method="post">
                        <div class="row">
                            <div class="col-sm-4" id="scenter">
                                <h1>Wyślij zaproszenie e-mail</h1>
                                <label>Wpisz adresata</label>
                                <input type="text" name="adresat" />
                                <a href="udostepniono.php"><input type="submit" value="Wyślij" /></a>
                            </div>
                        </form>
                    </div>
                </div>
            </section> 
<?php 
    require_once 'footer.php';
?>
        </main>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>