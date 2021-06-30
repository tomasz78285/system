<?php
session_start();
require_once 'connect.php';
$pytanie = $_GET['pytanie'];
$ankieta = $_SESSION['ankieta'];
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$sql = "SELECT tresc_odpowiedzi, ilosc FROM odpowiedzi WHERE pytanie='$pytanie' AND ankieta='$ankieta'";

$result = $polaczenie->query($sql);
$licznik_odpowiedzi = 0;
if($result && $result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$licznik_odpowiedzi = $licznik_odpowiedzi + 1;	
	}
}
// echo $licznik_odpowiedzi;

if($licznik_odpowiedzi == 2)
{
	$sql_2_1 = "SELECT tresc_odpowiedzi, ilosc, nr_w_ankiecie FROM odpowiedzi WHERE pytanie='$pytanie' AND nr_w_ankiecie='1' AND ankieta='$ankieta'";

	$result_2_1 = $polaczenie->query($sql_2_1);
	if($result_2_1 && $result_2_1->num_rows > 0) {
		while($row = $result_2_1->fetch_assoc()) {
			$tresc_2_1 = $row['tresc_odpowiedzi'];
			$ilosc_2_1 = $row['ilosc'];
		}
	}

	$sql_2_2 = "SELECT tresc_odpowiedzi, ilosc, nr_w_ankiecie FROM odpowiedzi WHERE pytanie='$pytanie' AND nr_w_ankiecie='2' AND ankieta='$ankieta'";

	$result_2_2 = $polaczenie->query($sql_2_2);
	if($result_2_2 && $result_2_2->num_rows > 0) {
		while($row = $result_2_2->fetch_assoc()) {
			$tresc_2_2 = $row['tresc_odpowiedzi'];
			$ilosc_2_2 = $row['ilosc'];
		}
	}

	$dataPoints = array(array("label"=>$tresc_2_1, "y"=>$ilosc_2_1),
				  array("label"=>$tresc_2_2, "y"=>$ilosc_2_2));
}

if($licznik_odpowiedzi == 3)
{

	$sql_3_1 = "SELECT tresc_odpowiedzi, ilosc, nr_w_ankiecie FROM odpowiedzi WHERE pytanie='$pytanie' AND nr_w_ankiecie='1' AND ankieta='$ankieta'";

	$result_3_1 = $polaczenie->query($sql_3_1);
	if($result_3_1 && $result_3_1->num_rows > 0) {
		while($row = $result_3_1->fetch_assoc()) {
			$tresc_3_1 = $row['tresc_odpowiedzi'];
			$ilosc_3_1 = $row['ilosc'];
		}
	}

	$sql_3_2 = "SELECT tresc_odpowiedzi, ilosc, nr_w_ankiecie FROM odpowiedzi WHERE pytanie='$pytanie' AND nr_w_ankiecie='2' AND ankieta='$ankieta'";

	$result_3_2 = $polaczenie->query($sql_3_2);
	if($result_3_2 && $result_3_2->num_rows > 0) {
		while($row = $result_3_2->fetch_assoc()) {
			$tresc_3_2 = $row['tresc_odpowiedzi'];
			$ilosc_3_2 = $row['ilosc'];
		}
	}

	$sql_3_3 = "SELECT tresc_odpowiedzi, ilosc, nr_w_ankiecie FROM odpowiedzi WHERE pytanie='$pytanie' AND nr_w_ankiecie='3' AND ankieta='$ankieta'";

	$result_3_3 = $polaczenie->query($sql_3_3);
	if($result_3_3 && $result_3_3->num_rows > 0) {
		while($row = $result_3_3->fetch_assoc()) {
			$tresc_3_3 = $row['tresc_odpowiedzi'];
			$ilosc_3_3 = $row['ilosc'];
		}
	}

	$dataPoints = array(array("label"=>$tresc_3_1, "y"=>$ilosc_3_1),
				  array("label"=>$tresc_3_2, "y"=>$ilosc_3_2),
				  array("label"=>$tresc_3_3, "y"=>$ilosc_3_3));
}

if($licznik_odpowiedzi == 4)
{
	$sql_4_1 = "SELECT tresc_odpowiedzi, ilosc, nr_w_ankiecie FROM odpowiedzi WHERE pytanie='$pytanie' AND nr_w_ankiecie='1' AND ankieta='$ankieta'";

	$result_4_1 = $polaczenie->query($sql_4_1);
	if($result_4_1 && $result_4_1->num_rows > 0) {
		while($row = $result_4_1->fetch_assoc()) {
			$tresc_4_1 = $row['tresc_odpowiedzi'];
			$ilosc_4_1 = $row['ilosc'];
		}
	}

	$sql_4_2 = "SELECT tresc_odpowiedzi, ilosc, nr_w_ankiecie FROM odpowiedzi WHERE pytanie='$pytanie' AND nr_w_ankiecie='2' AND ankieta='$ankieta'";

	$result_4_2 = $polaczenie->query($sql_4_2);
	if($result_4_2 && $result_4_2->num_rows > 0) {
		while($row = $result_4_2->fetch_assoc()) {
			$tresc_4_2 = $row['tresc_odpowiedzi'];
			$ilosc_4_2 = $row['ilosc'];
		}
	}

	$sql_4_3 = "SELECT tresc_odpowiedzi, ilosc, nr_w_ankiecie FROM odpowiedzi WHERE pytanie='$pytanie' AND nr_w_ankiecie='3' AND ankieta='$ankieta'";

	$result_4_3 = $polaczenie->query($sql_4_3);
	if($result_4_3 && $result_4_3->num_rows > 0) {
		while($row = $result_4_3->fetch_assoc()) {
			$tresc_4_3 = $row['tresc_odpowiedzi'];
			$ilosc_4_3 = $row['ilosc'];
		}
	}

	$sql_4_4 = "SELECT tresc_odpowiedzi, ilosc, nr_w_ankiecie FROM odpowiedzi WHERE pytanie='$pytanie' AND nr_w_ankiecie='4' AND ankieta='$ankieta'";

	$result_4_4 = $polaczenie->query($sql_4_4);
	if($result_4_4 && $result_4_4->num_rows > 0) {
		while($row = $result_4_4->fetch_assoc()) {
			$tresc_4_4 = $row['tresc_odpowiedzi'];
			$ilosc_4_4 = $row['ilosc'];
		}
	}

	$dataPoints = array(array("label"=>$tresc_4_1, "y"=>$ilosc_4_1),
				  array("label"=>$tresc_4_2, "y"=>$ilosc_4_2),
				  array("label"=>$tresc_4_3, "y"=>$ilosc_4_3),
				  array("label"=>$tresc_4_4, "y"=>$ilosc_4_4));
}

