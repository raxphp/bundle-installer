<?php

namespace Rax\Composer;

use Composer\Installers\BaseInstaller;

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
