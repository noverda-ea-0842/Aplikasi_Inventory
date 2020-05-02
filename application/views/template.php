<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perdana'sCORP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="skin-purple sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=site_url('dashboard')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>CRP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Prdn's</b>CORP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-user"></i><span class="hidden-xs"> Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="http://localhost/ilhamdental/assets/dist/img/noverda.jpg" class="img-circle" alt="User Image">

                <p>
                  Noverda Alif Perdana
                  <small>Jepara, Indonesia</small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?=site_url('auth/login')?>" class="btn btn-danger btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://localhost/ilhamdental/assets/dist/img/noverda.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href=""><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : ''?> >
          <a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li <?=$this->uri->segment(1) == 'stock' || $this->uri->segment(1) == '' ? 'class="active"' : ''?> >
          <a href="<?=site_url('stock/in')?>"><i class="fa fa-shopping-cart"></i> <span>Stocks</span></a>
        </li>
        <li <?=$this->uri->segment(1) == 'supplier' ? 'class="active"' : ''?> >
          <a href="<?=site_url('supplier')?>"><i class="fa fa-truck"></i> <span>Suppliers</span></a>
        </li>
        <li <?=$this->uri->segment(1) == 'customer' ? 'class="active"' : ''?> >
          <a href="<?=site_url('customer')?>"><i class="fa fa-users"></i> <span>Customers</span></a>
        </li>
        <li class="treeview <?=$this->uri->segment(1) == 'category' || $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == 'item' ? 'active' : ''?>">
          <a href="#">
            <i class="fa fa-archive"></i> <span>Products</span>
              <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
              <li <?=$this->uri->segment(1) == 'category' ? 'class="active"' : ''?> ><a href="<?=site_url('category')?>"><i class="fa fa-circle-o"></i> Categories</a></li>
              <li <?=$this->uri->segment(1) == 'unit' ? 'class="active"' : ''?> ><a href="<?=site_url('unit')?>"><i class="fa fa-circle-o"></i> Units</a></li>
              <li <?=$this->uri->segment(1) == 'item' ? 'class="active"' : ''?> ><a href="<?=site_url('item')?>"><i class="fa fa-circle-o"></i> Items</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php echo $contents ?>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.3
    </div>
    <strong>Copyright © 2020 <a href="https://adminlte.io">Noverda Alif Perdana</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="http://localhost/ilhamdental/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="http://localhost/ilhamdental/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="http://localhost/ilhamdental/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/ilhamdental/assets/dist/js/adminlte.min.js"></script>

<script src="http://localhost/ilhamdental/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="http://localhost/ilhamdental/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(document).ready(function() {
      $('#table1').DataTable()
  })
</script>
</body>
</html>
