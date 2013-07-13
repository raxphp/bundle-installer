<?php

namespace Rax\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

/**
 * {@inheritdoc}
 */
class BundleInstaller extends LibraryInstaller
{
    /**
     * {@inheritdoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $name = $package->getPrettyName();

        $name = substr($name, strrpos($name, '/') + 1);

        if ('-bundle' === substr($name, -7)) {
            $name = substr($name, 0, strlen($name) - 7);
        }

        return 'bundles/'.$name;
    }

    /**
     * {@inheritdoc}
     */
    public function supports($packageType)
    {
        return 'rax-bundle' === $packageType;
    }
}
