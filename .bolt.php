<?php

$configuration = new Bolt\Configuration\Composer(__DIR__);
$configuration->setPath("web", "public");
$configuration->setPath("files", "public/files");
$configuration->setPath("themebase", "public/theme");
$configuration->getVerifier()->disableApacheChecks();
$configuration->verify();
$app = new Bolt\Application(array('resources'=>$configuration));
$app->initialize();

$config = [
    'application' => $app,
    'resources' => null,
];

return $config;