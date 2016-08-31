<?php
// Include the function file.
require 'function.php';
include 'google-analytics.php';

$lastUpdateTerms = '26/07/14 12h51'; // Date of last update of Terms of service
?>

<?php require 'head.php'; // Head file - Contain primary code and head of page ?>
	<?php if($_GET['lang'] == 'fr') { ?>
		<div class="tips">
			Une suggestion, un avis, un problème ? <a href="https://twitter.com/intent/tweet?text=%40TeamCodeIt%20%23ImgShot%20">Envoyez-nous un Tweet</a> !
		</div>
		<div class="tips">
			Taille maximale de l'image : 4 Mo <br/>
			Formats autoris&eacute;s : jpg, jpeg, png, gif. <br /> <br />
			Si le transfert est validé, vous serez ensuite redirigé sur votre image.
		</div>
		<?php if($_GET['error'] != '') { ?>
			<div class="error"><?php echo CheckError($_GET['error'], 'fr'); ?></div>
		<?php } ?>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<p><label for="image">
				Choisissez une image : <br />
				<input type="file" name="image" />
				<input type="hidden" name="lang" value="fr" />
			</label></p>
			<button type="submit">Envoyer</button>
		</form>
		<p class="tools"><a href="terms.php?lang=fr">Conditions d'utilisation (dernière modification: <?php echo $lastUpdateTerms; ?>)</a></p>
		<p class="back"><a href="http://codeit.fr/">Projet d&eacute;velop&eacute; par Matiboux (CodeIt.fr)</a></p>
	<?php } else { ?>
		<div class="tips">
			Have a feedback or a problem ? <a href="https://twitter.com/intent/tweet?text=%40TeamCodeIt%20%23ImgShot%20">Send-us a Tweet</a> !
		</div>
		<div class="tips">
			Max Size of the image : 4 Mo <br/>
			Extensions allowed : jpg, jpeg, png, gif. <br /> <br />
			If the transfer is approved, you will be redirect on your picture.
		</div>
		<?php if($_GET['error'] != '') { ?>
			<div class="error"><?php echo CheckError($_GET['error'],'en'); ?></div>
		<?php } ?>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<p><label for="image">
				Choose an image : <br />
				<input type="file" name="image" />
				<input type="hidden" name="lang" value="en" />
			</label></p>
			<button type="submit">Upload</button>
		</form>
		<p class="tools"><a href="terms.php?lang=en">Terms of service (last update: <?php echo $lastUpdateTerms; ?>)</a></p>
		<p class="back"><a href="http://codeit.fr/">Projet d&eacute;velop&eacute; par Matiboux (CodeIt.fr)</a></p>
	<?php } ?>
	<script type="text/javascript"><!--
	google_ad_client = "ca-pub-9110563123617274";
	/* ImgShot */
	google_ad_slot = "7814367047";
	google_ad_width = 320;
	google_ad_height = 50;
	//-->
	</script>
	<script type="text/javascript"
	src="//pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
<?php require 'footer.php'; // Head file - Contain end of page ?>