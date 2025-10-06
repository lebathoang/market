<?php
echo "<pre>";
echo "JAWSDB_URL: " . getenv("JAWSDB_URL") . "\n\n";
print_r(parse_url(getenv("JAWSDB_URL")));
echo "</pre>";
?>