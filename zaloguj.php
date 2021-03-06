<?php
    session_start();

    require_once "connect.php";
    if(!isset($_POST['login']) || (!isset($_POST['haslo'])))
    {
        header('Location: logowanie.php');
        exit();
    }

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
    if($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect_errno;
    }
    else
    {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        $login = htmlentities($login, ENT_QUOTES, "UTF-8");
        $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
        
        if($rezultat = @$polaczenie->query(
        sprintf("SELECT * FROM uzytkownicy WHERE login='%s' AND haslo='%s'",
        mysqli_real_escape_string($polaczenie,$login),
        mysqli_real_escape_string($polaczenie,$haslo))))
        {
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow>0)
            {
                $_SESSION['zalogowany'] = true;
                $wiersz = $rezultat->fetch_assoc();
                $_SESSION['id'] = $wiersz['id_uzytkownika'];
                $_SESSION['user'] = $wiersz['login'];
                $_SESSION['rola'] = $wiersz['rola'];

                if($_SESSION['rola'] == 'user'){
                unset($_SESSION['blad']);
                $rezultat->free_result();
                header('Location: profil_user.php');
                }
                else{
                    unset($_SESSION['blad']);
                $rezultat->free_result();
                header('Location: profil_admin.php');
                }
            }
            else
            {
                $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło</span>';
                header('Location: logowanie.php');
            }
        }

        $polaczenie->close();        
    }


?>