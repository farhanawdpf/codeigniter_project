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
                           <a href="<?= base_url('edit-product/'.$product['product_id']) ?>" class="badge badge-primary">edit</a>
                            <a href="<?= base_url('delete/'.$product['product_id']) ?>" class="badge badge-primary">delete</a>
                        </td>
                    </tr>
                <?php } ?>  
                </tbody>
            </table>
</div>
							
<?= $this->endSection() ?>
