<h2><?= ucwords($page) ?> List</h2>
<hr>
<div class="col-md-12 text-end py-2">
</div>
<div class="card">
    <div class="card-body">
        <table class="table table-hover table-striped table-bordered">
            <colgroup>
                <col width="10%">
                <col width="35%">
                <col width="35%">
                <col width="20%">
            </colgroup>
            <thead>
                <tr class="bg-dark bg-gradient text-light">
                    <th>#</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Date Added</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 1;
                foreach($list as $row):
                ?>
                <tr>
                    <td class="py-1 px-2 text-center"><?= $i++ ?></td>
                    <td class="py-1 px-2"><?= ucwords($row['name']) ?></td>
                    <td class="py-1 px-2"><?= $row['username'] ?></td>
                    <td class="py-1 px-2"><?= date("M d,Y h:i A",strtotime($row['date_created'])) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    $(function(){
        $('table td').addClass('align-middle')
        $('table').dataTable({
            order:[[0,'asc']]
        })
    })
</script>