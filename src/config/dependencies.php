<?php

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        "example" => function (ContainerInterface $ci) {
            return null;
        },
    ]);
};
