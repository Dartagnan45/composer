<?php
/**
 * Created by PhpStorm.
 * User: aragorn
 * Date: 01/04/19
 * Time: 21:50
 */
require_once __DIR__ . '/../vendor/autoload.php';
$hello = new \App\Wcs\Hello();

$helloWorld = new \HelloWorld\SayHello();

echo $hello->talk();
echo $helloWorld->world();