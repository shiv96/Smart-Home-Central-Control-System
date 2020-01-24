</div>
<footer class="app-footer">
    <style>
        span.tt-footer__copyright.developed {
            font-size: 16px;
            display: inline-block;
            padding:    0;
        }
        span.tt-footer__copyright.developed i {
            margin: 0 4px;
        }
        footer.app-footer {
            display: inline-block;
        }    
        footer.app-footer strong {
            margin: 13px 0 0 0;
            display: inline-block;
        }
        .pull-right {
            float: right; 
            display: inline-block;
        }
        @media (max-width: 767px){
            .app-footer{width: 100%; text-align: center;}
            .app-footer .pull-right { float: none !important; margin-top: 10px;}
        }
    </style>
    <strong><?php echo WEBSITE_COPYRIGHT_TEXT; ?></strong>
    <div class="pull-right">
        <span class="tt-footer__copyright developed">Designed & Developed With <i class="fa fa-heart" style="color: #cf2027;" aria-hidden="true"></i> By <a href="http://www.vethics.com/" target="_blank"><img src="<?php echo UPLOAD_URL_PATH. 'vethics-header-logo_blue.svg'; ?>" alt="vethics" /></a></span>
    </div>
</footer>
<!-- Bootstrap and necessary plugins -->
 
<script src="<?php echo ASSETS_URL_PATH . '/'; ?>vendors/js/popper.min.js"></script>
<script src="<?php echo ASSETS_URL_PATH . '/'; ?>vendors/js/bootstrap.min.js"></script>
<script src="<?php echo ASSETS_URL_PATH . '/'; ?>vendors/js/pace.min.js"></script>
<!-- GenesisUI main scripts -->
<script src="<?php echo ASSETS_URL_PATH . '/'; ?>js/app.js"></script>
<script>
   $(document).ready(function () {
        $(".number_only").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                            // Allow: home, end, left, right, down, up
                                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                        // let it happen, don't do anything
                        return;
                    }
                    // Ensure that it is a number and stop the keypress
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                        e.preventDefault();
                    }
                });

        $(".string_only").keypress(function (e) {
            var key = e.keyCode;
            if (key >= 48 && key <= 57) {
                e.preventDefault();
            }
        });
    });
</script>
</body>
</html>
