<!-- ----------------------------------------------------------------------
#--------------------------------------------------------------------------- -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->

<?php
echo '<span style="display:inline-block; transform: rotate(180deg)">&copy;</span> &nbsp;&nbsp ' . $conf_data['VERSION_YEAR'] . '&nbsp Jonah K. Menson';
?>
    <!-- To the right -->
    <div class="pull-right no-hidden-xs">
<?php
echo '' . $conf_data['VERSION'] . '&nbsp;&nbsp;<small>(' . $conf_data['VERSION_DATE'] . ')</small>';
?>
    </div>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
  <script src="lib/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.4.1 -->
  <script src="lib/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
  <script src="lib/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- Custom JS -->
  <script src="js/pialert_common.js"></script>
  <script>
    initCPUtemp();
  </script>

</body>
</html>
