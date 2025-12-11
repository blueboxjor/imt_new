                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php unset($_SESSION['list']);
include('modals.php'); ?>

<!-- Required Js -->
<script src="<?php echo PANEL_ASSETS; ?>js/vendor-all.min.js"></script>
<script src="<?php echo PANEL_ASSETS; ?>js/plugins/bootstrap.min.js"></script>
<script src="<?php echo PANEL_ASSETS; ?>js/ripple.js"></script>
<script src="<?php echo PANEL_ASSETS; ?>js/pcoded.min.js"></script>

<!-- calendar -->
<script src="<?php echo PANEL_ASSETS; ?>js/plugins/moment.js"></script>
<script src="<?php echo PANEL_ASSETS; ?>js/plugins/jquery-ui.min.js"></script>
<script src="<?php echo PANEL_ASSETS; ?>js/plugins/fullcalendar.min.js"></script>

<!-- select2 Js -->
<script src="<?php echo PANEL_ASSETS; ?>js/plugins/select2.full.min.js"></script>
<script src="<?php echo PANEL_ASSETS; ?>js/pages/form-select-custom.js"></script>
<!-- datepicker js -->
<script src="<?php echo PANEL_ASSETS; ?>js/plugins/moment.min.js"></script>
<script src="<?php echo PANEL_ASSETS; ?>js/plugins/daterangepicker.js"></script>
<script src="<?php echo PANEL_ASSETS; ?>js/pages/ac-datepicker.js"></script>
<!-- dataTables js -->
<script src="<?php echo PANEL_ASSETS; ?>js/plugins/jquery.dataTables.min.js"></script>
<script src="<?php echo PANEL_ASSETS; ?>js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo PANEL_ASSETS; ?>js/plugins/buttons.print.min.js"></script>
<script src="<?php echo PANEL_ASSETS; ?>js/plugins/jszip.min.js"></script>
<script src="<?php echo PANEL_ASSETS; ?>js/plugins/dataTables.buttons.min.js"></script>
<script src="<?php echo PANEL_ASSETS; ?>js/plugins/buttons.html5.min.js"></script>
<script src="<?php echo PANEL_ASSETS; ?>js/plugins/buttons.bootstrap4.min.js"></script>
<script src="<?php echo PANEL_ASSETS; ?>js/pages/data-export-custom.js"></script>

<!-- Chart -->
<script src="<?php echo PANEL_ASSETS; ?>js/plugins/Chart.min.js"></script>

<script src="<?php echo PANEL_ASSETS; ?>js/plugins/lightbox.min.js"></script>

<!-- manual js -->
<script src="<?php echo PANEL_ASSETS; ?>js/manual.js"></script>

  
<script>
(function() {

window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
}, false);
})();
var owner = <?php echo $_SESSION['Owner']; ?>;
// alert(owner);
// if(owner == 0){
//     $(document).ready(function(){
//         var id=<?php echo $_SESSION['id']; ?>;
//         $.ajax({
//             url:"includes/fetch_multi_data.php",
//             method:"POST",
//             data:{id:id , type : 'display'},
//             dataType:"json",
//             success:function(data)
//             {
//                 $.each(data,function(i, val){
//                     console.log(val.permissions);
//                     $('.'+val.permissions).show();
//                 });    
//             },
//             error:function(e){
//                 alert("error.. try again");
//             }
//         });
//     });
// }
// else{
//     $.ajax({
//             url:"includes/fetch_multi_data.php",
//             method:"POST",
//             data:{ type : 'all_permissions'},
//             dataType:"json",
//             success:function(data)
//             {
//                 $.each(data,function(i, val){
//                     $('.'+val.Class).show();
//                 });    
//             },
//             error:function(e){
//                 alert("error.. try again");
//             }
//         });
// }
</script>


</html>
