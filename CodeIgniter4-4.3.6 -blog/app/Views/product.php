<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<div><h3>Product List</h3></div>
<div class="table-responsive">
<table class="table table-striped table-hover">
                <thead>
                    <tr>
                         
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
                            <a href="#"   data-id="<?=$product['product_id']?>"class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit"><button>Edit</button></i></a>
                            <a href="<?php echo site_url(); ?>/list" data-delete_id="<?=$product['product_id']?>"  class="delete" ><i class="material-icons" data-toggle="tooltip" title="Delete"><button>Delete</button></i></a>
                        </td>
                    </tr>
                <?php } ?>  
                </tbody>
            </table>
</div>
							
<?= $this->endSection() ?>