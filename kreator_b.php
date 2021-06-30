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
                        Kreator ankiet                           
                    </div>
                    
                    <form method="post">
                    
                    <div id="scenter3">
                    <?php 
                        
                            echo "<span style='font-weight:700;'>Tworzenie ankiety: </span>".$_SESSION['nazwa_a'];
                        
                    ?><br><br>
                            <span style='font-weight:700;'>Ile pytań chcesz dodać?</span>  
                                <input type="number" name="ilosc_pytan" value='<?php if(isset($_POST['ilosc_pytan'])) echo $_POST['ilosc_pytan']; ?>'>
                                 <br>
                                <input type="submit" value="Wybierz" /><br><br>
                               <?php require_once 'ile_pytan.php'
                                
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