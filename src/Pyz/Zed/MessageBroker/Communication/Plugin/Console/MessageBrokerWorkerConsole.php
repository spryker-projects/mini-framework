<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\MessageBroker\Communication\Plugin\Console;

use Generated\Shared\Transfer\MessageBrokerWorkerConfigTransfer;
use Spryker\Zed\MessageBroker\Communication\Plugin\Console\MessageBrokerWorkerConsole as SprykerMessageBrokerWorkerConsole;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\ConsoleOutputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * @method \Spryker\Zed\MessageBroker\Business\MessageBrokerFacadeInterface getFacade()
 */
class MessageBrokerWorkerConsole extends SprykerMessageBrokerWorkerConsole
{
    /**
     * @var string
     */
    public const OPTION_TRANSPORT = 'transport';

    protected function configure(): void
    {
        parent::configure();

        $this->addOption(
            static::OPTION_TRANSPORT,
            null,
            InputOption::VALUE_OPTIONAL,
            'The transport to consume messages from.',
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $messageBrokerWorkerConfigTransfer = new MessageBrokerWorkerConfigTransfer();

        $channels = (array)$input->getArgument(static::ARGUMENT_CHANNELS);
        $messageBrokerWorkerConfigTransfer->setChannels($channels);

        $stopsWhen = [];

        $messageLimit = $this->findOptionMessageLimitValue($input);
        if ($messageLimit !== null && $messageLimit !== 0) {
            $stopsWhen[] = sprintf('processed %s messages', $messageLimit);
            $messageBrokerWorkerConfigTransfer->setLimit($messageLimit);
        }

        $failureLimit = $this->findOptionFailureLimitValue($input);
        if ($failureLimit !== null && $failureLimit !== 0) {
            $stopsWhen[] = sprintf('reached %s failed messages', $failureLimit);
            $messageBrokerWorkerConfigTransfer->setFailureLimit($failureLimit);
        }

        $memoryLimit = $this->findOptionMemoryLimitValue($input);
        if ($memoryLimit !== null && $memoryLimit !== 0) {
            $stopsWhen[] = sprintf('exceeded %s of memory', $memoryLimit);
            $messageBrokerWorkerConfigTransfer->setMemoryLimit($memoryLimit);
        }

        $timeLimit = $this->findOptionTimeLimitValue($input);
        if ($timeLimit !== null && $timeLimit !== 0) {
            $stopsWhen[] = sprintf('been running for %ss', $timeLimit);
            $messageBrokerWorkerConfigTransfer->setTimeLimit($timeLimit);
        }

        $symfonyStyle = new SymfonyStyle($input, $output instanceof ConsoleOutputInterface ? $output->getErrorOutput() : $output);
        if ($channels !== []) {
            $symfonyStyle->success(sprintf('Consuming messages from channel%s "%s".', count($channels) > 1 ? static::OPTION_SLEEP_SHORT : '', implode(', ', $channels)));
        } else {
            $symfonyStyle->success('Consuming messages from default channels".');
        }

        $last = array_pop($stopsWhen);
        $stopsWhen = ($stopsWhen !== [] ? implode(', ', $stopsWhen) . ' or ' : '') . $last;

        if (OutputInterface::VERBOSITY_VERBOSE > $output->getVerbosity()) {
            $symfonyStyle->comment(sprintf('The worker will automatically exit once it has %s.', $stopsWhen));
            $symfonyStyle->comment('Quit the worker with CONTROL-C.');
            $symfonyStyle->comment('Re-run the command with a -vv option to see logs about consumed messages.');
        }

        $messageBrokerWorkerConfigTransfer->setSleep($this->getOptionSleepValue($input) * 1_000_000);
        $messageBrokerWorkerConfigTransfer->setTransport($this->getOptionTransportValue($input));

        $this->getFacade()->startWorker($messageBrokerWorkerConfigTransfer);

        return static::CODE_SUCCESS;
    }

    protected function getOptionTransportValue(InputInterface $input): string
    {
        $optionTransportValue = $input->getOption(static::OPTION_TRANSPORT);

        if (!is_string($optionTransportValue)) {
            return '';
        }

        return $optionTransportValue;
    }
}
