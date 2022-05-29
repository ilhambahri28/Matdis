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

<link href="app.css" rel="stylesheet">
</head>
<body>
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

<p>Gunakan kalkulator di bawah ini untuk menghitung permutasi dan kombinasi.</p>
<div class="container-fluid shadow-lg p-3 mb-5 bg-primary rounded">
		
		<div class="container">
		<h1 class="text-center mt-4 mb-4">Kalkulator Permutasi dan Kombinasi</h1>
		<div class="card shadow">
			<div class="card-body">
				<div class="form-group">
				    <label for="pilihan">Permutasi / Kombinasi</label>
				    <select class="form-control" id="pilihan">
					<option value="permutasi">Permutasi</option>
				      <option value="kombinasi">Kombinasi</option>
				    </select>
				</div>
				<div class="form-group">
				    <label for="Pengulangan">Pengulangan</label>
				    <select class="form-control" id="pengulangan">
					<option value="tanpa">Tanpa Pengulangan</option>
				      <option value="dengan">Dengan Pengulangan</option>
				    </select>
				</div>
				<div class="form-group">
				    <label for="n">n</label>
				    <input type="text" class="form-control" id="n" placeholder="n">
				</div>
				<div class="form-group">
				    <label for="r">r</label>
				    <input type="text" class="form-control" id="r" placeholder="r">
				</div>
				<div class="form-group">
				    <label for="thasil"></label>
				    <p id="thasil"></p>
				</div>
			</div>
			<div class="card-footer">
				<button type="button" id="hitung" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</div>

<br><br><br><br><br><br>

<p class="author">By Ilham Bahri Albi</p>

</div>

</div>
</div>


<script src="counting.js" type="text/javascript">

</script>
<div class="footer">
<p>&copy; Kelompok 1 PTI A 2020 &middot; All rights reserved </p>
</div>
 </body>
</html>