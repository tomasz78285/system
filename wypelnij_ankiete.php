<?php 

    require_once 'connect.php';
    session_start();
    if(isset($_SESSION['zalogowany']))
    {
        //exit();
     
            if($_SESSION['rola']=='user')
            require_once 'header_zalogowany.php';
            else require_once 'header_admin.php';
        
    }
    else require_once 'header.php';
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
                    ANKIETY
                </div>
                <br><br><br>
                <section class="rodzaj_ankiet">
                <div class = "container">

                    

                    <div class="row">

                        <div class="col-sm-4" id="s4_2a">
                            <h1><a href="ankiety_klient.php"><i class="demo-icon icon-basket"></i>Klient</a></h1>
                            <?php
                                    require_once('connect.php'); 
                                    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
                                    if ($polaczenie -> connect_errno) {
                                        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                        exit();
                                      }
                                    
                                    $sql = "SELECT nazwa_ankiety FROM ankiety WHERE grupa_badawcza='Klient'";
                                    $result = $polaczenie->query($sql);
                                    
                                    if($result && $result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            
                                            ?> 
                                            <a href="http://localhost/System_ankietyzacji_online/wypelnij_spr_dost.php?nazwa=<?php echo $row['nazwa_ankiety']; ?>"> <?php echo $row["nazwa_ankiety"];?> </a> <br> 
                                            <?php "<br>";
                                           
                                        }
                                    } 
                                    $polaczenie->close();
                                ?>
                        </div>

                        <div class="col-sm-4" id="s5_2a">
                            <h1><a href="ankiety_pracownik.php"><i class="demo-icon icon-user"></i>Pracownik</a></h1>
                            <?php
                                    require_once('connect.php'); 
                                    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
                                    if ($polaczenie -> connect_errno) {
                                        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                        exit();
                                      }
                                    
                                    $sql = "SELECT nazwa_ankiety FROM ankiety WHERE grupa_badawcza='Pracownik'";
                                    $result = $polaczenie->query($sql);
                                    
                                    if($result && $result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            ?>
                                            <a href="http://localhost/System_ankietyzacji_online/wypelnij.php?nazwa=<?php echo $row['nazwa_ankiety']; ?>"> <?php echo $row["nazwa_ankiety"];?> </a> <br>
                                            <?php "<br";
                                        }
                                    } 
                                    $polaczenie->close();
                                ?>
                        </div>
            
                        <div class="col-sm-4" id="s4_2b">
                            <h1><a href="ankiety_biznes.php"><i class="demo-icon icon-laptop-1"></i>Biznes</a></h1>
                            <?php
                                    require_once('connect.php'); 
                                    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
                                    if ($polaczenie -> connect_errno) {
                                        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                        exit();
                                      }
                                    
                                    $sql = "SELECT nazwa_ankiety FROM ankiety WHERE grupa_badawcza='Biznes'";
                                    $result = $polaczenie->query($sql);
                                    
                                    if($result && $result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            ?> 
                                            <a href="http://localhost/System_ankietyzacji_online/wypelnij.php?nazwa=<?php echo $row['nazwa_ankiety']; ?>"> <?php echo $row["nazwa_ankiety"];?> </a> <br> 
                                            <?php "<br>";
                                        }
                                    } 
                                    $polaczenie->close();
                                ?>
                        </div>

                        <div class="col-sm-4" id="s5_2b">
                            <h1><a href="ankiety_edukacja.php"><i class="demo-icon icon-book"></i>Edukacja</a></h1>
                            <?php
                                    require_once('connect.php'); 
                                    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
                                    if ($polaczenie -> connect_errno) {
                                        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                        exit();
                                      }
                                    
                                    $sql = "SELECT nazwa_ankiety FROM ankiety WHERE grupa_badawcza='Edukacja'";
                                    $result = $polaczenie->query($sql);
                                    
                                    if($result && $result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            ?> 
                                            <a href="http://localhost/System_ankietyzacji_online/wypelnij.php?nazwa=<?php echo $row['nazwa_ankiety']; ?>"> <?php echo $row["nazwa_ankiety"];?> </a> <br> 
                                            <?php "<br>";
                                        }
                                    }   
                                    $polaczenie->close();
                                ?>
                        </div>
            
                        <div class="col-sm-4" id="scenter2">
                            <h1><a href="ankiety_inne.php"><i class="demo-icon icon-search"></i>Inne</a></h1>
                            <a href="wypelnij_ankiete.php">
                                <?php
                                        require_once('connect.php'); 
                                        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
                                        if ($polaczenie -> connect_errno) {
                                            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                            exit();
                                        }
                                        
                                        $sql = "SELECT nazwa_ankiety FROM ankiety WHERE grupa_badawcza='Inne'";
                                        $result = $polaczenie->query($sql);
                                        
                                        if($result && $result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                                ?> 
                                            <a href="http://localhost/System_ankietyzacji_online/wypelnij.php?nazwa=<?php echo $row['nazwa_ankiety']; ?>"> <?php echo $row["nazwa_ankiety"];?> </a> <br> 
                                            <?php "<br>";
                                            }
                                        } 
                                        
                                        $polaczenie->close();
                                ?>
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