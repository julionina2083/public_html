<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUyaljak\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUyaljak/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerUyaljak.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerUyaljak\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerUyaljak\appProdProjectContainer([
    'container.build_hash' => 'Uyaljak',
    'container.build_id' => '4c797ddf',
    'container.build_time' => 1683513972,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUyaljak');