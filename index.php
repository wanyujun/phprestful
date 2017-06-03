<?php
/**
 * User: laowan
 * Date: 17/6/2
 * Time: 上午12:11
 */
require_once('./vendor/autoload.php');
$config = require_once('./config/config.php');
(new Core\Base())->run();