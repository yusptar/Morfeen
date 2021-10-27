<?php
session_start();
session_destroy();
session_unset();

echo "<center><b>LOGGING OUT ...<b><center>";
echo "<meta http-equiv='refresh' content='1;url=index.php'>";

exit;

?>