<?php

namespace Composer\Installers;

/**
 * {@inheritdoc}
 */
class RaxInstaller extends BaseInstaller
{
    /**
     * {@inheritdoc}
     */
    protected $locations = array(
        'bundle' => 'bundles/{$name}/',
    );
}
