<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\HelloWorld\Business\User\Validator;

use Generated\Shared\Transfer\ErrorTransfer;
use Generated\Shared\Transfer\UserCollectionResponseTransfer;
use Generated\Shared\Transfer\UserTransfer;
use Pyz\Zed\HelloWorld\Business\User\IdentifierBuilder\UserIdentifierBuilderInterface;

class UserValidator implements UserValidatorInterface
{
    /**
     * @var \Pyz\Zed\HelloWorld\Business\User\Validator\Rules\UserValidatorRuleInterface[]
     */
    protected array $validatorRules = [];

    /**
     * @var \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Validator\UserValidatorRulePluginInterface[]
     */
    protected array $validatorRulePlugins = [];

    /**
     * @var \Pyz\Zed\HelloWorld\Business\User\IdentifierBuilder\UserIdentifierBuilderInterface
     */
    protected UserIdentifierBuilderInterface $identifierBuilder;

    /**
     * @param \Pyz\Zed\HelloWorld\Business\User\Validator\Rules\UserValidatorRuleInterface[] $validatorRules
     * @param \Pyz\Zed\HelloWorldExtension\Dependency\Plugin\User\Validator\UserValidatorRulePluginInterface[] $validatorRulePlugins
     * @param \Pyz\Zed\HelloWorld\Business\User\IdentifierBuilder\UserIdentifierBuilderInterface $identifierBuilder
     */
    public function __construct(
        array $validatorRules,
        array $validatorRulePlugins,
        UserIdentifierBuilderInterface $identifierBuilder
    ) {
        $this->validatorRules = $validatorRules;
        $this->validatorRulePlugins = $validatorRulePlugins;
        $this->identifierBuilder = $identifierBuilder;
    }

    /**
     * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    public function validateCollection(
        UserCollectionResponseTransfer $userCollectionResponseTransfer
    ): UserCollectionResponseTransfer {
        foreach ($userCollectionResponseTransfer->getUsers() as $userTransfer) {
            $userCollectionResponseTransfer = $this->validate($userTransfer, $userCollectionResponseTransfer);
        }

        return $userCollectionResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    public function validate(
        UserTransfer $userTransfer,
        UserCollectionResponseTransfer $userCollectionResponseTransfer
    ): UserCollectionResponseTransfer {
        $userCollectionResponseTransfer = $this->executeValidatorRules($userTransfer, $userCollectionResponseTransfer);
        $userCollectionResponseTransfer = $this->executeValidatorRulePlugins($userTransfer, $userCollectionResponseTransfer);

        return $userCollectionResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    protected function executeValidatorRules(
        UserTransfer $userTransfer,
        UserCollectionResponseTransfer $userCollectionResponseTransfer
    ): UserCollectionResponseTransfer {
        foreach ($this->validatorRules as $validatorRule) {
            $errors = $validatorRule->validate($userTransfer);

            $userCollectionResponseTransfer = $this->addErrorsToCollectionResponseTransfer($userTransfer, $userCollectionResponseTransfer, $errors);
        }

        return $userCollectionResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    protected function executeValidatorRulePlugins(
        UserTransfer $userTransfer,
        UserCollectionResponseTransfer $userCollectionResponseTransfer
    ): UserCollectionResponseTransfer {
        foreach ($this->validatorRulePlugins as $validatorRule) {
            $errors = $validatorRule->validate($userTransfer);

            $userCollectionResponseTransfer = $this->addErrorsToCollectionResponseTransfer($userTransfer, $userCollectionResponseTransfer, $errors);
        }

        return $userCollectionResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\UserTransfer $userTransfer
     * @param \Generated\Shared\Transfer\UserCollectionResponseTransfer $userCollectionResponseTransfer
     * @param string[] $errors
     *
     * @return \Generated\Shared\Transfer\UserCollectionResponseTransfer
     */
    protected function addErrorsToCollectionResponseTransfer(
        UserTransfer $userTransfer,
        UserCollectionResponseTransfer $userCollectionResponseTransfer,
        array $errors
    ): UserCollectionResponseTransfer {
        $identifier = $this->identifierBuilder->buildIdentifier($userTransfer);

        foreach ($errors as $error) {
            $userCollectionResponseTransfer->addError(
                (new ErrorTransfer())
                    ->setMessage($error)
                    ->setEntityIdentifier($identifier),
            );
        }

        return $userCollectionResponseTransfer;
    }
}
