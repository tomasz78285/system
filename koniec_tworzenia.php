<?php 
    session_start();
    require_once 'connect.php';
    require_once 'header_zalogowany.php';
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Ankiety Online - Witamy</title>

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
    <div id = 'scenter'>
    Ankieta została stworzona. Teraz możesz ją <a href="wypelnij_ankiete.php">wypełnić</a> lub <a href="udostepnij.php">udostępnić</a>.
    <?php 
        if($_SESSION['dost'] == 'Zamknieta'){
            $i = rand(1000,9999);
            echo "Kod dostępu do ankiety: ".$i;
            $user = $_SESSION['user'];
            $ankieta = $_SESSION['nazwa_a'];
            
            $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
            $polaczenie -> query("UPDATE ankiety SET kod_dostepu = '$i' WHERE nazwa_ankiety='$ankieta'");
        }
    ?>
    </div>
<?php
    require_once 'footer.php';
?>
        </main>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>     
    </body>
</html>