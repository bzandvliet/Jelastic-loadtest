<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("/var/www/webroot/ROOT/load.sh");
}
?>

<!-- This link will add ?run=true to your URL, index.php?run=true -->
<a href="?run=true">Click Me!</a>
