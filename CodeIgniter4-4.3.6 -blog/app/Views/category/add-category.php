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
        <form method ="post" action="<?= site_url('/add-category') ?>">
                    <div class="modal-body">                    
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name ="name" id = "name" class="form-control" required>
                        </div>
                    <div class="modal-footer">
                        <!-- <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"> -->
                        <a href="/view-category" class="btn btn-danger">Cancel</a>
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
        </form>
    </div>
</div>
</div>
<?= $this->endSection() ?>