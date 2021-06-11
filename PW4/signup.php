<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SIGNUP</title>
	<link rel="stylesheet" href="stylesignup.css">
</head>
<body>
	<div class="container">
		<h1 class="label">SIGNUP</h1>
		<form class="login_form" action="login.php" method="post" name="form" onsubmit="return validated()">
			<div class="font">Username</div>
			<input autocomplete="off" type="text" name="nama">
			<div class="font">Email or Phone</div>
			<input autocomplete="off" type="text" name="email">

			<div id="email_error">Email/Phone must be longer than 7 characters</div>
			<div class="font font2">Password</div>
			<input type="password" name="password">
			<div id="pass_error">Password must be longer than 4 characters</div>
			<div class="font font2">Re-Enter Password</div>
			<input type="password" name="password">
			<div id="pass_error">Password did not match!</div>
			<button type="submit">LOGIN</button>
		</form>
	</div>	
	<script src="java.js"></script>
</body>
</html>