<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a7d7532d30.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
	<title>Home Page</title>
</head>
<body>
	<ul>
		<li><a href="index.php">Home</a></li>
        <li><a href="filter.php">Filter</a></li>
		<li><a href="contact.html">Contact</a></li>
	  </ul>
	  <br>
      <div class='df'>
	  <div><a id="logo" href="index.php"><h1>Image Processor <i class="fa-sharp fa-solid fa-photo-film"></i></h1></a></div>
      <div>
        <h2>Welcome <i id="bc">
        <?php
            $conn = new mysqli("localhost","root","","ip_db");
            if($conn)
            {
                $sql="SELECT name FROM ip_tb ORDER BY id DESC LIMIT 1;";
                $result=($conn->query($sql));
                $data=mysqli_fetch_assoc($result);
                echo $data['name'];}
            ?></i>
    </h2>
    </div>
      </div>

	<h2 class="secondline">Image Processor is online plateform for applying filters for images like jpg or png</h2>
	
	<div class="flex-co">
		<div>
			<h3>This website provides 6 basics filter:</h3>
			<ol class="ss">
				<li>Old</li><br>
				<li>Black and White</li><br>
				<li>Gamma</li><br>
				<li>Sunny</li><br>
				<li>Winter</li><br>
				<li>Resize</li><br>
			</ol>
            <h3>To apply filters on your images go to <a id='logo1' href="filter.php">Filter</a> section</h3>
		</div>
		<div id="backg">
			<img src="sample4.jpg" alt="sample" width="450px" height="300px">
		</div>
	</div>
    <a id='logo1' href="index.html">Log Out<i class="fa-solid fa-arrow-right-from-bracket"></i></a>
    <br><hr>
<footer>&#169; Image Processor</footer>
</body>
</html>