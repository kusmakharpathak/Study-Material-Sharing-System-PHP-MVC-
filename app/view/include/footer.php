
<script src="<?php echo URLROOT?>/public/js/jquery-3.3.1.min.js"></script>
<!-- Plugins js -->
<script src="<?php echo URLROOT?>/public/js/plugins.js"></script>
<!-- Popper js -->
<script src="<?php echo URLROOT?>/public/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="<?php echo URLROOT?>/public/js/bootstrap.min.js"></script>
<!-- Counterup Js -->
<script src="<?php echo URLROOT?>/public/js/jquery.counterup.min.js"></script>
<!-- Waypoints Js -->
<script src="<?php echo URLROOT?>/public/js/jquery.waypoints.min.js"></script>
<!-- Scroll Up Js -->
<script src="<?php echo URLROOT?>/public/js/jquery.scrollUp.min.js"></script>
<!-- Data Table Js -->
<script src="<?php echo URLROOT?>/public/js/jquery.dataTables.min.js"></script>
<!-- Chart Js -->
<script src="<?php echo URLROOT?>/public/js/Chart.min.js"></script>
<!-- Custom Js -->
<script src="<?php echo URLROOT?>/public/js/main.js"></script>

<!--<footer class="footer-wrap-layout1">-->
<!--    <div class="copyright">© Copyrights Kusmakhar, Sunil, Sachina --><?php //echo date("Y")?><!--. All rights reserved. Designed by 4th Semester</div>-->
<!--</footer>-->
</div>
</div>
<!-- Page Area End Here -->
</div>

<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

</body>
</html>