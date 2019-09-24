<pre><?php

// $_WORDS is superglobal

var_dump(time());

$str = "This is a string?";

var_export($_SERVER);

var_export(parse_url($_SERVER["REQUEST_URI"]));
var_export($_GET);
