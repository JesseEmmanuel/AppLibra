<!-- START: Body-->

<!-- START: Pre Loader-->
<!--<div class="se-pre-con">
	<div class="loader"></div>
</div>-->
<!-- END: Pre Loader-->
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); 
session_start();
?>

<body id="main-container" class="default compact-menu">

	<!-- START: Header-->
	<div id="header-fix" class="header fixed-top">
		<div class="site-width">
			<nav class="navbar navbar-expand-lg  p-0">
				<div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">
					<a href="#" class="horizontal-logo">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30"
							zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="40"
							preserveAspectRatio="xMidYMid meet" version="1.0">
							<defs>
								<clipPath id="a7e8b05aae">
									<path d="M 0.484375 7 L 12 7 L 12 26.347656 L 
						0.484375 26.347656 Z M 0.484375 7 " clip-rule="nonzero" />
								</clipPath>
								<clipPath id="864479dfb5">
									<path d="M 18 7 L 29.515625 7 L 29.515625 26.347656 
						L 18 26.347656 Z M 18 7 " clip-rule="nonzero" />
								</clipPath>
								<clipPath id="1244f345ae">
									<path d="M 7 2.394531 L 23 2.394531 L 23 26 L 7 26 Z M 7 
						2.394531 " clip-rule="nonzero" />
								</clipPath>
							</defs>
							<g clip-path="url(#a7e8b05aae)">
								<path fill="#008037" d="M 2.132812 20.828125 L 2.128906 7.671875 
						C 1.625 7.582031 1.085938 7.527344 0.492188 7.527344 L 0.492188 22.261719 C 0.492188 22.261719 7.066406 23.039062 11.492188 26.347656 C 9.449219 
						23.96875 6.394531 21.992188 2.132812 20.828125 " fill-opacity="1" fill-rule="nonzero" />
							</g>
							<path fill="#21ab4f" d="M 5.453125 17.953125 L 5.441406 
						5.699219 C 4.929688 5.445312 4.375 5.226562 3.765625 5.046875 L 3.765625 19.78125 C 3.765625 19.78125 9.089844 21.210938 12.742188 25.417969 
						C 11.066406 22.527344 8.691406 19.609375 5.453125 17.953125 " fill-opacity="1" fill-rule="nonzero" />
							<g clip-path="url(#864479dfb5)">
								<path fill="#008037"
									d="M 27.867188 20.828125 L 27.871094 7.671875 C 28.375 7.582031 28.914062 7.527344 29.507812 7.527344 L 29.507812 22.261719 C 29.507812 22.261719 22.933594 23.039062 18.507812 26.347656 C 20.550781 23.96875 23.605469 21.992188 27.867188 20.828125 "
									fill-opacity="1" fill-rule="nonzero" />
							</g>
							<path fill="#21ab4f"
								d="M 24.546875 17.953125 L 24.558594 5.699219 C 25.070312 5.445312 25.625 5.226562 26.234375 5.046875 L 26.234375 19.78125 C 26.234375 19.78125 20.910156 21.210938 17.257812 25.417969 C 18.933594 22.527344 21.308594 19.609375 24.546875 17.953125 "
								fill-opacity="1" fill-rule="nonzero" />
							<g clip-path="url(#1244f345ae)">
								<path fill="#7ed957" d="M 15 10.707031 C 15 10.707031 12.828125 6.101562 7.078125 2.394531 L 7.078125 17.128906 C 7.078125 17.128906 11.378906 19.996094 14.738281 25.707031 L 14.738281 17.964844 C 14.285156 17.859375 13.949219 17.363281 13.949219 16.9375 C 13.949219 16.429688 14.417969 15.878906 15 15.878906 C 15.582031 15.878906 16.050781 16.429688 16.050781 16.9375 C 16.050781 17.363281 15.714844 17.859375 15.261719 17.964844 L 15.261719 25.707031 C 18.621094 19.996094 22.921875 17.128906 22.921875 17.128906 L 22.921875 2.394531 C 
						17.171875 6.101562 15 10.707031 15 10.707031 " fill-opacity="1" fill-rule="nonzero" />
							</g>
						</svg>
						<span class="h5 align-self-center mb-0 ml-auto text-success">LIBRA</span>
					</a>
				</div>
				<div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
					<a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
				</div>
				<div class="row align-items-center">
					<div class="col align-self-center">
						<span class="h5 align-self-center mb-0 ml-auto text-success">Good Day! <?php echo $_SESSION['accountUserName']; ?></span>
					</div>
				</div>
				<div class="navbar-right ml-auto h-100">
					<ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
						<li class="d-inline-block align-self-center  d-block d-lg-none">
							<a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i
									class="icon-magnifier h4"></i>
							</a>
						</li>
						<li class="dropdown align-self-center">
							<a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i
									class="icon-reload h4"></i>
								<span class="badge badge-default"> <span class="ring">
									</span><span class="ring-point">
									</span> </span>
							</a>
							<ul class="dropdown-menu dropdown-menu-right border  py-0">
								<li>
									<a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
										href="#">
										<div class="media">
											<img src="dist/images/author.jpg" alt=""
												class="d-flex mr-3 img-fluid rounded-circle">
											<div class="media-body">
												<p class="mb-0">john</p>
												<span class="text-success">New user registered.</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
										href="#">
										<div class="media">
											<img src="dist/images/author2.jpg" alt=""
												class="d-flex mr-3 img-fluid rounded-circle">
											<div class="media-body">
												<p class="mb-0">Peter</p>
												<span class="text-success">Server #12 overloaded.</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
										href="#">
										<div class="media">
											<img src="dist/images/author3.jpg" alt=""
												class="d-flex mr-3 img-fluid rounded-circle">
											<div class="media-body">
												<p class="mb-0">Bill</p>
												<span class="text-danger">Application error.</span>
											</div>
										</div>
									</a>
								</li>

								<li><a class="dropdown-item text-center py-2" href="#"> See All Tasks <i
											class="icon-arrow-right pl-2 small"></i></a></li>
							</ul>
						</li>
						<li class="dropdown align-self-center d-inline-block">
							<a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i
									class="icon-bell h4"></i>
								<span class="badge badge-default"> <span class="ring">
									</span><span class="ring-point">
									</span> </span>
							</a>
							<ul class="dropdown-menu dropdown-menu-right border   py-0">
								<li>
									<a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
										href="#">
										<div class="media">
											<img src="dist/images/author.jpg" alt=""
												class="d-flex mr-3 img-fluid rounded-circle w-50">
											<div class="media-body">
												<p class="mb-0 text-success">john send a message</p>
												12 min ago
											</div>
										</div>
									</a>
								</li>
								<li>
									<a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
										href="#">
										<div class="media">
											<img src="dist/images/author2.jpg" alt=""
												class="d-flex mr-3 img-fluid rounded-circle">
											<div class="media-body">
												<p class="mb-0 text-danger">Peter send a message</p>
												15 min ago
											</div>
										</div>
									</a>
								</li>
								<li>
									<a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
										href="#">
										<div class="media">
											<img src="dist/images/author3.jpg" alt=""
												class="d-flex mr-3 img-fluid rounded-circle">
											<div class="media-body">
												<p class="mb-0 text-warning">Bill send a message</p>
												5 min ago
											</div>
										</div>
									</a>
								</li>
								<li>
									<a class="dropdown-item text-center py-2" href="#"> Read All Message
										<i class="icon-arrow-right pl-2 small"></i>
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown user-profile align-self-center d-inline-block">
							<a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false">
								<div class="media">
									<img src="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/uploads/images/<?php echo $_SESSION['profile_image']; ?>"
										alt="" class="d-flex img-fluid rounded-circle" width="29">
								</div>
							</a>
							<div class="dropdown-menu border dropdown-menu-right p-0">
								<a href="" class="dropdown-item px-2 align-self-center d-flex">
									<span class="icon-settings mr-2 h6 mb-0"></span> Profile Account</a>
								<div class="dropdown-divider"></div>
								<a href="<?php $_SERVER['HTTP_HOST']; ?>/AppLibra/functions/signout.php"
									class="dropdown-item px-2 text-success align-self-center d-flex">
									<span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- END: Header-->
	<!-- START: Main Menu-->
	<div class="sidebar">
		<div class="site-width">
			<!-- START: Menu-->
			<ul id="side-menu" class="sidebar-menu">
				<li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Home</a>
					<ul>
						<li class="<?= ($activePage == 'library') ? 'active':'' ?>"><a href="library.php"><i
									class="fas fa-search"></i> Browse
								for books</a></li>
						<li class="<?= ($activePage == 'series') ? 'active':'' ?>"><a href="series.php"><i
									class="fas fa-swatchbook"></i> Book Series</a></li>
						<li class="<?= ($activePage == 'suggestion') ? 'active':'' ?>"><a href="suggestion.php"><i
									class="fas fa-star"></i> Suggested for you</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#"><i class="fas fa-boxes mr-1"></i> Collections</a>
					<ul>
						<li class="<?= ($activePage == 'collections') ? 'active':'' ?>"><a href="collections.php"><i
									class="fas fa-tasks"></i> Your Collections</a></li>
						<li class="<?= ($activePage == 'upload') ? 'active':'' ?>"><a href="upload.php"><i
									class="fas fa-cloud-upload-alt"></i> Upload Books</a></li>
						<li class="<?= ($activePage == 'bookmarks') ? 'active':'' ?>"><a href="bookmarks.php"><i
									class="fas fa-bookmark"></i> Bookmarks</a></li>
					</ul>
				</li>
			</ul>
			<!-- END: Menu-->
		</div>
	</div>
	<!-- END: Main Menu-->