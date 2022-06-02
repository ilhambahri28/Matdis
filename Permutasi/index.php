<!doctype html>
<html lang="id">
<head>
	<title>Kelompok 1 &middot; Permutasi dan Kombinasi
	</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="gAjh8iFck4lUnqUPrWS7jYEIoRdVcAPysv3gQ0GS">

	<meta name="description" content="Definisi permutasi dan kombinasi. Rumus untuk menghitung permutasi dan kombinasi. Kalkulator Permutasi dan Kombinasi" />
	<meta name="keywords" content="permutasi, kombinasi, faktorial, matematika, pelajaran, kalkulator permutasi, kalkulator kombinasi" />
	<meta name="author" content="Ilham Bahri Albi" />
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link href="permutasikombinasi.css" rel="stylesheet">
</head>
<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href="/" title="Kelompok 1"><img src="logo.png" class="img-fluid" alt="Kelompok 1"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Materi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="permutasi_kombinasi.php">Kalkulator</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About Team</a>
				</li>
			</ul>

		</div>
	</nav>
	<!-- akhir navbar -->

	<!-- isi -->
		<div class="container">
			<div class="row mb-md mt-xlg">
				<div class="col-md-12">
					<div class="row">
						<div class="feature-box">
							<h1>Pengertian Faktorial</h1>
						</div>
						<br>
						<div class="feature-box">
							<p style="color: rgb(34, 34, 34); font-family: Arial,Verdana,sans-serif; font-size: 20px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; text-align: justify;">
    Faktorial adalah hasil kali bilangan asli berurutan. Untuk setiap n bilangan asli, maka:<br />
	<br />
	n!=n×(n-1)×(n-2)×⋯×2×1<br />
	<br />
	<strong>Catatan:</strong><br />
	1!=1 dan 0!=1<br />
	<br />
	n!=n×(n-1)!<br />
	<br />
	n!=n×(n-1)×(n-2)!<br />
	<br />
    <strong>Ilustrasi:</strong><br />
    6!=6.5.4.3.2.1<br />
	<br />
    =6.5.4.3.2!<br />
	<br />
    =6.5.4.3!<br />
	<br />
    =6.5.4!<br />
	<br />
    =6.5!<br />
	<br />
    <div class="feature-box">
							<h1>Pengertian Permutasi</h1>
						</div>
                        <br>
						<div class="feature-box"> 
							<p style="color: rgb(34, 34, 34); font-family: Arial,Verdana,sans-serif; font-size: 20px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; text-align: justify;">
    Permutasi adalah susunan berurutan dari sebagian atau seluruh unsur suatu himpunan. Misalkan himpunan A beranggotakan p, q, dan r maka susunan satu huruf atau permutasi 1 unsur dari 3 unsur yang tersedia adalah p, q, dan r (ada 3 susunan), susunan dua huruf atau permutasi 2 unsur dari 3 unsur yang tersedia adalah pq, qp, pr, rp, qr, dan rq (ada 6 susunan), susunan tiga huruf atau permutasi 3 unsur dari 3 unsur yang tersedia adalah pqr, prq, qpr, qrp, rpq, dan rqp (ada 6 susunan). Permutasi r unsur yang diambil dari n unsur yang tersedia dimana setiap unsur adalah berbeda atau berlainan dan r≤n, harus memperhatikan urutan dan posisi. Perhatikan bahwa ab tidak sama dengan ba, demikian juga abc tidak sama dengan acb dan seterusnya. Beberapa notasi dari permutasi adalah nPr, nPr, P_r^n, P_((n,r)), P_(n,r), P(n,r), Admin akan menggunakan notasi P(n,r), karena lebih mudah untuk mengetiknya.<br />
	<br />
	<strong>Rumus Permutasi</strong><br />
    <img src="Permutasi.png" width="240" height="150" /></a><figcaption id="caption-attachment-7047" class="wp-caption-text">Gambar 1.
	<p style="color: rgb(34, 34, 34); font-family: Arial,Verdana,sans-serif; font-size: 20px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; text-align: justify;">
    dimana n! (n faktorial).<br />
	<br />
	=n×(n-1)×(n-2)×...×1 and 0!=10!=1<br />
	<br />
    <strong>Rumus Permutasi Berulang</strong><br />
	Jika tersedia n unsur yang berbeda, maka banyaknya permutasi berulang r unsur yang diambil dari n unsur yang tersedia dirumuskan sebagai berikut:<br />
	<br />
	P_berulang=n^r,dengan r≤n<br />
	<br />
    <div class="feature-box">
							<h1>Pengertian Kombinasi</h1>
						</div>
                        <br>
						<div class="feature-box">
							<p style="color: rgb(34, 34, 34); font-family: Arial,Verdana,sans-serif; font-size: 20px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; text-align: justify;">
    Kombinasi adalah pengelompokan sebagian atau seluruh unsur dari suatu himpunan tanpa memperhatikan urutan dan posisi dari anggota kelompoknya. Misalkan anggota suatu himpunan A adalah p, q, dan r, maka kombinasi 1 unsur dari 3 unsur yang tersedia adalah p, q, dan r (ada tiga susunan). Kombinasi 2 unsur dari 3 unsur yang tersedia adalah pq, pr, dan qr (ada tiga susunan). Perhatikan bahwa pq = qp, pr = rp, qr = rq. Kombinasi 3 unsur dari 3 unsur yang tersedia adalah abc (satu susunan). Perhatikan bahwa pqr = prq = qpr = qrp = rpq = rqp. Dengan demikian jelas terlihat perbedaan antara permutasi dan kombinasi. Beberapa notasi dari kombinasi adalah nCr, nCr, C_r^n, C_((n,r)), C_(n,r), (n¦r) C(n,r). Admin akan menggunakan notasi C(n,r), karena lebih mudah untuk mengetiknya.<br />
	<br />
	<strong>Rumus Kombinasi</strong><br />
	Banyaknya kombinasi rr unsur dari nn unsur yang berbeda dirumuskan sebagai berikut:<br />
    <img src="kombinasi.png" width="240" height="150" /></a><figcaption id="caption-attachment-7047" class="wp-caption-text">Gambar 2.
    <p style="color: rgb(34, 34, 34); font-family: Arial,Verdana,sans-serif; font-size: 20px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; text-align: justify;">
	<br />
	Note:<br />
	<br />
	∙ jika r=n→C(n,n)=1<br />
	<br />
    ∙ jika r=0→C(n,0)=1<br />
	<br />
    ∙ C(0,0)=1<br />
	<br />
	                    </div>
						<br>
						<div class="feature-box">
													</div>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
	<!-- akhir isi -->

<p class="author">By udin dan Vina</p>


	<!-- footer -->
	<div class="footer">
		<center><p>&copy; Kelompok 1 PTI A 2020 &middot; All rights reserved </p></center>
	</div>
	<!-- akhir-footer -->

	
</body>
</html>
