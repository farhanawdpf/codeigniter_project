<h2><?= ucwords($page) ?> List</h2>
<hr>
<div class="col-md-12 text-end py-2">
    <button class="btn btn-primary rounded-0" type="button" id="new_employee"><i class="fa fa-plus"></i> Add New Employee</button>
</div>
<div class="card">
    <div class="card-body">
        <table class="table table-hover table-striped table-bordered">
            <colgroup>
                <col width="5%">
                <col width="20%">
                <col width="20%">
                <col width="20%">
                <col width="20%">
                <col width="15%">
            </colgroup>
            <thead>
                <tr class="bg-dark bg-gradient text-light">
                    <th>#</th>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 1;
                foreach($list as $row):
                ?>
                <tr>
                    <td class="py-1 px-2 text-center"><?= $i++ ?></td>
                    <td class="py-1 px-2"><?= $row['employee_code'] ?></td>
                    <td class="py-1 px-2"><?= ucwords($row['fullname']) ?></td>
                    <td class="py-1 px-2"><?= ucwords($row['department']) ?></td>
                    <td class="py-1 px-2"><?= ucwords($row['position']) ?></td>
                    <td class="py-1 px-2 text-center">
                        <div class="dropdown">
                            <button class="btn btn-light border border-gray btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= base_url('view/employee_details/'.$row['id']) ?>">View/Edit</a></li>
                                <li><a class="dropdown-item delete_data" href="javascript:void(0)" data-id="<?= $row['id'] ?>" data-name="<?= $row['employee_code']." - ".(ucwords($row['fullname'])) ?>">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    $(function(){
        $('table td').addClass('align-middle')
        $('#new_employee').click(function(){
            uni_modal("<i class='fa fa-plus'></i> Add New Employee","new_employee",{},"modal-lg")
        })
        $('.delete_data').click(function(){
            var _conf = confirm("Are you sure to delete "+$(this).attr('data-name')+"? This action cannot be undone.")
            if(_conf === true){
                
                $.ajax({
                    url:"<?= base_url("home/delete_employee") ?>",
                    method:'POST',
                    data:{id:$(this).attr('data-id')},
                    dataType:"json",
                    error:err=>{
                        console.error(err)
                        pop_toast("Action Failed due to an error occured.",'danger',2000)
                    },
                    success:function(resp){
                        if(resp.status == 'success'){
                            location.reload()
                        }else if(!!resp.msg){
                        pop_toast(resp.msg,'danger',2000)
                        }else{
                            console.error(resp)
                            pop_toast("Action Failed due to an error occured.",'danger',2000)
                        }
                    }
                })
            }
        })
        $('table').dataTable({
            columnDefs: [
                { orderable: false, targets: [5] }
            ],
            order:[[0,'asc']]
        })
    })
</script>