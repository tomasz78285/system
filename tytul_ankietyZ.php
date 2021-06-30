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
                            <label><span style="font-weight:700;">Tytuł ankiety</span></label>
                            <input class="s8" type="text" name="nazwa_ankiety"><br>
                            <label><span style="font-weight:700;">Wybierz grupę badawczą</span></label>
                            <select name="grupa_badawcza">
                                <option>Klient</option>
                                <option>Pracownik</option>
                                <option>Biznes</option>
                                <option>Edukacja</option>
                                <option>Inne</option>
                            </select>  <br>
                            <label><span style="font-weight:700;">Dostępność dla wypełniających</span></label>
                            <select name="dostepnosc">
                                <option>Otwarta</option>
                                <option>Zamknieta</option>
                            </select>
                            <br><br>
                            <input type="submit" value="Dalej"/>  
                            <?php
        require_once('connect.php');  
          
        if(isset($_POST['nazwa_ankiety'])) 
        {
          
            $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
            $poprawneWypelnienie = true;
            $nazwa_ankiety = $_POST['nazwa_ankiety'];
            $gr_badawcza = $_POST['grupa_badawcza'];
            $autor = $_SESSION['user'];
            $dostepnosc = $_POST['dostepnosc'];

            $_SESSION['nazwa_a'] = $nazwa_ankiety;
            $_SESSION['dost'] = $dostepnosc;
           
            if ($polaczenie -> connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
            }

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
                    $polaczenie->query("INSERT INTO ankiety(nazwa_ankiety, grupa_badawcza, dostepnosc, autor) VALUES ('$nazwa_ankiety','$gr_badawcza','$dostepnosc','$autor')");
                    header('Location: kreator_a.php');
                }
            $polaczenie->close();
        }

        ?>
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