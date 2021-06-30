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
      
        <div class="pytanie">
            <form method="post">
            
            <?php
            if(isset($_GET['nazwa'])){
                $a = $_GET['nazwa'];
                ?><h1><?php echo $a; ?> </h1> <?php
            }
                ?>

            
            <?php
                        
                        if(isset($_GET['nazwa'])){
                            $licznik = 1;
                            $licznikOtwartych = 1;
                            $counter = 0;
                            $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
                            if ($polaczenie -> connect_errno) {
                                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                exit();
                            }
                            $ankieta = $_GET['nazwa'];
                         
                            
                            $sql = "SELECT tresc_pytania, rodzaj FROM pytania WHERE ankieta='$ankieta'";
                           

                           

                            $result = $polaczenie->query($sql);
                            
                            if($result && $result->num_rows > 0) 
                            {
                                while($row = $result->fetch_assoc()) {
                                    
                                    $odp = $row["tresc_pytania"];
                                    if(isset($odp)){
                                        // echo "_____________________________________________________";
                                    echo "<div class='box_odp'><br>".$licznik.". ".$odp. "</div><br>"; ?><?php
                                   
                                    $licznik++;
                                    
                                    $rodzaj = $row["rodzaj"];
                                    if($rodzaj=='otwarte'){
                                        
                                        echo "<input class='open' value='Wpisz odpowiedź' type='text' name='otwarta".$licznikOtwartych."'/>"."<br>";
                                        $licznikOtwartych++;
                                    }
                                }
                                    $sql2 = "SELECT id_odpowiedzi, tresc_odpowiedzi, nr_w_ankiecie, numer FROM odpowiedzi WHERE pytanie='$odp' AND ankieta='$ankieta'";
                                    $result2 = $polaczenie->query($sql2);
                                    
                                    if($result2 && $result2->num_rows > 0) 
                                    {
                                        if($rodzaj=='zamkniete')
                                        {
                                            while($row2 = $result2->fetch_assoc()) 
                                            {
                                                $id_odp = $row2["id_odpowiedzi"];

                                                echo "<div class='box_odp2'><label><input type='checkbox' name='odp_$id_odp' value='".$row2["tresc_odpowiedzi"]."'/> ".$row2["tresc_odpowiedzi"]. "</label></div><br>";   

                                                if(isset($_POST["odp_$id_odp"]))
                                                {
                                                    $polaczenie -> query("UPDATE odpowiedzi SET ilosc = ilosc + 1 WHERE id_odpowiedzi=$id_odp");
                                                    header('Location: wypelniona_ankieta.php');
                                                }
                                             
                                            }
                                           
                                        }
                                    }
                                }
                            }
                    
                            $polaczenie->close();
                        }
                        
                    ?>
                    <br><br>
                    <input class="wariant" type="submit" value="Prześlij ankietę" />
                    </form>
                    <?php
                        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
                        for($x=1;$x<35;$x++)
                        {
                            
                            // if(isset($_POST["zamkniete_$x"])){
                               
                            //     $polaczenie -> query("UPDATE odpowiedzi SET ilosc = ilosc + 1 WHERE tresc_odpowiedzi=$x");
                            //     header('Location: wypelniona_ankieta.php');

                            //  }
                             
                             if(isset($_POST["otwarta$x"])){
                                 
                                 $tresc = $_POST["otwarta$x"];     
                                 $sql = "SELECT tresc_pytania, rodzaj FROM pytania WHERE ankieta='$ankieta' AND nr_pytania_w_ankiecie='$x'";
                           

                           

                            $result = $polaczenie->query($sql);
                            
                            if($result && $result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    
                                    $odp = $row["tresc_pytania"];                                   
                                    $polaczenie->query("INSERT INTO odpowiedzi(nr_w_ankiecie, tresc_odpowiedzi,ilosc,pytanie,ankieta) VALUES ('$x','$tresc',1,'$odp','$ankieta')");  
                                    header('Location: wypelniona_ankieta.php'); 
                                }
                                    
                                    }
                              }
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