<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4GyNdQZ\App_KernelEnvDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4GyNdQZ/App_KernelEnvDebugContainer.php') {
    touch(__DIR__.'/Container4GyNdQZ.legacy');

    return;
}

if (!\class_exists(App_KernelEnvDebugContainer::class, false)) {
    \class_alias(\Container4GyNdQZ\App_KernelEnvDebugContainer::class, App_KernelEnvDebugContainer::class, false);
}

return new \Container4GyNdQZ\App_KernelEnvDebugContainer([
    'container.build_hash' => '4GyNdQZ',
    'container.build_id' => 'e0783d5c',
    'container.build_time' => 1583680287,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4GyNdQZ');
