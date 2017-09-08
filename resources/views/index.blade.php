
@include('header')

<!-- - - - - - - - MAIN  - - - - - - - -->

<main id="content" class="row sbr">

	<div class="section padding-off columns medium-12 large-12 background-color-off">
		<div class="tmm_row" style="text-align:left; ">
			<div class="relative ">
				<div id="layerslider_2_1" class="ls-wp-container"
				style="width:100%;height:640px;margin:0 auto;margin-bottom: 0px;">
				<div class="ls-slide" data-ls="transition2d:0;">
					<video src="media/OS.mp4" width="75%" height="100%" class="ls-l" autoplay preload="metadata" none loop style="margin:0 auto;margin-bottom: 0px;"></video>

					<p class="ls-l"
					style="top:0px;left:83%;width:34%;height:640px;background:rgba(0, 0, 0, 0.43);white-space: nowrap;"
					data-ls="
					offsetxin:0;
					durationin:700;
					easingin:linear;
					offsetxout:0;
					durationout:600;">
				</p>

				<h2 class="ls-l" style="top:100px;left:76%;font-size:36px;white-space: nowrap;"
				data-ls="
				offsetxin:0;
				durationin:600;
				easingin:easeInOutSine;
				offsetxout:0;
				durationout:600;
				easingout:easeInOutExpo;">Let's Go!</h2>

				<div class="ls-l" style="top:180px;left:83%;width:25%;white-space: nowrap;"
				data-ls="offsetxin:0;durationin:500;easingin:linear;offsetxout:0;durationout:300;easingout:linear;scaleyout:0;">
				<p>Maecenas sit amet magna rhoncus<br>quisque consectetur felis, posumassa<br>fermentum
					vel.</p>

					<form method="post" class="subscription-form" enctype="multipart/form-data">
						<input type="hidden" name="subscription_form" value="subscription_form">
						<fieldset>
							<div class="row collapse">
								<div class="medium-12 large-12">
									<input id="email_55dc56384c259" required type="email"
									name="subscriber_email" value="" placeholder="Your email">
								</div>
							</div>
							<div class="row collapse">
								<div class="medium-6 large-6 columns">
									<input id="zipcode_55dc56384c259" required type="text" name="zipcode"
									value="" placeholder="Zip code">
								</div>
								<div class="medium-6 large-6 columns">
									<button class="button submit middle right">Submit</button>
								</div>
							</div>
						</fieldset>
						<div class="subscription_form_responce" style="display: none;">
							<ul></ul>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
<!--/ .section -->

<div class="medium-12 large-12 columns">

	<ul class="block-with-icons">
		<li>
			<a href="#">
				<i class="icon-group"></i>
				<h5>Campaign</h5>
				<span>Lorem Ipsum Dolor Consectetur</span>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="icon-thumbs-up-4"></i>
				<h5>Accessibility</h5>
				<span>Lorem Ipsum Dolor Consectetur</span>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="icon-calendar-inv"></i>
				<h5>Calendar</h5>
				<span>Lorem Ipsum Dolor Consectetur</span>
			</a>
		</li>
	</ul>

</div>

