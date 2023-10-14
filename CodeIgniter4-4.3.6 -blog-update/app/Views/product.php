<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<div class="clearfix mb-20">
    <div class="pull-left">
            <h4 class="text-blue h4">Product List</h4>
    </div>
    <div class="pull-right">
        <a
            href="<?php echo site_url(); ?>/add-product"
            class="btn btn-primary"
            role="button"
            >Add-Product</a
        >
    </div>
    </div> 
</div>
<div class="table-responsive">
<table class="table table-striped table-hover">
                <thead>
                    <tr class="table-primary">
                         
                        <th>Product</th>
                        <th>Categroy</th>
                        <th>Price</th>
                        <th>SKU</th>
                        <th>Model</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($products as $product) { ?>
                    <tr>
                        <td><?=$product['product']?></td>
                        <td><?=$product['category']?></td>
                        <td><?=$product['price']?></td>
                        <td><?=$product['sku']?></td>
                        <td><?=$product['model']?></td>
                        <td>
                            <a href="<?= base_url('edit/'.$product['product_id']) ?>" class="badge badge-primary"><i class="icon-copy ion-edit"></i></a>

                            <a href="<?= base_url('delete/'.$product['product_id']) ?>" class="badge badge-primary"> <i class="icon-copy ion-trash-a"></i></a>
                           
                            
                        </td>
                    </tr>
                <?php } ?>  
                </tbody>
            </table>
</div>
							
<?= $this->endSection() ?>