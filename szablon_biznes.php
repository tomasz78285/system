<?php 
    session_start();
    if(!isset($_SESSION['zalogowany']))
    {
        header('Location: logowanie.php');
        require_once 'header.php';
        exit();
    }
    else require_once 'header_zalogowany.php';
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Kreator</title>

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
  
    <?php
        require_once('connect.php');  
          
        if(isset($_POST['nazwa_ankiety']) &&  isset($_POST['P1'])  && isset($_POST['P101'])) 
        {
          
            $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

            $nazwa_ankiety = $_POST['nazwa_ankiety'];
            $gr_badawcza = $_POST['grupa_badawcza'];
            $autor = $_SESSION['user'];
            $dost=$_POST['dostepnosc'];
            $_SESSION['dost'] = $dost;


            $poprawneWypelnienie = true;
            $rezultat = $polaczenie->query("SELECT id_ankiety FROM ankiety WHERE nazwa_ankiety='$nazwa_ankiety'");
            if(!$rezultat) throw new Exception($polaczenie->error);
            $iloscAnkiet = $rezultat->num_rows;
            if($iloscAnkiet>0)
            {
                $poprawneWypelnienie=false;
                echo "<br><span style=color:red>Istnieje już ankieta o podanej nazwie!</span>";
            }
            if($poprawneWypelnienie == true)
            {
                $polaczenie->query("INSERT INTO ankiety(nazwa_ankiety, grupa_badawcza, dostepnosc ,autor) VALUES ('$nazwa_ankiety','Biznes','$dost', '$autor')");
                                            
    
                                      


                    $P1 = $_POST["P1"];
                    $P2 = $_POST["P2"];
                    $P3 = $_POST["P3"];
                    $P4 = $_POST["P4"];
        
                   
                    $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES 
                                                                                        ('$P1','1','zamkniete','$nazwa_ankiety'),
                                                                                        ('$P2','2','zamkniete','$nazwa_ankiety'),
                                                                                        ('$P3','3','zamkniete','$nazwa_ankiety'),
                                                                                        ('$P4','4','zamkniete','$nazwa_ankiety')");
        
                    $P101 = $_POST['P101'];
                    $P102 = $_POST['P102'];
                    $P201 = $_POST['P201'];
                    $P202 = $_POST['P202'];
                    $P203 = $_POST['P203'];
                    $P204 = $_POST['P204'];
                    $P205 = $_POST['P205'];
                    $P301 = $_POST['P301'];
                    $P302 = $_POST['P302'];
                    $P303 = $_POST['P303'];
                    $P304 = $_POST['P304'];
                    $P305 = $_POST['P305'];
                    $P401 = $_POST['P401'];
                    $P402 = $_POST['P402'];
        
                    $polaczenie->query("INSERT INTO odpowiedzi (numer, nr_w_ankiecie, tresc_odpowiedzi, pytanie, ankieta) VALUES 
                                                                                        ('1','1','$P101','$P1','$nazwa_ankiety'),
                                                                                        ('2','2','$P102','$P1','$nazwa_ankiety'),
                                                                                        ('3','1','$P201','$P2','$nazwa_ankiety'),
                                                                                        ('4','2','$P202','$P2','$nazwa_ankiety'),
                                                                                        ('5','3','$P203','$P2','$nazwa_ankiety'),
                                                                                        ('6','4','$P204','$P2','$nazwa_ankiety'),
                                                                                        ('7','5','$P205','$P2','$nazwa_ankiety'),
                                                                                        ('8','1','$P301','$P3','$nazwa_ankiety'),
                                                                                        ('9','2','$P302','$P3','$nazwa_ankiety'),
                                                                                        ('10','3','$P303','$P3','$nazwa_ankiety'),
                                                                                        ('11','4','$P304','$P3','$nazwa_ankiety'),
                                                                                        ('12','5','$P305','$P3','$nazwa_ankiety'),
                                                                                        ('13','1','$P401','$P4','$nazwa_ankiety'),
                                                                                        ('14','2','$P402','$P4','$nazwa_ankiety')");
            header('Location: koniec_tworzenia.php');
            }
            
        

            if ($polaczenie -> connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
            }
        }

        ?>

        <main>
           <!-- <form id="formKreator"> -->
                <section id = quest>
                    <div class="kreatorTytul">
                        <br><br>
                        <h1>Kreator ankiet</h1>                        
                    </div>
                    <form method="post">
                        <div id="scenter3">
                            <label><span style="font-weight:700;">Tytuł ankiety</span></label>
                            <input class="s8" type="text" name="nazwa_ankiety"><br>
                            <label><span style="font-weight:700;">Wybierz grupę badawczą</span></label>
                            <input type="text" name="grupa_badawcza" value="Biznes" disabled>
                            <label><span style="font-weight:700;">Wybierz dostępność do ankiety</span></label>
                            <select name="dostepnosc">
                                <option>Otwarta</option>
                                <option>Zamknięta</option>
                            </select>
                                         
                        </div>
                        
                    <div id=scenter3>
                    
                        <div class="row">
                                <div class="col-sm-1"><span style="font-weight:700;">Pytanie1</span><br>
                                        <input type="text" name="P1" value="Czy w Twojej okolicy brakuje miejsc rekreacji?"><br><br>
                                        <input type="text" value="Tak" name="P101"><br>
                                        <input type="text" value="Nie" name="P102"><br>
                                </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-1"><span style="font-weight:700;">Pytanie2</span><br>
                                <input type="text" name="P2" value="Czego brakuje w Twoim mieście?"><br><br>
                                <input type="text" value="Basenu" name="P201"><br>
                                <input type="text" value="Teatru" name="P202"><br>
                                <input type="text" value="Kina" name="P203"><br>
                                <input type="text" value="Baru" name="P204"><br>
                                <input type="text" value="Inne" name="P205"><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-1"><span style="font-weight:700;">Pytanie3</span><br>
                                <input type="text" name="P3" value="Ile wydajesz miesięcznie na rozywkę?"><br><br>
                                <input type="text" value="Poniżej 100zł" name="P301"><br>
                                <input type="text" value="100 - 300 zł" name="P302"><br>
                                <input type="text" value="300 - 500 zł" name="P303"><br>
                                <input type="text" value="500- 1000 zł" name="P304"><br>
                                <input type="text" value="Powyżej 1000 zł" name="P305"><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-1"><span style="font-weight:700;">Pytanie4</span><br>
                                <input type="text" name="P4" value="Czy byłbyś/aś zainteresowany/a skorzystaniem z salonu masażu?"><br><br>
                                <input type="text" value="Tak" name="P401"><br>
                                <input type="text" value="Nie" name="P402"><br>
                                <br><br>
   
                            </div>
                        </div>
                            <input class="wariant" type="submit" value="Stwórz ankietę">
                        </div>
                   </div>
                        </form>
                      
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