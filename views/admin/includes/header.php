
<div class="loadings" style="display:none;z-index:99999">Loading&#8230;</div>
<input type="hidden"  value="<?= base_url()?>" class="base_url"/>
	<header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url()?>" class="logo" target="_blank">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><?php
		$words = explode(" ", WEB_NAME());
		$acronym = "";

		foreach ($words as $w) {
			echo $w;
		  $acronym .= $w;
		}
	  
		echo $acronym;
	  ?>
	  
	  </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><?= '<b>'.WEB_NAME().'</b>'?></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="<?= base_url('assets/admin/')?>#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="<?= base_url('assets/admin/')?>#" class="dropdown-toggle" data-toggle="dropdown">
             <?= GetUserData(array('id' => getUserId()))->username?> <i class="fa fa-angle-down"></i>
			</a>
            <ul class="dropdown-menu">
              <!--<li class="user-header">
                <img src="<?= base_url('assets/admin/')?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
			 </li>-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= base_url('control_panel/users/edit/'.getUserId())?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url('auth/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
 
  