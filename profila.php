<?php 
	include "sesioaKonprobatu.php";
	erabiltzaileAtala();//Sesio bat hasita dagoela konprobatuko du, bestela login egitera bidaliko du
	$title = "Profila";
	include "estruktura.php";//HTML orriaren estruktura nagusia beste fitxategi batetik inportatuko dugu
?>
	<!--Argazkiak igotzeko forma edukiko duen div-a. Hasieran izkutua egongo da eta botoiari ematean javascript bidez ikusgarri jarriko da-->
	<div class="feedIgo">
		<button class="plus" onclick="argazkiaDiva('argazkiaForm');">+</button>

		<form id="argazkiaForm" class="argazkiaForm" method="POST" onsubmit="return argazkiaCheck('deskripzioa','filer_input2');" action="argazkiaIgo.php" style="opacity: 0" enctype="multipart/form-data">
			<label class="goi">ARGAZKIA IGO</label><br>
			<textarea id="deskripzioa" name="deskripzioa" placeholder="Deskripzioa"></textarea>
			<div class="Neon Neon-theme-dragdropbox">
				<input onchange="irudiPreload(this, 'neon');" name="filer_input2" id="filer_input2" multiple="multiple" type="file">
		        <div id="neon" class="Neon-input-dragDrop">
		        	<div class="Neon-input-inner">
		        		<div class="Neon-input-icon">
		        			<i class="fa fa-file-image-o"></i>
		        		</div>
		        		<div class="Neon-input-text">
		        			<h3>Drag&amp;Drop files here</h3>
		        			<span style="display:inline-block; margin: 15px 0">or
		        			</span>
		        		</div>
		        		<a class="Neon-input-choose-btn blue">Browse Files</a>
		        	</div>
		        </div>
		    </div>
		    <input type="submit" value="Igo irudia"></input>
		</form>
	</div>

	<!--AJAX-en errorerenbat egotekotan div honetan inprimatu egingo da-->
	<div id="errorea"></div>

	<!--jarraitzen funtzioari deituz irudiak kargatuko dira nireIrudiak div-ean-->
	<script type="text/javascript">nireak();</script>
	<div id="nireIrudiak" class="nireIrudiak"></div>

<!--Footerraren HTML zatia jarriko du-->
<?php include "footer.php" ?>