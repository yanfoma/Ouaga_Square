<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OuagaSquare</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!-- Styles -->
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/owl-carousel.css" type="text/css" />
<link rel="stylesheet" href="css/mediaelementplayer.min.css" />
<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css"><!-- Layer Slider -->
<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<link href="css/revolution.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/rocket.css">
<link rel="stylesheet" href="css/jbility.css">

<link rel="stylesheet" type="text/css" href="css/colors/red.css" title="color1" />
<link rel="alternate stylesheet" type="text/css" href="css/colors/wedgewood.css" title="color2" />
<link rel="alternate stylesheet" type="text/css" href="css/colors/blue.css" title="color3" />
<link rel="alternate stylesheet" type="text/css" href="css/colors/green.css" title="color4" />
<link rel="alternate stylesheet" type="text/css" href="css/colors/darkgreen.css" title="color5" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jbility.js"></script>
<script type="text/javascript">

jQuery(document).ready(function($){
	// Stockage des références des différents éléments dans des variables
	rocket     = $('#rocket_mobile');
	firetop    = $('#rocket_mobile .fire.top');
	firebottom = $('#rocket_mobile .fire.bottom');
	LAST_SCROLL_OFFSET = $(window).scrollTop();
	LAST_SCROLL_TIME   = new Date().getTime();
 
	// Calcul de la marge entre le haut du document et #rocket_mobile
	fixedLimit = rocket.offset().top - parseFloat(rocket.css('marginTop').replace(/auto/,0));
 
	// On déclenche un événement scroll pour mettre à jour le positionnement au chargement de la page
	$(window).trigger('scroll');
 
	$(window).scroll(function(event){
		// Valeur de défilement lors du chargement de la page
		windowScroll = $(window).scrollTop();
 
		// Mise à jour du positionnement en fonction du scroll
		if( windowScroll >= fixedLimit ){
			rocket.addClass('fixed');
		} else {
			rocket.removeClass('fixed');
		}
 
		// Animation flammes
		// Allumage
		if( rocket.hasClass('fixed') ){
			if( windowScroll > LAST_SCROLL_OFFSET ){
				// DOWN
				firetop.addClass('on');
				firebottom.removeClass('on');
			} else {
				// UP
				firetop.removeClass('on');
				firebottom.addClass('on');
			}
		}
 
		// Arrêt
		setTimeout(function(){
			if( new Date().getTime() - LAST_SCROLL_TIME > 50 ){
				firetop.removeClass('on');
				firebottom.removeClass('on');
			}
		},70);
 
		// Mise à jour variables
		LAST_SCROLL_OFFSET = windowScroll;
		LAST_SCROLL_TIME   = new Date().getTime();
	});
});
</script>

</head>

<body>
<div class="theme-layout">
<header class="header9">

	@include('nav');

</header><!--- HEADER -->

