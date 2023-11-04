<!DOCTYPE html>
<html lang="en">
<?= view('templates/header') ?>
<body>
    <?php 
    $session = session();
        if(session()->get('is_login'))
        echo view('templates/top_navigation');
    ?>
    <div class="container py-2 h-100">
    <div id="alert_toast" class="toast align-items-center border-0 position-absolute top-25 start-50 translate-middle-x bg-gradient" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="2500">
        <div class="d-flex">
            <div class="toast-body">
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    <?php 
        echo $controller->view_page(esc($page));
    ?>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="uniModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="uniModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-md-down">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="uniModalLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary rounded-0" onclick="$('#uniModal form').submit()">Save</button>
            <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
<script>
    window.uni_modal = function($page_title= '',$page="",$params={},$size="",$post={}){
        var $get = Object.keys($params).map(k=>{
            return $params[k].field+"="+$params[k].value;
        }).join("&");
        $.ajax({
            url:'/home/modal_view_page/'+$page+'?'+$get,
            method:"POST",
            data:$post,
            error:err=>{
                console.error(err)
                alert("an error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uniModal .modal-dialog').attr('class',"modal-dialog modal-fullscreen-md-down")
                    $('#uniModal .modal-dialog').addClass($size)
                    $('#uniModal .modal-header .modal-title').html($page_title)
                    $('#uniModal .modal-body').html(resp)
                    $('#uniModal').modal('show')
                }else{
                    alert("an error occured")
                }
            }
        })
    }
    window.pop_toast = function($message="",$type="light",$delay=2500){
        $("#alert_toast").removeClass("text-light text-dark text-warning text-danger text-info text-primary")
        $("#alert_toast").removeClass("bg-light bg-dark bg-warning bg-danger bg-info bg-primary")
        $("#alert_toast").attr("data-bs-delay",$delay)
        $("#alert_toast .toast-body").html($message)
        $ctext = $type == "light" ? "text-dark" :"text-white";
        $("#alert_toast").addClass('bg-'+$type+" "+$ctext)
        $("#alert_toast").toast('show')
    }
    $(function(){
        if('<?php echo null !== $session->getFlashdata('success') ?>' == 1){
            pop_toast("<?= $session->getFlashdata('success') ?>",'success',3000)
        }
        if('<?php echo null !== $session->getFlashdata('danger') ?>' == 1){
            pop_toast("<?= $session->getFlashdata('danger') ?>",'danger',3000)
        }
        if('<?php echo null !== $session->getFlashdata('info') ?>' == 1){
            pop_toast("<?= $session->getFlashdata('info') ?>",'info',3000)
        }
        if('<?php echo null !== $session->getFlashdata('primary') ?>' == 1){
            pop_toast("<?= $session->getFlashdata('primary') ?>",'primary',3000)
        }
        if('<?php echo null !== $session->getFlashdata('light') ?>' == 1){
            pop_toast("<?= $session->getFlashdata('light') ?>",'light',3000)
        }
        if('<?php echo null !== $session->getFlashdata('warning') ?>' == 1){
            pop_toast("<?= $session->getFlashdata('warning') ?>",'warning',3000)
        }
    })
</script>
</body>
</html>