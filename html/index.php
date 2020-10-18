<?php
echo "Ciao";

$db_connection = pg_connect("host=db dbname=test user=test password=test");
echo $db_connection;

?>
