<div class="container-fluid">
    <form action="" id="new_employee_form">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname" class="control-label">Firstname</label>
                    <input type="text" class="form-control form-control-sm" name="firstname" id="firstname" required>
                </div>
                <div class="form-group">
                    <label for="middlename" class="control-label">Middlename</label>
                    <input type="text" class="form-control form-control-sm" name="middlename" id="middlename" placeholder="(optional)">
                </div>
                <div class="form-group">
                    <label for="lastname" class="control-label">Lastname</label>
                    <input type="text" class="form-control form-control-sm" name="lastname" id="lastname" required>
                </div>
                <div class="form-group">
                    <label for="suffix" class="control-label">Suffix</label>
                    <input type="text" class="form-control form-control-sm" name="suffix" id="suffix" placeholder="(optional)">
                </div>
                <div class="form-group">
                    <label for="gender" class="control-label">Gender</label>
                    <select class="form-select form-select-sm" name="gender" id="gender" required>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" class="form-control form-control-sm" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="contact" class="control-label">Contact No</label>
                    <input type="text" class="form-control form-control-sm" name="contact" id="contact" required>
                </div>
                <div class="form-group">
                    <label for="address" class="control-label">Address</label>
                    <textarea rows="3" class="form-control form-control-sm" name="address" id="address" style="resize:none" required></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="employee_code" class="control-label">Employee ID/Code</label>
                    <input type="text" class="form-control form-control-sm" name="employee_code" id="employee_code">
                    <small class="text-muted"><i>Leave this blank to auto-generate</i></small>
                </div>
                <div class="form-group">
                    <label for="department" class="control-label">Department</label>
                    <input type="text" class="form-control form-control-sm" name="department" id="department" required>
                </div>
                <div class="form-group">
                    <label for="position" class="control-label">Position</label>
                    <input type="text" class="form-control form-control-sm" name="position" id="position" required>
                </div>
                <div class="form-group">
                    <label for="date_hired" class="control-label">Date Hired</label>
                    <input type="date" class="form-control form-control-sm" name="date_hired" id="date_hired" required>
                </div>
                <div class="form-group">
                    <label for="end_date" class="control-label">End Date</label>
                    <input type="date" class="form-control form-control-sm" name="end_date" id="end_date">
                </div>
                <div class="form-group">
                    <label for="type" class="control-label">Type</label>
                    <select class="form-select form-select-sm" name="type" id="type" required>
                        <option>Permanent</option>
                        <option>Contract</option>
                        <option>Job Order</option>
                        <option>Internship</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    // $(function(){
        $('#new_employee_form').on('submit',function(e){
            e.preventDefault();
            var frm = $(this)[0];
            if(!frm.checkValidity()){
                frm.reportValidity()
                return false;
            }
            $.ajax({
                url:"home/save_employee",
                method:'POST',
                data:$(this).serialize(),
                dataType:'json',
                error:err=>{
                    console.error(err)
                    alert('an error occurred')
                },
                success:function(resp){
                    if(resp.status =='success'){
                        location.href="/view/employee_details/"+resp.id
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
        
    // })
</script>