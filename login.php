<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
<form action="action_page.php" method="post">
  <h1 id='lo'>Log In</h1>

  <div class="container">
    <label for="name"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>
    <br><br>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br><br>
    <button type="submit" name='signup'>Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a class='cancelbtn' href="index.html">Cancel</a>
  </div>
</form>
<br><hr>
<footer>&#169; Image Processor</footer>
</body>
</html>