<?php 
    require_once("connect.php");
    require_once 'header_zalogowany.php';
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Ankiety Online - Statystyki</title>

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
        <main>
        <div class="tytul">
            WYBIERZ FORMĘ ANKIETY
      
           </div>
        <br><br>
        <div class="kontenery_tytuly">
            <a href="tytul_ankietyZ.php"> 
                <div class="container8">
                    <br><br><br><br><br>
                    Ankieta - pytania zamknięte
                </div> 
            </a>

            <a href="tytul_ankietyO.php"> 
            <div class="container8">
                <br><br><br><br><br>
                Ankieta - pytania otwarte
            </div> 
            </a>
            
            <a href="tytul_ankietyM.php"> 
            <div class="container8">
                <br><br><br><br><br>
                Ankieta mix pytań
            </div> 
            </a>
                                       
        </div>

<?php 
    require_once 'footer.php';
?>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>