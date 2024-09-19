<header>
		<a href="<?php echo BASE_URL .'/index.php' ?>" class="logo">
			<h1 class="logo-text"><span>Blog</span>era</h1>
		</a>
		<i class="fa fa-bars menu-toggle"></i>
		<ul class="nav">
			<li><a href="<?php echo BASE_URL .'/index.php' ?>">Anasayfa</a></li>
			
			<?php if (isset($_SESSION['id'])): ?>
				<li>
					<!-- 
					<a>
						KATEGORİLER
						<i class="fa fa-chevron-down" style="font-size: .8em;"></i>
					</a>
					<ul>
						<li><a href="#">Spor</a></li>
						<li><a href="#">Teknoloji</a></li>
						<li><a href="#">E-Spor</a></li>
						<li><a href="#">Ekonomi</a></li>
						<li><a href="#">Sanat</a></li>
						<li><a href="#">Siyaset</a></li>
					</ul>  -->
					<a href="#">
						<i class ="fa fa-user"></i>
						<?php echo $_SESSION['username']; ?>
						<i class="fa fa-chevron-down" style="font-size: .8em;"></i>
					</a>
					<ul>
						<?php if($_SESSION['admin']): ?>
							<li><a href="<?php echo BASE_URL . '/admin/panel.php' ?>">Panel</a></li>
						<?php endif; ?>
						<li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Çıkış</a></li>
					</ul>
				</li>
			<?php else: ?>	
				<li><a href="<?php echo BASE_URL .'/register.php' ?>">KAYIT OL</a></li>
				<li><a href="<?php echo BASE_URL .'/login.php' ?>">GİRİŞ YAP</a></li>
			<?php endif; ?>	
		</ul> 
</header>