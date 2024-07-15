<?php use App\Controller\Login\LoginUser;

session_start();

require("LoginUser.php") ?>
<?php
	if(isset($_POST['submit'])){
		$user = new LoginUser($_POST['username'], $_POST['password']);
	}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
    <h2>Login</h2>

    <label>Username</label>
    <input type="text" name="username">

    <label>Password</label>
    <input type="text" name="password">

    <button type="submit" name="submit">Login</button>

    <p class="error"><?php echo @$user->error ?></p>
    <p class="success"><?php echo @$user->success ?></p>

    <h3> (If you are not registered)</h3>
    <button onclick="window.location.href = 'register.php';" type="button">Sign Up</button>
</form>
</body>
</html>