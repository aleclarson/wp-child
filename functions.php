<?php

// Ensure a link exists to the real style.css
$link = dirname(__FILE__) . '/style.css';
@link(ABSPATH . '../theme/style.css', $link);

// Include the real functions.php
require_once ABSPATH . '../theme/functions.php';
