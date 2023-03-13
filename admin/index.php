<?php
require "../server/config/connect.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Pocsquare</title>
    <link rel="stylesheet" href="../assets/styles/output.css">
    <link rel="stylesheet" href="../assets/styles/form.css">
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
</head>
<body class="relative">
	<div class="absolute top-0 right-0 m-10">
		<select id="role" onchange="changeRole()" class="px-5 py-2 rounded outline-none active:outline active:outline-orange-700">
			<option value="tech">Técnico</option>
			<option value="admin">Administrador</option>
			<option value="sup">Supervisor</option>
		</select>
	</div>
	<div class="container tech-container">
		<div class="bg-[#6e48aa] text-white font-semibold flex justify-center my-4">
			<?php
				if(isset($_SESSION["tech-auth"]) ) {
					echo $_SESSION["tech-auth"];
					unset($_SESSION["tech-auth"]);
				} 
			?>
		</div>
		<div class="pic">
			<i class="fas fa-user"></i>
		</div>
		<h2 class="title font-semibold">Login | Técnico</h2>
		<form class="form" method="POST" action="../server/src/login/tech-login.php">
			<label for="username">Nome de Usuário</label>
			<input type="text" id="username" name="username" class="input" autocomplete="off" placeholder="Insira o nome de usuário" />
			<label for="password">Palavra-passe</label>
			<input type="password" id="password" name="password" class="input" autocomplete="off" placeholder="Insira a palavra-passe" />
			<button type="submit" class="button">Entrar</button>
		</form>
	</div>
    <div class="container admin-container">
		<div class="bg-[#6e48aa] text-white font-semibold flex justify-center my-4">
			<?php
				if(isset($_SESSION["auth"]) ) {
					echo $_SESSION["auth"];
					unset($_SESSION["auth"]);
				} 
			?>
		</div>
		<div class="pic">
			<i class="fas fa-user"></i>
		</div>
		<h2 class="title font-semibold">Login | Administrador</h2>
		<form class="form" method="POST" action="../server/src/login/admin-login.php">
			<label for="username">Nome de Usuário</label>
			<input type="text" id="username" name="username" class="input" autocomplete="off" placeholder="Insira o nome de usuário" />
			<label for="password">Palavra-passe</label>
			<input type="password" id="password" name="password" class="input" autocomplete="off" placeholder="Insira a palavra-passe" />
			<button type="submit" class="button">Entrar</button>
		</form>
	</div>
	<div class="container sup-container">
		<div class="bg-[#6e48aa] text-white font-semibold flex justify-center my-4">
			<?php
				if(isset($_SESSION["auth"]) ) {
					echo $_SESSION["auth"];
					unset($_SESSION["auth"]);
				} 
			?>
		</div>
		<div class="pic">
			<i class="fas fa-user"></i>
		</div>
		<h2 class="title font-semibold">Login | Supervisor</h2>
		<form class="form" method="POST" action="../server/src/login/sup-login.php">
			<label for="username">Nome de Usuário</label>
			<input type="text" id="username" name="username" class="input" autocomplete="off" placeholder="Insira o nome de usuário" />
			<label for="password">Palavra-passe</label>
			<input type="password" id="password" name="password" class="input" autocomplete="off" placeholder="Insira a palavra-passe" />
			<button type="submit" class="button">Entrar</button>
		</form>
	</div>

	<script src="../assets/scripts/jquery-3.6.0.js"></script>
	<script src="../assets/scripts/admin/login.js"></script>
</body>
</html>