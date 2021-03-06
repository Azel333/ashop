<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; <?= date('Y') ?> <div class="bullet"></div> <a href="<?= base_url() ?>">Hokunine</a>
    </div>
    <div class="footer-right">
        2.3.0
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="<?= base_url('include/')?>node_modules/jquery.min.js"></script>
<script src="<?= base_url('include/')?>node_modules/popper.min.js"></script>
<script src="<?= base_url('include/')?>node_modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('include/')?>node_modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?= base_url('include/')?>node_modules/moment.min.js"></script>
<script src="<?= base_url('include/')?>assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="<?= base_url('include/')?>node_modules/jquery.sparkline.min.js"></script>
<script src="<?= base_url('include/')?>node_modules/chart.min.js"></script>

<script src="<?= base_url('include/')?>node_modules/summernote/dist/summernote-bs4.min.js"></script>
<script src="<?= base_url('include/')?>node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Template JS File -->
<script src="<?= base_url('include/')?>assets/js/scripts.js"></script>
<script src="<?= base_url('include/')?>assets/js/custom.js"></script>

<!-- Page Specific JS File -->
<script src="<?= base_url('include/')?>assets/js/page/index.js"></script>

<!-- Datatables JS -->
<script src="<?= base_url('include/')?>datatables/datatables.min.js"></script>

<script>
$(document).ready(function() {
    $('#tabel-data').DataTable({
        "processing": true,


        // dom: 'Bfrtip',  
        // "buttons": [
        //        {
        //            extend: 'collection',
        //            text: 'Export',
        //            buttons: [
        //                'copy',
        //                'excel',
        //                'csv',
        //                'pdf',
        //                'print'
        //            ]
        //        }
        //    ] 
    });
});
</script>


<script>
$('.custom-file-input').on('change', function() {
    //get the file name
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
})



$('.form-check-input').click(function() {
    const idmenu = $(this).data('menu');
    const idrole = $(this).data('role');

    $.ajax({
        url: "<?= base_url('admin/changeaccess'); ?>",
        type: "POST",
        data: {
            menuId: idmenu,
            roleId: idrole
        },
        success: function() {
            document.location.href = "<?= base_url('admin/roleAccess/') ?>" + idrole;
        }
    });
});

// $(document).ready(function(){
//     $('#categoryss').change(function(){
//         var category_Id = $('#categorys').val();
//         if (category_Id != '') {
//             $.ajax(
//             {
//                 url:"<?= base_url('admin/fetch_subcat') ?>",
//                 method :  "POST",
//                 data : {category_Id:category_Id},
//                 success:function(data)
//                 {
//                     $('#subcategory').va(data);
//                 }
//             })
//         } else {
//             $('#subcategory').html('<option value="">No Subcategory</option>');
//         }
//     });
// });

$(document).ready(function() {

    $("#discount").keyup(function() {
        var harga = parseInt($("#price").val());
        var diskon = parseInt($("#discount").val());
        var total = harga - (harga * (diskon / 100));
        $("#price_total").val(total);
    });

});

$(document).ready(function() {
    $('#category').change(function() {
        var category_Id = $('#category').val();
        if (category_Id != '') {
            $.ajax({
                url: "<?= base_url('product/fetch_codecat') ?>",
                method: "POST",
                data: {
                    category_Id: category_Id
                },
                success: function(data) {
                    $('#codecat').val(data);
                }
            })
        }
    });
});

$(document).ready(function() {
    $('#category').change(function() {
        var category_Id = $('#category').val();
        if (category_Id != '') {
            $.ajax({
                url: "<?= base_url('product/fetch_codep') ?>",
                method: "POST",
                data: {
                    category_Id: category_Id
                },
                success: function(data) {
                    $('#code_p').val(data);
                }
            })
        }
    });
});
</script>


</body>

</html>