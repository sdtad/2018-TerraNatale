</head>

<body>
<header>
	<div class="container">
		<div class="logotip">
		<ul>
			<li><a><img src="<?php print $siteurleng;?>img/lang-eng.png" alt="English" title="English"></a></li>
			<li><a href="<?php print $siteurlru;?>index.php"><img src="<?php print $siteurleng;?>img/lang-ru.png" alt="Русский" title="Русский"></a></li>
		</ul>
		</div>
	</div>	
	
	<div class="container"><div class="logotip-number"></div></div>
		
	<nav class="navbar navbar-default menu">
		<div class="container">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="border:1px solid #6E3912; background:#E9CF9E;">
			<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="<?php print $siteurleng;?>index.php">home</a></li>
					<li><a href="<?php print $siteurleng;?>news.php">news</a></li>
					<li><a href="<?php print $siteurleng;?>dogs.php">our dogs</a></li>
					<li><a href="<?php print $siteurleng;?>puppies.php">puppies</a></li>
					<li><a href="<?php print $siteurleng;?>articles.php">articles</a></li>
					<li><a href="<?php print $siteurleng;?>video.php">video</a></li>
					<li><a href="<?php print $siteurleng;?>gallery.php">gallery</a></li>
					<li><a href="<?php print $siteurleng;?>links.php">links</a></li>
					<li><a href="<?php print $siteurleng;?>contact.php">contacts</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="slider">	
		<div class="container-fluide">
			<div id="myslider3" class="juicyslider">
				<ul>
					<li><img src="<?php print $siteurleng;?>img/slider6.png"></li>
					<li><img src="<?php print $siteurleng;?>img/slider7.png"></li>
					<li><img src="<?php print $siteurleng;?>img/slider8.png"></li>
					<li><img src="<?php print $siteurleng;?>img/slider9.png"></li>
					<li><img src="<?php print $siteurleng;?>img/slider3.png"></li>
					<li><img src="<?php print $siteurleng;?>img/slider4.png"></li>
					<li><img src="<?php print $siteurleng;?>img/slider1.png"></li>
					<li><img src="<?php print $siteurleng;?>img/slider2.png"></li>
					<li><img src="<?php print $siteurleng;?>img/slider5.png"></li>
				</ul>
				<div class="mask"></div>
			</div>
		</div>
	 	<script>$(function() {$('#myslider3').juicyslider({width: '100%',height: '450px',mask: "strip",bgcolor: "#FFF",autoplay: 6000,shuffle: false,show: {effect: 'puff', duration: 5000},hide: {effect: 'puff', duration: 5000},});});</script>
	</div>
</header>	
