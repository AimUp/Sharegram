<?php 
	$title = "Feed";
	include "estruktura.php";
?>
	<!--Javascripta kargatu-->
	<script type="text/javascript" src="./JAVASCRIPT/feedLoad.js"></script>

	<body onload="jarraitzen();">
		<!--<div class="feedIgo">
			<form method="post">
    			<input type="submit" name="argazkiIgo" id="argazkiIgo" value="Argazkia igo" />
			</form>
		</div>-->
		<div class="feedBotoiak">
			<button class="feedBotoia botoiaTop" onclick="topPost()">TOP</button>
			<button class="feedBotoia botoiaAzkenak" onclick="azkenak()">AZKENAK</button>
			<button class="feedBotoia botoiaJarraitzen" onclick="jarraitzen()">JARRAITZEN</button>
		</div>
		<div class="feed" id="feed">
			
		</div>
<?php include "footer.php" ?>