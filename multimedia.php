<?php include "session.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
	
	<?php include "header.php"; ?>
</head>
<body class="body-beranda">
	<div id="logo">
		<a href="/">
			<a href="">
			<span>                   </span>
		</a>
	</div>
	<?php include "menu.php"; ?>
	<div id="container">
		
		<div class="main">
			<h1 class="content">Multimedia</h1>
		</div>
		
		<center>
				<h2>Gambar</h2>
				<img src="692631.png" width="300">

				<h2>Audio</h2>
				<audio src="[FVOst.net] Minami - Kawaki wo Ameku.mp3" controls></audio>

				<h2>Video</h2>
				<video controls height="500">
					<source src="VID_20190413_091135.mp4" type="video/mp4">
				</video>
			</center>
	</div>
</body>
</html>