<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<div class="clearfix mb-20">
    <div class="pull-left">
            <h4 class="text-blue h4">Category List</h4>
    </div>
    <div class="pull-right">
        <a
            href="<?php echo site_url(); ?>/add-category"
            class="btn btn-primary"
            role="button"
            >Add-category</a
        >
    </div>
    </div> 
</div>
<div class="table-responsive">
<table class="table table-striped table-hover">
                <thead>
                    <tr class="table-primary">
                         
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($categories as $category) { ?>
                    <tr>
                        <td><?=$category['id']?></td>
                        <td><?=$category['name']?></td>
            
                        <td>
                            <a href="<?= base_url('edit-category/'.$category['id']) ?>" class="badge badge-primary"><i class="icon-copy ion-edit"></i></a>

                            <a href="<?= base_url('delete/'.$category['id']) ?>" class="badge badge-danger"> <i class="icon-copy ion-trash-a"></i></a>
                           
                            
                        </td>
                    </tr>
                <?php } ?>  
                </tbody>
            </table>
</div>
							
<?= $this->endSection() ?>