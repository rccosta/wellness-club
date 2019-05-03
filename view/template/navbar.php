<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">
					<div class="navbar-logo">
						<a href="#/b2c/index/"> <img
							class="img-fluid"
							src="<?php echo _URL_SISTEMA; ?>view/assets/images/logo.png"
							alt="Theme-Logo"
							style="height: 40px;" />
						</a> <a class="mobile-options waves-effect waves-light"> <i class="feather icon-more-horizontal"></i>
						</a>
					</div>
					<div class="navbar-container container-fluid">
						<ul class="nav-right">
							<li class="header-notification">
								<div class="dropdown-primary dropdown">
									<div
										class="dropdown-toggle"
										data-toggle="dropdown">
										<i class="feather icon-bell"></i> <span class="badge bg-c-red">5</span>
									</div>
									<ul
										class="show-notification notification-view dropdown-menu"
										data-dropdown-in="fadeIn"
										data-dropdown-out="fadeOut">
										<li>
											<h6>Notifications</h6> <label class="label label-danger">New</label>
										</li>
										<li>
											<div class="media">
												<img
													class="img-radius"
													src="<?php echo _URL_SISTEMA; ?>view/assets/images/avatar-4.jpg"
													alt="Generic placeholder image">
												<div class="media-body">
													<h5 class="notification-user">Mauricio Grechi</h5>
													<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
													<span class="notification-time">30 minutes ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="media">
												<img
													class="img-radius"
													src="../files/assets/images/avatar-3.jpg"
													alt="Generic placeholder image">
												<div class="media-body">
													<h5 class="notification-user">Joseph William</h5>
													<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
													<span class="notification-time">30 minutes ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="media">
												<img
													class="img-radius"
													src="<?php echo _URL_SISTEMA; ?>view/assets/images/avatar-4.jpg"
													alt="Generic placeholder image">
												<div class="media-body">
													<h5 class="notification-user">Sara Soudein</h5>
													<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
													<span class="notification-time">30 minutes ago</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="header-notification">
								<div class="dropdown-primary dropdown">
									<div
										class="displayChatbox dropdown-toggle"
										data-toggle="dropdown">
										<i class="feather icon-message-square"></i> <span class="badge bg-c-green">3</span>
									</div>
								</div>
							</li>
							<li class="user-profile header-notification">
								<div class="dropdown-primary dropdown">
									<div
										class="dropdown-toggle"
										data-toggle="dropdown">
										<img
											src="<?php echo _URL_SISTEMA; ?>view/assets/images/avatar-4.jpg"
											class="img-radius"
											alt="User-Profile-Image"> <span><?php echo $_SESSION['INDEX_USUARIO']->xNome ?></span> <i class="feather icon-chevron-down"></i>
									</div>
									<ul
										class="show-notification profile-notification dropdown-menu"
										data-dropdown-in="fadeIn"
										data-dropdown-out="fadeOut">
										<li><a href="#!"> <i class="feather icon-user"></i> Meus Dados
										</a></li>
										<li><a href="user-profile.html"> <i class="feather icon-activity"></i> Minhas Metas
										</a></li>
										<li><a href="email-inbox.html"> <i class="feather icon-star"></i> Ranking
										</a></li>
										<li><a href="#/b2c/videoteca/"> <i class="feather icon-play"></i> Videoteca
										</a></li>
										<li><a href="auth-normal-sign-in.html"> <i class="feather icon-log-out"></i> Sair

										</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>