<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Console;

use Spryker\Zed\Console\ConsoleDependencyProvider as SprykerConsoleDependencyProvider;
use Spryker\Zed\Development\Communication\Console\GenerateGlueBackendIdeAutoCompletionConsole;
use Spryker\Zed\Development\Communication\Console\GenerateZedIdeAutoCompletionConsole;
use Spryker\Zed\Development\Communication\Console\RemoveGlueBackendIdeAutoCompletionConsole;
use Spryker\Zed\Development\Communication\Console\RemoveZedIdeAutoCompletionConsole;
use Spryker\Zed\Kernel\Communication\Console\ResolvableClassCacheConsole;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\Log\Communication\Console\DeleteLogFilesConsole;
use Spryker\Zed\Monitoring\Communication\Plugin\Console\MonitoringConsolePlugin;
use Spryker\Zed\Propel\Communication\Console\DatabaseDropConsole;
use Spryker\Zed\Propel\Communication\Console\DatabaseDropTablesConsole;
use Spryker\Zed\Propel\Communication\Console\DeleteMigrationFilesConsole;
use Spryker\Zed\Propel\Communication\Console\DeployPreparePropelConsole;
use Spryker\Zed\Propel\Communication\Console\EntityTransferGeneratorConsole;
use Spryker\Zed\Propel\Communication\Console\PropelSchemaValidatorConsole;
use Spryker\Zed\Propel\Communication\Console\PropelSchemaXmlNameValidatorConsole;
use Spryker\Zed\Propel\Communication\Console\RemoveEntityTransferConsole;
use Spryker\Zed\Queue\Communication\Console\QueueDumpConsole;
use Spryker\Zed\Router\Communication\Plugin\Console\RouterDebugBackendApiConsole;
use Spryker\Zed\Router\Communication\Plugin\Console\RouterDebugBackendGatewayConsole;
use Spryker\Zed\Router\Communication\Plugin\Console\RouterDebugBackofficeConsole;
use Spryker\Zed\Transfer\Communication\Console\DataBuilderGeneratorConsole;
use Spryker\Zed\Transfer\Communication\Console\RemoveDataBuilderConsole;
use Spryker\Zed\Transfer\Communication\Console\RemoveTransferConsole;
use Spryker\Zed\Transfer\Communication\Console\TransferGeneratorConsole;
use Spryker\Zed\Transfer\Communication\Console\ValidatorConsole;
use Spryker\Zed\Twig\Communication\Console\CacheWarmerConsole;

/**
 * @method \Pyz\Zed\Console\ConsoleConfig getConfig()
 */
class ConsoleDependencyProvider extends SprykerConsoleDependencyProvider
{
    /**
     * @var string
     */
    protected const COMMAND_SEPARATOR = ':';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return array<\Symfony\Component\Console\Command\Command>
     */
    protected function getConsoleCommands(Container $container): array
    {
        $commands = [
            new TransferGeneratorConsole(),
            new RemoveTransferConsole(),
            new EntityTransferGeneratorConsole(),
            new RemoveEntityTransferConsole(),

            // Setup commands
            new DeployPreparePropelConsole(),

            new DatabaseDropConsole(),
            new DatabaseDropTablesConsole(),
            new DeleteMigrationFilesConsole(),

            new DeleteLogFilesConsole(),

            new ResolvableClassCacheConsole(),
        ];

        $propelCommands = $container->getLocator()->propel()->facade()->getConsoleCommands();
        $commands = array_merge($commands, $propelCommands);

        if ($this->getConfig()->isDevelopmentConsoleCommandsEnabled()) {
            $commands[] = new ValidatorConsole();
            $commands[] = new DataBuilderGeneratorConsole();
            $commands[] = new RemoveDataBuilderConsole();
            $commands[] = new PropelSchemaValidatorConsole();
            $commands[] = new PropelSchemaXmlNameValidatorConsole();
            $commands[] = new GenerateZedIdeAutoCompletionConsole();
            $commands[] = new RemoveZedIdeAutoCompletionConsole();
            $commands[] = new GenerateGlueBackendIdeAutoCompletionConsole();
            $commands[] = new RemoveGlueBackendIdeAutoCompletionConsole();
        }

        return $commands;
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return array<\Spryker\Zed\Monitoring\Communication\Plugin\Console\MonitoringConsolePlugin>
     */
    public function getEventSubscriber(Container $container): array
    {
        return [
            new MonitoringConsolePlugin(),
        ];
    }
}
