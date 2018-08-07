<?php

$base = trailingslashit(dirname(__FILE__));
$link = $base . 'style.css';

@unlink($link);
link(ABSPATH . '../theme/style.css', $link);

require_once ABSPATH . '../theme/functions.php';
