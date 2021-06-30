<?php 
    require_once("connect.php");
    session_start();
    if(isset($_SESSION['rola'])){
        if($_SESSION['rola']=='user')
        require_once 'header_zalogowany.php';
        else require_once 'header_admin.php';
    
    }
        
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
        <link rel="stylesheet" href="fontello-e5a92333/css/fontello.css" type="text/css" />
        

	
    </head>
    <body>
        <main>
            <section class="rodzaj_ankiet">
                <div class = "container">
        

                  
                    <div class="tytul">
                        Statystyki 
                    </div>
                    <div>
                    <?php
                          if(isset($_GET['nazwa'])){
                            $ankieta = $_GET['nazwa'];
                            $_SESSION['ankieta'] = $ankieta;
                            echo "<h1>$ankieta</h1>";
                        }
                   ?>
                </div>


                        
                
                    <div class="row">

                        <div id="s4_2bi">
                            <?php
                       
                                if(isset($_GET['nazwa'])){
                                    $licznik = 1;
                                    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
                                    if ($polaczenie -> connect_errno) {
                                        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                                        exit();
                                    }
                                    $ankieta = $_GET['nazwa'];
                                    
                                    $sql = "SELECT tresc_pytania, rodzaj, nr_pytania_w_ankiecie FROM pytania WHERE ankieta='$ankieta'";
                                  
                                    $result = $polaczenie->query($sql);
                                    $counter = 1;
                                    if($result && $result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<br>_______________________________________";
                                            echo "<br>"."<span style='font-weight:bold;'>Pytanie ".$licznik." ".$row["tresc_pytania"]. "</span><br>";
                                           
                                            $licznik++;
                                            $odp = $row["tresc_pytania"];
                                            $rodzaj = $row["rodzaj"];
                                            $sql2 = "SELECT tresc_odpowiedzi, ilosc, pytanie FROM odpowiedzi WHERE pytanie='$odp' AND ankieta='$ankieta'";
                                            $result2 = $polaczenie->query($sql2);
                                            
                                            if($rodzaj=='otwarte'){
                                                if($result2 && $result2->num_rows > 0) {
                                                    while($row2 = $result2->fetch_assoc()) {
                                                       
                                                                echo $row2["tresc_odpowiedzi"]."<br>"; 
                                                                
                                                    }
                                                }
                                            }

                                            if($rodzaj=='zamkniete'){
                                                if($result2 && $result2->num_rows > 0) {
                                                    $suma = 0;
                                                    echo "<span style='font-weight: 700;'><br>Rozkład głosów: </span><br>"; 
                                                    while($row2 = $result2->fetch_assoc()) {
                                                        $ilosc = $row2["ilosc"];
                                                        $suma += $ilosc;
                                                        
                                                        echo $row2["tresc_odpowiedzi"].": ".$row2["ilosc"]. "<br>";  
                                                        
                                                        
                                                    }
                                                    echo "Ilość oddanych głosów: ".$suma."<br><br>";

                                                    echo "<span style='font-weight: 700;'>Rozkład procentowy: </span><br>";
                                                    $sql2 = "SELECT tresc_odpowiedzi, ilosc FROM odpowiedzi WHERE pytanie='$odp' AND ankieta='$ankieta'";
                                                    $result2 = $polaczenie->query($sql2);
                                                    if($result2 && $result2->num_rows > 0) {
                                                        if($suma !=0){
                                                        while($row2 = $result2->fetch_assoc()) {
                                                            $ilosc = $row2["ilosc"];
                                                            $procent = round($ilosc/$suma * 100,2);
                                                            $tresc_odpowiedzi = $row2["tresc_odpowiedzi"];
                                                            echo $row2["tresc_odpowiedzi"].": ".$procent. "% <br>";  
                                                            
                                                            
                                                        }
                                                        echo "<a href='http://localhost/System_ankietyzacji_online/wykres.php?pytanie=$odp' ><span style='color:red; font-weight: 700;'>Zobacz wykres <i class='demo-icon icon-chart-pie'></i></span></a>";
                                                      
                                                        }
                                                    }
                                                }
                                                
                                            else {
                                                echo "0 results";
                                            }
                                        }
                                        }

                                        } else {
                                        echo "0 results";
                                    }
                                   
                                    }
                            ?>

                            
                            
                    
                        </div>
                        
                    <?php 
                
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