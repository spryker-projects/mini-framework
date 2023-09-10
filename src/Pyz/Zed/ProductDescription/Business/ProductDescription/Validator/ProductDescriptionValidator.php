<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductDescription\Business\ProductDescription\Validator;

use Generated\Shared\Transfer\ErrorTransfer;
use Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer;
use Generated\Shared\Transfer\ProductDescriptionTransfer;
use Pyz\Zed\ProductDescription\Business\ProductDescription\IdentifierBuilder\ProductDescriptionIdentifierBuilderInterface;

class ProductDescriptionValidator implements ProductDescriptionValidatorInterface
{
    /**
     * @var \Pyz\Zed\ProductDescription\Business\ProductDescription\Validator\Rules\ProductDescriptionValidatorRuleInterface[]
     */
    protected array $validatorRules = [];

    /**
     * @var \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Validator\ProductDescriptionValidatorRulePluginInterface[]
     */
    protected array $validatorRulePlugins = [];

    /**
     * @var \Pyz\Zed\ProductDescription\Business\ProductDescription\IdentifierBuilder\ProductDescriptionIdentifierBuilderInterface
     */
    protected ProductDescriptionIdentifierBuilderInterface $identifierBuilder;

    /**
     * @param \Pyz\Zed\ProductDescription\Business\ProductDescription\Validator\Rules\ProductDescriptionValidatorRuleInterface[] $validatorRules
     * @param \Pyz\Zed\ProductDescriptionExtension\Dependency\Plugin\ProductDescription\Validator\ProductDescriptionValidatorRulePluginInterface[] $validatorRulePlugins
     * @param \Pyz\Zed\ProductDescription\Business\ProductDescription\IdentifierBuilder\ProductDescriptionIdentifierBuilderInterface $identifierBuilder
     */
    public function __construct(
        array $validatorRules,
        array $validatorRulePlugins,
        ProductDescriptionIdentifierBuilderInterface $identifierBuilder
    ) {
        $this->validatorRules = $validatorRules;
        $this->validatorRulePlugins = $validatorRulePlugins;
        $this->identifierBuilder = $identifierBuilder;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    public function validateCollection(
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): ProductDescriptionCollectionResponseTransfer {
        foreach ($productDescriptionCollectionResponseTransfer->getProductDescriptions() as $productDescriptionTransfer) {
            $productDescriptionCollectionResponseTransfer = $this->validate($productDescriptionTransfer, $productDescriptionCollectionResponseTransfer);
        }

        return $productDescriptionCollectionResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    public function validate(
        ProductDescriptionTransfer $productDescriptionTransfer,
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): ProductDescriptionCollectionResponseTransfer {
        $productDescriptionCollectionResponseTransfer = $this->executeValidatorRules($productDescriptionTransfer, $productDescriptionCollectionResponseTransfer);
        $productDescriptionCollectionResponseTransfer = $this->executeValidatorRulePlugins($productDescriptionTransfer, $productDescriptionCollectionResponseTransfer);

        return $productDescriptionCollectionResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    protected function executeValidatorRules(
        ProductDescriptionTransfer $productDescriptionTransfer,
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): ProductDescriptionCollectionResponseTransfer {
        foreach ($this->validatorRules as $validatorRule) {
            $errors = $validatorRule->validate($productDescriptionTransfer);

            $productDescriptionCollectionResponseTransfer = $this->addErrorsToCollectionResponseTransfer($productDescriptionTransfer, $productDescriptionCollectionResponseTransfer, $errors);
        }

        return $productDescriptionCollectionResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    protected function executeValidatorRulePlugins(
        ProductDescriptionTransfer $productDescriptionTransfer,
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
    ): ProductDescriptionCollectionResponseTransfer {
        foreach ($this->validatorRulePlugins as $validatorRule) {
            $errors = $validatorRule->validate($productDescriptionTransfer);

            $productDescriptionCollectionResponseTransfer = $this->addErrorsToCollectionResponseTransfer($productDescriptionTransfer, $productDescriptionCollectionResponseTransfer, $errors);
        }

        return $productDescriptionCollectionResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductDescriptionTransfer $productDescriptionTransfer
     * @param \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer
     * @param string[] $errors
     *
     * @return \Generated\Shared\Transfer\ProductDescriptionCollectionResponseTransfer
     */
    protected function addErrorsToCollectionResponseTransfer(
        ProductDescriptionTransfer $productDescriptionTransfer,
        ProductDescriptionCollectionResponseTransfer $productDescriptionCollectionResponseTransfer,
        array $errors
    ): ProductDescriptionCollectionResponseTransfer {
        $identifier = $this->identifierBuilder->buildIdentifier($productDescriptionTransfer);

        foreach ($errors as $error) {
            $productDescriptionCollectionResponseTransfer->addError(
                (new ErrorTransfer())
                    ->setMessage($error)
                    ->setEntityIdentifier($identifier),
            );
        }

        return $productDescriptionCollectionResponseTransfer;
    }
}
