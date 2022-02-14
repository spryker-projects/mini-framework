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
class BridgeBuilderDataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const VENDOR = 'vendor';

    /**
     * @var string
     */
    public const APPLICATION = 'application';

    /**
     * @var string
     */
    public const MODULE = 'module';

    /**
     * @var string
     */
    public const MODULE_LAYER = 'moduleLayer';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const TO_VENDOR = 'toVendor';

    /**
     * @var string
     */
    public const TO_APPLICATION = 'toApplication';

    /**
     * @var string
     */
    public const TO_MODULE = 'toModule';

    /**
     * @var string
     */
    public const TO_MODULE_LAYER = 'toModuleLayer';

    /**
     * @var string
     */
    public const TO_TYPE = 'toType';

    /**
     * @var string
     */
    public const METHODS = 'methods';

    /**
     * @var string|null
     */
    protected $vendor;

    /**
     * @var string|null
     */
    protected $application;

    /**
     * @var string|null
     */
    protected $module;

    /**
     * @var string|null
     */
    protected $moduleLayer;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $toVendor;

    /**
     * @var string|null
     */
    protected $toApplication;

    /**
     * @var string|null
     */
    protected $toModule;

    /**
     * @var string|null
     */
    protected $toModuleLayer;

    /**
     * @var string|null
     */
    protected $toType;

    /**
     * @var string[]
     */
    protected $methods = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'vendor' => 'vendor',
        'Vendor' => 'vendor',
        'application' => 'application',
        'Application' => 'application',
        'module' => 'module',
        'Module' => 'module',
        'module_layer' => 'moduleLayer',
        'moduleLayer' => 'moduleLayer',
        'ModuleLayer' => 'moduleLayer',
        'type' => 'type',
        'Type' => 'type',
        'to_vendor' => 'toVendor',
        'toVendor' => 'toVendor',
        'ToVendor' => 'toVendor',
        'to_application' => 'toApplication',
        'toApplication' => 'toApplication',
        'ToApplication' => 'toApplication',
        'to_module' => 'toModule',
        'toModule' => 'toModule',
        'ToModule' => 'toModule',
        'to_module_layer' => 'toModuleLayer',
        'toModuleLayer' => 'toModuleLayer',
        'ToModuleLayer' => 'toModuleLayer',
        'to_type' => 'toType',
        'toType' => 'toType',
        'ToType' => 'toType',
        'methods' => 'methods',
        'Methods' => 'methods',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::VENDOR => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'vendor',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::APPLICATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'application',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MODULE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'module',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MODULE_LAYER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'module_layer',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TO_VENDOR => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'to_vendor',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TO_APPLICATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'to_application',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TO_MODULE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'to_module',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TO_MODULE_LAYER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'to_module_layer',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TO_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'to_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::METHODS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'methods',
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
     * @module Development
     *
     * @param string|null $vendor
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
        $this->modifiedProperties[self::VENDOR] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getVendorOrFail()
    {
        if ($this->vendor === null) {
            $this->throwNullValueException(static::VENDOR);
        }

        return $this->vendor;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVendor()
    {
        $this->assertPropertyIsSet(self::VENDOR);

        return $this;
    }

    /**
     * @module Development
     *
     * @param string|null $application
     *
     * @return $this
     */
    public function setApplication($application)
    {
        $this->application = $application;
        $this->modifiedProperties[self::APPLICATION] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getApplicationOrFail()
    {
        if ($this->application === null) {
            $this->throwNullValueException(static::APPLICATION);
        }

        return $this->application;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApplication()
    {
        $this->assertPropertyIsSet(self::APPLICATION);

        return $this;
    }

    /**
     * @module Development
     *
     * @param string|null $module
     *
     * @return $this
     */
    public function setModule($module)
    {
        $this->module = $module;
        $this->modifiedProperties[self::MODULE] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getModuleOrFail()
    {
        if ($this->module === null) {
            $this->throwNullValueException(static::MODULE);
        }

        return $this->module;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireModule()
    {
        $this->assertPropertyIsSet(self::MODULE);

        return $this;
    }

    /**
     * @module Development
     *
     * @param string|null $moduleLayer
     *
     * @return $this
     */
    public function setModuleLayer($moduleLayer)
    {
        $this->moduleLayer = $moduleLayer;
        $this->modifiedProperties[self::MODULE_LAYER] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getModuleLayer()
    {
        return $this->moduleLayer;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getModuleLayerOrFail()
    {
        if ($this->moduleLayer === null) {
            $this->throwNullValueException(static::MODULE_LAYER);
        }

        return $this->moduleLayer;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireModuleLayer()
    {
        $this->assertPropertyIsSet(self::MODULE_LAYER);

        return $this;
    }

    /**
     * @module Development
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

        return $this;
    }

    /**
     * @module Development
     *
     * @param string|null $toVendor
     *
     * @return $this
     */
    public function setToVendor($toVendor)
    {
        $this->toVendor = $toVendor;
        $this->modifiedProperties[self::TO_VENDOR] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getToVendor()
    {
        return $this->toVendor;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getToVendorOrFail()
    {
        if ($this->toVendor === null) {
            $this->throwNullValueException(static::TO_VENDOR);
        }

        return $this->toVendor;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireToVendor()
    {
        $this->assertPropertyIsSet(self::TO_VENDOR);

        return $this;
    }

    /**
     * @module Development
     *
     * @param string|null $toApplication
     *
     * @return $this
     */
    public function setToApplication($toApplication)
    {
        $this->toApplication = $toApplication;
        $this->modifiedProperties[self::TO_APPLICATION] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getToApplication()
    {
        return $this->toApplication;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getToApplicationOrFail()
    {
        if ($this->toApplication === null) {
            $this->throwNullValueException(static::TO_APPLICATION);
        }

        return $this->toApplication;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireToApplication()
    {
        $this->assertPropertyIsSet(self::TO_APPLICATION);

        return $this;
    }

    /**
     * @module Development
     *
     * @param string|null $toModule
     *
     * @return $this
     */
    public function setToModule($toModule)
    {
        $this->toModule = $toModule;
        $this->modifiedProperties[self::TO_MODULE] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getToModule()
    {
        return $this->toModule;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getToModuleOrFail()
    {
        if ($this->toModule === null) {
            $this->throwNullValueException(static::TO_MODULE);
        }

        return $this->toModule;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireToModule()
    {
        $this->assertPropertyIsSet(self::TO_MODULE);

        return $this;
    }

    /**
     * @module Development
     *
     * @param string|null $toModuleLayer
     *
     * @return $this
     */
    public function setToModuleLayer($toModuleLayer)
    {
        $this->toModuleLayer = $toModuleLayer;
        $this->modifiedProperties[self::TO_MODULE_LAYER] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getToModuleLayer()
    {
        return $this->toModuleLayer;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getToModuleLayerOrFail()
    {
        if ($this->toModuleLayer === null) {
            $this->throwNullValueException(static::TO_MODULE_LAYER);
        }

        return $this->toModuleLayer;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireToModuleLayer()
    {
        $this->assertPropertyIsSet(self::TO_MODULE_LAYER);

        return $this;
    }

    /**
     * @module Development
     *
     * @param string|null $toType
     *
     * @return $this
     */
    public function setToType($toType)
    {
        $this->toType = $toType;
        $this->modifiedProperties[self::TO_TYPE] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getToType()
    {
        return $this->toType;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getToTypeOrFail()
    {
        if ($this->toType === null) {
            $this->throwNullValueException(static::TO_TYPE);
        }

        return $this->toType;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireToType()
    {
        $this->assertPropertyIsSet(self::TO_TYPE);

        return $this;
    }

    /**
     * @module Development
     *
     * @param string[]|null $methods
     *
     * @return $this
     */
    public function setMethods(array $methods = null)
    {
        if ($methods === null) {
            $methods = [];
        }

        $this->methods = $methods;
        $this->modifiedProperties[self::METHODS] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string[]
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * @module Development
     *
     * @param string $methods
     *
     * @return $this
     */
    public function addMethods($methods)
    {
        $this->methods[] = $methods;
        $this->modifiedProperties[self::METHODS] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMethods()
    {
        $this->assertPropertyIsSet(self::METHODS);

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
                case 'vendor':
                case 'application':
                case 'module':
                case 'moduleLayer':
                case 'type':
                case 'toVendor':
                case 'toApplication':
                case 'toModule':
                case 'toModuleLayer':
                case 'toType':
                case 'methods':
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
                case 'vendor':
                case 'application':
                case 'module':
                case 'moduleLayer':
                case 'type':
                case 'toVendor':
                case 'toApplication':
                case 'toModule':
                case 'toModuleLayer':
                case 'toType':
                case 'methods':
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
                case 'vendor':
                case 'application':
                case 'module':
                case 'moduleLayer':
                case 'type':
                case 'toVendor':
                case 'toApplication':
                case 'toModule':
                case 'toModuleLayer':
                case 'toType':
                case 'methods':
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
            'vendor' => $this->vendor,
            'application' => $this->application,
            'module' => $this->module,
            'moduleLayer' => $this->moduleLayer,
            'type' => $this->type,
            'toVendor' => $this->toVendor,
            'toApplication' => $this->toApplication,
            'toModule' => $this->toModule,
            'toModuleLayer' => $this->toModuleLayer,
            'toType' => $this->toType,
            'methods' => $this->methods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased()
    {
        return [
            'vendor' => $this->vendor,
            'application' => $this->application,
            'module' => $this->module,
            'module_layer' => $this->moduleLayer,
            'type' => $this->type,
            'to_vendor' => $this->toVendor,
            'to_application' => $this->toApplication,
            'to_module' => $this->toModule,
            'to_module_layer' => $this->toModuleLayer,
            'to_type' => $this->toType,
            'methods' => $this->methods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased()
    {
        return [
            'vendor' => $this->vendor instanceof AbstractTransfer ? $this->vendor->toArray(true, false) : $this->vendor,
            'application' => $this->application instanceof AbstractTransfer ? $this->application->toArray(true, false) : $this->application,
            'module' => $this->module instanceof AbstractTransfer ? $this->module->toArray(true, false) : $this->module,
            'module_layer' => $this->moduleLayer instanceof AbstractTransfer ? $this->moduleLayer->toArray(true, false) : $this->moduleLayer,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'to_vendor' => $this->toVendor instanceof AbstractTransfer ? $this->toVendor->toArray(true, false) : $this->toVendor,
            'to_application' => $this->toApplication instanceof AbstractTransfer ? $this->toApplication->toArray(true, false) : $this->toApplication,
            'to_module' => $this->toModule instanceof AbstractTransfer ? $this->toModule->toArray(true, false) : $this->toModule,
            'to_module_layer' => $this->toModuleLayer instanceof AbstractTransfer ? $this->toModuleLayer->toArray(true, false) : $this->toModuleLayer,
            'to_type' => $this->toType instanceof AbstractTransfer ? $this->toType->toArray(true, false) : $this->toType,
            'methods' => $this->methods instanceof AbstractTransfer ? $this->methods->toArray(true, false) : $this->methods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased()
    {
        return [
            'vendor' => $this->vendor instanceof AbstractTransfer ? $this->vendor->toArray(true, true) : $this->vendor,
            'application' => $this->application instanceof AbstractTransfer ? $this->application->toArray(true, true) : $this->application,
            'module' => $this->module instanceof AbstractTransfer ? $this->module->toArray(true, true) : $this->module,
            'moduleLayer' => $this->moduleLayer instanceof AbstractTransfer ? $this->moduleLayer->toArray(true, true) : $this->moduleLayer,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'toVendor' => $this->toVendor instanceof AbstractTransfer ? $this->toVendor->toArray(true, true) : $this->toVendor,
            'toApplication' => $this->toApplication instanceof AbstractTransfer ? $this->toApplication->toArray(true, true) : $this->toApplication,
            'toModule' => $this->toModule instanceof AbstractTransfer ? $this->toModule->toArray(true, true) : $this->toModule,
            'toModuleLayer' => $this->toModuleLayer instanceof AbstractTransfer ? $this->toModuleLayer->toArray(true, true) : $this->toModuleLayer,
            'toType' => $this->toType instanceof AbstractTransfer ? $this->toType->toArray(true, true) : $this->toType,
            'methods' => $this->methods instanceof AbstractTransfer ? $this->methods->toArray(true, true) : $this->methods,
        ];
    }
}
