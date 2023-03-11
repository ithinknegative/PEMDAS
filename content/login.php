<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login form</title>
	<link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="box">
		<form autocomplete="off" method="post" action="loginsesi.php">
            <img src="" alt="">
			<h2 class="fw-bold">School Mart<i class="bi bi-cart"></i></h2>
			<div class="inputBox">
				<input type="text" required="required" name="username">
				<span>Userame</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required" name="password">
				<span>Password</span>
				<i></i>
			</div>
			<div class="links">
				<a href="#">Forgot Password ?</a>
				<a href="#">Signup</a>
			</div>
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>