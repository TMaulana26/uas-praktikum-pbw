<?php include_once('../_header.php'); ?>
<style>
	body {
		background-image: url('https://atkcqhvpuo.cloudimg.io/v7/vmedis.com/wp-content/uploads/2021/09/counter-store-table-pharmacy-background-shelf-blurred-blur-focus-drug-medical-shop-drugstore-medication-blank-medicine-pharmaceutics.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
</style>

<div class="bg">
	<div class="row">
		<div class="col-lg-12">
			<h1>Homepage</h1>
			<p>Selamat Datang <strong><?= $_SESSION['user']; ?></strong></p>
			<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
		</div>
	</div>
</div>


<?php include_once('../_footer.php'); ?>