<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a7d7532d30.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
	<title>Image Processing</title>
</head>
<body>

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="filter.php">Filter</a></li>
  <li><a href="contact.html">Contact</a></li>
</ul>
<br>
<a id="logo" href="index.php"><h1>Image Processor <i class="fa-sharp fa-solid fa-photo-film"></i></h1></a>
<div class="flex-container">
<div>
	<br><br>
<form id='f1' method="post" enctype="multipart/form-data">
	<h2>Image upload:</h2>
	<input id="f3" type="file" name="image" required /><br>
	<h2>Mode selection:</h2>
	<select id='f2' name="mode">
		<option value="contrast">Old</option>
		<option value="bnw">Black and white</option>
		<option value="gamma">Gamma</option>
		<option value="resize">Resize</option>
		<option value="sunny">Sunny</option>
		<option value="cyan">Winter</option>
	</select>
	<input id='f4' type="submit" name="submit" value="Preview"/>
</form><br><br>
<a id='btn3' href="output_images/1.jpg" download>Download Image</a>
</div>

<div id='s1'>
		<h2>Original Image:</h2>
		<img src="original/1.jpg"  height="300px" width="300px" alt="Upload an image">
	</div>
	<div id='s2'>
		<h2>Modified Image:</h2>
		<img src="output_images/1.jpg"  height="300px" width="300px" alt="Upload an image">
	</div>

	
</div>
<br><hr>
<footer>&#169; Image Processor</footer>
</body>
</html>

<?php
if(isset($_POST['submit'])){
	$info=getimagesize($_FILES['image']['tmp_name']);
	if(isset($info['mime'])){
		if($info['mime']=="image/jpeg"){
			$im=imagecreatefromjpeg($_FILES['image']['tmp_name']);
		}elseif($info['mime']=="image/png"){
			$im=imagecreatefrompng($_FILES['image']['tmp_name']);
		}else{
			echo "Only select jpg or png image";
		}
		if(isset($im)){
			imagepng($im, "original/1.jpg");
			$output_image='output_images/1.jpg';
			if($_POST['mode']=="contrast"){
				if($im && imagefilter($im, IMG_FILTER_COLORIZE, 10, -10, 30))
				{
					echo 'Old filter added successfully.';
	
					imagepng($im, $output_image);
					imagedestroy($im);
				}
				else
				{
					echo 'Green shading failed.';
				}}
			else if($_POST['mode']=="bnw"){
				if($im && imagefilter($im, IMG_FILTER_GRAYSCALE))
				{
					echo 'Image converted to grayscale.';
					
					imagepng($im, 'output_images/1.jpg');
					imagedestroy($im);	
				}
				else
				{
					echo 'Conversion to grayscale failed.';
				}}	
				else if($_POST['mode']=="gamma"){
					imagegammacorrect($im, 1.0, 1.537);

					// Save and free image
					imagepng($im, 'output_images/1.jpg');
					echo "Gamma added to images successfully";
					imagedestroy($im);}

				else if($_POST['mode']=="resize"){
					imagejpeg($im,'output_images/1.jpg',50);
					echo "Processing done with 50% percentage";
				}
				if($_POST['mode']=="sunny"){
					if($im && imagefilter($im, IMG_FILTER_COLORIZE, 10, 10, -30))
					{
						echo 'Sunny effect applied successfully.';
		
						imagepng($im, $output_image);
						imagedestroy($im);
					}
					else
					{
						echo 'Green shading failed.';
					}}
					if($_POST['mode']=="cyan"){
						if($im && imagefilter($im, IMG_FILTER_COLORIZE, -10, 10, 30))
						{
							echo 'Winter mode applied successfully.';
			
							imagepng($im, $output_image);
							imagedestroy($im);
						}	}
						
				}}
        else{
		    echo "Only select jpg or png image";
	    }
}

?>
