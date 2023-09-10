<?php

namespace Pyz\Zed\Installer;

use Spryker\Zed\Country\Communication\Plugin\CountryInstallerPlugin;
use \Spryker\Zed\Installer\InstallerDependencyProvider as SprykerInstallerDependencyProvider;
use Spryker\Zed\Locale\Communication\Plugin\LocaleInstallerPlugin;

class InstallerDependencyProvider extends SprykerInstallerDependencyProvider
{
    /**
     * Overwrite on project level.
     *
     * @return array<\Spryker\Zed\Installer\Dependency\Plugin\InstallerPluginInterface|\Spryker\Zed\InstallerExtension\Dependency\Plugin\InstallerPluginInterface>
     */
    public function getInstallerPlugins()
    {
        return [
            new LocaleInstallerPlugin(),
            new CountryInstallerPlugin(),
        ];
    }
}
