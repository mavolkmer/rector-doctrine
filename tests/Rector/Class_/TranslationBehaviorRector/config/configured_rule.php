<?php

declare(strict_types=1);

use Rector\Doctrine\Rector\Class_\TranslationBehaviorRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/../../../../../config/config.php');

    $services = $containerConfigurator->services();
    $services->set(TranslationBehaviorRector::class);
};
