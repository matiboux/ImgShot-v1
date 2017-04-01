<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width,initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="style.css" media="all">
		<title>ImgShot</title>
	</head>
	<body>
		<div id="container">
			<h1><a href="index.php<?php if($_GET['lang'] != '') { ?>?lang=<?php echo $_GET['lang']; } ?>">Img Shot</a></h1>
			<?php if($_GET['lang'] == 'fr') { ?>
				<h2>H&eacute;bergement d'images</h2>
			<?php } else { ?>
				<h2>Image Hosting</h2>
			<?php } ?>
			<h2>
				<?php if($_GET['lang'] != 'en' AND $_GET['lang'] != '') { ?><a href="?lang=en">EN</a><?php } ?>
				<?php if($_GET['lang'] != 'fr') { ?><a href="?lang=fr">FR</a><?php } ?>
			</h2>