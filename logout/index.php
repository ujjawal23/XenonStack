<?php 

session_start();

session_unset();

session_destroy();
echo' <script>alert("You Are Logged!")
location.href = "/college"
</script>';
exit();
?>