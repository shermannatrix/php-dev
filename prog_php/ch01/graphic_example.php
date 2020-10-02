<?php
	if (isset($_GET['message'])) {
		// load font and image, calculate width of text
		// $font = dirname(__FILE__) . '/fonts/blazed.ttf';
		try {
			$font = dirname(__FILE__) . '/fonts/Dalgona.ttf';
			$size = 12;
			$image = imagecreatefrompng("button.png");
			$tsize = imagettfbbox ($size, 0, $font, $_GET['message']);
			
			// center
			$dx = abs($tsize[2] - $tsize[0]);
			$dy = abs($tsize[5] - $tsize[3]);
			$x = (imagesx($image) - $dx) / 2;
			$y = (imagesy($image) - $dy) / 2 + $dy;
			
			// draw text
			$black = imagecolorallocate($image, 0, 0, 0);
			imagettftext($image, $size, 0, $x, $y, $black, $font, $_GET['message']);
			
			// return image
			header("Content-type: image/png");
			imagepng($image);
			
			exit;
		} catch (Exception $e) {
			print "An error has occurred. " . $e -> getMessage ();
		}
		
	}
?>

<html>
	<head>
		<title>Button Form</title>
	</head>

	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>"
			method="GET">
			Enter message to appear on button:
			<input type="text" name="message"><br />
			<input type="submit" value="Create Button" />
		</form>
	</body>
</html>