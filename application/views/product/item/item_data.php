<section class="content-header">
    <h1>Items
        <small>Data barang</small>
    </h1>
    <ol class="breadcrumb">
    	<li><a href="<?=site_url('item')?>"><i class="fa fa-archive"></i></a></li>
    	<li class="active">Items</li>
    </ol>
</section>

<!-- Main Content -->
<section class="content">
	<?php $this->view('messages') ?>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data product items</h3>
			<div class="pull-right">
				<a href="<?=site_url('item/add')?>" class="btn btn-success btn-flat">
					<i class="fa fa-plus"></i> New Product Item
				</a>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped" id="table1">
				<thead>
					<tr>
						<th>#</th>
						<th>Barcode</th>
						<th>Name</th>
						<th>Category</th>
						<th>Unit</th>
						<th>Price</th>
						<th>Stock</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach($row->result() as $key => $data) { ?>
					<tr>
						<td style="width: 5%;"><?=$no++?>.</td>
						<td><?=$data->barcode?></td>
						<td><?=$data->name?></td>
						<td><?=$data->category_name?></td>
						<td><?=$data->unit_name?></td>
						<td class="text-right"><?=indo_currency($data->price)?></td>
						<td><?=$data->stock?></td>
						<td width="80x">
							<a href="<?=site_url('item/edit/'.$data->item_id)?>" class="btn btn-warning btn-xs">
								<i class="fa fa-pencil"></i>
							</a>
							<a href="<?=site_url('item/del/'.$data->item_id)?>" onclick="return confirm('Yakin Hapus Data ?')" class="btn btn-danger btn-xs">
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
        