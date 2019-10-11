</head>		

<body>
<header>
	<div class="container">
		<div class="logotip">
			<ul>
				<li><a href="<?php print $siteurlru;?>en/index.php"><img src="<?php print $siteurlru;?>img/lang-eng.png" alt="English" title="English"></a></li>
				<li><a><img src="<?php print $siteurlru;?>img/lang-ru.png" alt="Русский" title="Русский"></a></li>
			</ul>
		</div>
	</div>	
	
	<div class="container">
		<div class="logotip-number"></div>
	</div>
		
	<nav class="navbar navbar-default menu">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="border:1px solid #6E3912; background:#E9CF9E;">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="<?php print $siteurlru;?>index.php">главная</a></li>
					<li><a href="<?php print $siteurlru;?>news.php">новости</a></li>
					<li><a href="<?php print $siteurlru;?>dogs.php">наши собаки</a></li>
					<li><a href="<?php print $siteurlru;?>puppies.php">щенки</a></li>
					<li><a href="<?php print $siteurlru;?>articles.php">статьи</a></li>
					<li><a href="<?php print $siteurlru;?>video.php">видео</a></li>
					<li><a href="<?php print $siteurlru;?>gallery.php">галерея</a></li>
					<li><a href="<?php print $siteurlru;?>links.php">ссылки</a></li>
					<li><a href="<?php print $siteurlru;?>contact.php">контакты</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="slider">	
		<div class="container-fluide">
			<div id="myslider3" class="juicyslider">
				<ul>
					<li><img src="<?php print $siteurlru;?>img/slider6.png"></li>
					<li><img src="<?php print $siteurlru;?>img/slider7.png"></li>
					<li><img src="<?php print $siteurlru;?>img/slider8.png"></li>
					<li><img src="<?php print $siteurlru;?>img/slider9.png"></li>
					<li><img src="<?php print $siteurlru;?>img/slider3.png"></li>
					<li><img src="<?php print $siteurlru;?>img/slider4.png"></li>
					<li><img src="<?php print $siteurlru;?>img/slider1.png"></li>
					<li><img src="<?php print $siteurlru;?>img/slider2.png"></li>
					<li><img src="<?php print $siteurlru;?>img/slider5.png"></li>
				</ul>
				<div class="mask"></div>
			</div>
		</div>
	 	<script>$(function() {$('#myslider3').juicyslider({width: '100%',height: '450px',mask: "strip",bgcolor: "#FFF",autoplay: 6000,shuffle: false,show: {effect: 'puff', duration: 5000},hide: {effect: 'puff', duration: 5000},});});</script>
	</div>
</header>	