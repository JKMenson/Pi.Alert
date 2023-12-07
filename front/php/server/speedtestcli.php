<?php
//------------------------------------------------------------------------------
//  speedtestcli.php 
//------------------------------------------------------------------------------
session_start();

require 'db.php';
require 'journal.php';
$DBFILE = '../../../db/pialert.db';

// Open DB
OpenDB();

exec('../../../back/speedtest-cli --secure --simple', $output);

$cli_output = implode('<br>', $output);
// Logging
pialert_logging('a_002', $_SERVER['REMOTE_ADDR'], 'LogStr_0255', '', $cli_output);

echo '<h4>Speedtest Results</h4>';
echo '<pre style="border: none;">';

foreach ($output as $line) {
	echo $line . "\n";
}
echo '</pre>';
?>