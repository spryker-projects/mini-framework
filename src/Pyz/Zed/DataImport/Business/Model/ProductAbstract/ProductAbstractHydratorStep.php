<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\DataImport\Business\Model\ProductAbstract;

use Generated\Shared\Transfer\SpyProductAbstractEntityTransfer;
use Generated\Shared\Transfer\SpyProductAbstractLocalizedAttributesEntityTransfer;
use Generated\Shared\Transfer\SpyProductCategoryEntityTransfer;
use Generated\Shared\Transfer\SpyUrlEntityTransfer;
use Pyz\Zed\DataImport\Business\Model\Product\ProductLocalizedAttributesExtractorStep;
use Spryker\Zed\DataImport\Business\Exception\DataKeyNotFoundInDataSetException;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\DataImportStepInterface;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface;

class ProductAbstractHydratorStep implements DataImportStepInterface
{
    /**
     * @var int
     */
    public const BULK_SIZE = 5000;

    /**
     * @var string
     */
    public const COLUMN_ABSTRACT_SKU = 'abstract_sku';

    /**
     * @var string
     */
    public const COLUMN_CATEGORY_KEY = 'category_key';

    /**
     * @var string
     */
    public const COLUMN_CATEGORY_PRODUCT_ORDER = 'category_product_order';

    /**
     * @var string
     */
    public const COLUMN_NAME = 'name';

    /**
     * @var string
     */
    public const COLUMN_URL = 'url';

    /**
     * @var string
     */
    public const COLUMN_COLOR_CODE = 'color_code';

    /**
     * @var string
     */
    public const COLUMN_DESCRIPTION = 'description';

    /**
     * @var string
     */
    public const COLUMN_TAX_SET_NAME = 'tax_set_name';

    /**
     * @var string
     */
    public const COLUMN_META_TITLE = 'meta_title';

    /**
     * @var string
     */
    public const COLUMN_META_KEYWORDS = 'meta_keywords';

    /**
     * @var string
     */
    public const COLUMN_META_DESCRIPTION = 'meta_description';

    /**
     * @var string
     */
    public const COLUMN_NEW_FROM = 'new_from';

    /**
     * @var string
     */
    public const COLUMN_NEW_TO = 'new_to';

    /**
     * @var string
     */
    public const DATA_PRODUCT_ABSTRACT_TRANSFER = 'DATA_PRODUCT_ABSTRACT_TRANSFER';

    /**
     * @var string
     */
    public const DATA_PRODUCT_ABSTRACT_LOCALIZED_TRANSFER = 'DATA_PRODUCT_ABSTRACT_LOCALIZED_TRANSFER';

    /**
     * @var string
     */
    public const DATA_PRODUCT_CATEGORY_TRANSFER = 'DATA_PRODUCT_CATEGORY_TRANSFER';

    /**
     * @var string
     */
    public const DATA_PRODUCT_URL_TRANSFER = 'DATA_PRODUCT_URL_TRANSFER';

    /**
     * @var string
     */
    public const KEY_PRODUCT_CATEGORY_TRANSFER = 'productCategoryTransfer';

    /**
     * @var string
     */
    public const KEY_PRODUCT_ABSTRACT_LOCALIZED_TRANSFER = 'localizedAttributeTransfer';

    /**
     * @var string
     */
    public const KEY_PRODUCT_URL_TRASNFER = 'urlTransfer';

    /**
     * @var string
     */
    public const KEY_SKU = 'sku';

    /**
     * @var string
     */
    public const KEY_ATTRIBUTES = 'attributes';

    /**
     * @var string
     */
    public const KEY_ID_TAX_SET = 'idTaxSet';

    /**
     * @var string
     */
    public const KEY_FK_TAX_SET = 'fk_tax_set';

    /**
     * @var string
     */
    public const COLUMN_CATEGORY_KEYS = 'categoryKeys';

    /**
     * @var string
     */
    public const KEY_FK_CATEGORY = 'fk_category';

    /**
     * @var string
     */
    public const KEY_PRODUCT_ORDER = 'product_order';

    /**
     * @var string
     */
    public const KEY_LOCALES = 'locales';

    /**
     * @var string
     */
    public const KEY_FK_LOCALE = 'fk_locale';

    /**
     * @var string
     */
    public const KEY_ID_URL = 'id_url';

    /**
     * @var string
     */
    public const KEY_ID_PRODUCT_ABSTRACT = 'id_product_abstract';

    /**
     * @param \Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface $dataSet
     *
     * @return void
     */
    public function execute(DataSetInterface $dataSet): void
    {
        $this->importProductAbstract($dataSet);
        $this->importProductAbstractLocalizedAttributes($dataSet);
    }

    /**
     * @param \Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface $dataSet
     *
     * @return void
     */
    protected function importProductAbstract(DataSetInterface $dataSet): void
    {
        $productAbstractEntityTransfer = new SpyProductAbstractEntityTransfer();
        $productAbstractEntityTransfer->setSku($dataSet[static::COLUMN_ABSTRACT_SKU]);

        $productAbstractEntityTransfer
            ->setAttributes(json_encode($dataSet[static::KEY_ATTRIBUTES]));

        $dataSet[static::DATA_PRODUCT_ABSTRACT_TRANSFER] = $productAbstractEntityTransfer;
    }

    /**
     * @param \Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface $dataSet
     *
     * @return void
     */
    protected function importProductAbstractLocalizedAttributes(DataSetInterface $dataSet): void
    {
        $localizedAttributeTransfer = [];

        foreach ($dataSet[ProductLocalizedAttributesExtractorStep::KEY_LOCALIZED_ATTRIBUTES] as $idLocale => $localizedAttributes) {
            $productAbstractLocalizedAttributesEntityTransfer = new SpyProductAbstractLocalizedAttributesEntityTransfer();
            $productAbstractLocalizedAttributesEntityTransfer
                ->setName($localizedAttributes[static::COLUMN_NAME])
                ->setDescription($localizedAttributes[static::COLUMN_DESCRIPTION])
                ->setMetaTitle($localizedAttributes[static::COLUMN_META_TITLE])
                ->setMetaDescription($localizedAttributes[static::COLUMN_META_DESCRIPTION])
                ->setMetaKeywords($localizedAttributes[static::COLUMN_META_KEYWORDS])
                ->setFkLocale($idLocale)
                ->setAttributes((string)json_encode($localizedAttributes[static::KEY_ATTRIBUTES]));

            $localizedAttributeTransfer[] = [
                static::COLUMN_ABSTRACT_SKU => $dataSet[static::COLUMN_ABSTRACT_SKU],
                static::KEY_PRODUCT_ABSTRACT_LOCALIZED_TRANSFER => $productAbstractLocalizedAttributesEntityTransfer,
            ];
        }

        $dataSet[static::DATA_PRODUCT_ABSTRACT_LOCALIZED_TRANSFER] = $localizedAttributeTransfer;
    }
}
