<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>
<div><h3>Add Product</h3></div><br>
<div class="container">
<div class="row">
<div class="col-12">
<form>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Product Name</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" type="text" name ="product_name" placeholder="Mobile">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Date</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control date-picker" placeholder="Select Date" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">category</label>
		<div class="col-sm-12 col-md-10">
			<select class="custom-select col-12">
				<option selected="">Choose...</option>
				<option value="1">Drinks</option>
				<option value="2">Food</option>
				<option value="3">Dress</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">UOM</label>
		<div class="col-sm-12 col-md-10">
			<select class="custom-select col-12">
				<option selected="">Choose...</option>
				<option value="1">KG</option>
				<option value="2">Litter</option>
				<option value="3">M</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Price</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" type="text" name ="product_name" placeholder="Price">
		</div>
	</div>
	<div class="form-group row">
		<input type="submit" class="btn btn-primary" value="Save &amp; Update">
	</div>
</div>
</div>
</div>
<?= $this->endSection() ?>