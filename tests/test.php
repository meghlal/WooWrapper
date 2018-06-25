<?php

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use Primitiveonline\Woocommerce\Base;

$woo = new Base('http://localhost/wp','ck_4316664b38e61bde650238a0d03b54378e63196f', 'cs_fec3d74f882c6406cfa25b3259b4a2363e4a4358');
$orders = $woo->getOrders();

echo '<pre>';

foreach ($orders as $order){
    print_r($order);
}

echo '</pre>';
