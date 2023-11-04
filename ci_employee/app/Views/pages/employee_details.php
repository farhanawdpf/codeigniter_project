<?php 
    foreach($details as $row){
   

        foreach($row as $k=>$v){
            if(is_numeric($k))
            continue;
             $$k = $v;
        }
    }
?>
<h2><?= ucwords(str_replace("_"," ",$page)) ?></h2>
<div class="col-md-12">
    <form action="" id="update-details-form">
        <input type="hidden" name="id" value="<?= isset($id)? $id : '' ?>">
        <ul class="nav nav-tabs" id="detailsTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" role="tab" aria-controls="personal" aria-selected="true">Personal Information</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="company-tab" data-bs-toggle="tab" data-bs-target="#company" type="button" role="tab" aria-controls="company" aria-selected="false">Company</a>
            </li>
        </ul>
        <div class="tab-content" id="detailsTabContent">
            <div class="tab-pane fade show active border p-2" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname" class="control-label">Firstname</label>
                            <input type="text" class="form-control form-control-sm" name="firstname" id="firstname" required value="<?= isset($firstname) ? $firstname : "" ?>">
                        </div>
                        <div class="form-group">
                            <label for="middlename" class="control-label">Middlename</label>
                            <input type="text" class="form-control form-control-sm" name="middlename" id="middlename" placeholder="(optional)" value="<?= isset($middlename) ? $middlename : "" ?>">
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="control-label">Lastname</label>
                            <input type="text" class="form-control form-control-sm" name="lastname" id="lastname" required value="<?= isset($lastname) ? $lastname : "" ?>">
                        </div>
                        <div class="form-group">
                            <label for="suffix" class="control-label">Suffix</label>
                            <input type="text" class="form-control form-control-sm" name="suffix" id="suffix" placeholder="(optional)" value="<?= isset($suffix) ? $suffix : "" ?>">
                        </div>
                        <div class="form-group">
                            <label for="gender" class="control-label">Gender</label>
                            <select class="form-select form-select-sm" name="gender" id="gender" required>
                                <option <?= isset($gender) && $gender == "Male" ? "selected" : '' ?>>Male</option>
                                <option <?= isset($gender) && $gender == "Female" ? "selected" : '' ?>>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" class="form-control form-control-sm" name="email" id="email" required value="<?= isset($email) ? $email : "" ?>">
                        </div>
                        <div class="form-group">
                            <label for="contact" class="control-label">Contact No</label>
                            <input type="text" class="form-control form-control-sm" name="contact" id="contact" required value="<?= isset($contact) ? $contact : "" ?>">
                        </div>
                        <div class="form-group">
                            <label for="address" class="control-label">Address</label>
                            <textarea rows="3" class="form-control form-control-sm" name="address" id="address" style="resize:none" required><?= isset($address) ? $address : "" ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dob" class="control-label">Date of Birth</label>
                            <input type="date" class="form-control form-control-sm" name="dob" id="dob" required value="<?= isset($dob) ? $dob : "" ?>">
                        </div>
                        <div class="form-group">
                            <label for="civil_status" class="control-label">Civil Status</label>
                            <select class="form-select form-select-sm" name="civil_status" id="civil_status" required>
                                <option value="" <?= !isset($civil_status) ? "selected" : '' ?> disabled>Please Select here</option>
                                <option <?= isset($civil_status) && $civil_status == "Single" ? "selected" : '' ?>>Single</option>
                                <option <?= isset($civil_status) && $civil_status == "Married" ? "selected" : '' ?>>Married</option>
                                <option <?= isset($civil_status) && $civil_status == "Widow" ? "selected" : '' ?>>Widow</option>
                                <option <?= isset($civil_status) && $civil_status == "Widower" ? "selected" : '' ?>>Widower</option>
                                <option <?= isset($civil_status) && $civil_status == "Seperated" ? "selected" : '' ?>>Seperated</option>
                            </select>
                        </div>
                        <div class="form-group text-center py-2">
                            <img src="<?= isset($img_path) && is_file(WRITEPATH."uploads/$img_path") ? base_url("file/{$img_path}") : base_url("file/default/no-image-available.png")  ?>" alt="" class="img-fluid bg-dark bg-gradient border border-dark" id="detials-avatar">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control form-control-sm" name="avatar" id="avatar" onchange="displayImg(this)">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade border p-2" id="company" role="tabpanel" aria-labelledby="company-tab">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="employee_code" class="control-label">Employee ID/Code</label>
                            <input type="text" class="form-control form-control-sm" name="employee_code" id="employee_code" value="<?= isset($employee_code) ? $employee_code : "" ?>">
                            <small class="text-muted"><i>Leave this blank to auto-generate</i></small>
                        </div>
                        <div class="form-group">
                            <label for="department" class="control-label">Department</label>
                            <input type="text" class="form-control form-control-sm" name="department" id="department" required value="<?= isset($department) ? $department : "" ?>">
                        </div>
                        <div class="form-group">
                            <label for="position" class="control-label">Position</label>
                            <input type="text" class="form-control form-control-sm" name="position" id="position" required value="<?= isset($position) ? $position : "" ?>">
                        </div>
                        <div class="form-group">
                            <label for="date_hired" class="control-label">Date Hired</label>
                            <input type="date" class="form-control form-control-sm" name="date_hired" id="date_hired" required value="<?= isset($date_hired) ? $date_hired : "" ?>">
                        </div>
                        <div class="form-group">
                            <label for="end_date" class="control-label">End Date</label>
                            <input type="date" class="form-control form-control-sm" name="end_date" id="end_date" value="<?= isset($end_date) ? $end_date : "" ?>">
                        </div>
                        <div class="form-group">
                            <label for="monthly_salary" class="control-label">Monthly Salary</label>
                            <input type="number" class="form-control form-control-sm text-end" name="monthly_salary" id="monthly_salary" required value="<?= isset($monthly_salary) ? $monthly_salary : "" ?>">
                        </div>
                        <div class="form-group">
                            <label for="type" class="control-label">Type</label>
                            <select class="form-select form-select-sm" name="type" id="type" required>
                                <option value="" disabled <?= !isset($type) ? "selected" : "" ?>>Please Select Here</option>
                                <option <?= isset($type) && $type == "Permanent" ? "selected" : "" ?>>Permanent</option>
                                <option <?= isset($type) && $type == "Contract" ? "selected" : "" ?>>Contract</option>
                                <option <?= isset($type) && $type == "Job Order" ? "selected" : "" ?>>Job Order</option>
                                <option <?= isset($type) && $type == "Internship" ? "selected" : "" ?>>Internship</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="form-group py-2">
        <center>
            <button class="btn btn-primary rounded-0 col-2" form="update-details-form"><i class="fa fa-save"></i> Update</button>
            <button class="btn btn-danger rounded-0 col-2" id="delete_data" type="button" data-id="<?= $id ?>" data-name="<?= $employee_code." - ".(ucwords($fullname)) ?>"><i class="fa fa-trash"></i> Delete</button>
            <a class="btn btn-dark rounded-0 col-2" href="<?= base_url("/employees") ?>"><i class="fa fa-angle-left"></i> Back to List</a>
        </center>
    </div>
