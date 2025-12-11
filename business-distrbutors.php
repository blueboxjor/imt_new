<?php include("includes/website_header.php"); ?>

<!-- #subheader-->
<div class="main">
    <div class="pagemid-section ">
        <div class="inner">
        <?php include('Dis/index.html')?>

        </div>
        <!--inner-->
    </div>
    <!--.pagemid-section-->
    <div class="sticky-stopper"></div>
</div>
<div class="" style="height:80px;"></div>
<?php include("includes/website_footer.php"); ?>


<!-- banner -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="sigma_product-image">
                            <img class="img" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="shop-detail-content mt-5 mt-lg-0">
                            <h2 class="product-title m-0 titleEn"></h2>
                            <br>
                            <div class="shop-detail-inner">
                                <div class="availability-box">
                                    <div class="d-inline-block other-info">
                                        <h6 class="locationEn"></h6>
                                        <h6 class="phoneEn"></h6>
                                        <a class="link" target="_blank"><h6 class="website"></h6></a>

                                    </div>
                                </div>
                                <div class="short-descr">
                                    <p class="description"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
     $(".distrbutors").on("click", function (e) {
        $('#myModal').modal('show');
        var id = $(this).attr('id');
        $.ajax({
            url: "includes/fetch_record_data.php",
            method: "POST",
            data: { id: id , type : 'List' ,Table:'areas'},
            dataType: "json",
            success: function (data) {
                $('.img').attr('src', 'images/logos/Distributors/' + data.logo);
                $('.titleEn').html(data.titleEn);
                $('.locationEn').html('Location: ' + data.locationEn);
                $('.website').html('Website: '+ data.website);
                $('.link').attr('href', data.website);

                $('.phoneEn').html('Phone: ' + data.phone);
               
               

            }
            });
    });
</script>