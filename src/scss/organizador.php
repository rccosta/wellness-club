<?php include ('header.php'); ?>
<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-bar"></div>
	</div>
	<!-- [ Pre-loader ] end -->
	<div
		id="pcoded"
		class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">
			<!-- [ Header ] start -->
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
			<!-- [ Header ] end -->

			<!-- [ chat user list ] start -->
			<div
				id="sidebar"
				class="users p-chat-user showChat">
				<div class="had-container">
					<div class="p-fixed users-main">
						<div class="user-box">
							<div class="chat-search-box">
								<a class="back_friendlist"> <i class="feather icon-x"></i>
								</a>
								<div class="right-icon-control">
									<form class="form-material">
										<div class="form-group form-primary">
											<input
												type="text"
												name="footer-email"
												class="form-control"
												id="search-friends"
												required=""> <span class="form-bar"></span> <label class="float-label"> <i class="feather icon-search m-r-10"></i>Search Friend
											</label>
										</div>
									</form>
								</div>
							</div>
							<div class="main-friend-list">
								<div
									class="media userlist-box waves-effect waves-light"
									data-id="1"
									data-status="online"
									data-username="Josephin Doe">
									<a
										class="media-left"
										href="#!"> <img
										class="media-object img-radius img-radius"
										src="../files/assets/images/avatar-3.jpg"
										alt="Generic placeholder image ">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="chat-header">Josephin Doe</div>
									</div>
								</div>
								<div
									class="media userlist-box waves-effect waves-light"
									data-id="2"
									data-status="online"
									data-username="Lary Doe">
									<a
										class="media-left"
										href="#!"> <img
										class="media-object img-radius"
										src="../files/assets/images/avatar-2.jpg"
										alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Lary Doe</div>
									</div>
								</div>
								<div
									class="media userlist-box waves-effect waves-light"
									data-id="3"
									data-status="online"
									data-username="Alice">
									<a
										class="media-left"
										href="#!"> <img
										class="media-object img-radius"
										src="<?php echo _URL_SISTEMA; ?>view/assets/images/avatar-4.jpg"
										alt="Generic placeholder image">
										<div class="live-status bg-success"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">Alice</div>
									</div>
								</div>
								<div
									class="media userlist-box waves-effect waves-light"
									data-id="4"
									data-status="offline"
									data-username="Alia">
									<a
										class="media-left"
										href="#!"> <img
										class="media-object img-radius"
										src="../files/assets/images/avatar-3.jpg"
										alt="Generic placeholder image">
										<div class="live-status bg-default"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">
											Alia<small class="d-block text-muted">10 min ago</small>
										</div>
									</div>
								</div>
								<div
									class="media userlist-box waves-effect waves-light"
									data-id="5"
									data-status="offline"
									data-username="Suzen">
									<a
										class="media-left"
										href="#!"> <img
										class="media-object img-radius"
										src="../files/assets/images/avatar-2.jpg"
										alt="Generic placeholder image">
										<div class="live-status bg-default"></div>
									</a>
									<div class="media-body">
										<div class="f-13 chat-header">
											Suzen<small class="d-block text-muted">15 min ago</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- [ chat user list ] end -->

			<!-- [ chat message ] start -->
			<div class="showChat_inner">
				<div class="media chat-inner-header">
					<a class="back_chatBox"> <i class="feather icon-x"></i> Josephin Doe
					</a>
				</div>
				<div class="main-friend-chat">
					<div class="media chat-messages">
						<a
							class="media-left photo-table"
							href="#!"> <img
							class="media-object img-radius img-radius m-t-5"
							src="../files/assets/images/avatar-2.jpg"
							alt="Generic placeholder image">
						</a>
						<div class="media-body chat-menu-content">
							<div class="">
								<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
							</div>
							<p class="chat-time">8:20 a.m.</p>
						</div>
					</div>
					<div class="media chat-messages">
						<div class="media-body chat-menu-reply">
							<div class="">
								<p class="chat-cont">Ohh! very nice</p>
							</div>
							<p class="chat-time">8:22 a.m.</p>
						</div>
					</div>
					<div class="media chat-messages">
						<a
							class="media-left photo-table"
							href="#!"> <img
							class="media-object img-radius img-radius m-t-5"
							src="../files/assets/images/avatar-2.jpg"
							alt="Generic placeholder image">
						</a>
						<div class="media-body chat-menu-content">
							<div class="">
								<p class="chat-cont">can you come with me?</p>
							</div>
							<p class="chat-time">8:20 a.m.</p>
						</div>
					</div>
				</div>
				<div class="chat-reply-box">
					<div class="right-icon-control">
						<form class="form-material">
							<div class="form-group form-primary">
								<input
									type="text"
									name="footer-email"
									class="form-control"
									required=""> <span class="form-bar"></span> <label class="float-label"> <i class="feather icon-search m-r-10"></i>Share Your Thoughts
								</label>
							</div>
						</form>
						<div class="form-icon ">
							<button class="btn btn-success btn-icon  waves-effect waves-light">
								<i class="feather icon-message-circle"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- [ chat message ] end -->
			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					<div class="pcoded-content">
						<!-- [ breadcrumb ] start -->
						<div class="page-header">
							<div class="page-block">
								<div class="row align-items-center">
									<div class="col-md-4">
										<div class="page-header-title">
											<h4 class="m-b-10"><?php echo  $_SESSION['INDEX_USUARIO']->xNome . ' ' .  $_SESSION['INDEX_USUARIO']->xSobrenome ?></h4>
											<small style="color: white;">Seu plano atual é Wellness Basic<a
												style="margin-left: 10px"
												href="#"
												class="btn btn-warning btn-mini btn-round waves-effect waves-light">Alterar Plano</a></small>
										</div>
									</div>
									<div class="col-md-8">
										<div class="row">
											<div class="col-xl-4">
												<div class="card m-b-0">
													<div class="card-block">
														<div class="row align-items-center m-l-0">
															<div class="col-auto">
																<h6
																	style="font-size: 0.800rem;"
																	class="text-muted m-b-10">Peso Inicial</h6>
																<h2
																	style="font-size: 1rem;"
																	class="m-b-0"><?php echo (  $_SESSION['INDEX_USUARIO_META'] == NULL ? '--' : $_SESSION['INDEX_USUARIO_META']->vPesoInicial) ?> Kg</h2>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-4">
												<div class="card m-b-0">
													<div class="card-block">
														<div class="row align-items-center m-l-0">
															<div class="col-auto">
																<h6
																	style="font-size: 0.800rem;"
																	class="text-muted m-b-10">Peso Desejado</h6>
																<h2
																	style="font-size: 1rem;"
																	class="m-b-0">
																	<?php echo (  $_SESSION['INDEX_USUARIO_META'] == NULL ? '--' : $_SESSION['INDEX_USUARIO_META']->vPesoDesejado) ?> Kg <small style="font-size: 70%"> <?php echo (  $_SESSION['INDEX_USUARIO_META'] == NULL ? '' : ('Faltam 22.8 Kg')) ?></small>
																</h2>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-4">
												<div class="card m-b-0">
													<div class="card-block">
														<div class="row align-items-center m-l-0">
															<div class="col-auto">
																<h6
																	style="font-size: 0.800rem;"
																	class="text-muted m-b-10">Pontuação</h6>
																<h2
																	style="font-size: 1rem;"
																	class="m-b-0">
																	<?php echo $_SESSION['INDEX_USUARIO']->nPontos ?> Pts<small style="font-size: 70%"> Sua posição é 1º</small>
																</h2>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="content" class="pcoded-inner-content"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php include ('footer.php'); ?>
	