<script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        
        <script>
        $('.dropdown-toggle').click(function(e) {
          e.preventDefault();
          setTimeout($.proxy(function() {
            if ('ontouchstart' in document.documentElement) {
              $(this).siblings('.dropdown-backdrop').off().remove();
            }
          }, this), 0);
        });
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    <?
    if (isset($table)) {
    	?>
    	<!-- DATA TABLE SCRIPTS -->
        <script src="assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
    	<?
    }
    ?>
   
</body>
</html>