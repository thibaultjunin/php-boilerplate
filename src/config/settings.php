<?php

use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        "settings" => [
            'displayErrorDetails' => isset($_ENV['ENVIRONMENT']) && $_ENV['ENVIRONMENT'] !== "prod" && $_ENV['ENVIRONMENT'] !== "production",
            // Add required settings here
        ]
    ]);
};
