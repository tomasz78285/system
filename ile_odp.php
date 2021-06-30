<?php
    require_once 'connect.php';
    $licznikOdp = 0;
    $licznikPytan = 0;
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

    if(isset($_POST['ilosc_odpowiedzi']))
    {
        $ilosc_odpowiedzi = $_POST['ilosc_odpowiedzi'];
       
        if($ilosc_odpowiedzi == '2')
        {
            ?>
            
            <span style='font-weight:700;'>Pytanie:</span>
                <input type="text" name="pytanie"/><br><br>
                <span style='font-weight:700;'>Odpowiedzi:</span><br>
                <input type=text name="01"/><br>
                <input type=text name="02"/><br>
                <input type="submit" value="Dodaj pytanie" />
            
            <?php 
            if(isset($_POST["pytanie"])){
            $P1 = $_POST["pytanie"];
            $nazwa_ankiety = $_SESSION['nazwa_a'];
            
            
            $O1 = $_POST['01'];
            $O2 = $_POST['02'];
            if(isset($_POST["01"])){
                if((strlen($_POST["01"])>0))
                {
                    
                    $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P1','$licznikPytan','zamkniete','$nazwa_ankiety')");
                    $polaczenie->query("INSERT INTO odpowiedzi (numer, nr_w_ankiecie, tresc_odpowiedzi, ilosc, pytanie, ankieta) VALUES ('0', '1','$O1','0','$P1','$nazwa_ankiety'),
                                                                                                                ('0','2','$O2','0','$P1','$nazwa_ankiety')");
                    $licznikPytan += 1;
                    echo "<br><span style='color:green'>Dodano pytanie</span>";
                }
            }
        }
        }
        else if($ilosc_odpowiedzi == '3')
        {
            ?>
                <span style='font-weight:700;'>Pytanie: </span>
                <input type="text" name="pytanie"/><br>
                <span style='font-weight:700;'>Odpowiedzi:</span><br>
                <input type=text name="01"/><br>
                <input type=text name="02"/><br>
                <input type=text name="03"/><br>
                <input type="submit" value="Dodaj pytanie" />
            <?php
            if(isset($_POST["pytanie"]) && isset($_POST['03'])){
                $P1 = $_POST["pytanie"];
                $nazwa_ankiety = $_SESSION['nazwa_a'];
               
                
                $O1 = $_POST['01'];
                $O2 = $_POST['02'];
                $O3 = $_POST['03'];
                if(isset($_POST["01"])){
                    if((strlen($_POST["01"])>0))
                    {
                        $licznikPytan += 1;
                        $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P1','$licznikPytan','zamkniete','$nazwa_ankiety')");
                        $polaczenie->query("INSERT INTO odpowiedzi (nr_w_ankiecie, tresc_odpowiedzi, ilosc, pytanie, ankieta) VALUES ('1','$O1','0','$P1','$nazwa_ankiety'),
                                                                                                                    ('2','$O2','0','$P1','$nazwa_ankiety'),
                                                                                                                    ('3','$O3','0','$P1','$nazwa_ankiety')");
                        echo "<br><span style='color:green'>Dodano pytanie</span>";
                    }
                }    
            }
        }
        else if($ilosc_odpowiedzi == '4') 
        {
            ?>
                <span style='font-weight:700;'>Pytanie: </span>
                <input type="text" name="pytanie"/><br>
                <span style='font-weight:700;'>Odpowiedzi:</span><br>
                <input type=text name="01"/><br>
                <input type=text name="02"/><br>
                <input type=text name="03"/><br>
                <input type=text name="04"/><br>
                <input type="submit" value="Dodaj pytanie" />
            <?php
            if(isset($_POST["pytanie"]) && isset($_POST['04'])){
                $P1 = $_POST["pytanie"];
                $nazwa_ankiety = $_SESSION['nazwa_a'];
                
                $licznikPytan += 1;
                $O1 = $_POST['01'];
                $O2 = $_POST['02'];
                $O3 = $_POST['03'];
                $O4 = $_POST['04'];

                if(isset($_POST["01"])){
                    if((strlen($_POST["01"])>0))
                    {
                        $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P1','$licznikPytan','zamkniete','$nazwa_ankiety')");
                        $polaczenie->query("INSERT INTO odpowiedzi (nr_w_ankiecie, tresc_odpowiedzi, ilosc, pytanie, ankieta) VALUES ('1','$O1','0','$P1','$nazwa_ankiety'),
                                                                                                                        ('2','$O2','0','$P1','$nazwa_ankiety'),
                                                                                                                        ('3','$O3','0','$P1','$nazwa_ankiety'),
                                                                                                                        ('4','$O4','0','$P1','$nazwa_ankiety')");
                        echo "<br><span style='color:green'>Dodano pytanie</span>";
                    }
                }
                }              
        }
        else if($ilosc_odpowiedzi == '5') 
        {
            ?>
                <span style='font-weight:700;'>Pytanie: </span>
                <input type="text" name="pytanie"/><br>
                <span style='font-weight:700;'>Odpowiedzi:</span><br>
                <input type=text name="01"/><br>
                <input type=text name="02"/><br>
                <input type=text name="03"/><br>
                <input type=text name="04"/><br>
                <input type=text name="05"/><br>
                <input type="submit" value="Dodaj pytanie" />
            <?php
            if(isset($_POST["pytanie"]) && isset($_POST['05'])){
                $P1 = $_POST["pytanie"];
                $nazwa_ankiety = $_SESSION['nazwa_a'];
                
                $licznikPytan += 1;
                $O1 = $_POST['01'];
                $O2 = $_POST['02'];
                $O3 = $_POST['03'];
                $O4 = $_POST['04'];
                $O5 = $_POST['05'];

                if(isset($_POST["01"])){
                    if((strlen($_POST["01"])>0))
                    {
                        $polaczenie->query("INSERT INTO pytania (tresc_pytania, nr_pytania_w_ankiecie, rodzaj ,ankieta) VALUES ('$P1','$licznikPytan','zamkniete','$nazwa_ankiety')");
                        $polaczenie->query("INSERT INTO odpowiedzi (nr_w_ankiecie, tresc_odpowiedzi, ilosc, pytanie, ankieta) VALUES ('1','$O1','0','$P1','$nazwa_ankiety'),
                                                                                                                    ('2','$O2','0','$P1','$nazwa_ankiety'),
                                                                                                                    ('3','$O3','0','$P1','$nazwa_ankiety'),
                                                                                                                    ('4','$O4','0','$P1','$nazwa_ankiety'),
                                                                                                                    ('5','$O5','0','$P1','$nazwa_ankiety')");
                        echo "<br><span style='color:green'>Dodano pytanie</span>";
                    }
                }
                
                }   
        }
        else if($ilosc_odpowiedzi < 2 || $ilosc_odpowiedzi > 5){ echo "<span style='font-weight:700px;color:red;'>Ilośc podania możliwych odpowiedzi jest w zakresie od 2 do 5</span>";}
    }
    

    ?>
