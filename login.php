<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOG IN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="menu">
            <ul>
                <li>Home</li>
                <li>About us</li>
                <li>Contact</li>
            </ul>
        </div>
    </nav>
    <div class="container">
      <div id="titulli">  <h2>Login Form</h2> </div> <br>
      <form method="POST" action="validation.php">
        <input type="text" placeholder="Enter Email" class="input" name="email"> <br> <br>
        <input type="password" placeholder="Enter Password" class="input" name="password">
        <br> <br>
        <input type="submit" class="btn" name="submit">
      </form>
    </div>
</body>
</html>