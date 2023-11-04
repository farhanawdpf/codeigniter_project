<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<div><h3>Category List</h3></div>
<div class="table-responsive">
	<table class="table table-striped">
	  <tbody>
	    <tr class="table-active">
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>action</th>
        </tr>
		<tr class="table-primary">
            <td>dd</td>
            <td>dd</td>
            <td>dfg</td>
            <td>insert/update/delete</td>
        </tr>
		<tr class="table-secondary">
            <td>ss</td>
            <td>ss</td>
            <td>dfg</td>
            <td>insert/update/delete</td>
        </tr>
		<tr class="table-success">
            <td>cc</td>
            <td>cc</td>
            <td>dg</td>
            <td>insert/update/delete</td>
        </tr>
	  </tbody>
	</table>
</div>
							
<?= $this->endSection() ?>