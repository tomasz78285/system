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
    <div id="scenter">
    <h1><?php echo $_GET['nazwa'];?></h1>
    <br>
    Wpisz kod dostępu<?php
    $nazwa_ankiety = $_GET['nazwa'];
    require_once('connect.php'); 
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    if ($polaczenie -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
                                    
    $sql = "SELECT dostepnosc, kod_dostepu FROM ankiety WHERE nazwa_ankiety='$nazwa_ankiety'";
    $result = $polaczenie->query($sql);
                                    
    if($result && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($row['dostepnosc'] == 'Zamknieta')
            {
                ?>
                <form method="post">
                <input type="text" name="dost">
                <input type="submit" value="OK">
                </form>
                <?php 
                if(isset($_POST['dost']))
                {
                    if($_POST['dost'] == $row['kod_dostepu'])
                    {
                        header('Location: http://localhost/System_ankietyzacji_online/wypelnij.php?nazwa='.$nazwa_ankiety);
                    }
                    else{
                        echo "Zły kod";
                    }
                }

            
            }

            else
            {
                header('Location: http://localhost/System_ankietyzacji_online/wypelnij.php?nazwa='.$nazwa_ankiety);
            }
        ?> 
        
        <?php "<br>";
        }
        } else {
            echo "0 results";
       }
        $polaczenie->close();
                                
?>
    </div>
    </body>
</html>