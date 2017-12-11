<?php 
	include "sesioaKonprobatu.php";
	erabiltzaileAtala();//Sesio bat hasita dagoela konprobatuko du, bestela login egitera bidaliko du
	$title = "Feed";
	include "estruktura.php";//HTML orriaren estruktura nagusia beste fitxategi batetik inportatuko dugu
?>
		<!--topPost funtzioari deituz irudiak kargatuko dira-->
		<script type="text/javascript">topPost();</script>

		<!--Feed-a ikusteko 3 aukerak autatzeko botoiak izango ditugu-->
		<!--Botoi hauek javascript bat exekutatzen dute non AJAX bat exekutatuko den aukeratutako irudiak feed izeneko div-ean ikusiko diren-->
		<div class="feedBotoiak">
			<button class="feedBotoia botoiaTop" onclick="topPost()">TOP</button>
			<button class="feedBotoia botoiaAzkenak" onclick="azkenak()">AZKENAK</button>
			<button class="feedBotoia botoiaJarraitzen" onclick="jarraitzen()">JARRAITZEN</button>
		</div>

		<div class="feed" id="feed"></div>

<!--Footerraren HTML zatia jarriko du-->
<?php include "footer.php" ?>