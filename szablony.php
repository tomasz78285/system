<?php 
    require_once 'header_zalogowany.php';
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Ankiety Online - szablony</title>

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
            <section>
                <div class = "container">
                    <div class="row">

                                <div class="tytul">
                                  WYBIERZ SZABLON
                                </div>
                        
                             <div class="kontenery">
                             <a href="metryczka.php"> 
                                <div class="container2">
                                <br><br><br><br><br>
                                   <i class="demo-icon icon-search"></i>Metryczka
                                </div> 
                             </a>

                            <a href="szablon_klient.php">
                                <div class="container3">
                                <br><br><br><br><br>
                                    <i class="demo-icon icon-basket"></i>Ankieta dla klienta
                                </div> 
                            </a>

                                <a href="szablon_pracownik.php">    
                                <div class="container4">
                                    <br><br><br><br><br>
                                    <i class="demo-icon icon-user"></i>Ankieta dla pracownika
                                </div> 
                                </a>

                            </div>
                            <div class="kontenery">
                                <a href="szablon_biznes.php">
                                <div class="container5">
                                <br><br><br><br><br>
                                    <i class="demo-icon icon-laptop-1"></i>Ankieta na temat badania rynku
                                </div> 
                                </a>

                                <a href="szablon_edukacja.php">
                                <div class="container6">
                                <br><br><br><br><br>
                                    <i class="demo-icon icon-book"></i>Ankieta badająca zadowolenie uczniów z zajęć
                                </div> 
                                </a>
                                <a href="szablon_impreza.php">
                                <div class="container7">
                                <br><br><br><br><br>
                                    <i class="demo-icon icon-laptop-1"></i>Planowanie imprezy integracyjnej w firmie 
                                </div> 
                                </a>
                                
                        </div>
                    </div>
                </div>
                
            </section>
            
<?php 
    require_once 'footer.php';
?>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>                
    </body>
</html>