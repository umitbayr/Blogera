<?php 
include("path.php");
include(ROOT_PATH . "/app/database/db.php");
?>

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
	<title>Blog</title>
</head>


<body>
		<!-- header kısmını sadelik için php ile başka dosyadan ekledim. -->
	<?php include(ROOT_PATH ."/app/includes/header.php");?>  
	<?php include(ROOT_PATH ."/app/includes/messages.php");?> 
	<!-- Page Wrapper -->
	<div class="page-wrapper">

		<!-- Post Slider -->
		<div class="post-slider">
			<h1 class="slider-title">Trend Haberler</h1>
			<i class="fas fa-chevron-left prev"></i>
			<i class="fas fa-chevron-right next"></i>

			<div class="post-wrapper">
				<div class="post clearfix">
					<img src="assets/images/basket.webp" alt="" class="slider-image">
					<div class="post-info">
						<h4><a href="single.php">Playstation Plus'a Mart'ın kalanında eklenecek oyunlar açıklandı. </a></h4>
						<p class="fa fa-user"> </p> James Cooper
						&nbsp;
						<p class="far fa-calendar"> </p> 14.03.2024
					</div>

				</div>
				<div class="post clearfix">
					<img src="assets/images/basket.webp" alt="" class="slider-image">
					<div class="post-info">
						<h4><a href="single.php">Playstation Plus'a Mart'ın kalanında eklenecek oyunlar açıklandı. </a></h4>
						<p class="fa fa-user"> </p> James Cooper
						&nbsp;
						<p class="far fa-calendar"> </p> 14.03.2024
					</div>
					
				</div>
				<div class="post clearfix">
					<img src="assets/images/basket.webp" alt="" class="slider-image">
					<div class="post-info">
						<h4><a href="single.php">Playstation Plus'a Mart'ın kalanında eklenecek oyunlar açıklandı. </a></h4>
						<p class="fa fa-user"> </p> James Cooper
						&nbsp;
						<p class="far fa-calendar"> </p> 14.03.2024
					</div>
					
				</div>
				<div class="post clearfix">
					<img src="assets/images/basket.webp" alt="" class="slider-image">
					<div class="post-info">
						<h4><a href="single.php">Playstation Plus'a Mart'ın kalanında eklenecek oyunlar açıklandı. </a></h4>
						<p class="fa fa-user"> </p> James Cooper
						&nbsp;
						<p class="far fa-calendar"> </p> 14.03.2024
					</div>
					
				</div>
				
			</div>
		</div>
		<!-- //Post Slider -->

		<!-- Content -->
		<div class="content clearfix">

			<!-- Main Content -->
			<div class="main-content">
				<h1 class="recent-post-title">Gündemdeki Gelişmeler</h1>

				<div class="post clearfix">
					<img src="assets/images/elon.jpeg" alt="" class="post-image">
					<div class="post-preview">
						<h2><a href="single.php">X, Dijital Nefret Karşıtlarına Açtığı Davayı Kaybetti</a></h2>
						<p class="fa fa-user"> </p> James Cooper
						&nbsp;
						<p class="far fa-calendar"> </p> 27.03.2024
						<p class="preview-text">
							Elon Musk'ın sosyal medya platformu X, dijital ortamlarda nefretle mücadele eden bir organizasyona açtığı davayı kaybetti.
						</p>
						<a href="single.php" class="btn read-more">Daha fazlasını oku</a>
					</div>
				</div>

				<div class="post clearfix">
					<img src="assets/images/elon.jpeg" alt="" class="post-image">
					<div class="post-preview">
						<h2><a href="single.php">X, Dijital Nefret Karşıtlarına Açtığı Davayı Kaybetti</a></h2>
						<p class="fa fa-user"> </p> James Cooper
						&nbsp;
						<p class="far fa-calendar"> </p> 27.03.2024
						<p class="preview-text">
							Elon Musk'ın sosyal medya platformu X, dijital ortamlarda nefretle mücadele eden bir organizasyona açtığı davayı kaybetti.
						</p>
						<a href="single.php" class="btn read-more">Daha fazlasını oku</a>
					</div>
				</div>

				<div class="post clearfix">
					<img src="assets/images/elon.jpeg" alt="" class="post-image">
					<div class="post-preview">
						<h2><a href="single.php">X, Dijital Nefret Karşıtlarına Açtığı Davayı Kaybetti</a></h2>
						<p class="fa fa-user"> </p> James Cooper
						&nbsp;
						<p class="far fa-calendar"> </p> 27.03.2024
						<p class="preview-text">
							Elon Musk'ın sosyal medya platformu X, dijital ortamlarda nefretle mücadele eden bir organizasyona açtığı davayı kaybetti.
						</p>
						<a href="single.php" class="btn read-more">Daha fazlasını oku</a>
					</div>
				</div>

				<div class="post clearfix">
					<img src="assets/images/elon.jpeg" alt="" class="post-image">
					<div class="post-preview">
						<h2><a href="single.php">X, Dijital Nefret Karşıtlarına Açtığı Davayı Kaybetti</a></h2>
						<p class="fa fa-user"> </p> James Cooper
						&nbsp;
						<p class="far fa-calendar"> </p> 27.03.2024
						<p class="preview-text">
							Elon Musk'ın sosyal medya platformu X, dijital ortamlarda nefretle mücadele eden bir organizasyona açtığı davayı kaybetti.
						</p>
						<a href="single.php" class="btn read-more">Daha fazlasını oku</a>
					</div>
				</div>

			</div>
			<!-- //Main Content -->

			<div class="sidebar">

				<div class="section search">
					<h2 class="section-title">İçerik Arama</h2>
					<form action="index.php" method="post">
						<input type="text" name="search-term" class="text-input" placeholder="Arama Yapınız...">
					</form>
				</div>
				
				<div class="section categories">
					<h2 class="section-title">Kategoriler</h2>
					<ul>
						<li><a href="#">Spor</a></li>
						<li><a href="#">Teknoloji</a></li>
						<li><a href="#">E-Spor</a></li>
						<li><a href="#">Ekonomi</a></li>
						<li><a href="#">Sanat</a></li>
						<li><a href="#">Siyaset</a></li>
						<li><a href="#">E-Spor</a></li>
						<li><a href="#">Ekonomi</a></li>
						<li><a href="#">Sanat</a></li>
						<li><a href="#">Siyaset</a></li>
					</ul>
				</div>
			</div>

		</div>
		<!-- //Content -->
	</div>
	<!-- //Page Wrapper -->

	<?php include(ROOT_PATH ."/app/includes/footer.php"); ?>


	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Slick Carousel -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


	<!-- Custom Script -->
	<script src="assets/js/scripts.js"></script>

</body>

</html>




