<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

$kernel = new mostertb\PHPSA2018Profiles\Kernel();

$loader = new Twig_Loader_Filesystem(dirname(__DIR__) . '/resources/views/');
$twig = new Twig_Environment($loader, array());

$template = $twig->load('profiles.twig.html');

echo $template->render(array(
        'profiles' => $kernel->getProfiles()
));

