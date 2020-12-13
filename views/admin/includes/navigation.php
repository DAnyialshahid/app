
  <aside class="main-sidebar">
   <section class="sidebar">
     <!--<a href="<?= base_url()?>" target="_blank"><img src="<?= base_url('assets/uploads/required/'.WEB_LOGO())?>" class="img-responsive" style="max-width:72%; margin:auto"/></a>-->
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATIONS</li>
        <li class="<?= isLinkActive($activeLink, array('dashboard'))?>">
          <a href="<?= base_url('control_panel/')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        
		
		<li class="treeview <?= isLinkActive($activeLink, array('pages_list', 'edit_page'))?>">
          <a href="#">
           <i class="fa fa-th"></i> <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="<?= base_url('control_panel/pages')?>"><i class="fa fa-circle-o"></i> View List</a></li>
          </ul>
        </li>
		
		<li class="treeview <?= isLinkActive($activeLink, array('add_category', 'category_list', 'update_category'))?>">
          <a href="#">
           <i class="fa fa-th"></i> <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="<?= base_url('control_panel/taxonomies/category/add')?>"><i class="fa fa-circle-o"></i> Add New</a></li>
           <li><a href="<?= base_url('control_panel/taxonomies/category/list')?>"><i class="fa fa-circle-o"></i> View List</a></li>
          </ul>
        </li>
		
		
		<li class="treeview <?= isLinkActive($activeLink, array('add_store', 'store_list', 'update_store', 'assign-categories'))?>">
          <a href="#">
           <i class="fa fa-th"></i> <span>Stores</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="<?= base_url('control_panel/taxonomies/store/add')?>"><i class="fa fa-circle-o"></i> Add New</a></li>
           <li><a href="<?= base_url('control_panel/taxonomies/store/list')?>"><i class="fa fa-circle-o"></i> View List</a></li>
		   <li><a href="<?= base_url('control_panel/taxonomies/store/assign-categories')?>"><i class="fa fa-circle-o"></i> Assign Categories</a></li>
          </ul>
        </li>
		
		
		<li class="treeview <?= isLinkActive($activeLink, array('taxonomy_coupons_sorting','add_coupon', 'coupons_list', 'update_coupon', 'sorting_select_option', 'coupons_sorting_select_Store', 'coupons_sorting_select_category', 'new_coupon_sorting', 'featured_coupons_sorting', 'top_coupon_sorting'))?>">
          <a href="#">
           <i class="fa fa-th"></i> <span>Coupons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
           <li><a href="<?= base_url('control_panel/coupons/add/')?>"><i class="fa fa-circle-o"></i> Add New</a></li>
           <li><a href="<?= base_url('control_panel/coupons/list')?>"><i class="fa fa-circle-o"></i> View List</a></li>
		   <li><a href="<?= base_url('control_panel/coupons/sorting')?>"><i class="fa fa-circle-o"></i> Coupons Sorting</a></li>
          </ul>
        </li>
		
		
		
		
		
		<li class="treeview <?= isLinkActive($activeLink, array('siteconfig', 'subscribers_list', 'update_subscriber', 'reviews_list', 'review_page'))?>">
          <a href="#">
           <i class="fa fa-th"></i> <span>Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="<?= base_url('control_panel/siteconfig')?>"><i class="fa fa-circle-o"></i>Web Settings</a></li>
			<li><a href="<?= base_url('control_panel/users/subscriber')?>"><i class="fa fa-circle-o"></i>Subscriber</a></li>
			<li><a href="<?= base_url('control_panel/reviews/')?>"><i class="fa fa-circle-o"></i>Web Reviews</a></li>
         </ul>
        </li>
		
		<li class="treeview <?= isLinkActive($activeLink, array('developer_name'))?>">
          <a href="#">
           <i class="fa fa-th"></i> <span>Developer Mode</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="<?= base_url('control_panel/developer_option/head')?>"><i class="fa fa-circle-o"></i>Site Header</a></li>
            <li><a href="<?= base_url('control_panel/developer_option/footer')?>"><i class="fa fa-circle-o"></i>Site Footer</a></li>
			
           
          </ul>
        </li>
		
		
		
		
		<li class="treeview <?= isLinkActive($activeLink, array('add_new_user', 'users_list', 'edit_user'))?>">
          <a href="#">
           <i class="fa fa-th"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="<?= base_url('control_panel/users/add')?>"><i class="fa fa-circle-o"></i>Add New</a></li>
           <li><a href="<?= base_url('control_panel/users/list')?>"><i class="fa fa-circle-o"></i>All Users</a></li>
		   <li><a href="<?= base_url('control_panel/users/edit/'.getUserId())?>"><i class="fa fa-circle-o"></i>Your Profile</a></li>
		 <!--  <li><a href="<?= base_url('control_panel/products')?>"><i class="fa fa-circle-o"></i>Roles Restrictions</a></li>-->
          
          </ul>
        </li>
		
		
		<li class="">
          <a href="<?= base_url()?>" target="_blank">
           <i class="fa fa-th"></i> <span>Visit Wesbite</span>
           </a>
        </li>
		
		<li class="">
          <a href="<?= base_url('auth/logout')?>">
           <i class="fa fa-th"></i> <span>Logout (<?= $this->session->userdata('username')?>)</span>
           </a>
        </li>
		
		
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  