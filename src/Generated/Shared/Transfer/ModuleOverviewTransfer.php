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
class ModuleOverviewTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const MODULE_NAME = 'moduleName';

    /**
     * @var string
     */
    public const EXISTS_CORE_MODULE = 'existsCoreModule';

    /**
     * @var string
     */
    public const EXISTS_PROJECT_MODULE = 'existsProjectModule';

    /**
     * @var string|null
     */
    protected $moduleName;

    /**
     * @var bool|null
     */
    protected $existsCoreModule;

    /**
     * @var bool|null
     */
    protected $existsProjectModule;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'module_name' => 'moduleName',
        'moduleName' => 'moduleName',
        'ModuleName' => 'moduleName',
        'exists_core_module' => 'existsCoreModule',
        'existsCoreModule' => 'existsCoreModule',
        'ExistsCoreModule' => 'existsCoreModule',
        'exists_project_module' => 'existsProjectModule',
        'existsProjectModule' => 'existsProjectModule',
        'ExistsProjectModule' => 'existsProjectModule',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::EXISTS_CORE_MODULE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'exists_core_module',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EXISTS_PROJECT_MODULE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'exists_project_module',
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
     * @param bool|null $existsCoreModule
     *
     * @return $this
     */
    public function setExistsCoreModule($existsCoreModule)
    {
        $this->existsCoreModule = $existsCoreModule;
        $this->modifiedProperties[self::EXISTS_CORE_MODULE] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return bool|null
     */
    public function getExistsCoreModule()
    {
        return $this->existsCoreModule;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getExistsCoreModuleOrFail()
    {
        if ($this->existsCoreModule === null) {
            $this->throwNullValueException(static::EXISTS_CORE_MODULE);
        }

        return $this->existsCoreModule;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExistsCoreModule()
    {
        $this->assertPropertyIsSet(self::EXISTS_CORE_MODULE);

        return $this;
    }

    /**
     * @module Development
     *
     * @param bool|null $existsProjectModule
     *
     * @return $this
     */
    public function setExistsProjectModule($existsProjectModule)
    {
        $this->existsProjectModule = $existsProjectModule;
        $this->modifiedProperties[self::EXISTS_PROJECT_MODULE] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return bool|null
     */
    public function getExistsProjectModule()
    {
        return $this->existsProjectModule;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getExistsProjectModuleOrFail()
    {
        if ($this->existsProjectModule === null) {
            $this->throwNullValueException(static::EXISTS_PROJECT_MODULE);
        }

        return $this->existsProjectModule;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExistsProjectModule()
    {
        $this->assertPropertyIsSet(self::EXISTS_PROJECT_MODULE);

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
                case 'moduleName':
                case 'existsCoreModule':
                case 'existsProjectModule':
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
                case 'moduleName':
                case 'existsCoreModule':
                case 'existsProjectModule':
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
                case 'moduleName':
                case 'existsCoreModule':
                case 'existsProjectModule':
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
            'moduleName' => $this->moduleName,
            'existsCoreModule' => $this->existsCoreModule,
            'existsProjectModule' => $this->existsProjectModule,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased()
    {
        return [
            'module_name' => $this->moduleName,
            'exists_core_module' => $this->existsCoreModule,
            'exists_project_module' => $this->existsProjectModule,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased()
    {
        return [
            'module_name' => $this->moduleName instanceof AbstractTransfer ? $this->moduleName->toArray(true, false) : $this->moduleName,
            'exists_core_module' => $this->existsCoreModule instanceof AbstractTransfer ? $this->existsCoreModule->toArray(true, false) : $this->existsCoreModule,
            'exists_project_module' => $this->existsProjectModule instanceof AbstractTransfer ? $this->existsProjectModule->toArray(true, false) : $this->existsProjectModule,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased()
    {
        return [
            'moduleName' => $this->moduleName instanceof AbstractTransfer ? $this->moduleName->toArray(true, true) : $this->moduleName,
            'existsCoreModule' => $this->existsCoreModule instanceof AbstractTransfer ? $this->existsCoreModule->toArray(true, true) : $this->existsCoreModule,
            'existsProjectModule' => $this->existsProjectModule instanceof AbstractTransfer ? $this->existsProjectModule->toArray(true, true) : $this->existsProjectModule,
        ];
    }
}
