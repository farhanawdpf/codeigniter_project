<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>
<div class="container">
<div class="row">
    <div class="col-12">
        <form method ="post" action="<?= site_url('update') ?>">
        <input type="hidden" name="id" id="id" value="<?php echo $category['id']; ?>">
                    <div class="modal-header">                        
                        <h4 class="modal-title">Add category</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">                    
                        <div class="form-group">
                            <label>Categroy Name</label>
                            <input type="text"   name="name" value="<?php echo $category['name']; ?>" id = "name" class="form-control" required>
                        </div>            
                    </div>
                    <div class="modal-footer">
                    <a href="view-category" class="btn btn-success"><i class="icon-copy ion-chevron-left"></i> Back</a>
                        <input type="submit" class="btn btn-info" value="Update">
                    </div>
        </form>
    </div>
</div>
</div>
<?= $this->endSection() ?>