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
class BundleDependencyCollectionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const BUNDLE = 'bundle';

    /**
     * @var string
     */
    public const DEPENDENCY_BUNDLES = 'dependencyBundles';

    /**
     * @var string|null
     */
    protected $bundle;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\DependencyBundleTransfer[]
     */
    protected $dependencyBundles;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'bundle' => 'bundle',
        'Bundle' => 'bundle',
        'dependency_bundles' => 'dependencyBundles',
        'dependencyBundles' => 'dependencyBundles',
        'DependencyBundles' => 'dependencyBundles',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::BUNDLE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'bundle',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEPENDENCY_BUNDLES => [
            'type' => 'Generated\Shared\Transfer\DependencyBundleTransfer',
            'type_shim' => null,
            'name_underscore' => 'dependency_bundles',
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
     * @param string|null $bundle
     *
     * @return $this
     */
    public function setBundle($bundle)
    {
        $this->bundle = $bundle;
        $this->modifiedProperties[self::BUNDLE] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getBundle()
    {
        return $this->bundle;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getBundleOrFail()
    {
        if ($this->bundle === null) {
            $this->throwNullValueException(static::BUNDLE);
        }

        return $this->bundle;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireBundle()
    {
        $this->assertPropertyIsSet(self::BUNDLE);

        return $this;
    }

    /**
     * @module Development
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\DependencyBundleTransfer[] $dependencyBundles
     *
     * @return $this
     */
    public function setDependencyBundles(ArrayObject $dependencyBundles)
    {
        $this->dependencyBundles = $dependencyBundles;
        $this->modifiedProperties[self::DEPENDENCY_BUNDLES] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\DependencyBundleTransfer[]
     */
    public function getDependencyBundles()
    {
        return $this->dependencyBundles;
    }

    /**
     * @module Development
     *
     * @param \Generated\Shared\Transfer\DependencyBundleTransfer $dependencyBundle
     *
     * @return $this
     */
    public function addDependencyBundle(DependencyBundleTransfer $dependencyBundle)
    {
        $this->dependencyBundles[] = $dependencyBundle;
        $this->modifiedProperties[self::DEPENDENCY_BUNDLES] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDependencyBundles()
    {
        $this->assertCollectionPropertyIsSet(self::DEPENDENCY_BUNDLES);

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
                case 'bundle':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'dependencyBundles':
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
                case 'bundle':
                    $values[$arrayKey] = $value;

                    break;
                case 'dependencyBundles':
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
                case 'bundle':
                    $values[$arrayKey] = $value;

                    break;
                case 'dependencyBundles':
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
        $this->dependencyBundles = $this->dependencyBundles ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased()
    {
        return [
            'bundle' => $this->bundle,
            'dependencyBundles' => $this->dependencyBundles,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased()
    {
        return [
            'bundle' => $this->bundle,
            'dependency_bundles' => $this->dependencyBundles,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased()
    {
        return [
            'bundle' => $this->bundle instanceof AbstractTransfer ? $this->bundle->toArray(true, false) : $this->bundle,
            'dependency_bundles' => $this->dependencyBundles instanceof AbstractTransfer ? $this->dependencyBundles->toArray(true, false) : $this->addValuesToCollection($this->dependencyBundles, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased()
    {
        return [
            'bundle' => $this->bundle instanceof AbstractTransfer ? $this->bundle->toArray(true, true) : $this->bundle,
            'dependencyBundles' => $this->dependencyBundles instanceof AbstractTransfer ? $this->dependencyBundles->toArray(true, true) : $this->addValuesToCollection($this->dependencyBundles, true, true),
        ];
    }
}
