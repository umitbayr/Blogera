<?php include("path.php") ?>

<?php	include(ROOT_PATH . "/app/controllers/users.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Font Awesome-->
	<script src="https://kit.fontawesome.com/d9eb7a7a5e.js" crossorigin="anonymous"></script>

	<!-- Google Fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&family=Whisper&display=swap" rel="stylesheet">

	<!-- Custom Styling -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Kayıt Olma Ekranı</title>
</head>


<body>
	<?php include(ROOT_PATH . "/app/includes/header.php");?>  

	<div class="auth-content">
		
		<form action="register.php" method="post">
			<h2 class="form-title">Kayit Ol</h2>

			<?php include(ROOT_PATH . "/app/helpers/formErrors.php");?> 

			<div>
				<label>Kullanıcı Adı</label>
				<input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
			</div>
			<div>
				<label>Email</label>
				<input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
			</div>
			<div>
				<label>Şifre</label>
				<input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
			</div>
			<div>
				<label>Şifreyi tekrar girin</label>
				<input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
			</div>
			<div>
				<button type="submit" name="register-btn" class="btn btn-big btn-rgstr">Kayıt Ol</button>
			</div>
			<p>Ya da <a href="<?php echo BASE_URL .'/login.php' ?>">Giriş Yap</a></p>
		</form>


	</div>

	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


	<!-- Custom Script -->
	<script src="assets/js/scripts.js"></script>

</body>

</html>