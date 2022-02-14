<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class DependencyProviderTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FULLY_QUALIFIED_CLASS_NAME = 'fullyQualifiedClassName';

    /**
     * @var string
     */
    public const CLASS_NAME = 'className';

    /**
     * @var string
     */
    public const MODULE = 'module';

    /**
     * @var string
     */
    public const USED_PLUGINS = 'usedPlugins';

    /**
     * @var string|null
     */
    protected $fullyQualifiedClassName;

    /**
     * @var string|null
     */
    protected $className;

    /**
     * @var \Generated\Shared\Transfer\ModuleTransfer|null
     */
    protected $module;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\PluginTransfer[]
     */
    protected $usedPlugins;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'fully_qualified_class_name' => 'fullyQualifiedClassName',
        'fullyQualifiedClassName' => 'fullyQualifiedClassName',
        'FullyQualifiedClassName' => 'fullyQualifiedClassName',
        'class_name' => 'className',
        'className' => 'className',
        'ClassName' => 'className',
        'module' => 'module',
        'Module' => 'module',
        'used_plugins' => 'usedPlugins',
        'usedPlugins' => 'usedPlugins',
        'UsedPlugins' => 'usedPlugins',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FULLY_QUALIFIED_CLASS_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'fully_qualified_class_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CLASS_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'class_name',
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
        self::USED_PLUGINS => [
            'type' => 'Generated\Shared\Transfer\PluginTransfer',
            'type_shim' => null,
            'name_underscore' => 'used_plugins',
            'is_collection' => true,
            'is_transfer' => true,
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
     * @param string|null $fullyQualifiedClassName
     *
     * @return $this
     */
    public function setFullyQualifiedClassName($fullyQualifiedClassName)
    {
        $this->fullyQualifiedClassName = $fullyQualifiedClassName;
        $this->modifiedProperties[self::FULLY_QUALIFIED_CLASS_NAME] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getFullyQualifiedClassName()
    {
        return $this->fullyQualifiedClassName;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFullyQualifiedClassNameOrFail()
    {
        if ($this->fullyQualifiedClassName === null) {
            $this->throwNullValueException(static::FULLY_QUALIFIED_CLASS_NAME);
        }

        return $this->fullyQualifiedClassName;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFullyQualifiedClassName()
    {
        $this->assertPropertyIsSet(self::FULLY_QUALIFIED_CLASS_NAME);

        return $this;
    }

    /**
     * @module Development
     *
     * @param string|null $className
     *
     * @return $this
     */
    public function setClassName($className)
    {
        $this->className = $className;
        $this->modifiedProperties[self::CLASS_NAME] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getClassNameOrFail()
    {
        if ($this->className === null) {
            $this->throwNullValueException(static::CLASS_NAME);
        }

        return $this->className;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireClassName()
    {
        $this->assertPropertyIsSet(self::CLASS_NAME);

        return $this;
    }

    /**
     * @module Development
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
     * @param \ArrayObject|\Generated\Shared\Transfer\PluginTransfer[] $usedPlugins
     *
     * @return $this
     */
    public function setUsedPlugins(ArrayObject $usedPlugins)
    {
        $this->usedPlugins = $usedPlugins;
        $this->modifiedProperties[self::USED_PLUGINS] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\PluginTransfer[]
     */
    public function getUsedPlugins()
    {
        return $this->usedPlugins;
    }

    /**
     * @module Development
     *
     * @param \Generated\Shared\Transfer\PluginTransfer $usedPlugin
     *
     * @return $this
     */
    public function addUsedPlugin(PluginTransfer $usedPlugin)
    {
        $this->usedPlugins[] = $usedPlugin;
        $this->modifiedProperties[self::USED_PLUGINS] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUsedPlugins()
    {
        $this->assertCollectionPropertyIsSet(self::USED_PLUGINS);

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
                case 'fullyQualifiedClassName':
                case 'className':
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
                case 'usedPlugins':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'fullyQualifiedClassName':
                case 'className':
                    $values[$arrayKey] = $value;

                    break;
                case 'module':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'usedPlugins':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

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
                case 'fullyQualifiedClassName':
                case 'className':
                    $values[$arrayKey] = $value;

                    break;
                case 'module':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'usedPlugins':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

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
        $this->usedPlugins = $this->usedPlugins ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased()
    {
        return [
            'fullyQualifiedClassName' => $this->fullyQualifiedClassName,
            'className' => $this->className,
            'module' => $this->module,
            'usedPlugins' => $this->usedPlugins,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased()
    {
        return [
            'fully_qualified_class_name' => $this->fullyQualifiedClassName,
            'class_name' => $this->className,
            'module' => $this->module,
            'used_plugins' => $this->usedPlugins,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased()
    {
        return [
            'fully_qualified_class_name' => $this->fullyQualifiedClassName instanceof AbstractTransfer ? $this->fullyQualifiedClassName->toArray(true, false) : $this->fullyQualifiedClassName,
            'class_name' => $this->className instanceof AbstractTransfer ? $this->className->toArray(true, false) : $this->className,
            'module' => $this->module instanceof AbstractTransfer ? $this->module->toArray(true, false) : $this->module,
            'used_plugins' => $this->usedPlugins instanceof AbstractTransfer ? $this->usedPlugins->toArray(true, false) : $this->addValuesToCollection($this->usedPlugins, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased()
    {
        return [
            'fullyQualifiedClassName' => $this->fullyQualifiedClassName instanceof AbstractTransfer ? $this->fullyQualifiedClassName->toArray(true, true) : $this->fullyQualifiedClassName,
            'className' => $this->className instanceof AbstractTransfer ? $this->className->toArray(true, true) : $this->className,
            'module' => $this->module instanceof AbstractTransfer ? $this->module->toArray(true, true) : $this->module,
            'usedPlugins' => $this->usedPlugins instanceof AbstractTransfer ? $this->usedPlugins->toArray(true, true) : $this->addValuesToCollection($this->usedPlugins, true, true),
        ];
    }
}
