<?php 
	include "sesioaKonprobatu.php";
	erabiltzaileAtala();
	$title = "Feed";
	include "estruktura.php";
?>
		<!--jarraitzen funtzioari deituz irudiak kargatuko dira-->
		<script type="text/javascript">jarraitzen();</script>

		<div class="feedBotoiak">
			<button class="feedBotoia botoiaTop" onclick="topPost()">TOP</button>
			<button class="feedBotoia botoiaAzkenak" onclick="azkenak()">AZKENAK</button>
			<button class="feedBotoia botoiaJarraitzen" onclick="jarraitzen()">JARRAITZEN</button>
		</div>
		<div class="feed" id="feed">
			
		</div>
<?php include "footer.php" ?>