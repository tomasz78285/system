<?php 
    require_once("connect.php");
    session_start();
        if($_SESSION['rola']=='user')
        require_once 'header_zalogowany.php';
        else require_once 'header_admin.php';
    
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
            <section class="rodzaj_ankiet">
                <div class = "container">
         

                <div class="tytul">
                        Statystyki 
                    </div>
                <div id="scenter5">
                    
                           <?php
                                    require_once('connect.php'); 
                                    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
                                    if ($polaczenie -> connect_errno) {
                                        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                        exit();
                                      }
                                    
                                    $user = $_SESSION['user'];
                                    $sql = "SELECT nazwa_ankiety FROM ankiety WHERE autor='$user'";
                                    $result = $polaczenie->query($sql);
                                    
                                    if($result && $result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            ?> 
                                            <a href="http://localhost/System_ankietyzacji_online/statystyki_podglad.php?nazwa=<?php echo $row['nazwa_ankiety']; ?>"> <?php echo $row["nazwa_ankiety"];?> </a> <br> 
                                            <?php "<br>";                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $polaczenie->close();

                                ?>
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