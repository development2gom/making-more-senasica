<?php
use yii\helpers\Url;
use app\modules\ModUsuarios\models\EntUsuarios;
$usuario = EntUsuarios::getUsuarioLogueado();

?>
<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse"
role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
    data-toggle="menubar">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-bar"></span>
    </button>
    <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
    data-toggle="collapse">
      <i class="icon wb-more-horizontal" aria-hidden="true"></i>
    </button>
    <a class="navbar-brand navbar-brand-center" href="<?=Url::base()?>">
      <img class="navbar-brand-logo navbar-brand-logo-normal" src="<?=Url::base()?>/webAssets/images/logo.png"
      title="Remark">
      <img class="navbar-brand-logo navbar-brand-logo-special" src="<?=Url::base()?>/webAssets/images/logo.png"
      title="Remark">
      
    </a>
    
  </div>
  <div class="navbar-container container-fluid">
    <!-- Navbar Collapse -->
    <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
      <!-- Navbar Toolbar -->
      <ul class="nav navbar-toolbar">
        <li class="nav-item hidden-float" id="toggleMenubar">
          <a class="nav-link" data-toggle="menubar" href="#" role="button">
            <i class="icon hamburger hamburger-arrow-left">
                <span class="sr-only">Toggle menubar</span>
                <span class="hamburger-bar"></span>
              </i>
          </a>
        </li>
      </ul>
      <!-- End Navbar Toolbar -->
      <!-- Navbar Toolbar Right -->
      <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="fade" role="button">Mega <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="exampleAlignmentDropdown" role="menu">
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Action</a>
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Another action</a>
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Something else here</a>
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Separated link</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?=Url::base()?>/site/logout"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
        </li>
        
      </ul>
      <!-- End Navbar Toolbar Right -->
    </div>
    <!-- End Navbar Collapse -->
  </div>
</nav>