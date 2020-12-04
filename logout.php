<?php
session_start();
unset($_SESSION["username"]);
session_destroy();
header('Location: index.php?page=login');
exit;
?>

<SCRIPT LANGUAGE="javascript">
function ClearHistory()
{
     var backlen = history.length;
     history.go(-backlen);
     window.location.href = loggedOutPageUrl
}
</SCRIPT>