<div class="slider-layer">

	<div id="full-slider-wrapper">
		<div id="layerslider" style="width:100%;height:700px;">
		
			<div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
				<img src="images/back.jpg" class="ls-bg" alt="Slide background"/>
				
				<div class="ls-l" style="top:50%;left:50%;white-space: nowrap; width:850px; height:236px; float:left; background:rgba(255,255,255,0.2);box-shadow: 0 0 21px rgba(0, 0, 0, 0.7);" data-ls="offsetxin:0;offsetyin:300;delayin:500;offsetxout:0;offsetyout:-50;durationin:1000;easingout:easeInOutQuart; parallaxlevel:4; scalexout:1.2;scaleyout:1.2;transformoriginout:50% top 0;"></div>
				
				<div class="ls-l" style="top:50%;left:50%;white-space: nowrap; background-image: url(http://themes.webinane.com/deeds/images/text-bg.png);
				background-repeat: no-repeat;background-size: 100% 100%; width:1031px; height:150px; float:left;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:3;"></div>
				
				<p class="ls-l" style="top:258px;left:50%;font-family:'open sans';font-size:14px;white-space: nowrap; line-height: 15px; margin-top:-90px; color:#fff; text-transform:uppercase;" data-ls="offsetxin:0;durationin:2000;delayin:2000; parallaxlevel:2; easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;">
					These poor kids need your special attention
				</p>
				
				<p class="ls-l" style="top:430px;left:50%;font-family:'Open Sans';font-size:20px;white-space: nowrap; color:#fff;font-weight:600; line-height: 13px; letter-spacing:3px; text-transform:uppercase;" data-ls="offsetxin:0;durationin:2000; parallaxlevel:1; delayin:2500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;">
					Get Everyone Forgivenss Today
				</p>
				
				<p class="ls-l" style="font-family: Open Sans; top:50%;left:50%; text-transform:uppercase; font-weight: 600;font-size:60px;line-height:37px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000; parallaxlevel:1; delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;">
					Prayers & <i class="text-color" style="font-style:normal; color:#eff136;">Fasting</i>
				</p>
		
			</div>
			
			<div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
				<img src="images/back1.jpg" class="ls-bg" alt="Slide background"/>
				
				<p class="ls-l light-bg" style="top:195px;left:50%; font-weight: 600;font-size:18px;color:#ffffff; font-family: Open Sans; background:rgba(239,241,54,0.8); text-transform: uppercase; letter-spacing:4px; line-height:14px; padding: 15px 36px; border-radius:3px; white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;">
					to Renovate "Bosphorus Church"			
				</p>
				
				<div class="ls-l" style="top:254px;left:50%; border-radius:3px; width:1170px; background:rgba(0,0,0,0.75); height:190px;" data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;parallaxlevel:3;"></div>
				
				<p class="ls-l" style="top:277px;left:50%; font-weight: 800;font-size:100px;color:#ffffff; font-family: Open Sans; text-transform: uppercase; letter-spacing:0.30px; line-height:110px; white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:2500; parallaxlevel:1; easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;">
					<i class="text-color" style="font-style:normal; font-weight:normal; color:#eff136; ">Join</i> Hands			
				</p>
				
				<p class="ls-l" style="top:394px;left:50%; font-weight: 500;font-size:14px;color:#ffffff; font-family: Open Sans; text-transform: uppercase; letter-spacing:5px; line-height:15px; white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:2500; parallaxlevel:1; easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;">
					Your Precious Help Needed			
				</p>
								
			</div>
		</div>
	</div>
</div><!-- Layer Slider -->
		

<section>
	<div class="block remove-gap">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="ticket-booking overlap">
						<div class="row">
							<div class="col-md-5">
								<h3>Help this child to have bright future</h3>
								<span>Ouagadougou, BURKINA FASO</span>
							</div>
							<div class="col-md-3">
								<a class="booking-btn" href="#" title=""><span><i class="fa fa-bullhorn"></i></span> OuagaSquare</a>
							</div>
							<div class="col-md-4">
								<div class="booking-counter">
									<i class="fa fa-clock-o"></i>
									<ul>
										<li> <span class="days">00</span>
										<p class="days_ref">DAYS</p>
										</li>
										<li> <span class="hours">00</span>
										<p class="hours_ref">HOURS</p>
										</li>
										<li> <span class="minutes">00</span>
										<p class="minutes_ref">MINTS</p>
										</li>
										<li> <span class="seconds">00</span>
										<p class="seconds_ref">SECS</p>
										</li>
									</ul>									
								</div>
							</div>
						</div>
					</div><!-- TICKET BOOKING -->	
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="block remove-gap">
		<div class="container">
			<div class="row">

				<?php
                    $Projet=DB::table('projet')->orderBy('id', 'desc')->limit(3)->get();
                    foreach($Projet as $row)
                {?>
				<div class="col-md-4 column">
					<div class="service-block">
						<div class="service-image">
							<img src="images/resource/partnerships.jpg" alt="" />
							<i class="fa fa-codepen"></i>
						</div>
						<span hidden="hidden"><?php echo $row->id ?></span>
						<h3><?php echo $row->full_titre ?></h3>
						<p><?php echo str_limit($row->contenu, 80); ?></p>
						<a href="<?php echo url('detail_projet');?><?php echo $row->id;?>" title="">LIRE PLUS</a>
					</div>
				</div>
				<?php } ?>

			</div>
		</div>
	</div>
