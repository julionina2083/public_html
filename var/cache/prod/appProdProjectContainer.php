<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJrcct9f\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJrcct9f/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerJrcct9f.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerJrcct9f\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerJrcct9f\appProdProjectContainer([
    'container.build_hash' => 'Jrcct9f',
    'container.build_id' => '366fee16',
    'container.build_time' => 1683556548,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJrcct9f');
