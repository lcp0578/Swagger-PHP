<?php
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;

// look inside *this* directory
$locator = new FileLocator(array(__DIR__.'/config'));
$loader = new YamlFileLoader($locator);
$collection = $loader->load('routes.yml');