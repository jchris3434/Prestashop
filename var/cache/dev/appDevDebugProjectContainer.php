<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWsjkbaj\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWsjkbaj/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerWsjkbaj.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerWsjkbaj\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerWsjkbaj\appDevDebugProjectContainer([
    'container.build_hash' => 'Wsjkbaj',
    'container.build_id' => '2d8d850d',
    'container.build_time' => 1670238314,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWsjkbaj');
