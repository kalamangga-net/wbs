<?php

// comment out the following two lines when deployed to production
defined('DEBUG_WBS') or define('DEBUG_WBS', true);
defined('ENV_WBS') or define('ENV_WBS', 'devel');

require(__DIR__ . '/wbs-web.php');
require(__DIR__ . '/wbs-config.php');
require(__DIR__ . '/wbs-blog.php');

?>
