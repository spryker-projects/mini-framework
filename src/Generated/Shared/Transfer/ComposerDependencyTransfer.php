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
class ComposerDependencyTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @deprecated Use moduleName instead.
     */
    public const MODULE = 'module';

    /**
     * @var string
     */
    public const MODULE_NAME = 'moduleName';

    /**
     * @var string
     */
    public const IS_DEV = 'isDev';

    /**
     * @var string
     */
    public const IS_OPTIONAL = 'isOptional';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\ModuleTransfer|null
     */
    protected $module;

    /**
     * @var string|null
     */
    protected $moduleName;

    /**
     * @var bool|null
     */
    protected $isDev;

    /**
     * @var bool|null
     */
    protected $isOptional;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'module' => 'module',
        'Module' => 'module',
        'module_name' => 'moduleName',
        'moduleName' => 'moduleName',
        'ModuleName' => 'moduleName',
        'is_dev' => 'isDev',
        'isDev' => 'isDev',
        'IsDev' => 'isDev',
        'is_optional' => 'isOptional',
        'isOptional' => 'isOptional',
        'IsOptional' => 'isOptional',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::MODULE => [
            'type' => 'Generated\Shared\Transfer\ModuleTransfer',
            'type_shim' => null,
            'name_underscore' => 'module',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MODULE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'module_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_DEV => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_dev',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_OPTIONAL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_optional',
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
     * @module Development
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module Development
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
     * @module Development
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
     * @module Development
     *
     * @deprecated Use moduleName instead.
     *
     * @param \Generated\Shared\Transfer\ModuleTransfer|null $module
     *
     * @return $this
     */
    public function setModule(ModuleTransfer $module = null)
    {
        $this->module = $module;
        $this->modifiedProperties[self::MODULE] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @deprecated Use moduleName instead.
     *
     * @return \Generated\Shared\Transfer\ModuleTransfer|null
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
     * @deprecated Use moduleName instead.
     *
     * @return \Generated\Shared\Transfer\ModuleTransfer
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
     * @deprecated Use moduleName instead.
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
     * @param string|null $moduleName
     *
     * @return $this
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;
        $this->modifiedProperties[self::MODULE_NAME] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getModuleNameOrFail()
    {
        if ($this->moduleName === null) {
            $this->throwNullValueException(static::MODULE_NAME);
        }

        return $this->moduleName;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireModuleName()
    {
        $this->assertPropertyIsSet(self::MODULE_NAME);

        return $this;
    }

    /**
     * @module Development
     *
     * @param bool|null $isDev
     *
     * @return $this
     */
    public function setIsDev($isDev)
    {
        $this->isDev = $isDev;
        $this->modifiedProperties[self::IS_DEV] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return bool|null
     */
    public function getIsDev()
    {
        return $this->isDev;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsDevOrFail()
    {
        if ($this->isDev === null) {
            $this->throwNullValueException(static::IS_DEV);
        }

        return $this->isDev;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsDev()
    {
        $this->assertPropertyIsSet(self::IS_DEV);

        return $this;
    }

    /**
     * @module Development
     *
     * @param bool|null $isOptional
     *
     * @return $this
     */
    public function setIsOptional($isOptional)
    {
        $this->isOptional = $isOptional;
        $this->modifiedProperties[self::IS_OPTIONAL] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return bool|null
     */
    public function getIsOptional()
    {
        return $this->isOptional;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsOptionalOrFail()
    {
        if ($this->isOptional === null) {
            $this->throwNullValueException(static::IS_OPTIONAL);
        }

        return $this->isOptional;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsOptional()
    {
        $this->assertPropertyIsSet(self::IS_OPTIONAL);

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
                case 'name':
                case 'moduleName':
                case 'isDev':
                case 'isOptional':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'module':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\TransferInterface $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
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
                case 'name':
                case 'moduleName':
                case 'isDev':
                case 'isOptional':
                    $values[$arrayKey] = $value;

                    break;
                case 'module':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'name':
                case 'moduleName':
                case 'isDev':
                case 'isOptional':
                    $values[$arrayKey] = $value;

                    break;
                case 'module':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'name' => $this->name,
            'moduleName' => $this->moduleName,
            'isDev' => $this->isDev,
            'isOptional' => $this->isOptional,
            'module' => $this->module,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased()
    {
        return [
            'name' => $this->name,
            'module_name' => $this->moduleName,
            'is_dev' => $this->isDev,
            'is_optional' => $this->isOptional,
            'module' => $this->module,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased()
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'module_name' => $this->moduleName instanceof AbstractTransfer ? $this->moduleName->toArray(true, false) : $this->moduleName,
            'is_dev' => $this->isDev instanceof AbstractTransfer ? $this->isDev->toArray(true, false) : $this->isDev,
            'is_optional' => $this->isOptional instanceof AbstractTransfer ? $this->isOptional->toArray(true, false) : $this->isOptional,
            'module' => $this->module instanceof AbstractTransfer ? $this->module->toArray(true, false) : $this->module,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased()
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'moduleName' => $this->moduleName instanceof AbstractTransfer ? $this->moduleName->toArray(true, true) : $this->moduleName,
            'isDev' => $this->isDev instanceof AbstractTransfer ? $this->isDev->toArray(true, true) : $this->isDev,
            'isOptional' => $this->isOptional instanceof AbstractTransfer ? $this->isOptional->toArray(true, true) : $this->isOptional,
            'module' => $this->module instanceof AbstractTransfer ? $this->module->toArray(true, true) : $this->module,
        ];
    }
}
