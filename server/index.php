<?php

$dbconnect = mysqli_connect("127.0.0.1", "root", "", "u0562844_default");

// Проверка коннекта
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


		
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Магазин компьютерных игр!</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/favicon.ico" type="image/x-icon">
			<meta name="description" content="интернет магазин лицензионных ключей (gift). Ежедневные Скидки до 90% и Бесплатные подарки всем!">
    <meta name="keywords" content="интернет магазин гифтов ключей стим по 100 рублей за дешево компьютерные игры">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--<link rel="shortcut icon" href="favicon.png" />-->
	<link rel="stylesheet" type="text/css" href="../cubeportfolio/css/cubeportfolio.min.css">
	<link rel="stylesheet" href="../libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="../libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="../libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="../libs/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="../libs/countdown/jquery.countdown.css" />
	<link rel="stylesheet" href="../css/fonts.css" />
	<link rel="stylesheet" href="../css/main.css" />
	<link rel="stylesheet" href="../css/main.min.css" />
	<link rel="stylesheet" href="../css/media.css" />
	<link rel="stylesheet" href="../css/bootstrap.offcanvas.min.css" />

</head>
<body oncopy="return false">
	<div id="page-preloader">
		<div class="sk-folding-cube">
			<div class="sk-cube1 sk-cube"></div>
			<div class="sk-cube2 sk-cube"></div>
			<div class="sk-cube4 sk-cube"></div>
			<div class="sk-cube3 sk-cube"></div>
		</div>
	</div>


	<div class="page">
		<div class="page_inner">
			<div class="header_bg"><img src="../img/header_bg.jpg" alt=""></div>
			<!--<div class="mm_header_bg visible-xs"><img src="../img/header_bg.png" alt=""></div>-->
			<div class="container-fluid" style="background: #000000">
				<nav class="container navbar">
					<div class="col-md-12">
						
						<button type="button" class="navbar-toggle offcanvas-toggle pull-right js-offcanvas-has-events" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas" style="float:left;"> <span class="sr-only">Toggle navigation</span> <span> <i class="fa fa-bars" aria-hidden="true"></i> </span> </button>

						<div class="visible-xs navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-right offcanvas-transform js-offcanvas-done" id="js-bootstrap-offcanvas" style="height: 100vh;">
							<ul class="nav navbar-nav">
								<li>
									<a href="../index.php" title="Главная"><i class="fa fa-desktop none-ico" aria-hidden="true"></i> ГЛАВНАЯ</a>
								</li>
								<li>
									<a href="../support.php" title="Техническая поддержка"><i class="fa fa-flag none-ico" aria-hidden="true"></i> ПОДДЕРЖКА</a>
								</li>
								<li>
									<a href="../buy.php" title="Как преобрести ключи"><i class="fa fa-credit-card-alt none-ico" aria-hidden="true"></i> КАК КУПИТЬ?</a>
								</li>
								<li>
									<a href="../reviews.php" title="Отзывы покупателей"><i class="fa fa-comments none-ico" aria-hidden="true"></i> ОТЗЫВЫ</a>
								</li>
								<li>
									<a href="../garants.php" title="Гарантии магазина"><i class="fa fa-handshake-o none-ico" aria-hidden="true"></i> ГАРАНТИИ</a>
								</li>
								<li class="none">
									<a href="https://vk.com/gamerlive228" title="Наша группа вконтакте" target="_blank"> <i class="fa fa-vk none-ico" aria-hidden="true"></i> МЫ ВКОНТАКТЕ </a>
								</li>
								

								<li class="none"><div id="load-btn"></div></li> 
							</ul>
						</div>

						<div class="navbar_search">

<div class="cbp-search">
    <!-- data-search attribute is used to target the searching with a jQuery selector. For full search set data-search="*" -->
    <input id="js-search-blog-posts" type="text" data-search=".meta_search" class="cbp-search-input">
    <div class="cbp-search-icon"></div>
