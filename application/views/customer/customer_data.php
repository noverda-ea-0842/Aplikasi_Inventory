<section class="content-header">
    <h1>Customers
        <small>Pelanggan</small>
    </h1>
    <ol class="breadcrumb">
    	<li><a href="<?=site_url('customer')?>"><i class="fa fa-users"></i></a></li>
    	<li class="active">Customers</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data customers</h3>
			<div class="pull-right">
				<a href="<?=site_url('customer/add')?>" class="btn btn-success btn-flat">
					<i class="fa fa-plus"></i> New Data
				</a>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped" id="table1">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Gender</th>
						<th>Address</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach($row->result() as $key => $data) { ?>
					<tr>
						<td style="width: 5%;"><?=$no++?>.</td>
						<td><?=$data->name?></td>
						<td><?=$data->phone?></td>
						<td><?=$data->gender?></td>
						<td><?=$data->address?></td>
						<td width="80x">
							<a href="<?=site_url('customer/edit/'.$data->customer_id)?>" class="btn btn-warning btn-xs">
								<i class="fa fa-pencil"></i>
							</a>
							<a href="<?=site_url('customer/del/'.$data->customer_id)?>" onclick="return confirm('Yakin Hapus Data ?')" class="btn btn-danger btn-xs">
								<i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</section>
        