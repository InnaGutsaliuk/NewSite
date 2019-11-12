<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Создание сайтов</title>
	<meta name="apple-mobile-web-app-title" content="Заголовок без SEO">
	<meta name="description" content="php программирование html5 css3 верстка">
	<meta name="keywords" content="Ключевые слова для некоторых поисковиков">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="index, follow">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="/vendor/public/jquery/dist/jquery.min.js"></script>

	<link rel="stylesheet" href="/bower/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/bower/bootstrap/dist/css/bootstrap-theme.min.css">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="/bower/bootstrap/dist/js/bootstrap.min.js"></script>

	<link rel="icon" href="/img/dextop/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/img/dextop/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="/img/dextop/apple-icon.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/img/dextop/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/img/dextop/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/img/dextop/apple-icon-152x152.png">
	<link href="/normalize.css" rel="stylesheet">
	<link href="/style.min.css" rel="stylesheet">
	<script src="/scripts.js" defer></script>
</head>

<body>
<header>
	<div class="content">
		<div class="logo">
			<img src="img/dextop/logo.png" alt="logo">
			<p>HAVE AN ACCOUNT? <a href="">SIGN IN</a> OR <a href="">SIGN UP</a></p>
		</div>
		<nav>
			<ul class="nav">
				<li class="activ"><a href="">home</a></li>
				<div class="line"></div>
				<li class="about"><a href="">about <span class="font10"> &or;</span> </a>
					<div class="child-about">
						<div><a href="">history</a></div>
						<div class="news"><a href="" id="news">news &gt;</a></div>
						<div class="child-news" id="child-news">
							<div><a href="" class="child-news-a">latest</a></div>
							<div><a href="" class="child-news-a">archive</a></div>
						</div>
						<div><a href="">testimorial</a></div>
					</div>
				</li>
				<li><a href="">products</a></li>
				<li><a href="">services</a></li>
				<li><a href="">blog</a></li>
				<li><a href="">Письмо</a></li>
			</ul>
			<select name="select" class="nav-select">
				<option value="" disabled>Select a page:</option>
				<option value="">Home</option>
				<option value="">About</option>
				<option value="">History</option>
				<option value=""> – news ></option>
				<option value=""> –  – latest</option>
				<option value=""> –  – archive</option>
				<option value=""> – testimorial</option>
				<option value="">Products</option>
				<option value="">Services</option>
				<option value="">Blog</option>
				<option value="">Письмо</option>
			</select>
		</nav>
	</div>
</header>

<main>
	<div class="content">
		<div class="slide" id="slider">
			<img src="img/dextop/slide1.jpg">
			<img src="img/dextop/slide2.jpg">
			<img src="img/dextop/slide3.jpg">
			<div class="prev" id="prev"></div>
			<div class="next" id="next"></div>
		</div>
		<div class="clearfix">
			<article class="page-img">
				<img src="img/dextop/page-img.png" class="img-block">
				<h2>NEW<br>
					TECHNOLOGIES</h2>
				<p>At vero eos et accusamus et iusto ssimos ducimus qui blanditiistes es praesentiumvoluptatum delenitimos.</p>
				<a href="" class="button">more</a>
			</article>
			<article class="page-img">
				<img src="img/dextop/page-img-1.png" class="img-block">
				<h2>FROST<br>
					PROTECTION</h2>
				<p>At vero eos et accusamus et iusto ssimos ducimus qui blanditiistes es praesentiumvoluptatum delenitimos.</p>
				<a href="" class="button">more</a>
			</article>
			<article class="page-img">
				<img src="img/dextop/page-img-2.png" class="img-block">
				<h2>ECO<br>
					SOLUTIONS</h2>
				<p>At vero eos et accusamus et iusto ssimos ducimus qui blanditiistes es praesentiumvoluptatum delenitimos.</p>
				<a href="" class="button">more</a>
			</article>
		</div>
		<div class="divider"></div>
		<div class="box-grid">
			<article class="grid">
				<h3>WELCOME!</h3>
				<img src="img/dextop/page-img-3.png"class="img-block-2">
				<p>Ut vero eos et accusamus et iusto odio dignissimos ducimus qui voluptatum deleniti atque corrupti quos dolores et quasmolestias exceptu.</p>
				<a href="" class="button">more</a>
			</article>
			<article class="grid">
				<h3>OUR MISSION</h3>
				<p class="font20">LOREM IPSUM DOLORE
					MASSA AS LAOREET
					MAGNA ALIQUA</p>
				<p class="font12">Ut vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesent.</p>
				<p>Eluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident similique <a href="" class="p-a">sunt in culpa qui</a> officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi opticumque</p>
				<a href="" class="button">more</a>
			</article>
			<article class="grid">
				<section>
					<h2>
						<div class="number">01.</div>
						VEGETABLE<br> SEEDS
					</h2>
					<p class="margin-bottom">Lorem ipsum dolor sit ctetueradipiscing elit. Sed diam nonummy nibh euismod tincidunt ut laoreet dolorese magna aiqu.</p>
				</section>
				<section>
					<h2>
						<div class="number">02.</div>
						AGRICULTURAL<br> SEEDS
					</h2>
					<p>Lorem ipsum dolor sit ctetueradipiscing elit. Sed diam nonummy nibh euismod tincidunt ut laoreet dolorese magna aiqu.</p>
				</section>
				<a href="" class="button">more</a>
			</article>
		</div>
	</div>
</main>

<footer>
	<div class="footer-line"></div>
	<div class="content footer clearfix">
		<div class="footer-33">
			<h4>COPYRIGHT</h4>
			© 2013 | <a href="">PRIVACY POLICY</a>
		</div>
		<address class="footer-33">
			<h4>ADDRESS</h4>
			9870 ST VINCENT PLACE, GLASGOW, DC 45 FR 45.
		</address>
		<div class="footer-33">
			<div class="footer-17">
				<h4>FOLLOW US</h4>
			</div>
			<div class="footer-17 icon">
				<a href="" class="facebook"></a>
				<a href="" class="twiter"></a>
				<a href="" class="google"></a>
				<a href="" class="inst"></a>
			</div>
		</div>
	</div>
</footer>
</body>
</html>
