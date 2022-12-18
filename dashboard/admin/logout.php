<?php
      session_start();
      unset($_SESSION['logged_in']);  
      session_destroy();  
?>
<script type="text/javascript">
window.location = "http://neerever.com/recharge365/dashboard/admin/login.php";
</script>