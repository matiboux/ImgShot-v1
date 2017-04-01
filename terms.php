<?php
// Include the function file.
require 'function.php';
include 'google-analytics.php';
?>

<?php require 'head.php'; // Head file - Contain primary code and head of page ?>
	<?php if($_GET['lang'] == 'fr') { ?>
		<div class="terms">
			<p>
				ImgShot est un service d'h&eacute;bergement d'image simple et accessible &agrave; tous. Les service de ImgShot sont n&eacute;anmoins soumis &agrave; ces conditions d'utilisation.
			</p>
			<h3>I. Modification des conditions d'utilisations</h3>
			<p>
				ImgShot se r&eacute;serve le droit de modifier les conditions d'utilisations &agrave; tout moment. Lors d'une modification, le texte du lien vers ces conditions d'utilisations (sur la page d'accueil) changera et affichera la date de la derni&egrave;re modification afin de vous indiquer un &eacute;ventuel changement.
			</p>
			<h3>II. Modification du service</h3>
			<p>
				ImgShot se r&eacute;serve le droit de modifier, ou m&ecirc;me supprimer le service sans l'avis des utilisateur. Dans le cas d'un changement radical, une annonce sera pass&eacute;e sur la page d'accueil quelques jour avant.
			</p>
			<h3>III. Usage des images</h3>
			<p>
				Nous ne donnons ou vendons aucunes des images que nous enregistrons sur nos serveurs. Les images son stock&eacute;e avec des noms uniques g&eacute;n&eacute;r&eacute;s al&eacute;atoirement, elle sont accesible uniquement si vous avez le lien de l'image. Vous ne pouvez avoir le lien qu'apr&egrave;s avoir envoyer une image sur le site, une fois la verification termin&eacute;e. 
			</p>
			<h3>IV. Partage des images</h3>
			<p>
				Le partage des images est autoris&eacute; &agrave; des fins personnels tant que vous respectez les droits d'auteurs. Vous ne pouvez pas non plus utiliser notre service pour faire de la pub, ou vendre. <br />
				Si vous &ecirc;tes achteteur d'une image h&eacute;berg&eacute;e sur notre site, nous ne pouvons vous rembourser, mais vous pouvez nous contacter sur <a href="https://twitter.com/TeamCodeIt/">Twitter</a> en indiquant le lien de l'image pour que nous puissions la supprimer.
			</p>
		</div>
		<p class="tools"><a href="index.php?lang=fr">Page d'accueil</a></p>
		<p class="back"><a href="http://codeit.fr/">Projet d&eacute;velop&eacute; par Matiboux (CodeIt.fr)</a></p>
	<?php } else { ?>
		<div class="terms">
			<p>
				ImgShot is a simple and accessible image hosting service. The ImgShot service are subject to these Terms of Service.
			</p>
			<h3>I. Modifications to Terms of Service</h3>
			<p>
				ImgShot reserves the right to modify the Terms of Service at any time. When we update these Terms of Service, the text of the link (on the homepage) will change to show the date of the last update to tell you any change.
			</p>
			<h3>II. Modifications to service</h3>
			<p>
				ImgShot reserves the right to modify or delete the service without consulting the user. In the case of a radical change, an announcement message will be placed on the home page a few days before.
			</p>
			<h3>III. Image Use</h3>
			<p>
				We do not give or sell any images we have on our servers. The images are saved with an random unique name, so it's accesible only if you have the link. You can have the link after you send a picture on the site, once the verification is done.
			</p>
			<h3>IV. Image Sharing</h3>
			<p>
				Sharing images is permitted for personal use as you respect the copyright. You can't use our service to advertise or sell. <br />
				If you have buy an image hosted on our site, we can not reimburse you, but you can contact us on <a href="https://twitter.com/TeamCodeIt/">Twitter</a>, indicate the link of the image and we can delete that illegal image.
			</p>
		</div>
		<p class="tools"><a href="index.php?lang=fr">Home</a></p>
		<p class="back"><a href="http://codeit.fr/">Project developed by Matiboux (CodeIt.fr - French)</a></p>
	<?php } ?>
<?php require 'footer.php'; // Head file - Contain end of page ?>