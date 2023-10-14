<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>
<div class="container">
<div class="row">
    <div class="col-12">
        <form method ="post" action="<?= site_url('update') ?>">
        <input type="hidden" name="product_id" id="product_id" value="<?php echo $product['product_id']; ?>">
                    <div class="modal-header">                        
                        <h4 class="modal-title">Add Product</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">                    
                        <div class="form-group">
                            <label>Product</label>
                            <input type="text" name ="product" value="<?php echo $product['product']; ?>"  id = "product" class="form-control"  required>
                        </div>
                        <div class="form-group">
                            <label>Categroy</label>
                            <input type="text"   name="category" value="<?php echo $product['product']; ?>" id = "category" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name ="price" value="<?php echo $product['price']; ?>"  id ="price" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>SKU</label>
                            <input type="text"  name ="sku"  value="<?php echo $product['sku']; ?>"  id = "sku" class="form-control" required>
                        </div>    
                        <div class="form-group">
                            <label>Model</label>
                            <input type="text"  name ="model" value="<?php echo $product['model']; ?>"  class="form-control" required>
                        </div>                    
                    </div>
                    <div class="modal-footer">
                    <a href="/list" class="btn btn-success"><i class="icon-copy ion-chevron-left"></i> Back</a>
                        <input type="submit" class="btn btn-info" value="Update">
                    </div>
        </form>
    </div>
</div>
</div>
<?= $this->endSection() ?>