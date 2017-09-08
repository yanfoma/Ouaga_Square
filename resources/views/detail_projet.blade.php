@include('header')

<!-- - - - - - - - MAIN  - - - - - - - -->

<main id="content" class="row">

	<div class="large-12 columns">
		<div class="page-title">
			<h1 class="font-small">Détails du projet</h1>

		</div>
	</div>

	<div id="main" class="medium-8 large-8 columns">

		<div class="event">
			<?php
			$Phase=DB::table('phase')
			->where('id', '=', $datas->phase_id)
			->get();

			$Categorie=DB::table('categorie')
			->where('id', '=', $datas->categorie_id)
			->get();

			$Responsable=DB::table('responsable')
			->where('id', '=', $datas->responsable_id)
			->get();

			$Executeur=DB::table('executeur')
			->where('id', '=', $datas->executeur_id)
			->get();

			foreach($Phase as $phase)
			foreach($Categorie as $categorie)
			foreach($Responsable as $responsable)
			foreach($Executeur as $executeur)
			{?>

			<span class="event-date">{{$datas->created_at->format('d')}}<b>{{$datas->created_at->format('M/Y')}}</b></span>

			<a href="single-event.html#" class="image-post single-image-link item-overlay">
				<img src="images/events/01_event.jpg" alt="">
			</a>

			<h3 class="event-title">{{ $datas->full_titre}}</h3>

			<p align="justify">{{$datas->contenu}}</p>

			<div class="event-details boxed">
				<dl>
					<dt class="event-title">Details</dt>
					<dt>Début</dt>
					<dd>{{$datas->created_at}}</dd>

					<dt>Délai</dt>
					<dd>{{$datas->delai}} mois</dd>

					<dt>Cout</dt>
					<dd>{{$datas->cout}} FCFA</dd>
				</dl>

				<dl>
					<dt class="event-title">Exécuteur</dt>

					<dt>Identité</dt>
					<dd>{{$executeur->libelle}}</dd>

					<dt>Adresse</dt>
					<dd>{{$executeur->adresse}}</dd>

				</dl>

			</div>
			<!--/ .event-details-->

			<div class="event-details boxed">
				<dl>
					<dt class="event-title">Catégorie du projet</dt>

					<dt>Libellé</dt>
					<dd>{{$categorie->full_titre}}</dd>

				</dl>

				<dl>
					<dt class="event-title">Responsable</dt>

					<dt>Identité</dt>
					<dd>{{$responsable->libelle}}</dd>

				</dl>

			</div>
			<!--/ .row-->
			<?php } ?>

		</div>
		<!--/ .event-->

		<div class="single-nav clearfix">

			<a href="single-event.html#" class="prev">
				Previous article
				<b>Zagreb Summit on Cross-Continental Cooperation in South-Eastern Europe</b>
			</a>
			<a href="single-event.html#" class="next">
				Next article
				<b>Berlin Economic Forum 2015</b>
			</a>

		</div>

		<a href="single-event.html#" class="back-link">All events</a>

		<div class="clear"></div>

		<div id="respond" class="comment-respond">
			<h3 id="reply-title" class="comment-reply-title">Leave a Reply</h3>
			<form action="single-event.html#" method="post" id="commentform" class="comment-form">
				<div class="row">
					<div class="large-12 columns">
						<fieldset class="comment-form-author">
							<input id="author" name="author" type="text" value="" size="30" required=""
							placeholder="Your Name *">
						</fieldset>
						<fieldset class="comment-form-email">
							<input id="email" name="email" type="email" value="" size="30" required=""
							placeholder="Your Email *">
						</fieldset>
						<fieldset class="comment-form-url">
							<input id="url" name="url" type="url" value="" size="30" placeholder="Website">
						</fieldset>
					</div>
				</div>
				<fieldset class="comment-form-comment">
					<textarea cols="30" rows="10" required="" id="comment" name="comment"
					placeholder="Your Message *"></textarea>
				</fieldset>
				<p class="form-submit">
					<input name="submit" type="submit" id="submit" class="submit" value="Submit">
				</p>
			</form>
		</div>

	</div>
	<!--/ #main-->

	@include('sidebar')
	<!--/ #sidebar-->

</main>
<!--/ #content-->

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
						<a href="single-event.html#" class="button middle dialog-login-button">Log In</a>
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

						<a href="single-event.html#" class="reset-pass">Reset password</a>
					</p>

				</fieldset>
			</form>

			<i class="action-close" data-dialog-close>Close</i>
		</div>

	</div>
</div>

<!-- End Dialog Login/Register Widnows -->

<!-- - - - - - - - END MAIN  - - - - - - - -->

@include('footer')