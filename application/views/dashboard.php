<section class="content-header">
      <h1>
        Dashboard
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?=$this->fungsi->count_supplier()?></h3>

              <p>Suppliers</p>
            </div>
            <div class="icon">
              <span class="fa fa-truck"></span>&nbsp;      
            </div>
            <a href="<?=site_url('supplier')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-sm-4">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$this->fungsi->count_customer()?></h3>

              <p>Customers</p>
            </div>
            <div class="icon">
              <span class="fa fa-users"></span>&nbsp;      
            </div>
            <a href="<?=site_url('customer')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-sm-4">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$this->fungsi->count_item()?></h3>

              <p>Products</p>
            </div>
            <div class="icon">
              <span class="fa fa-archive"></span>&nbsp;      
            </div>
            <a href="<?=site_url('item')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-sm-4">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$this->fungsi->count_stock()?></h3>

              <p>Stocks</p>
            </div>
            <div class="icon">
              <span class="fa fa-shopping-cart"></span>&nbsp;      
            </div>
            <a href="<?=site_url('stock/in')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

    </section>