</div>
							<!--<form action="#">
								<input type="text" name="q" maxlength="30" size="20" class="search_input">
								<input type="text" class="search_submit">						
							</form>-->
						</div>
						<div class="navbar_menu">
							<ul class="navbar_ul">
								<li><a href="../index.php">Главная</a></li>
								<li><a href="../support.php">Поддержка</a></li>
								<li><a href="../buy.php">Как купить?</a></li>
								<li><a href="../reviews.php">Отзывы</a></li>
								<li><a href="../garants.php">Гарантии</a></li>
							</ul>
						</div>
						<div class="soc_buttons">
							<ul class="soc_btns_ul">
								<li>
									<a href="https://vk.com/gamerlive228"><i class="fa fa-vk" aria-hidden="true"></i> Вконтакте</a>

								</li>
							</ul>
						</div>
					</div>
				</nav>
				<div class="content_wrapper">
					<div class="container">
						<div class="row">
							<div class="block_category">
								<div class="col-xs-12 col-sm-9 col-md-9" id="block_cat_left">
									<span>Категории:</span>
									<div id="js-filters-masonry" class="cbp-l-filters-alignCenter">
										<ul>
											<li data-filter="*" class="cbp-filter-item-active cbp-filter-item"><i class="fa fa-bars" aria-hidden="true"></i><a href="#" onclick="return false;">Всё</a></li>
											<li data-filter=".steam" class="cbp-filter-item"><i class="fa fa-bars" aria-hidden="true"></i><a href="#" onclick="return false;">Steam</a></li>
											<li data-filter=".origin" class="cbp-filter-item"><i class="fa fa-bars" aria-hidden="true"></i><a href="#" onclick="return false;">Origin</a></li>
											<li data-filter=".uplay" class="cbp-filter-item"><i class="fa fa-bars" aria-hidden="true"></i><a href="#" onclick="return false;">Uplay</a></li>
										</ul>
									</div>
								</div>
								<div class="col-xs-12 col-sm-3 col-md-3 text-right" id="block_cat_right">
									<ul>
										<li><a href="http://oplata.info" target="_blank">Мои покупки</a></li>
									</ul>
								</div>
							</div>
						</div>
<!--START SECTION CONTENT-->
<section class="page_content">
	<div class="content">
		<div class="title_shop_window" style="display: none;">
