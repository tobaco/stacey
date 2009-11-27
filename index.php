<?php

if(phpversion() < 5) {
	echo '<h3>Stacey requires PHP/5.0 or higher.<br>You are currently running PHP/".phpversion().".</h3><p>You should contact your host to see if they can upgrade your version of PHP.</p>';
	return;
}

# require helpers class so we can use rglob
require_once './app/helpers.inc.php';

# include any php files which sit in the app folder
foreach(Helpers::rglob('./app/**.php') as $include) include_once $include;

# start the app
new Stacey($_GET);

?>