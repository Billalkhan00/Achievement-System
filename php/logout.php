<!-- This deletes the session data and logs the user out -->
<?php
session_start();
session_unset();
session_destroy();
header("Location: ../index.php");
exit();