</div>
<script>
    function displayImg(input){
        console.log(input.files)
        if(!!input.files[0]){
            var reader = new FileReader();
            reader.onload = function(){
                $('#detials-avatar').attr('src',reader.result)
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#delete_data').click(function(){
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
                            location.replace("<?= base_url("employees") ?>")
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
    $(function(){
        $('#detailsTab .nav-link').click(function(){
            var hash = $(this).attr('data-bs-target')
            var cur_loc = location.href
                cur_loc = cur_loc.split('#')[0]
                window.history.pushState({}, "", cur_loc+hash);
        })
        var tabHash = window.location.hash
        if(tabHash !=''){
            $('#detailsTab .nav-link').removeClass('active')
            $('#detailsTabContent .tab-pane').removeClass('show active')
            $('#detailsTab .nav-link[data-bs-target="'+tabHash+'"]').addClass('active')
            $('#detailsTabContent '+tabHash).addClass('show active')
        }

        $('#update-details-form').on('submit',function(e){
            e.preventDefault();
            var frm = $(this)[0];
            if(!frm.checkValidity()){
                frm.reportValidity()
                return false;
            }
            $.ajax({
                url:"<?= base_url() ?>/home/save_employee",
                method:'POST',
                data: new FormData($(this)[0]),
                dataType:'json',
                async:false,
                cache: false,
                contentType: false,
                processData: false,
                error:err=>{
                    console.error(err)
                    alert('an error occurred')
                },
                success:function(resp){
                    if(resp.status =='success'){
                        location.reload()
                    }else{
                        var el = $('div')
                            el.addClass('alert alert-danger pop-msg')
                            el.hide()
                            el.text(resp.msg)
                            _this.prepend(el)
                            el.show('hide')
                    }
                }
            })
        })
    })
</script>