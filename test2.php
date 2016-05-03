<?php/*
  session_start();
  require_once('config/config.php');
  ini_set('display_errors', 1);
  error_reporting(~0);
  error_reporting( error_reporting() & ~E_NOTICE );
	img\testif(isset($_SESSION['id_member'])) session_destroy();*/
?>
<html>
<head>
<title>ThaiCreate.Com PHP Upload Resize</title>
</head>
<body>
<?php
	if(trim($_FILES["fileUpload"]["tmp_name"]) != "")
	{
		$images = $_FILES["fileUpload"]["tmp_name"];
		$new_images = "Thumbnails_".$_FILES["fileUpload"]["name"];
		copy($_FILES["fileUpload"]["tmp_name"],"MyResize/".$_FILES["fileUpload"]["name"]);
		$width=100; //*** Fix Width & Heigh (Autu caculate) ***//
		$size=GetimageSize($images);
		$height=round($width*$size[1]/$size[0]);
		$images_orig = ImageCreateFromJPEG($images);
		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);
		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		ImageJPEG($images_fin,"MyResize/".$new_images);
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);
	}
?>
<b>Original Size</b><br>
<img src="<?php echo "MyResize/".$_FILES["fileUpload"]["name"];?>">
<hr>
<b>New Resize</b><br>
<img src="<?php echo "MyResize/".$new_images;?>">
</body>
</html>