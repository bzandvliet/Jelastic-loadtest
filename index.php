<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("/var/www/webroot/ROOT/load.sh");
}

if ($_GET['run2']) {
  # This code will run if ?run2=true is set.
  exec("/var/www/webroot/ROOT/loaddb.sh");
}
?>

<!-- This link will add ?run=true to your URL, index.php?run=true -->
<a href="?run=true">Webserver Loadtest!</a> <br>
<a href="?run2=true">Database Loadtest!</a>
