<?php 
	$title = "Feed";
	include "estruktura.php";
?>
	<body>
		<div class="igo">
			<form method="post">

    			<input type="submit" name="argazkiIgo" id="argazkiIgo" value="Argazkia igo" />
			</form>
		</div>
		<div class="feed">
			<?php
				include "connect.php";
				$query = "SELECT I.irudia FROM ((erabiltzailea E INNER JOIN jarraitzen J ON E.erabiltzailea = J.jarraitzen) INNER JOIN irudia I ON I.jabea = J.jarraitzen) WHERE E.erabiltzailea = '".$_SESSION['erabiltzailea']."';";
				$query = "SELECT I.irudia FROM ((erabiltzailea E INNER JOIN jarraitzen J ON E.erabiltzailea = J.jarraitzen) INNER JOIN irudia I ON I.jabea = J.jarraitzen) ;";
				
				$erantzuna = $conn->query($query);
				if ($erantzuna){
					if($erantzuna->num_rows > 0) {
						while($lerroa = $erantzuna->fetch_assoc()) {
							echo "<img src='data:image/png;base64,".base64_encode( $lerroa['irudia'] )."' style='width: 200px;' />";
						}
					}
				}
				else{
					echo "<p class='mezua'>EZ DAGO ARGAZKIRIK ZURE FEED-ean</p>";
					echo "<p class='mezua'>HASI ERABILTZAILEAK JARRAITZEN ARGAZKIAK IKUSTEKO</p>";
				}
				$conn->close();
			?>
		</div>
<?php include "footer.php" ?>