<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>
<div class="container">
<div class="clearfix mb-20">
        <div class="pull-left">
                <h4 class="text-blue h4">Product List</h4>
        </div>
</div>
<div class="row">
    <div class="col-12">
        <form method ="post" action="<?= site_url('/add-product') ?>">
                    <div class="modal-body">                    
                        <div class="form-group">
                            <label>Product</label>
                            <input type="text" name ="product" id = "product" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Categroy</label>
                            <input type="text"   name="category" id = "category" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name ="price" id ="price" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>SKU</label>
                            <input type="text"  name ="sku"  id = "sku" class="form-control" required>
                        </div>    
                        <div class="form-group">
                            <label>Model</label>
                            <input type="text"  name ="model" name = "model" class="form-control" required>
                        </div>                    
                    </div>
                    <div class="modal-footer">
                        <!-- <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"> -->
                        <a href="/list" class="btn btn-danger">Cancel</a>
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
        </form>
    </div>
</div>
</div>
<?= $this->endSection() ?>