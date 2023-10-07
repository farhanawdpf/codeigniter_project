
<div class="left-side-bar">
			<div class="brand-logo">
				<a href="<?php echo site_url(); ?>/dashboard">
					<img src="<?php echo base_url(); ?>/backend/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
					<img
						src="<?php echo base_url(); ?>/backend/vendors/images/deskapp-logo-white.svg"
						alt=""
						class="light-logo"
					/>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						<li>
							<a href="<?php echo site_url(); ?>/dashboard" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-house"></span
								><span class="mtext">Dashboard</span>
							</a>
						</li>
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-textarea-resize"></span
								><span class="mtext">Category</span>
							</a>
							<ul class="submenu">
								<li><a href="<?php echo site_url(); ?>/admin/example-page">Add Category</a></li>
								<li><a href="<?php echo site_url(); ?>/admin/example-auth">Manage Category</a></li>
							</ul>
						</li>

                        <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-textarea-resize"></span
								><span class="mtext">Product</span>
							</a>
							<ul class="submenu">
								<li><a href="<?php echo site_url(); ?>/admin/add-product">Add Product</a></li>
								<li><a href="<?php echo site_url(); ?>/admin/product">Manage Product</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-textarea-resize"></span
								><span class="mtext">user</span>
							</a>
							<ul class="submenu">
								<li><a href="<?php echo site_url(); ?>/admin/add-user">Add User</a></li>
								<li><a href="<?php echo site_url(); ?>/admin/user">Manage User</a></li>
							</ul>
						</li>
						
						<li>
							<a href="invoice.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-receipt-cutoff"></span
								><span class="mtext">Invoice</span>
							</a>
						</li>
						<li>
							<div class="dropdown-divider"></div>
						</li>

					</ul>
				</div>
			</div>
		</div>