<aside id="sidebar" class="medium-4 large-4 columns">

					<div id="categories-2" class="widget widget_categories">
						<h3 class="widget-title">Catégories</h3>
						<ul>
							<?php
							$Categorie=DB::table('categorie')
							->orderBy('id', 'desc')
							->limit(10)->get();
							foreach($Categorie as $row)
								{?>
							<?php
							$Projet=DB::table('projet')
							->where('projet.categorie_id', '=', $row->id)
							->count();
							?>
							<li class="cat-item">
								<a href="<?php echo url('categorie');?><?php echo $row->id;?>"><span>{{$row->full_titre}}</span> ({{$Projet}})</a>
							</li>
							<?php } ?>
						</ul>
					</div>

					<div class="widget widget_metro_style">
						<ul class="metro_container">
							<li>
								<a class="icon-megaphone style-3" href="events.html">
									<span>Events</span>
									<i>Events</i>
								</a>
							</li>
							<li>
								<a class="style-1" href="donations.html">
									<span>Get Involved</span>
									<i>Get Involved</i>
								</a>
							</li>
							<li>
								<a class="style-4" href="issues.html">
									<span>Issues and Positions</span>
									<i>Issues and Positions</i>
								</a>
							</li>
							<li>
								<a class="icon-thumbs-up-5 style-2" href="volunteer.html">
									<span>SMS</span>
									<i>SMS</i>
								</a>
							</li>
						</ul>
					</div>

					<div class="widget widget_upcoming_events">
						<h3 class="widget-title">Pensée du Jour</h3>
						@include('citation')
						<ul>
							<li class="has-thumb">

								<div class="event-container">
									<span class="event-date"><?php echo date('d');
										?><b><?php echo date('M');
										?></b></span>

										<div class="event-media">
											<div class="item-overlay">
												<img src="images/pensee.gif" alt="" height="200px">
											</div>

											<div class="event-content with-excerpt">
												<h4 class="event-title">
													<a href=""><?php echo citation_du_jour(); ?>...</a>
												</h4>

												<div class="event-text">
													Pensée du Jour
												</div>

											</div>
										</div>
									</div>

								</li>
							</ul>

						</div>
						<!--/ .widget_upcoming_events-->

						<div class="widget widget_video">

							<div class="image-post">
								<video src="media/yanfoma.mp4" height="220" width="100%"></video>
							</div>
							<h4 class="widget-title">Video Yanfoma</h4>
						</div>

						<div class="widget widget_accordion">
							<ul class="accordion">
								<li class="accordion-navigation">
									<a href="home-2.html#" class="acc-trigger" data-mode="">Why choose us?</a>

									<div class="content">
										Laboris omnis condimentum ante nam blandit. Aspernatur provident facilis assumenda? Sociis
										vestibulum iure blandit semper faucibus? Volutpat provident corporis earum at? Vivamus non
										porro. Euismod, tempor! Officia placerat nullam earum.
									</div>
								</li>
								<li class="accordion-navigation">
									<a href="home-2.html#" class="acc-trigger" data-mode="">Suspendisse potenti sit</a>

									<div class="content">
										Pulvinar facilisi lectus aspernatur? Asperiores minus tempus nihil illum veniam rutrum
										facere, incidunt dolores ullam ullam elementum dicta corrupti quos? Faucibus! Taciti illum,
										mauris? Placerat aliquet etiam, tempora! Itaque, natoque.
									</div>
								</li>
								<li class="accordion-navigation">
									<a href="home-2.html#" class="acc-trigger" data-mode="">Praesent amet rhoncus</a>

									<div class="content">
										Voluptate molestiae, aute? Earum ex vitae nibh necessitatibus, saepe, mollit, odit earum
										porttitor, vitae quam ab proident integer, ullamco ducimus omnis veniam molestie! Ullamco,
										feugiat sociosqu diam id aliquam? Vero.
									</div>
								</li>
							</ul>
						</div>

						<div class="widget widget_recent_posts">
							<div class="tabs-holder">

								<ul class="tabs-nav">
									<li><h3>Popular</h3></li>
									<li><h3>Latest</h3></li>
									<li><h3>Commentaires</h3></li>
								</ul>
								<!--/ .tabs-nav-->

								<div class="tabs-container">

									<div class="tab-content">

										<div class="recent-post">

											<div class="post-media">
												<a href="single-post.html" class="item-overlay">
													<img alt="" src="images/blog/small/21_blog.jpg"/>
												</a>
											</div>
											<!--/ .entry-media-->

											<div class="post-holder">
												<h4 class="post-title">
													<a href="single-post.html">
														Ukraine urges EU to keep up sanctions pressur ...
													</a>
												</h4>

												<div class="entry-meta">
													<span class="posted-on"><a href="home-2.html#">20.03.2015</a></span>
													<span class="comments-link"><a href="home-2.html#">1</a></span>
												</div>
											</div>
											<!--/ .post-holder-->

										</div>
										<!--/ .recent-post-->

										<div class="recent-post">

											<div class="post-media">
												<a href="single-post.html" class="item-overlay">
													<img alt="" src="images/blog/small/20_blog.jpg"/>
												</a>
											</div>
											<!--/ .entry-media-->

											<div class="post-holder">
												<h4 class="post-title">
													<a href="single-post.html">
														Congue iure curabitur incididunt consequat ...
													</a>
												</h4>

												<div class="entry-meta">
													<span class="posted-on"><a href="home-2.html#">22.03.2015</a></span>
													<span class="comments-link"><a href="home-2.html#">5</a></span>
												</div>
											</div>
											<!--/ .post-holder-->

										</div>
										<!--/ .recent-post-->

										<div class="recent-post">

											<div class="post-media">
												<a href="single-post.html" class="item-overlay">
													<img alt="" src="images/blog/small/11_blog.jpg"/>
												</a>
											</div>

											<div class="post-holder">
												<h4 class="post-title">
													<a href="single-post.html">
														Ornare, netus, repellendus, pretium fermentum ...
													</a>
												</h4>

												<div class="entry-meta">
													<span class="posted-on"><a href="home-2.html#">22.03.2015</a></span>
													<span class="comments-link"><a href="home-2.html#">2</a></span>
												</div>
											</div>
											<!--/ .post-holder-->

										</div>
										<!--/ .recent-post-->

									</div>
									<!--/ .tab-content-->

									<div class="tab-content">

										<div class="recent-post">

											<div class="post-media">
												<a href="single-post.html" class="item-overlay">
													<img alt="" src="images/blog/small/20_blog.jpg"/>
												</a>
											</div>
											<!--/ .entry-media-->

											<div class="post-holder">
												<h4 class="post-title">
													<a href="single-post.html">
														Congue iure curabitur incididunt consequat ...
													</a>
												</h4>

												<div class="entry-meta">
													<span class="posted-on"><a href="home-2.html#">22.03.2015</a></span>
													<span class="comments-link"><a href="home-2.html#">5</a></span>
												</div>
											</div>
											<!--/ .post-holder-->

										</div>
										<!--/ .recent-post-->

										<div class="recent-post">

											<div class="post-media">
												<a href="single-post.html" class="item-overlay">
													<img alt="" src="images/blog/small/15_blog.jpg"/>
												</a>
											</div>
											<!--/ .entry-media-->

											<div class="post-holder">
												<h4 class="post-title">
													<a href="single-post.html">
														Around the world on solar power ...
													</a>
												</h4>

												<div class="entry-meta">
													<span class="posted-on"><a href="home-2.html#">22.03.2015</a></span>
													<span class="comments-link"><a href="home-2.html#">1</a></span>
												</div>
											</div>
											<!--/ .post-holder-->

										</div>
										<!--/ .recent-post-->

										<div class="recent-post">

											<div class="post-media">
												<a href="single-post.html" class="item-overlay">
													<img alt="" src="images/blog/small/11_blog.jpg"/>
												</a>
											</div>
											<!--/ .entry-media-->

											<div class="post-holder">
												<h4 class="post-title">
													<a href="single-post.html">
														Ornare, netus, repellendus, pretium fermentum ...
													</a>
												</h4>

												<div class="entry-meta">
													<span class="posted-on"><a href="home-2.html#">22.03.2015</a></span>
													<span class="comments-link"><a href="home-2.html#">2</a></span>
												</div>
											</div>
											<!--/ .post-holder-->

										</div>
										<!--/ .recent-post-->

									</div>
									<!--/ .tab-content-->

									<div class="tab-content">
									<?php
										$Commentaire=DB::table('commentaire')
										->orderBy('id', 'desc')
										->limit(3)->get();
										foreach($Commentaire as $row)
											{?>

										
										<div class="recent-post">

											<div class="post-media">
												<a href="single-post.html" class="item-overlay">
													<img alt="" src="images/avatar/{{$row->avatar}}"/>
												</a>
												</a>
											</div>
											<!--/ .entry-media-->

											<div class="post-holder">
												<h4 class="post-title">
												<p align="justify">
													<?php echo str_limit($row->contenu, 50); ?>
												</p>
												</h4>

												<div class="entry-meta">
													<span class="posted-on"><a href="home-2.html#">{{$row->nom}}</a></span>
													<span class="comments-link"><a href="home-2.html#">{{$row->created_at}}</a></span>
												</div>
											</div>
											<!--/ .post-holder-->

										</div>
										<!--/ .recent-comment-->
										<?php } ?>
										
									</div>
									<!--/ .tab-content-->

								</div>
								<!--/ .tabs-container-->

							</div>
							<!--/ .tabs-holder-->

						</div>
						<!--/ .widget-container-->

					</aside>