</section>

<section>
	<div class="block blackish">
	<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="pastors-carousel">
						<div class="pastors-message">
							<div class="row">
								<div class="col-md-3">
									<img src="images/resource/pastor1.jpg" alt="" />
								</div>
								<div class="col-md-9">
									<h4>GARY HARREL</h4>
									<span>DIRECTOR-BASELINE</span>
									<p>Ut ac eleifend mauris, ac porta lacus. Sed pharetra magna massa, sit amet condimentum risus congue ut. Duis eu neque convallis, auctor lacus sed, tincidunt arcu. Aliquam vitae hendrerit dolor. Ut ac eleifend mauris, ac porta lacus. Sed pharetra magna massa, sit amet condimentum risus congue ut. Ut ac eleifend mauris, ac porta lacus. Sed pharetra magna massa, sit amet condimentum risus congue ut. Duis eu neque convallis, auctor lacus sed, tincidunt arcu. </p>
									<ul class="sermon-media">
										<li><a href="http://vimeo.com/44867610" data-rel="prettyPhoto" title=""><i class="fa fa-film"></i></a></li>
										<li><a title=""><i class="audio-btn fa fa-headphones"></i>
											<div class="audioplayer"><audio src="sermon.mp3"></audio><span class="cross">X</span></div>
										</a></li>
										<li><a target="_blank" href="test.doc" title=""><i class="fa fa-download"></i></a></li>
										<li><a target="_blank" href="test.pdf" title=""><i class="fa fa-book"></i></a></li>
									</ul>
								</div>					
							</div>
						</div>
						<div class="pastors-message">
							<div class="row">
								<div class="col-md-3">
									<img src="images/resource/pastor2.jpg" alt="" />
								</div>
								<div class="col-md-9">
									<h4>GARY HARREL</h4>
									<span>DIRECTOR-BASELINE</span>
									<p>Ut ac eleifend mauris, ac porta lacus. Sed pharetra magna massa, sit amet condimentum risus congue ut. Duis eu neque convallis, auctor lacus sed, tincidunt arcu. Aliquam vitae hendrerit dolor. Ut ac eleifend mauris, ac porta lacus. Sed pharetra magna massa, sit amet condimentum risus congue ut. Ut ac eleifend mauris, ac porta lacus. Sed pharetra magna massa, sit amet condimentum risus congue ut. Duis eu neque convallis, auctor lacus sed, tincidunt arcu. </p>
									<ul class="sermon-media">
										<li><a href="http://vimeo.com/44867610" data-rel="prettyPhoto" title=""><i class="fa fa-film"></i></a></li>
										<li><a title=""><i class="audio-btn fa fa-headphones"></i>
											<div class="audioplayer"><audio src="sermon.mp3"></audio><span class="cross">X</span></div>
										</a></li>
										<li><a target="_blank" href="test.doc" title=""><i class="fa fa-download"></i></a></li>
										<li><a target="_blank" href="test.pdf" title=""><i class="fa fa-book"></i></a></li>
									</ul>
								</div>					
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="block remove-gap">
		<div class="container">
			<div class="row">
				<div class="title2">
					<span></span><br><br>
					<h2>LES PROJETS <span>PAR CATEGORIE</span></h2>
				</div>

				<?php
                    $Categorie=DB::table('categorie')
                      ->orderBy('id', 'desc')
                      ->limit(10)->get();
                    foreach($Categorie as $row)
                {?>
				<div class="title"><br><br><h2><a href="<?php echo url('categorie');?><?php echo $row->id;?>"><span>{{$row->full_titre}}</span></a></h2></div>
				<div class="col-md-12 column">
					<div class="row">
						<div class="animal-events-carousel">

							<?php
                    			$Projet=DB::table('projet')
                    			  ->where('projet.categorie_id', '=', $row->id)
                    			  ->limit(4)->get();
                   				foreach($Projet as $proj)
                			{?>
							<div class="animal-event">
								<div class="animal-img"><img src="images/resource/recent-event4.jpg" alt="" /><span><strong>03 </strong>Jun 2014</span></div>
								<div class="animal-detail">
									<h4><a href="" title="">{{$proj->resume_titre}}</a></h4>
									<p>{{$proj->full_titre}}</p>
									<ul>
										<li><a href="#" title=""><i class="fa fa-map-marker"></i></a> <span>{{$proj->phase_id}}</span></li>
										<li><a href="#" title=""><i class="fa fa-comments"></i></a><span>32 Comments</span></li>
										<li><a href="#" title=""><i class="fa fa-clock-o"></i></a><span>{{$proj->created_at}}</span></li>
									</ul>
								</div>
							</div>
							<?php } ?>

						</div>	
					</div>
				</div>
				<?php } ?>

			</div>
		</div>
	</div>
