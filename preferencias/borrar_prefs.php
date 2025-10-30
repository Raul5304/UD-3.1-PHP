<?php

setcookie("nombreusu", "", time() - 3600, "/");
setcookie("colorusu", "", time() - 3600, "/");

header("Location: index.php");
exit;
?>