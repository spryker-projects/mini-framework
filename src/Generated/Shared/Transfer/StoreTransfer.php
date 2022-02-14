<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class StoreTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const AVAILABLE_LOCALE_ISO_CODES = 'availableLocaleIsoCodes';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const ID_STORE = 'idStore';

    /**
     * @var string
     */
    public const SELECTED_CURRENCY_ISO_CODE = 'selectedCurrencyIsoCode';

    /**
     * @var string
     */
    public const DEFAULT_CURRENCY_ISO_CODE = 'defaultCurrencyIsoCode';

    /**
     * @var string
     */
    public const AVAILABLE_CURRENCY_ISO_CODES = 'availableCurrencyIsoCodes';

    /**
     * @var string
     */
    public const QUEUE_POOLS = 'queuePools';

    /**
     * @var string
     */
    public const STORES_WITH_SHARED_PERSISTENCE = 'storesWithSharedPersistence';

    /**
     * @var string
     */
    public const COUNTRIES = 'countries';

    /**
     * @var string
     */
    public const TIMEZONE = 'timezone';

    /**
     * @var array
     */
    protected $availableLocaleIsoCodes = [];

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $idStore;

    /**
     * @var string|null
     */
    protected $selectedCurrencyIsoCode;

    /**
     * @var string|null
     */
    protected $defaultCurrencyIsoCode;

    /**
     * @var array
     */
    protected $availableCurrencyIsoCodes = [];

    /**
     * @var array
     */
    protected $queuePools = [];

    /**
     * @var array
     */
    protected $storesWithSharedPersistence = [];

    /**
     * @var array
     */
    protected $countries = [];

    /**
     * @var string|null
     */
    protected $timezone;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'available_locale_iso_codes' => 'availableLocaleIsoCodes',
        'availableLocaleIsoCodes' => 'availableLocaleIsoCodes',
        'AvailableLocaleIsoCodes' => 'availableLocaleIsoCodes',
        'name' => 'name',
        'Name' => 'name',
        'id_store' => 'idStore',
        'idStore' => 'idStore',
        'IdStore' => 'idStore',
        'selected_currency_iso_code' => 'selectedCurrencyIsoCode',
        'selectedCurrencyIsoCode' => 'selectedCurrencyIsoCode',
        'SelectedCurrencyIsoCode' => 'selectedCurrencyIsoCode',
        'default_currency_iso_code' => 'defaultCurrencyIsoCode',
        'defaultCurrencyIsoCode' => 'defaultCurrencyIsoCode',
        'DefaultCurrencyIsoCode' => 'defaultCurrencyIsoCode',
        'available_currency_iso_codes' => 'availableCurrencyIsoCodes',
        'availableCurrencyIsoCodes' => 'availableCurrencyIsoCodes',
        'AvailableCurrencyIsoCodes' => 'availableCurrencyIsoCodes',
        'queue_pools' => 'queuePools',
        'queuePools' => 'queuePools',
        'QueuePools' => 'queuePools',
        'stores_with_shared_persistence' => 'storesWithSharedPersistence',
        'storesWithSharedPersistence' => 'storesWithSharedPersistence',
        'StoresWithSharedPersistence' => 'storesWithSharedPersistence',
        'countries' => 'countries',
        'Countries' => 'countries',
        'timezone' => 'timezone',
        'Timezone' => 'timezone',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::AVAILABLE_LOCALE_ISO_CODES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'available_locale_iso_codes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_STORE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SELECTED_CURRENCY_ISO_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'selected_currency_iso_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEFAULT_CURRENCY_ISO_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'default_currency_iso_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AVAILABLE_CURRENCY_ISO_CODES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'available_currency_iso_codes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUEUE_POOLS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'queue_pools',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STORES_WITH_SHARED_PERSISTENCE => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'stores_with_shared_persistence',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COUNTRIES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'countries',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TIMEZONE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'timezone',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module GlueApplication|Store
     *
     * @param array|null $availableLocaleIsoCodes
     *
     * @return $this
     */
    public function setAvailableLocaleIsoCodes(array $availableLocaleIsoCodes = null)
    {
        if ($availableLocaleIsoCodes === null) {
            $availableLocaleIsoCodes = [];
        }

        $this->availableLocaleIsoCodes = $availableLocaleIsoCodes;
        $this->modifiedProperties[self::AVAILABLE_LOCALE_ISO_CODES] = true;

        return $this;
    }

    /**
     * @module GlueApplication|Store
     *
     * @return array
     */
    public function getAvailableLocaleIsoCodes()
    {
        return $this->availableLocaleIsoCodes;
    }

    /**
     * @module GlueApplication|Store
     *
     * @param mixed $availableLocaleCode
     *
     * @return $this
     */
    public function addAvailableLocaleCode($availableLocaleCode)
    {
        $this->availableLocaleIsoCodes[] = $availableLocaleCode;
        $this->modifiedProperties[self::AVAILABLE_LOCALE_ISO_CODES] = true;

        return $this;
    }

    /**
     * @module GlueApplication|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailableLocaleIsoCodes()
    {
        $this->assertPropertyIsSet(self::AVAILABLE_LOCALE_ISO_CODES);

        return $this;
    }

    /**
     * @module Monitoring|Store
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module Monitoring|Store
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module Monitoring|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module Monitoring|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module Store
     *
     * @param int|null $idStore
     *
     * @return $this
     */
    public function setIdStore($idStore)
    {
        $this->idStore = $idStore;
        $this->modifiedProperties[self::ID_STORE] = true;

        return $this;
    }

    /**
     * @module Store
     *
     * @return int|null
     */
    public function getIdStore()
    {
        return $this->idStore;
    }

    /**
     * @module Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdStoreOrFail()
    {
        if ($this->idStore === null) {
            $this->throwNullValueException(static::ID_STORE);
        }

        return $this->idStore;
    }

    /**
     * @module Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdStore()
    {
        $this->assertPropertyIsSet(self::ID_STORE);

        return $this;
    }

    /**
     * @module Store
     *
     * @param string|null $selectedCurrencyIsoCode
     *
     * @return $this
     */
    public function setSelectedCurrencyIsoCode($selectedCurrencyIsoCode)
    {
        $this->selectedCurrencyIsoCode = $selectedCurrencyIsoCode;
        $this->modifiedProperties[self::SELECTED_CURRENCY_ISO_CODE] = true;

        return $this;
    }

    /**
     * @module Store
     *
     * @return string|null
     */
    public function getSelectedCurrencyIsoCode()
    {
        return $this->selectedCurrencyIsoCode;
    }

    /**
     * @module Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSelectedCurrencyIsoCodeOrFail()
    {
        if ($this->selectedCurrencyIsoCode === null) {
            $this->throwNullValueException(static::SELECTED_CURRENCY_ISO_CODE);
        }

        return $this->selectedCurrencyIsoCode;
    }

    /**
     * @module Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSelectedCurrencyIsoCode()
    {
        $this->assertPropertyIsSet(self::SELECTED_CURRENCY_ISO_CODE);

        return $this;
    }

    /**
     * @module Store
     *
     * @param string|null $defaultCurrencyIsoCode
     *
     * @return $this
     */
    public function setDefaultCurrencyIsoCode($defaultCurrencyIsoCode)
    {
        $this->defaultCurrencyIsoCode = $defaultCurrencyIsoCode;
        $this->modifiedProperties[self::DEFAULT_CURRENCY_ISO_CODE] = true;

        return $this;
    }

    /**
     * @module Store
     *
     * @return string|null
     */
    public function getDefaultCurrencyIsoCode()
    {
        return $this->defaultCurrencyIsoCode;
    }

    /**
     * @module Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDefaultCurrencyIsoCodeOrFail()
    {
        if ($this->defaultCurrencyIsoCode === null) {
            $this->throwNullValueException(static::DEFAULT_CURRENCY_ISO_CODE);
        }

        return $this->defaultCurrencyIsoCode;
    }

    /**
     * @module Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDefaultCurrencyIsoCode()
    {
        $this->assertPropertyIsSet(self::DEFAULT_CURRENCY_ISO_CODE);

        return $this;
    }

    /**
     * @module Store
     *
     * @param array|null $availableCurrencyIsoCodes
     *
     * @return $this
     */
    public function setAvailableCurrencyIsoCodes(array $availableCurrencyIsoCodes = null)
    {
        if ($availableCurrencyIsoCodes === null) {
            $availableCurrencyIsoCodes = [];
        }

        $this->availableCurrencyIsoCodes = $availableCurrencyIsoCodes;
        $this->modifiedProperties[self::AVAILABLE_CURRENCY_ISO_CODES] = true;

        return $this;
    }

    /**
     * @module Store
     *
     * @return array
     */
    public function getAvailableCurrencyIsoCodes()
    {
        return $this->availableCurrencyIsoCodes;
    }

    /**
     * @module Store
     *
     * @param mixed $availableCurrencyIsoCode
     *
     * @return $this
     */
    public function addAvailableCurrencyIsoCode($availableCurrencyIsoCode)
    {
        $this->availableCurrencyIsoCodes[] = $availableCurrencyIsoCode;
        $this->modifiedProperties[self::AVAILABLE_CURRENCY_ISO_CODES] = true;

        return $this;
    }

    /**
     * @module Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAvailableCurrencyIsoCodes()
    {
        $this->assertPropertyIsSet(self::AVAILABLE_CURRENCY_ISO_CODES);

        return $this;
    }

    /**
     * @module Store
     *
     * @param array|null $queuePools
     *
     * @return $this
     */
    public function setQueuePools(array $queuePools = null)
    {
        if ($queuePools === null) {
            $queuePools = [];
        }

        $this->queuePools = $queuePools;
        $this->modifiedProperties[self::QUEUE_POOLS] = true;

        return $this;
    }

    /**
     * @module Store
     *
     * @return array
     */
    public function getQueuePools()
    {
        return $this->queuePools;
    }

    /**
     * @module Store
     *
     * @param mixed $queuePools
     *
     * @return $this
     */
    public function addQueuePools($queuePools)
    {
        $this->queuePools[] = $queuePools;
        $this->modifiedProperties[self::QUEUE_POOLS] = true;

        return $this;
    }

    /**
     * @module Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQueuePools()
    {
        $this->assertPropertyIsSet(self::QUEUE_POOLS);

        return $this;
    }

    /**
     * @module Store
     *
     * @param array|null $storesWithSharedPersistence
     *
     * @return $this
     */
    public function setStoresWithSharedPersistence(array $storesWithSharedPersistence = null)
    {
        if ($storesWithSharedPersistence === null) {
            $storesWithSharedPersistence = [];
        }

        $this->storesWithSharedPersistence = $storesWithSharedPersistence;
        $this->modifiedProperties[self::STORES_WITH_SHARED_PERSISTENCE] = true;

        return $this;
    }

    /**
     * @module Store
     *
     * @return array
     */
    public function getStoresWithSharedPersistence()
    {
        return $this->storesWithSharedPersistence;
    }

    /**
     * @module Store
     *
     * @param mixed $storeWithSharedPersistence
     *
     * @return $this
     */
    public function addStoreWithSharedPersistence($storeWithSharedPersistence)
    {
        $this->storesWithSharedPersistence[] = $storeWithSharedPersistence;
        $this->modifiedProperties[self::STORES_WITH_SHARED_PERSISTENCE] = true;

        return $this;
    }

    /**
     * @module Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoresWithSharedPersistence()
    {
        $this->assertPropertyIsSet(self::STORES_WITH_SHARED_PERSISTENCE);

        return $this;
    }

    /**
     * @module Store
     *
     * @param array|null $countries
     *
     * @return $this
     */
    public function setCountries(array $countries = null)
    {
        if ($countries === null) {
            $countries = [];
        }

        $this->countries = $countries;
        $this->modifiedProperties[self::COUNTRIES] = true;

        return $this;
    }

    /**
     * @module Store
     *
     * @return array
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @module Store
     *
     * @param mixed $country
     *
     * @return $this
     */
    public function addCountry($country)
    {
        $this->countries[] = $country;
        $this->modifiedProperties[self::COUNTRIES] = true;

        return $this;
    }

    /**
     * @module Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCountries()
    {
        $this->assertPropertyIsSet(self::COUNTRIES);

        return $this;
    }

    /**
     * @module Store
     *
     * @param string|null $timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        $this->modifiedProperties[self::TIMEZONE] = true;

        return $this;
    }

    /**
     * @module Store
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @module Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTimezoneOrFail()
    {
        if ($this->timezone === null) {
            $this->throwNullValueException(static::TIMEZONE);
        }

        return $this->timezone;
    }

    /**
     * @module Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTimezone()
    {
        $this->assertPropertyIsSet(self::TIMEZONE);

        return $this;
    }

    /**
     * @param array<string, mixed> $data
     * @param bool $ignoreMissingProperty
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function fromArray(array $data, $ignoreMissingProperty = false)
    {
        foreach ($data as $property => $value) {
            $normalizedPropertyName = $this->transferPropertyNameMap[$property] ?? null;

            switch ($normalizedPropertyName) {
                case 'availableLocaleIsoCodes':
                case 'name':
                case 'idStore':
                case 'selectedCurrencyIsoCode':
                case 'defaultCurrencyIsoCode':
                case 'availableCurrencyIsoCodes':
                case 'queuePools':
                case 'storesWithSharedPersistence':
                case 'countries':
                case 'timezone':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
            }
        }

        return $this;
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function modifiedToArray($isRecursive = true, $camelCasedKeys = false)
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayRecursiveCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveNotCamelCased();
        }
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function toArray($isRecursive = true, $camelCasedKeys = false)
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->toArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->toArrayRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->toArrayNotRecursiveNotCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->toArrayNotRecursiveCamelCased();
        }
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollectionModified($value, $isRecursive, $camelCasedKeys)
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->modifiedToArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollection($value, $isRecursive, $camelCasedKeys)
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->toArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveCamelCased()
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, true);

                continue;
            }
            switch ($property) {
                case 'availableLocaleIsoCodes':
                case 'name':
                case 'idStore':
                case 'selectedCurrencyIsoCode':
                case 'defaultCurrencyIsoCode':
                case 'availableCurrencyIsoCodes':
                case 'queuePools':
                case 'storesWithSharedPersistence':
                case 'countries':
                case 'timezone':
                    $values[$arrayKey] = $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveNotCamelCased()
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, false);

                continue;
            }
            switch ($property) {
                case 'availableLocaleIsoCodes':
                case 'name':
                case 'idStore':
                case 'selectedCurrencyIsoCode':
                case 'defaultCurrencyIsoCode':
                case 'availableCurrencyIsoCodes':
                case 'queuePools':
                case 'storesWithSharedPersistence':
                case 'countries':
                case 'timezone':
                    $values[$arrayKey] = $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveNotCamelCased()
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveCamelCased()
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return void
     */
    protected function initCollectionProperties()
    {
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased()
    {
        return [
            'availableLocaleIsoCodes' => $this->availableLocaleIsoCodes,
            'name' => $this->name,
            'idStore' => $this->idStore,
            'selectedCurrencyIsoCode' => $this->selectedCurrencyIsoCode,
            'defaultCurrencyIsoCode' => $this->defaultCurrencyIsoCode,
            'availableCurrencyIsoCodes' => $this->availableCurrencyIsoCodes,
            'queuePools' => $this->queuePools,
            'storesWithSharedPersistence' => $this->storesWithSharedPersistence,
            'countries' => $this->countries,
            'timezone' => $this->timezone,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased()
    {
        return [
            'available_locale_iso_codes' => $this->availableLocaleIsoCodes,
            'name' => $this->name,
            'id_store' => $this->idStore,
            'selected_currency_iso_code' => $this->selectedCurrencyIsoCode,
            'default_currency_iso_code' => $this->defaultCurrencyIsoCode,
            'available_currency_iso_codes' => $this->availableCurrencyIsoCodes,
            'queue_pools' => $this->queuePools,
            'stores_with_shared_persistence' => $this->storesWithSharedPersistence,
            'countries' => $this->countries,
            'timezone' => $this->timezone,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased()
    {
        return [
            'available_locale_iso_codes' => $this->availableLocaleIsoCodes instanceof AbstractTransfer ? $this->availableLocaleIsoCodes->toArray(true, false) : $this->availableLocaleIsoCodes,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'id_store' => $this->idStore instanceof AbstractTransfer ? $this->idStore->toArray(true, false) : $this->idStore,
            'selected_currency_iso_code' => $this->selectedCurrencyIsoCode instanceof AbstractTransfer ? $this->selectedCurrencyIsoCode->toArray(true, false) : $this->selectedCurrencyIsoCode,
            'default_currency_iso_code' => $this->defaultCurrencyIsoCode instanceof AbstractTransfer ? $this->defaultCurrencyIsoCode->toArray(true, false) : $this->defaultCurrencyIsoCode,
            'available_currency_iso_codes' => $this->availableCurrencyIsoCodes instanceof AbstractTransfer ? $this->availableCurrencyIsoCodes->toArray(true, false) : $this->availableCurrencyIsoCodes,
            'queue_pools' => $this->queuePools instanceof AbstractTransfer ? $this->queuePools->toArray(true, false) : $this->queuePools,
            'stores_with_shared_persistence' => $this->storesWithSharedPersistence instanceof AbstractTransfer ? $this->storesWithSharedPersistence->toArray(true, false) : $this->storesWithSharedPersistence,
            'countries' => $this->countries instanceof AbstractTransfer ? $this->countries->toArray(true, false) : $this->countries,
            'timezone' => $this->timezone instanceof AbstractTransfer ? $this->timezone->toArray(true, false) : $this->timezone,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased()
    {
        return [
            'availableLocaleIsoCodes' => $this->availableLocaleIsoCodes instanceof AbstractTransfer ? $this->availableLocaleIsoCodes->toArray(true, true) : $this->availableLocaleIsoCodes,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'idStore' => $this->idStore instanceof AbstractTransfer ? $this->idStore->toArray(true, true) : $this->idStore,
            'selectedCurrencyIsoCode' => $this->selectedCurrencyIsoCode instanceof AbstractTransfer ? $this->selectedCurrencyIsoCode->toArray(true, true) : $this->selectedCurrencyIsoCode,
            'defaultCurrencyIsoCode' => $this->defaultCurrencyIsoCode instanceof AbstractTransfer ? $this->defaultCurrencyIsoCode->toArray(true, true) : $this->defaultCurrencyIsoCode,
            'availableCurrencyIsoCodes' => $this->availableCurrencyIsoCodes instanceof AbstractTransfer ? $this->availableCurrencyIsoCodes->toArray(true, true) : $this->availableCurrencyIsoCodes,
            'queuePools' => $this->queuePools instanceof AbstractTransfer ? $this->queuePools->toArray(true, true) : $this->queuePools,
            'storesWithSharedPersistence' => $this->storesWithSharedPersistence instanceof AbstractTransfer ? $this->storesWithSharedPersistence->toArray(true, true) : $this->storesWithSharedPersistence,
            'countries' => $this->countries instanceof AbstractTransfer ? $this->countries->toArray(true, true) : $this->countries,
            'timezone' => $this->timezone instanceof AbstractTransfer ? $this->timezone->toArray(true, true) : $this->timezone,
        ];
    }
}
