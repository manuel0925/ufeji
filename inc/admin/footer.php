<!-- ================== BEGIN BASE JS ================== -->
<script src="assets/admin/js/app.min.js"></script>
<script src="assets/admin/js/theme/default.min.js"></script>
<script src="assets/admin/plugins/parsleyjs/dist/parsley.min.js"></script>
<script src="assets/admin/plugins/sweetalert/dist/sweetalert.min.js?<?php echo time(); ?>"></script>
<script src="assets/admin/plugins/jquery_mask_plugin/jquery.mask.min.js?<?php echo time(); ?>"></script>
<script>
    App.settings({
        ajaxMode: true,
        ajaxDefaultUrl: '#pages/index.html',
        ajaxType: 'GET',
        ajaxDataType: 'html'
    });
</script>
<!-- ================== END BASE JS ================== -->
</body>
</html>