<section id="main" class="medium-8 large-8 columns">
	<h2 class="section-title">Récents Projets</h2>

	<div class="row post-list full-width">

		<article class="medium-12 large-12 columns">

			<?php
			$Projet=DB::table('projet')
			->orderBy('id', 'desc')
			->limit(2)->get();
			foreach($Projet as $proj)
				{?>

			<div class="post post-classic slideUp">

				<a href="<?php echo url('detail_projet');?><?php echo $proj->id;?>" class="image-post item-overlay ">
					<img src="images/img-04.jpg" alt="">
				</a>

				<header class="entry-header">
					<h3 class="entry-title"><a href="<?php echo url('detail_projet');?><?php echo $proj->id;?>">{{$proj->full_titre}}</a></h3>
				</header>

				<div class="entry-content">
					<p align="justify">
						<?php echo str_limit($proj->contenu, 1000); ?>
					</p>
				</div>

				<?php
				$Categorie=DB::table('categorie')
				->where('categorie.id', '=', $proj->categorie_id)
				->limit(2)->get();
				foreach($Categorie as $cat)
					{?>

				<footer class="entry-footer">

					<div class="left">
						<span class="cat-links"><a href="<?php echo url('categorie');?><?php echo $cat->id;?>">{{$cat->full_titre}}</a></span>
					</div>

					<div class="right">
						<span class="posted-on"><a href="#">{{$proj->created_at}}</a></span>
						<span class="comments-link"><a href="#">{{$proj->delai}} mois</a></span>
						<a class="post-like like-qty" data-post_id="404" href="#"><span
							class="vote-count">0</span></a>
						</div>

					</footer>
					<?php } ?>
				</div>
				<?php } ?>
				<!--/ .post-classic-->

			</article>

		</div>

		<div class="section padding-off columns medium-12 large-12 background-color-off">

			<div class="row">

				<div class="relative">
					<h2 class="section-title">Projets</h2>

					<div class="row post-list two-cols">

						<?php
						$Projet=DB::table('projet')
						->orderBy('id', 'desc')
						->limit(4)->get();
						foreach($Projet as $proj)
							{?>

						<article class="medium-6 large-6 columns">

							<div class="post border post-alternate-1 slideUp">

								<div class="entry-media">

									<a href="<?php echo url('detail_projet');?><?php echo $proj->id;?>" class="image-post item-overlay ">
										<img src="images/blog/21_blog.jpg" alt=""/>
									</a>

									<header class="entry-header										<h3 class="entry-title"><a href="<?php echo url('detail_projet');?><?php echo $proj->id;?>">{{$proj->full_titre}}</a></h3>
										</header>

									</div>

									<div class="entry-content">
										<p align="justify">
											<?php echo str_limit($proj->contenu, 80); ?>
										</p>
									</div>

									<?php
									$Categorie=DB::table('categorie')
									->where('categorie.id', '=', $proj->categorie_id)
									->limit(4)->get();
									foreach($Categorie as $cat)
										{?>

									<footer class="entry-footer">

										<div class="left">
											<span class="cat-links">
												<a href="<?php echo url('categorie');?><?php echo $cat->id;?>" rel="category tag">{{$cat->full_titre}}</a>
											</span>
										</div>

										<div class="right">
											<span class="posted-on"><a href="#">{{$proj->created_at}}</a></span>
											<span class="comments-link"><a href="#">{{$proj->created_at}} mois</a></span>
											<a class="post-like like-qty" data-post_id="127" href="#"><span
												class="vote-count">2</span></a>
											</div>

										</footer>
										<?php } ?>

									</div>
									<!--/ .post-extra-->

								</article>
								<?php } ?>

							</div>
							<!--/ .post-area-->

						</div>

					</div>
					<!--/ .section -->

				</section>

				@include('sidebar')
					<!--/ #sidebar-->

				</main>
				<!--/ #content -->

				<!-- Dialog Login/Register Widnows -->

				<div id="accountDialog" class="dialog">
					<div class="dialog-overlay"></div>
					<div class="dialog-content">
						<div class="morph-shape">
							<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 560 280" preserveAspectRatio="none">
								<rect x="3" y="3" fill="none" width="556" height="276"/>
							</svg>
						</div>
						<div class="dialog-inner">
							<form action="http://html.webtemplatemasters.com/">
								<fieldset class="login">

									<p><input type="text" name="user_name" id="user_name" placeholder="Username*" required="" autocomplete="off"/></p>

									<p><input type="email" name="user_email" id="user_email" placeholder="E-mail*" required="" autocomplete="off"/></p>

									<p>
										<button class="button middle" type="submit">Register</button>
										&nbsp;
										<a href="#" class="button middle dialog-login-button">Log In</a>
									</p>

								</fieldset>
							</form>
							<i class="action-close" data-dialog-close>Close</i>
						</div>
					</div>
				</div>

				<div id="loginDialog" class="dialog">
					<div class="dialog-overlay"></div>
					<div class="dialog-content">
						<div class="morph-shape">
							<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 560 280" preserveAspectRatio="none">
								<rect x="3" y="3" fill="none" width="556" height="276"/>
							</svg>
						</div>
						<div class="dialog-inner">
							<form action="http://html.webtemplatemasters.com/" method="post" class="account">
								<fieldset>

									<p><input type="text" name="log" id="user_login" placeholder="Username*" required="" autocomplete="off"/></p>

									<p><input type="password" name="pwd" id="user_pass" placeholder="Password*" required="" autocomplete="off"/></p>

									<p>
										<input type="checkbox" id="rememberme" class="tmm-checkbox" name="rememberme" value="forever">

										<label for="rememberme">Remember Me</label>

										<button class="button middle right" type="submit">Log In</button>

										<a href="#" class="reset-pass">Reset password</a>
									</p>

								</fieldset>
							</form>

							<i class="action-close" data-dialog-close>Close</i>
						</div>

					</div>
				</div>

				<!-- End Dialog Login/Register Widnows -->

				<!-- - - - - - - - end MAIN - - - - - - - -->

				@include('footer')