<html>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" href="style.css">
		<?php include 'dbconnect.php';?>
	</head>

	<body>

	<FORM TARGET="reg.php" METHOD="POST">

		<div class ="reg">
			<p>
			Введите логин:
  			<p>
  			<input type="text" size="15"class="textlogin" placeholder="Логин" name="reglogin">
  			<p>
  			<p>
			Введите пароль:
  			<p>
  			<input type="password" size="15"class="textlogin" name="pass1"placeholder="Пароль">
  			<p>
			Подтвердите пароль:
			<p>
  			<input type="password" size="15"class="textlogin" name="pass2"placeholder="Подтвердите пароль">
			<p>
  			<input type="submit" class="btnlogin" value="Зарегистрироваться">

  			<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST'){
					
            			$reglogin = $_POST['reglogin'];
            			$reglogincount = strlen($reglogin);
            			if($reglogincount >20){
						echo "<p style=color:red;>Недопустимое количество символов (более 20) !";	
            			}
            			else if($reglogincount !=0){

						      //include 'checkuser.php';

            			}
            			else{
            			echo "<p style=color:red;>Логин пуст!";	
            			}
            			if(empty($_POST['pass1']) || empty($_POST['pass2'])){
            				echo "<p style=color:red;>Пароль пуст !";
            			}
            			else if($_POST['pass1'] != $_POST['pass2']){
            			echo "<p style=color:red;>Пароли не совпадают !";
            			}
            			else {
            			echo "<p style=color:green;>Вы успешно зарегистрировались !";

                  include 'adduser.php';

            			echo '<script>setTimeout(function(){window.location.href = "login.php"}, 1 * 1000);</script>';
            			}

    			}

			?>

		</div> 
			<p>
	</FORM>
		<div class="footer">
   			(с) Kenchadze, Nekrasov IU4-81, 2021
  		</div>

	</body>

</html>
