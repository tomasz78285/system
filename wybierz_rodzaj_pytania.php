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
                
                    <div class="kreatorTytul">
                        <br><br>
                        <h1>Kreator ankiet</h1>                            
                    </div>
                    
                    <form method="post">
                    
                    <div id="scenter">
                    <?php 
                        
                            echo "<span style='font-weight:700;'>Tworzenie ankiety: </span>".$_SESSION['nazwa_a'];
                        
                    ?><br><br>
                            <span style='font-weight:700;'>Rodzaj pytania:</span>  
                            <br>
                            <label>
                            <input type="radio" name="typ" value="Zamkniete"> Zamknięte
                            </label>
                            <br>
                            <label>
                            <input type="radio" name="typ" value="Otwarte"> Otwarte
                            </label> 
                            <br><br>
                            <input type="submit" value="Wybierz">
                                </select> 
                                <br>
                                <?php 
                                if(isset($_POST['typ']))
                                {
                                    $typ = $_POST['typ'];
                                    echo "<span style='color:green'>Wybrano rodzaj pytania: ".$typ.". Przejdź dalej.</span>";
                                }
                                ?>
                                <br>
                                <a href="http://localhost/System_ankietyzacji_online/kreator_c.php?typ=<?php if(isset($_POST['typ'])){ echo $_POST['typ'];} ?>"> <span style="color:red; font-weight:700; font-size:25px;"><p>Dalej</p></span></a>
                               
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