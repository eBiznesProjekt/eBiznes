<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBabds5w\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBabds5w/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerBabds5w.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerBabds5w\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerBabds5w\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Babds5w',
    'container.build_id' => '6ec57e55',
    'container.build_time' => 1543341146,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerBabds5w');