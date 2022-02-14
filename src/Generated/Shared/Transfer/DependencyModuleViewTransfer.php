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
class DependencyModuleViewTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const TOTAL_DEPENDENCY_COUNT = 'totalDependencyCount';

    /**
     * @var string
     */
    public const TEST_DEPENDENCY_COUNT = 'testDependencyCount';

    /**
     * @var string
     */
    public const OPTIONAL_DEPENDENCY_COUNT = 'optionalDependencyCount';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $totalDependencyCount;

    /**
     * @var int|null
     */
    protected $testDependencyCount;

    /**
     * @var int|null
     */
    protected $optionalDependencyCount;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'total_dependency_count' => 'totalDependencyCount',
        'totalDependencyCount' => 'totalDependencyCount',
        'TotalDependencyCount' => 'totalDependencyCount',
        'test_dependency_count' => 'testDependencyCount',
        'testDependencyCount' => 'testDependencyCount',
        'TestDependencyCount' => 'testDependencyCount',
        'optional_dependency_count' => 'optionalDependencyCount',
        'optionalDependencyCount' => 'optionalDependencyCount',
        'OptionalDependencyCount' => 'optionalDependencyCount',
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
        self::TOTAL_DEPENDENCY_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'total_dependency_count',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::TEST_DEPENDENCY_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'test_dependency_count',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OPTIONAL_DEPENDENCY_COUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'optional_dependency_count',
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
     * @param int|null $totalDependencyCount
     *
     * @return $this
     */
    public function setTotalDependencyCount($totalDependencyCount)
    {
        $this->totalDependencyCount = $totalDependencyCount;
        $this->modifiedProperties[self::TOTAL_DEPENDENCY_COUNT] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return int|null
     */
    public function getTotalDependencyCount()
    {
        return $this->totalDependencyCount;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTotalDependencyCountOrFail()
    {
        if ($this->totalDependencyCount === null) {
            $this->throwNullValueException(static::TOTAL_DEPENDENCY_COUNT);
        }

        return $this->totalDependencyCount;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTotalDependencyCount()
    {
        $this->assertPropertyIsSet(self::TOTAL_DEPENDENCY_COUNT);

        return $this;
    }

    /**
     * @module Development
     *
     * @param int|null $testDependencyCount
     *
     * @return $this
     */
    public function setTestDependencyCount($testDependencyCount)
    {
        $this->testDependencyCount = $testDependencyCount;
        $this->modifiedProperties[self::TEST_DEPENDENCY_COUNT] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return int|null
     */
    public function getTestDependencyCount()
    {
        return $this->testDependencyCount;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTestDependencyCountOrFail()
    {
        if ($this->testDependencyCount === null) {
            $this->throwNullValueException(static::TEST_DEPENDENCY_COUNT);
        }

        return $this->testDependencyCount;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTestDependencyCount()
    {
        $this->assertPropertyIsSet(self::TEST_DEPENDENCY_COUNT);

        return $this;
    }

    /**
     * @module Development
     *
     * @param int|null $optionalDependencyCount
     *
     * @return $this
     */
    public function setOptionalDependencyCount($optionalDependencyCount)
    {
        $this->optionalDependencyCount = $optionalDependencyCount;
        $this->modifiedProperties[self::OPTIONAL_DEPENDENCY_COUNT] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return int|null
     */
    public function getOptionalDependencyCount()
    {
        return $this->optionalDependencyCount;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getOptionalDependencyCountOrFail()
    {
        if ($this->optionalDependencyCount === null) {
            $this->throwNullValueException(static::OPTIONAL_DEPENDENCY_COUNT);
        }

        return $this->optionalDependencyCount;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOptionalDependencyCount()
    {
        $this->assertPropertyIsSet(self::OPTIONAL_DEPENDENCY_COUNT);

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
                case 'totalDependencyCount':
                case 'testDependencyCount':
                case 'optionalDependencyCount':
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
                case 'totalDependencyCount':
                case 'testDependencyCount':
                case 'optionalDependencyCount':
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
                case 'name':
                case 'totalDependencyCount':
                case 'testDependencyCount':
                case 'optionalDependencyCount':
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
            'name' => $this->name,
            'totalDependencyCount' => $this->totalDependencyCount,
            'testDependencyCount' => $this->testDependencyCount,
            'optionalDependencyCount' => $this->optionalDependencyCount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased()
    {
        return [
            'name' => $this->name,
            'total_dependency_count' => $this->totalDependencyCount,
            'test_dependency_count' => $this->testDependencyCount,
            'optional_dependency_count' => $this->optionalDependencyCount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased()
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'total_dependency_count' => $this->totalDependencyCount instanceof AbstractTransfer ? $this->totalDependencyCount->toArray(true, false) : $this->totalDependencyCount,
            'test_dependency_count' => $this->testDependencyCount instanceof AbstractTransfer ? $this->testDependencyCount->toArray(true, false) : $this->testDependencyCount,
            'optional_dependency_count' => $this->optionalDependencyCount instanceof AbstractTransfer ? $this->optionalDependencyCount->toArray(true, false) : $this->optionalDependencyCount,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased()
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'totalDependencyCount' => $this->totalDependencyCount instanceof AbstractTransfer ? $this->totalDependencyCount->toArray(true, true) : $this->totalDependencyCount,
            'testDependencyCount' => $this->testDependencyCount instanceof AbstractTransfer ? $this->testDependencyCount->toArray(true, true) : $this->testDependencyCount,
            'optionalDependencyCount' => $this->optionalDependencyCount instanceof AbstractTransfer ? $this->optionalDependencyCount->toArray(true, true) : $this->optionalDependencyCount,
        ];
    }
}