</section>

<section>
	<div class="block blackish">
	<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
		<div class="container">
			<div class="row">	
				<div class="col-md-12">
					<div class="parallax-title">
						<h3 class="special-text">RECHRECHER <span>UN PROJET</span></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero <br/> Nulla quis sem at nibh elementum imperdiet.</p>
					</div>
					<form class="prayer-request">
						<input type="text" placeholder="Are you hurting weed to talk">
						<input type="submit" value="Chercher Projet" />
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="title2">
					<span>Pellent Esque Tellus</span>
					<h2>CHURCH <span>STORIES & BLOG</span></h2>
				</div>

				<div class="col-md-8 column">
					<div class="remove-ext">
						<div class="row">
						<div class="col-md-6">
							<div class="story">
								<div class="image">
									<img src="images/resource/story1.jpg" alt="" />
									<a href="church-story-single.html" title=""><i class="fa fa-link"></i></a>
								</div>
								<div class="story-detail">
									<span class="date"><i class="fa fa-calendar-o"></i> NOV, 01, 2013</span>
									<h3><a href="church-story-single.html" title="">Accusantium Erroret Cupiditate Necess</a></h3>
									<span><i class="fa fa-user"></i> Joy Rother</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="story">
								<div class="image">
									<img src="images/resource/story2.jpg" alt="" />
									<a href="church-story-single.html" title=""><i class="fa fa-link"></i></a>
								</div>
								<div class="story-detail">
									<span class="date"><i class="fa fa-calendar-o"></i> NOV, 01, 2013</span>
									<h3><a href="church-story-single.html" title="">Accusantium Erroret Cupiditate Necess</a></h3>
									<span><i class="fa fa-user"></i> Joy Rother</span>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 column">
					<div class="blog-listing">
						<div class="blog-list">
							<a href="blog-single.html" title=""><img src="images/resource/blog-thumb1.jpg" alt="" /></a>
							<h3><a href="blog-single.html" title="">Cowboy & Big City Church</a></h3>
							<ul>
								<li><i class="fa fa-tag"></i><a href="index8.html#" title="">Blog</a> / <a href="index8.html#" title="">First</a> </li>
								<li><i class="fa fa-calendar-o"></i> Jul 01</li>								
							</ul>
						</div>
						<div class="blog-list">
							<a href="blog-single.html" title=""><img src="images/resource/blog-thumb2.jpg" alt="" /></a>
							<h3><a href="blog-single.html" title="">Some Truth From Signs</a></h3>
							<ul>
								<li><i class="fa fa-tag"></i><a href="index8.html#" title="">Blog</a> / <a href="index8.html#" title="">First</a> </li>
								<li><i class="fa fa-calendar-o"></i> Jul 01</li>								
							</ul>
						</div>
						<div class="blog-list">
							<a href="blog-single.html" title=""><img src="images/resource/blog-thumb3.jpg" alt="" /></a>
							<h3><a href="blog-single.html" title="">Answered Prayers Are All Around</a></h3>
							<ul>
								<li><i class="fa fa-tag"></i><a href="index8.html#" title="">Blog</a> / <a href="index8.html#" title="">First</a> </li>
								<li><i class="fa fa-calendar-o"></i> Jul 01</li>								
							</ul>
						</div>
						<a href="blog.html" title=""><i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section>
	<div class="block blackish">
	<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="upcoming-event">
						<div class="row">
							<div class="col-md-6 column">
								<h3><i class="fa fa-bank"></i> Next Online Experince With Us</h3>
								<span><i class="fa fa-calendar-o"></i> 06, 01, 2013</span>
								<span><i class="fa fa-clock-o"></i> 5:00 pm</span>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl</p>

								<div class="remaining-time">
									<div class="col-md-6 column">
										<h5>This Church Prayers</h5>
										<span>Prayers Time</span>
									</div>
									<div class="col-md-6 timing column">
										<ul class="countdown">
											<li> <span class="days">00</span>
											<p class="days_ref">DAYS</p>
											</li>
											<li> <span class="hours">00</span>
											<p class="hours_ref">HOURS</p>
											</li>
											<li> <span class="minutes">00</span>
											<p class="minutes_ref">MINTS</p>
											</li>
											<li> <span class="seconds">00</span>
											<p class="seconds_ref">SECS</p>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-md-6 column">
								<iframe src="http://player.vimeo.com/video/61350461?title=0&amp;byline=0&amp;portrait=0" height="280"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section style="margin-top: 50px">
	<div class="block remove-gap">
		<div>
			<div class="tab-style">
				<ul class="nav nav-tabs" id="myTab2">
					<li class="active"><a data-toggle="tab" href="elements.html#tab1">TAB BUTTON 1</a></li>
					<li class=""><a data-toggle="tab" href="elements.html#tab2">TAB BUTTON 2</a></li>
					<li class=""><a data-toggle="tab" href="elements.html#tab3">TAB BUTTON 3</a></li>
				</ul>
				<div class="tab-content" id="myTabContent2">
					<div id="tab1" class="tab-pane fade active in">
						<div class="col-md-12 column">
					<div class="row">
						<div class="animal-events-carousel">
							<div class="animal-event">
								<div class="animal-img"><img src="images/resource/recent-event1.jpg" alt="" /><span><strong>12</strong>Dec 2014</span></div>
								<div class="animal-detail">
									<h4><a href="index8.html#" title="">Offers And General Visual</a></h4>
									<p>Aenean leo vene quam. Pellntes iqu ornare sem eiusmodte venenatis. Pellntes ique ornew vestibum...</p>
									<ul>
										<li><a href="index8.html#" title=""><i class="fa fa-map-marker"></i></a> <span>Torque Inc.1614 Chestnut Ave. Boston, MA 02166</span></li>
										<li><a href="index8.html#" title=""><i class="fa fa-comments"></i></a><span>32 Comments</span></li>
										<li><a href="index8.html#" title=""><i class="fa fa-clock-o"></i></a><span>30-08-2014 10:48 am</span></li>
									</ul>
								</div>
							</div>
							<div class="animal-event">
								<div class="animal-img"><img src="images/resource/recent-event3.jpg" alt="" /><span><strong>25</strong>Sep 2014</span></div>
								<div class="animal-detail">
									<h4><a href="index8.html#" title="">Offers And General Visual</a></h4>
									<p>Aenean leo vene quam. Pellntes iqu ornare sem eiusmodte venenatis. Pellntes ique ornew vestibum...</p>
									<ul>
										<li><a href="index8.html#" title=""><i class="fa fa-map-marker"></i></a> <span>Torque Inc.1614 Chestnut Ave. Boston, MA 02166</span></li>
										<li><a href="index8.html#" title=""><i class="fa fa-comments"></i></a><span>32 Comments</span></li>
										<li><a href="index8.html#" title=""><i class="fa fa-clock-o"></i></a><span>30-08-2014 10:48 am</span></li>
									</ul>
								</div>
							</div>
							<div class="animal-event">
								<div class="animal-img"><img src="images/resource/recent-event2.jpg" alt="" /><span><strong>30</strong>Aug 2014</span></div>
								<div class="animal-detail">
									<h4><a href="index8.html#" title="">Offers And General Visual</a></h4>
									<p>Aenean leo vene quam. Pellntes iqu ornare sem eiusmodte venenatis. Pellntes ique ornew vestibum...</p>
									<ul>
										<li><a href="index8.html#" title=""><i class="fa fa-map-marker"></i></a> <span>Torque Inc.1614 Chestnut Ave. Boston, MA 02166</span></li>
										<li><a href="index8.html#" title=""><i class="fa fa-comments"></i></a><span>32 Comments</span></li>
										<li><a href="index8.html#" title=""><i class="fa fa-clock-o"></i></a><span>30-08-2014 10:48 am</span></li>
									</ul>
								</div>
							</div>
							<div class="animal-event">
								<div class="animal-img"><img src="images/resource/recent-event3.jpg" alt="" /><span><strong>05</strong>May 2012</span></div>
								<div class="animal-detail">
									<h4><a href="index8.html#" title="">Offers And General Visual</a></h4>
									<p>Aenean leo vene quam. Pellntes iqu ornare sem eiusmodte venenatis. Pellntes ique ornew vestibum...</p>
									<ul>
										<li><a href="index8.html#" title=""><i class="fa fa-map-marker"></i></a> <span>Torque Inc.1614 Chestnut Ave. Boston, MA 02166</span></li>
										<li><a href="index8.html#" title=""><i class="fa fa-comments"></i></a><span>32 Comments</span></li>
										<li><a href="index8.html#" title=""><i class="fa fa-clock-o"></i></a><span>30-08-2014 10:48 am</span></li>
									</ul>
								</div>
							</div>
							<div class="animal-event">
								<div class="animal-img"><img src="images/resource/recent-event4.jpg" alt="" /><span><strong>03 </strong>Jun 2014</span></div>
								<div class="animal-detail">
									<h4><a href="index8.html#" title="">Offers And General Visual</a></h4>
									<p>Aenean leo vene quam. Pellntes iqu ornare sem eiusmodte venenatis. Pellntes ique ornew vestibum...</p>
									<ul>
										<li><a href="index8.html#" title=""><i class="fa fa-map-marker"></i></a> <span>Torque Inc.1614 Chestnut Ave. Boston, MA 02166</span></li>
										<li><a href="index8.html#" title=""><i class="fa fa-comments"></i></a><span>32 Comments</span></li>
										<li><a href="index8.html#" title=""><i class="fa fa-clock-o"></i></a><span>30-08-2014 10:48 am</span></li>
									</ul>
								</div>
							</div>
						</div><!-- ANIMALS EVENT CAROUSEL -->							
					</div>
				</div>
					</div>
					<div id="tab2" class="tab-pane fade">
						<p>Donec et libero quis erat commodo suscipit. Mae elit a,  eleifend leo. Phasellus ut phitra mi, ctor diam. id Suus arciet spendisse rhoncus id arcet porta akn. Aenean blandit isum, pharetrnisi vesti bulum ornare. Lore ipsum dolo stamet cons ctetur adipiscing elit. Duis non sceleri sque est, quis alquam ligula. Aenean blandit isum, pharetrnisi vesti bulum ornare.</p>
					</div>

					<div id="tab3" class="tab-pane fade">
						<p>Donec et libero quis erat commodo suscipit. Mae elit a,  eleifend leo. Phasellus ut phitra mi, ctor diam. id Suus arciet spendisse rhoncus id arcet porta akn. Aenean blandit isum, pharetrnisi vesti bulum ornare. Lore ipsum dolo stamet cons ctetur adipiscing elit. Duis non sceleri sque est, quis alquam ligula. Aenean blandit isum, pharetrnisi vesti bulum ornare.</p>
					</div>
				</div>
			</div><!-- TABS STYLE -->
		</div>
	</div>
</section>

@include('footer');