<span>Магазин компьютерных игр!</span>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/favicon.ico" type="image/x-icon">
			<meta name="description" content="интернет магазин лицензионных ключей (gift). Ежедневные Скидки до 90% и Бесплатные подарки всем!">
    <meta name="keywords" content="интернет магазин гифтов ключей стим по 100 рублей за дешево компьютерные игры">
			
		</div>
		<div class="row">

			<div id="js-grid-masonry" class="cbp">

				<div class="all_posts">

				


	<div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="csl.php">
				<div class="image"><img src="../images/csgo.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">CS:GO</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">CS:GO</p>
						<span>Steam</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 449 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">99</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="rust.php">
				<div class="image"><img src="../images/rust.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Rust</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Rust</p>
						<span>Steam</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 619 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">79</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="gtal.php">
				<div class="image"><img src="../images/gtaa.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Gta 5</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Gta 5</p>
						<span>Steam</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 1999 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">159</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="005.php">
				<div class="image"><img src="../images/over.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Overwatch</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Overwatch</p>
						<span>Battle.net</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 2599 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">139</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="csgun.php">
				<div class="image"><img src="../images/random.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Случайное оружие!</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Случайное оружие!</p>
						<span>Steam</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 400 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">100</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
        <div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="023.php">
				<div class="image"><img src="http://gamebop.ru/3ver/images/023img0.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Marvel’s Spider-Man PS4</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Marvel’s Spider-Man PS4</p>
						<span>Sony</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 4200 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">119</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item origin">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="fifa.php">
				<div class="image"><img src="../images/bf4.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Battlefield 4</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Battlefield 4</p>
						<span>Origin</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 1999 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">79</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
                    <div class="cbp-item origin">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="025.php">
				<div class="image"><img src="http://gamebop.ru/3ver/images/025img0.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Star Wars ™ Battlefront ™ II</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Star Wars ™ Battlefront ™ II</p>
						<span>Origin</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 1499 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">119</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
                    	<div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="018.php">
				<div class="image"><img src="../images/pb.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Playerunknown's Battlegrounds</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Playerunknown's Battlegrounds</p>
						<span>Steam</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 899 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">99</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item origin">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="swb.php">
				<div class="image"><img src="../images/bfs.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Star Wars ™ Battlefront ™</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Star Wars ™ Battlefront ™</p>
						<span>Origin</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 1199 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">95</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
                    <div class="cbp-item origin">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="022.php">
				<div class="image"><img src="http://gamebop.ru/3ver/images/022img0.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Battlefield™ V</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Battlefield™ V</p>
						<span>Origin</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 1650 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">119</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
                    
                    <?php
                    
                    $query = "SELECT * FROM `tabtovarss` "; // запрос к базе данных
	$sqlsq = mysqli_query($dbconnect,$query) or die(mysqli_error()); // сам запросс
	while ($result = mysqli_fetch_array($sqlsq)) { // цикл вайл который выводит все товары на сайт
         
		echo '
        
        <div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="buyend.php?id=' . $result['idgame'] . '">
				<div class="image"><img src="' . $result['image1']  . '" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">' . $result['name'] . '</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">' . $result['name'] . '</p>
						<span>Steam</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 2199 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">' . $result['price'] . '</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div> 
        ';}
                    
                    ?>
                    
      
           
                    
	<div class="cbp-item origin">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="008.php">
				<div class="image"><img src="../images/bf1.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Battlefield 1</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Battlefield 1</p>
						<span>Origin</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 1550 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">99</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="015.php">
				<div class="image"><img src="../images/forhonor.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">For Honor</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">For Honor</p>
						<span>Steam</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 1695 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">99</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="019.php">
				<div class="image"><img src="../images/yuyi.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">H1Z1</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">H1Z1</p>
						<span>Steam</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 566 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">99</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item uplay">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="016.php">
				<div class="image"><img src="../images/wh2.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Watch Dogs 2 DE</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Watch Dogs 2 DE</p>
						<span>Uplay</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 2395 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">99</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
     <div class="cbp-item origin">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="024.php">
				<div class="image"><img src="http://gamebop.ru/3ver/images/024img0.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">ASSASSIN'S CREED ORIGINS</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">ASSASSIN'S CREED ORIGINS</p>
						<span>Origin</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 1899 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">119</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="f4.php">
				<div class="image"><img src="../images/f4.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Fallout 4</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Fallout 4</p>
						<span>Steam</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 859 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">99</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
      <div class="cbp-item origin">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="021.php">
				<div class="image"><img src="http://gamebop.ru/3ver/images/021img0.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Fifa 19</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Fifa 19</p>
						<span>Origin</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 1400 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">129</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item origin">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="017.php">
				<div class="image"><img src="../images/fifa.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Fifa 18</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Fifa 18</p>
						<span>Origin</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 1300 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">89</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="020.php">
				<div class="image"><img src="../images/gm.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Garry’s Mod</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Garry’s Mod</p>
						<span>Steam</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 249 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">79</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item none">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="mc.php">
				<div class="image"><img src="../images/mine.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Minecraft</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Minecraft</p>
						<span>Mojang</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 799 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">99</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="ar.php">
				<div class="image"><img src="../images/ark.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">ARK: Survival Evolved</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">ARK: Survival Evolved</p>
						<span>Steam</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 1049 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">79</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="crew.php">
				<div class="image"><img src="../images/crew.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">The crew</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">The crew</p>
						<span>Steam</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 1499 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">89</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="001.php">
				<div class="image"><img src="../images/et2.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Euro Truck Simulator 2</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Euro Truck Simulator 2</p>
						<span>Steam</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 599 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">79</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item steam">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="002.php">
				<div class="image"><img src="../images/roket.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Rocket League</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Rocket League</p>
						<span>Steam</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 419 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">79</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cbp-item origin">
		<div id="post_id_06">
			<div class="col-sm-12 col-md-12 shop_post">
			<a href="nfs.php">
				<div class="image"><img src="../images/nfs.jpg" alt=""></div>
				
					<div class="buy_product_btn">купить</div>
				</a>
				<div class="post_description">
					<div class="name_post">
						<div class="fir"></div>
						<div class="tw">Need for Speed 2015</div>
						<div class="fr"></div>
						<p class="meta_search" style="display: none;">Need for Speed 2015, NFS</p>
						<span>Origin</span>
					</div>
					<div class="price_post">
						<span title="старая цена" class="old_price"> 1299 <i class="fa fa-rub" aria-hidden="true"></i></span>
						<br> 
						<span class="spincrement">129</span> <i class="fa fa-rub" aria-hidden="true"></i> 
					</div>
				</div>
			</div>
		</div>
	</div>


				</div>

			</div>

		</div>




			




								<!--<div class="post_pagination" align="center">
									<span class="pagesBlockuz1">
										<b class="swchItemA"><span>1</span></b>
										<a class="swchItem" href="/?page2" onclick="spages('2',this);return false;"><span>2</span></a>
										<a class="swchItem" href="/?page3" onclick="spages('3',this);return false;"><span>3</span></a>
										<a class="swchItem" href="/?page4" onclick="spages('4',this);return false;"><span>4</span></a>
										<a class="swchItem" href="/?page2" onclick="spages('2',this);return false;"><span>»</span></a>
									</span>
								</div>-->
							</div>
						</section>
						<!--END SECTION CONTENT-->
						<!--START FOOTER-->
<div class="menu-footer">
	<a href="../index.php">Главная</a><span>|</span>
	<a href="../about_us.php">О нас</a> <span>|</span>
	<a href="../agreement.php">Соглашение</a><span>|</span>
	<a href="../reviews.php">Отзывы</a> <span>|</span>
	<a target="_blank" href="https://vk.com/gamerlive228">Мы Вконтакте</a><span>|</span>

	<a target="_blank" href="#">Мы на Facebook</a>
</div>
</div>
</div>
<div class="mm_footer_menu container">
	<ul class="foo_menu_left">
		<li><a href="../index.php">Главная</a></li>
		<li><a href="../about_us.php">О нас</a></li>
		<li><a href="../agreement.php">Соглашение</a></li>
	</ul>
	<ul class="foo_menu_right">
		<li><a href="../reviews.php">Отзывы</a></li>
		<li><a href="#" target="_blank">Мы Вконтакте</a></li>
		<li><a href="#" target="_blank">Мы на Facebook</a></li>
	</ul>
</div>
<footer class="container"> <div class="footer-info"> 
	<!--<div class="text"> 

		

		 --><div class="text"><p>&nbsp;</p> Данный сайт не был одобрен Корпорацией Valve и не аффилирован с Корпорацией Valve или ее лицензиаров. Название и логотип Steam являются товарными знаками или зарегистрированными товарными знаками Корпорации Valve в США и/или других странах. Все права сохранены. Содержимое игр и игровые материалы (с) Корпорация Valve. Все названия продуктов, компаний и марок, логотипы и товарные знаки являются собственностью соответствующих владельцев. 
	</div> 
</footer>
<!--END FOOTER-->
</div>
</div>
</div>


	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<script src="../libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/bootstrap.offcanvas.js"></script>
	<script src="../libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
	<script src="../libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="../libs/waypoints/waypoints-1.6.2.min.js"></script>
	<!--<script src="../libs/scrollto/jquery.scrollTo.min.js"></script>-->
	<script src="../libs/owl-carousel/owl.carousel.min.js"></script>
	<script src="../libs/countdown/jquery.plugin.js"></script>
	<script src="../libs/countdown/jquery.countdown.min.js"></script>
	<script src="../libs/countdown/jquery.countdown-ru.js"></script>
	<script src="../libs/landing-nav/navigation.js"></script>
	<!--<script src="../js/common.js"></script>-->
	<script type="text/javascript" src="../cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="../js/app.js"></script>
	<script src="../js/main.min.js"></script>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>
    <?php ?>