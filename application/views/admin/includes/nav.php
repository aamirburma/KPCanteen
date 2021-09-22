<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
	</ul>
	<ul class="navbar-nav ml-auto">
		<!-- Messages Dropdown Menu -->
		<li class="nav-item">
			<a class="nav-link " role="button"></a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-danger" href="<?= base_url(); ?>admin/logout.html" data-slide="true" href="#"
				role="button">
				<i class="ion-log-out" aria-hidden="true"></i> <span style="font-weight: bolder;">Signout</span>
			</a>
		</li>
	</ul>
	<?php
    /*
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url() ?>admin" class="nav-link">Home</a>
	</li>
	<li class="nav-item d-none d-sm-inline-block">
		<a href="#" class="nav-link">Contact</a>
	</li>
	</ul>

	<!-- SEARCH FORM -->
	<form class="form-inline ml-3">
		<div class="input-group input-group-sm">
			<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
			<div class="input-group-append">
				<button class="btn btn-navbar" type="submit">
					<i class="fas fa-search"></i>
				</button>
			</div>
		</div>
	</form>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<!-- Messages Dropdown Menu -->
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<i class="far fa-comments"></i>
				<span class="badge badge-danger navbar-badge">3</span>
			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<a href="#" class="dropdown-item">
					<!-- Message Start -->
					<div class="media">
						<img src="<?= base_url() ?>assets/admin/dist/img/user1-128x128.jpg" alt="User Avatar"
							class="img-size-50 mr-3 img-circle">
						<div class="media-body">
							<h3 class="dropdown-item-title">
								Brad Diesel
								<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
							</h3>
							<p class="text-sm">Call me whenever you can...</p>
							<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
						</div>
					</div>
					<!-- Message End -->
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<!-- Message Start -->
					<div class="media">
						<img src="<?= base_url() ?>assets/admin/dist/img/user8-128x128.jpg" alt="User Avatar"
							class="img-size-50 img-circle mr-3">
						<div class="media-body">
							<h3 class="dropdown-item-title">
								John Pierce
								<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
							</h3>
							<p class="text-sm">I got your message bro</p>
							<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
						</div>
					</div>
					<!-- Message End -->
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<!-- Message Start -->
					<div class="media">
						<img src="<?= base_url() ?>assets/admin/dist/img/user3-128x128.jpg" alt="User Avatar"
							class="img-size-50 img-circle mr-3">
						<div class="media-body">
							<h3 class="dropdown-item-title">
								Nora Silvester
								<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
							</h3>
							<p class="text-sm">The subject goes here</p>
							<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
						</div>
					</div>
					<!-- Message End -->
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
			</div>
		</li>
		<!-- Notifications Dropdown Menu -->
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<i class="far fa-bell"></i>
				<span class="badge badge-warning navbar-badge">15</span>
			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<span class="dropdown-item dropdown-header">15 Notifications</span>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fas fa-envelope mr-2"></i> 4 new messages
					<span class="float-right text-muted text-sm">3 mins</span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fas fa-users mr-2"></i> 8 friend requests
					<span class="float-right text-muted text-sm">12 hours</span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fas fa-file mr-2"></i> 3 new reports
					<span class="float-right text-muted text-sm">2 days</span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
			</div>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
				<i class="fas fa-th-large"></i>
			</a>
		</li>
	</ul>
	*/
	?>
</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url() ?>admin" class="brand-link">
		<img src="<?= base_url() ?>assets/admin/images/KP.png" alt="KP.png" class="brand-image img-circlew elevation-3"
			style="opacity: .8">
		<span class="brand-text font-weight-light"><b>KP</b> Canteen &nbsp;<i class="fas fa-pizza-slice"></i>
		</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url() ?>assets/admin/images/<?= $this->session->userdata('photo'); ?>"
					alt="<?= $this->session->userdata('photo'); ?>" class="img-circle elevation-2">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?= $this->session->userdata('name'); ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<?php
                /*
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li>
                */
                ?>
				<li class="nav-header">Common</li>
				<li class="nav-item">
					<a href="<?= base_url(); ?>admin"
						class="nav-link <?php echo  $title == 'Dashboard' ? 'active' : ''; ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Dashboard</p>
					</a>
				</li>

				<?php if( in_array($this->session->userdata('type'),['1','2']) ): ?>
				<li class="nav-header">Canteen Management</li>
				<li
					class="nav-item has-treeview <?php echo  in_array($title,['Food Category','']) ? 'menu-open' : ''; ?> ">
					<a href="javascript:void(0)"
						class="nav-link <?php echo  in_array($title,['Food Category','']) ? 'active' : ''; ?>">
						<i class="nav-icon fas fa-pizza-slice"></i>
						<p>
							Canteen Managent
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url(); ?>admin/food-category.html"
								class="nav-link <?php echo  $title == 'Food Category' ? 'active' : ''; ?>">
								<i class="fas fa-list nav-icon"></i>
								<p>Food Category</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link <?php echo  $title == 'Career Applications' ? 'active' : ''; ?>">
								<i class="fas fa-hamburger nav-icon"></i>
								<p>Food Sub Category</p>
							</a>
						</li>
					</ul>
				</li>
				<?php endif; ?>
				<li class="nav-header">Super Admin</li>
				<li
					class="nav-item has-treeview <?php echo  $title == 'Career Manage' ? 'menu-open' : ''; ?> <?php echo  $title == 'Career Applications' ? 'menu-open' : ''; ?> ">
					<a href="javascript:void(0)"
						class="nav-link <?php echo  $title == 'Career Manage' ? 'active' : ''; ?> <?php echo  $title == 'Career Applications' ? 'active' : ''; ?>">
						<i class="nav-icon fas fa-users"></i>
						<p>
							Users Management
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url(); ?>admin/"
								class="nav-link <?php echo  $title == 'User Management' ? 'active' : ''; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Career Manage</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link <?php echo  $title == 'Career Applications' ? 'active' : ''; ?>">
								<i class="far fa-file nav-icon"></i>
								<p>View Applications</p>
							</a>
						</li>
					</ul>
				</li>
				<!-- <li class="nav-item">
                    <a href="<?= base_url(); ?>admin/career.html" class="nav-link <?php echo  $title == 'Career' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>Career</p>
                    </a>
                </li> -->
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
