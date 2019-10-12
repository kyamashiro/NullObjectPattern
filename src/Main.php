<?php
require_once "../vendor/autoload.php";
use NullObject\Filter;
use NullObject\Seller;

// 出品者
$sellers[] = new Seller(['rate' => 79, 'price' => 500]);
$sellers[] = new Seller(['rate' => 60, 'price' => 700]);

$filter = new Filter($sellers);
if ($seller = $filter->featuredSeller()) {
    echo $seller->price();
}

echo $filter->featuredSeller()->price();