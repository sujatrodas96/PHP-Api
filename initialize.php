<?php

defined('DS') ? null : defined('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : defined('SITE_ROOT', DS . `xampp`.DS.`www`.DS.`tuefri`);


defined('INC_PATH') ? null : defined('INC_PATH', SITE_ROOT.DS. `includes`);
defined('CORE_PATH') ? null : defined('CORE_PATH',SITE_ROOT.DS. `core`);


require_once(INC_PATH.DS."config.php");

require_once(CORE_PATH.DS."post.php");
?>