<?php
use StrongDependency\Superman;
use Base\XPower;
use DependencyInjection\Superman as SupermanByDI;
use InversionOfControl\Container;
use Base\UltraBomb;

function __autoload($className)
{
    $className = preg_replace('/\\\/','/',$className).'.php';
    require_once ($className);
}

// StrongDependency
$superManBySD = new Superman();
var_dump("强依赖超人类:" . $superManBySD);
echo "<br>";
echo "<br>";

// DI
$superModule = new XPower;
$superManByDI = new SupermanByDI($superModule);

var_dump('依赖注入超人类:' . $superManByDI);
echo "<br>";
echo "<br>";

// IOC
$container = new Container;

$container->bind('superman', function ($container, $moduleName) {
    return new SupermanByDI($container->make($moduleName));
});

$container->bind('xpower', function ($container) {
    return new XPower;
});

$container->bind('ultrabomb', function ($container) {
    return new UltraBomb;
});

var_dump('容器:' . $container);

$superman = $container->make('superman', 'xpower');

//var_dump('控制反转超人类' . $superman);