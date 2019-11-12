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

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="/vendor/public/jquery/dist/jquery.min.js"></script>

	<link rel="stylesheet" href="/bower/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/bower/bootstrap/dist/css/bootstrap-theme.min.css">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="/bower/bootstrap/dist/js/bootstrap.min.js"></script>

	<link rel="icon" href="/img/dextop/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="/touch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/touch-icon-iphone-retina.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/touch-icon-ipad-retina.png">

	<link href="/style-admin.min.css" rel="stylesheet">
</head>

<body>
<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 card-header">
				<h1>AGROLUX</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<div class="list-group margin-top-20">
					<a href="#" class="list-group-item">Главная</a>
					<a href="#" class="list-group-item">Пользователи</a>
					<a href="#" class="list-group-item">Товары</a>
					<a href="#" class="list-group-item">Новости</a>
					<a href="#" class="list-group-item">Книги</a>
				</div>
			</div>
			<div class="col-sm-10">
				<table class="table table-striped table-bordered">
					<tr>
						<th>#</th>
						<th>Название</th>
						<th>Цена</th>
						<th>Удалить</th>
						<th>Редактировать</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Холодильник</td>
						<td>100.56</td>
						<td><a href="#"><img src="img/dextop/del-icon.png" title="Удалить" alt="Удалить" width="25px" height="25px"></a></td>
						<td><a href="#"><img src="img/dextop/edit-icon.png" title="Редактировать" alt="Редактировать" width="20px" height="25px"></a></td>
					</tr>
					<tr>
						<td>2</td>
						<td>Телевизор</td>
						<td>120.00</td>
						<td><a href="#"><img src="img/dextop/del-icon.png" title="Удалить" alt="Удалить" width="25px" height="25px"></a></td>
						<td><a href="#"><img src="img/dextop/edit-icon.png" title="Редактировать" alt="Редактировать" width="20px" height="25px"></a></td>
					</tr>
					<tr>
						<td>3</td>
						<td>Пылесос</td>
						<td>95.50</td>
						<td><a href="#"><img src="img/dextop/del-icon.png" title="Удалить" alt="Удалить" width="25px" height="25px"></a></td>
						<td><a href="#"><img src="img/dextop/edit-icon.png" title="Редактировать" alt="Редактировать" width="20px" height="25px"></a></td>
					</tr>
					<tr>
						<td>4</td>
						<td>Компьютер</td>
						<td>300.80</td>
						<td><a href="#"><img src="img/dextop/del-icon.png" title="Удалить" alt="Удалить" width="25px" height="25px"></a></td>
						<td><a href="#"><img src="img/dextop/edit-icon.png" title="Редактировать" alt="Редактировать" width="20px" height="25px"></a></td>
					</tr>
					<tr>
						<td>5</td>
						<td>Микроволновая печь</td>
						<td>80.10</td>
						<td><a href="#"><img src="img/dextop/del-icon.png" title="Удалить" alt="Удалить" width="25px" height="25px"></a></td>
						<td><a href="#"><img src="img/dextop/edit-icon.png" title="Редактировать" alt="Редактировать" width="20px" height="25px"></a></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="card-footer fixed-bottom">
		AGROLUX &copy; 2019
	</div>
</header>
</body>