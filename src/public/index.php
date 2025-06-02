<?php
$root = dirname(__DIR__);
require "$root/vendor/autoload.php";
$data = [];


use app\CreateDataArray;

$obj = new CreateDataArray();


$data = $obj->process();

require "$root/views/table.html";