<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Illuminate\Container\Container as BaseContainer;
use Jenssegers\Blade\Blade;
use Jenssegers\Blade\Container as BladeContainer;

$root = dirname(__DIR__);
$views = $root . '/resources/views';
$cache = $root . '/storage/framework/views';

if (! is_dir($cache)) {
    mkdir($cache, 0777, true);
}

$container = new BladeContainer;
BaseContainer::setInstance($container);

$blade = new Blade($views, $cache, $container);
$html = $blade->render('portfolio');

file_put_contents($root . '/index.html', $html);

echo "Rendered index.html from resources/views/portfolio.blade.php\n";
