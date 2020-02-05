<body id="bgadm">
	<div class="navbar-fixed">
		<nav class="col-purple">
			<div class="container">
				<div class="nav-wrapper">
					<a href="<?= site_url(); ?>" class="">Sekolah Tinggi Teknologi Bandung</a>
					<a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons ">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="#beranda">Home</a></li>
						<li><a href="#tentang">About</a></li>
						<li><a href="#headlines">Photos</a></li>
						<li><a href="<?= site_url("loginmhs"); ?>">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>


	<!-- side nav -->
	<ul class="sidenav" id="mobile-nav">
		<li><a href="#beranda">Beranda</a></li>
		<li><a href="#tentang">Tentang</a></li>
		<li><a href="#headlines">photos</a></li>
		<li><a href="<?= site_url("loginmhs"); ?>">Login</a></li>
	</ul>


	<script type="text/javascript">
		$(".dropdown-button").dropdown({
			hover: false
		});
	</script>

<section id="beranda" class="scrollspy">
		<div class="parallax-container">
			<h3 class="black-text text-dec " ><b><center>Welcome To Our Website</center></b></h3>
			<div class="parallax"><img src="<?= base_url('asset/img/bg.jpg'); ?>" </div>

						
			</div>
		</div>
	</section>

	<!-- tentang -->
	<footer class="grey">
	<section class="tentang scrollspy" id="About">
		<div class="container">
			<div class="row">
				<h3 class="center white-text">About</h3>
				<div class="col m6 light">
					<h4 class="black-text">Sekolah Tinggi Teknologi Bandung</h4>
					<p class="black-text">"Merupakan sebuah Perguruan Tinggi di Kota Bandung yang menyiapkan para mahasiswanya untuk menjadi pemimpin masa depan di Bidang Desain, Teknologi, dan Bisnis. Berinteraksi dengan Kreativitas, Kolaborasi, dan Inovasi mari membangun Negeri dengan Bergabung Bersama Sekolah Tinggi Teknologi Bandung" </p>

				</div>
				<div class="col m6 light">
					<h4 class="black-text">Program Studi </h4>
					<p class="black-text">Sekolah Tinggi Teknologi Bandung mempunyai tiga Program Studi yaitu : Teknik Industri (S1), Teknik Informatika (S1), dan Desain Komunikasi Visual(S1) </p>

				
			</div>
		</div>
	</section>



	<footer class="grey">
	</footer>


</body>

</html>