<?php 
	$title = "Sharegram";
	include "estruktura.php" 
?>
	<body>
		<div class="feed">
			<?php
				for(i=1; /*i<=irudi kopurua karpetan*/; i++){
					$irudia=./i;
					//pisaria la anterior imagen o haria una tabla de imagenes en bertical??
					echo "<tr>"
					echo "<img src="$irudia"/>"
					echo "</tr>"
				}
			?>
		</div>
			<form method="post">
    			<input type="submit" name="igo" id="igo" value="Argazkia igo" />
			</form>
			<?php
				function argazkiaIgo(){
   					//argazkiak igotzeko lekua
   					echo "<form method="post"/>";
   					echo "<input type="submit" name="argazkiigo" id="argazkibotoia" value="Igo"/>";
   					echo "<form/>";
				}

				if(array_key_exists('igo',$_POST)){
   					argazkiaIgo();
				}
			?>
		</div>
	</body>
</html>