if($licznik_odpowiedzi == 5)
{
	$sql_5_1 = "SELECT tresc_odpowiedzi, ilosc, nr_w_ankiecie FROM odpowiedzi WHERE pytanie='$pytanie' AND nr_w_ankiecie='1' AND ankieta='$ankieta'";

	$result_5_1 = $polaczenie->query($sql_5_1);
	if($result_5_1 && $result_5_1->num_rows > 0) {
		while($row = $result_5_1->fetch_assoc()) {
			$tresc_5_1 = $row['tresc_odpowiedzi'];
			$ilosc_5_1 = $row['ilosc'];
		}
	}

	$sql_5_2 = "SELECT tresc_odpowiedzi, ilosc, nr_w_ankiecie FROM odpowiedzi WHERE pytanie='$pytanie' AND nr_w_ankiecie='2' AND ankieta='$ankieta'";

	$result_5_2 = $polaczenie->query($sql_5_2);
	if($result_5_2 && $result_5_2->num_rows > 0) {
		while($row = $result_5_2->fetch_assoc()) {
			$tresc_5_2 = $row['tresc_odpowiedzi'];
			$ilosc_5_2 = $row['ilosc'];
		}
	}

	$sql_5_3 = "SELECT tresc_odpowiedzi, ilosc, nr_w_ankiecie FROM odpowiedzi WHERE pytanie='$pytanie' AND nr_w_ankiecie='3' AND ankieta='$ankieta'";

	$result_5_3 = $polaczenie->query($sql_5_3);
	if($result_5_3 && $result_5_3->num_rows > 0) {
		while($row = $result_5_3->fetch_assoc()) {
			$tresc_5_3 = $row['tresc_odpowiedzi'];
			$ilosc_5_3 = $row['ilosc'];
		}
	}

	$sql_5_4 = "SELECT tresc_odpowiedzi, ilosc, nr_w_ankiecie FROM odpowiedzi WHERE pytanie='$pytanie' AND nr_w_ankiecie='4' AND ankieta='$ankieta'";

	$result_5_4 = $polaczenie->query($sql_5_4);
	if($result_5_4 && $result_5_4->num_rows > 0) {
		while($row = $result_5_4->fetch_assoc()) {
			$tresc_5_4 = $row['tresc_odpowiedzi'];
			$ilosc_5_4 = $row['ilosc'];
		}
	}

	$sql_5_5 = "SELECT tresc_odpowiedzi, ilosc, nr_w_ankiecie FROM odpowiedzi WHERE pytanie='$pytanie' AND nr_w_ankiecie='5' AND ankieta='$ankieta'";

	$result_5_5 = $polaczenie->query($sql_5_5);
	if($result_5_5 && $result_5_5->num_rows > 0) {
		while($row = $result_5_5->fetch_assoc()) {
			$tresc_5_5 = $row['tresc_odpowiedzi'];
			$ilosc_5_5 = $row['ilosc'];
		}
	}

	$dataPoints = array(array("label"=>$tresc_5_1, "y"=>$ilosc_5_1),
				  array("label"=>$tresc_5_2, "y"=>$ilosc_5_2),
				  array("label"=>$tresc_5_3, "y"=>$ilosc_5_3),
				  array("label"=>$tresc_5_4, "y"=>$ilosc_5_4),
				  array("label"=>$tresc_5_5, "y"=>$ilosc_5_5));
}
?>
                           

<?php 
    require_once 'header_zalogowany.php';
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Ankiety Online - szablony</title>

        <meta name="description" content="Strona do ankietyzacji online">
        <meta name="keywords" content="system, ankietyzacji, online">
        <meta name="author" content="Tomasz Kadłubowski">
        <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="css/fontello.css" type="text/css" />
       
	    <script>
			window.onload = function () {
				var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true,
				exportEnabled: true,
				title:{
					text: "<?php echo $_SESSION['ankieta']; ?>"
				},
				subtitles: [{
					text: "<?php echo $_GET['pytanie']; ?>"
				}],
				data: [{
					type: "pie",
					showInLegend: "true",
					legendText: "{label}",
					indexLabelFontSize: 16,
					indexLabel: "{label} - #percent%",
					yValueFormatString: "฿#,##0",
					dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
				}]
			});
			chart.render();
		}
	</script>
	
    </head>
    <body>
        <main>
		<div id="chartContainer" style="height: 370px; width: 100%;"></div>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<?php 
    require_once 'footer.php';
?>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>                
    </body>
</html>