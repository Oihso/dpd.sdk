<?php
require __DIR__ .'/../src/autoload.php';

$options = require __DIR__ .'/config.php';
$config  = new \Oihso\DPD\Config\Config($options);

\Oihso\DPD\Agents::checkOrderStatus($config);