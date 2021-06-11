<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<link rel="stylesheet" href="stylelogin.css">
</head>
<body>
	<div class="container">
		<h1 class="label">Login</h1>
		<form method="POST" class="login_form" action="aksi_login.php" method="post" name="form" onsubmit="return validated()">
			<div class="font">Email or Phone</div>
			<input name="username" autocomplete="off" type="text">
			<div id="email_error">Email/Phone must be longer than 7 characters</div>
			<div class="font font2">Password</div>
			<input type="password" name="password">
			<div id="pass_error">Password must be longer than 4 characters</div>
			<button type="submit">LOGIN</button>
		</form>
	</div>	
	<script src="java.js"></script>
</body>
</html>