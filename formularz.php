<html>

<body>

<?php
	function wyslijmaila($imnaz,$przyn,$ostow) {	
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'From: Swiety Mikolaj <SantaClaus@laponia.eu>' . "\r\n";
	
		$msg = "<h1> Imie i nazwisko: $imnaz, Przynosi: $przyn, Osoba tow.: $ostow </h1>" ;
		$res = mail("mojmail@mailing.com", "Impreza sk.", $msg, $headers) ;
		
		return $res ;
	}

	if (empty($_REQUEST["imienazw"]))
		$imienazw = "brak" ;
	else
		$imienazw = $_GET["imienazw"] ;
			
	if (empty($_REQUEST["coprzynosi"]))
		$przynosi = "brak" ;
	else
		$przynosi = $_GET["coprzynosi"] ;
		
	if (empty($_REQUEST["ostow"]))
		$ostow = "nie ma" ;
	else
		$ostow = "jest" ;

	$res = wyslijmaila($imienazw,$przynosi,$ostow) ; 
		
		
?>

<table border = "1">
	<tr>
		<th> Kto? </th> <td> <?php echo $imienazw ;?> </td>
	</tr>
	<tr>
		<th> Przynosi </th> <td> <?php echo $przynosi ; ?> </td>
	</tr>
	<tr>
		<th> Osoba towarz. </th> <td> <?php echo $ostow ; ?> </td>
	</tr>
	<tr>
		<th> Mail do organiz. </th> <td> <?php echo $res?"TAK":"NIE" ?> </td>	<!-- Odpowiednik if ($res)...-->
	</tr>

</table>

</body>
</html>
