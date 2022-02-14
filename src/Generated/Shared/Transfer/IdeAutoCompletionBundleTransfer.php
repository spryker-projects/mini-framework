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
class IdeAutoCompletionBundleTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const NAMESPACE_NAME = 'namespaceName';

    /**
     * @var string
     */
    public const METHOD_NAME = 'methodName';

    /**
     * @var string
     */
    public const DIRECTORY = 'directory';

    /**
     * @var string
     */
    public const BASE_DIRECTORY = 'baseDirectory';

    /**
     * @var string
     */
    public const METHODS = 'methods';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $namespaceName;

    /**
     * @var string|null
     */
    protected $methodName;

    /**
     * @var string|null
     */
    protected $directory;

    /**
     * @var string|null
     */
    protected $baseDirectory;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\IdeAutoCompletionBundleMethodTransfer[]
     */
    protected $methods;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'namespace_name' => 'namespaceName',
        'namespaceName' => 'namespaceName',
        'NamespaceName' => 'namespaceName',
        'method_name' => 'methodName',
        'methodName' => 'methodName',
        'MethodName' => 'methodName',
        'directory' => 'directory',
        'Directory' => 'directory',
        'base_directory' => 'baseDirectory',
        'baseDirectory' => 'baseDirectory',
        'BaseDirectory' => 'baseDirectory',
        'methods' => 'methods',
        'Methods' => 'methods',
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
        self::NAMESPACE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'namespace_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::METHOD_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'method_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DIRECTORY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'directory',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::BASE_DIRECTORY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'base_directory',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::METHODS => [
            'type' => 'Generated\Shared\Transfer\IdeAutoCompletionBundleMethodTransfer',
            'type_shim' => null,
            'name_underscore' => 'methods',
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
     * @param string|null $namespaceName
     *
     * @return $this
     */
    public function setNamespaceName($namespaceName)
    {
        $this->namespaceName = $namespaceName;
        $this->modifiedProperties[self::NAMESPACE_NAME] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getNamespaceName()
    {
        return $this->namespaceName;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNamespaceNameOrFail()
    {
        if ($this->namespaceName === null) {
            $this->throwNullValueException(static::NAMESPACE_NAME);
        }

        return $this->namespaceName;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNamespaceName()
    {
        $this->assertPropertyIsSet(self::NAMESPACE_NAME);

        return $this;
    }

    /**
     * @module Development
     *
     * @param string|null $methodName
     *
     * @return $this
     */
    public function setMethodName($methodName)
    {
        $this->methodName = $methodName;
        $this->modifiedProperties[self::METHOD_NAME] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMethodNameOrFail()
    {
        if ($this->methodName === null) {
            $this->throwNullValueException(static::METHOD_NAME);
        }

        return $this->methodName;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMethodName()
    {
        $this->assertPropertyIsSet(self::METHOD_NAME);

        return $this;
    }

    /**
     * @module Development
     *
     * @param string|null $directory
     *
     * @return $this
     */
    public function setDirectory($directory)
    {
        $this->directory = $directory;
        $this->modifiedProperties[self::DIRECTORY] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDirectoryOrFail()
    {
        if ($this->directory === null) {
            $this->throwNullValueException(static::DIRECTORY);
        }

        return $this->directory;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDirectory()
    {
        $this->assertPropertyIsSet(self::DIRECTORY);

        return $this;
    }

    /**
     * @module Development
     *
     * @param string|null $baseDirectory
     *
     * @return $this
     */
    public function setBaseDirectory($baseDirectory)
    {
        $this->baseDirectory = $baseDirectory;
        $this->modifiedProperties[self::BASE_DIRECTORY] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getBaseDirectory()
    {
        return $this->baseDirectory;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBaseDirectoryOrFail()
    {
        if ($this->baseDirectory === null) {
            $this->throwNullValueException(static::BASE_DIRECTORY);
        }

        return $this->baseDirectory;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBaseDirectory()
    {
        $this->assertPropertyIsSet(self::BASE_DIRECTORY);

        return $this;
    }

    /**
     * @module Development
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\IdeAutoCompletionBundleMethodTransfer[] $methods
     *
     * @return $this
     */
    public function setMethods(ArrayObject $methods)
    {
        $this->methods = $methods;
        $this->modifiedProperties[self::METHODS] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\IdeAutoCompletionBundleMethodTransfer[]
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * @module Development
     *
     * @param \Generated\Shared\Transfer\IdeAutoCompletionBundleMethodTransfer $method
     *
     * @return $this
     */
    public function addMethod(IdeAutoCompletionBundleMethodTransfer $method)
    {
        $this->methods[] = $method;
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
        $this->assertCollectionPropertyIsSet(self::METHODS);

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
                case 'namespaceName':
                case 'methodName':
                case 'directory':
                case 'baseDirectory':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'methods':
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
                case 'name':
                case 'namespaceName':
                case 'methodName':
                case 'directory':
                case 'baseDirectory':
                    $values[$arrayKey] = $value;

                    break;
                case 'methods':
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
                case 'name':
                case 'namespaceName':
                case 'methodName':
                case 'directory':
                case 'baseDirectory':
                    $values[$arrayKey] = $value;

                    break;
                case 'methods':
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
        $this->methods = $this->methods ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased()
    {
        return [
            'name' => $this->name,
            'namespaceName' => $this->namespaceName,
            'methodName' => $this->methodName,
            'directory' => $this->directory,
            'baseDirectory' => $this->baseDirectory,
            'methods' => $this->methods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased()
    {
        return [
            'name' => $this->name,
            'namespace_name' => $this->namespaceName,
            'method_name' => $this->methodName,
            'directory' => $this->directory,
            'base_directory' => $this->baseDirectory,
            'methods' => $this->methods,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased()
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'namespace_name' => $this->namespaceName instanceof AbstractTransfer ? $this->namespaceName->toArray(true, false) : $this->namespaceName,
            'method_name' => $this->methodName instanceof AbstractTransfer ? $this->methodName->toArray(true, false) : $this->methodName,
            'directory' => $this->directory instanceof AbstractTransfer ? $this->directory->toArray(true, false) : $this->directory,
            'base_directory' => $this->baseDirectory instanceof AbstractTransfer ? $this->baseDirectory->toArray(true, false) : $this->baseDirectory,
            'methods' => $this->methods instanceof AbstractTransfer ? $this->methods->toArray(true, false) : $this->addValuesToCollection($this->methods, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased()
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'namespaceName' => $this->namespaceName instanceof AbstractTransfer ? $this->namespaceName->toArray(true, true) : $this->namespaceName,
            'methodName' => $this->methodName instanceof AbstractTransfer ? $this->methodName->toArray(true, true) : $this->methodName,
            'directory' => $this->directory instanceof AbstractTransfer ? $this->directory->toArray(true, true) : $this->directory,
            'baseDirectory' => $this->baseDirectory instanceof AbstractTransfer ? $this->baseDirectory->toArray(true, true) : $this->baseDirectory,
            'methods' => $this->methods instanceof AbstractTransfer ? $this->methods->toArray(true, true) : $this->addValuesToCollection($this->methods, true, true),
        ];
    }
}
