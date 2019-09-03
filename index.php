<?php
require('config.php');
if(empty($conf['blockpage_url'])) {
	    die("blockpage_url cannot be blank. Check config.php.");
}
header("Location: "."{$conf['blockpage_url']}?url={$_SERVER['HTTP_HOST']}");
?>
