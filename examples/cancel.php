<?php
require __DIR__ .'/../src/autoload.php';

$options = require __DIR__ .'/config.php';
$config  = new \Oihso\DPD\Config\Config($options);

// получить созданный ранее заказ и отменить его
$orderId = 1; // внешний ID заказа
$order   = \Oihso\DPD\DB\Connection::getInstance($config)->getTable('order')->getByOrderId($orderId);

$ret = $order->dpd()->cancel();

var_dump($ret);