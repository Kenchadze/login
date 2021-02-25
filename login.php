<html>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" href="style.css">
		<?php include 'dbconnect.php';?>
	</head>

	<body>
		<div class ="login">
			<p>
			Логин:
  			<p>
  			<input type="text" size="15"class="textlogin"placeholder="Логин">
  			<p>
  			Пароль:
  			<p>
  			<input type="password" size="15" class="textlogin"placeholder="Пароль">
  			<p>
  			<button class="btnlogin">Войти</button>
  			<p>
  			<form action="reg.php" target="_self">
  				<button class="btnlogin" id="Reg">Регистрация</button>
  			</form>
		</div> 
			<p>
		<div class="footer">
   			(с) Kenchadze, Nekrasov IU4-81, 2021
  		</div>

	</body>

</html>