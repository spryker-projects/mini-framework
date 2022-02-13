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
class GlueResourceTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var string
     */
    public const RESOURCE_NAME = 'resourceName';

    /**
     * @var string
     */
    public const METHOD = 'method';

    /**
     * @var string
     */
    public const CONTROLLER = 'controller';

    /**
     * @var string
     */
    public const ACTION = 'action';

    /**
     * @var string
     */
    public const PARAMETERS = 'parameters';

    /**
     * @var string
     */
    public const ID = 'id';

    /**
     * @var string
     */
    public const ATTRIBUTES = 'attributes';

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $resourceName;

    /**
     * @var string|null
     */
    protected $method;

    /**
     * @var string|null
     */
    protected $controller;

    /**
     * @var string|null
     */
    protected $action;

    /**
     * @var string[]
     */
    protected $parameters = [];

    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var Spryker\Shared\Kernel\Transfer\AbstractTransfer|\null
     */
    protected $attributes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'type' => 'type',
        'Type' => 'type',
        'resource_name' => 'resourceName',
        'resourceName' => 'resourceName',
        'ResourceName' => 'resourceName',
        'method' => 'method',
        'Method' => 'method',
        'controller' => 'controller',
        'Controller' => 'controller',
        'action' => 'action',
        'Action' => 'action',
        'parameters' => 'parameters',
        'Parameters' => 'parameters',
        'id' => 'id',
        'Id' => 'id',
        'attributes' => 'attributes',
        'Attributes' => 'attributes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::RESOURCE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'resource_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::METHOD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'method',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONTROLLER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'controller',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'action',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARAMETERS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'parameters',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ATTRIBUTES => [
            'type' => 'Spryker\Shared\Kernel\Transfer\AbstractTransfer',
            'type_shim' => null,
            'name_underscore' => 'attributes',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module GlueApplication|GlueRestApiConvention
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
     * @module GlueApplication|GlueRestApiConvention
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module GlueApplication|GlueRestApiConvention
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
     * @module GlueApplication|GlueRestApiConvention
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
     * @module GlueApplication
     *
     * @param string|null $resourceName
     *
     * @return $this
     */
    public function setResourceName($resourceName)
    {
        $this->resourceName = $resourceName;
        $this->modifiedProperties[self::RESOURCE_NAME] = true;

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @return string|null
     */
    public function getResourceName()
    {
        return $this->resourceName;
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getResourceNameOrFail()
    {
        if ($this->resourceName === null) {
            $this->throwNullValueException(static::RESOURCE_NAME);
        }

        return $this->resourceName;
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResourceName()
    {
        $this->assertPropertyIsSet(self::RESOURCE_NAME);

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @param string|null $method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        $this->modifiedProperties[self::METHOD] = true;

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMethodOrFail()
    {
        if ($this->method === null) {
            $this->throwNullValueException(static::METHOD);
        }

        return $this->method;
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMethod()
    {
        $this->assertPropertyIsSet(self::METHOD);

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @param string|null $controller
     *
     * @return $this
     */
    public function setController($controller)
    {
        $this->controller = $controller;
        $this->modifiedProperties[self::CONTROLLER] = true;

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @return string|null
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getControllerOrFail()
    {
        if ($this->controller === null) {
            $this->throwNullValueException(static::CONTROLLER);
        }

        return $this->controller;
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireController()
    {
        $this->assertPropertyIsSet(self::CONTROLLER);

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @param string|null $action
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;
        $this->modifiedProperties[self::ACTION] = true;

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getActionOrFail()
    {
        if ($this->action === null) {
            $this->throwNullValueException(static::ACTION);
        }

        return $this->action;
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAction()
    {
        $this->assertPropertyIsSet(self::ACTION);

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @param string[]|null $parameters
     *
     * @return $this
     */
    public function setParameters(array $parameters = null)
    {
        if ($parameters === null) {
            $parameters = [];
        }

        $this->parameters = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @return string[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @module GlueApplication
     *
     * @param string $parameter
     *
     * @return $this
     */
    public function addParameter($parameter)
    {
        $this->parameters[] = $parameter;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParameters()
    {
        $this->assertPropertyIsSet(self::PARAMETERS);

        return $this;
    }

    /**
     * @module GlueRestApiConvention
     *
     * @param string|null $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        $this->modifiedProperties[self::ID] = true;

        return $this;
    }

    /**
     * @module GlueRestApiConvention
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @module GlueRestApiConvention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdOrFail()
    {
        if ($this->id === null) {
            $this->throwNullValueException(static::ID);
        }

        return $this->id;
    }

    /**
     * @module GlueRestApiConvention
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireId()
    {
        $this->assertPropertyIsSet(self::ID);

        return $this;
    }

    /**
     * @module Test
     *
     * @param \Spryker\Shared\Kernel\Transfer\AbstractTransfer|null $attributes
     *
     * @return $this
     */
    public function setAttributes(AbstractTransfer $attributes = null)
    {
        $this->attributes = $attributes;
        $this->modifiedProperties[self::ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module Test
     *
     * @return \Spryker\Shared\Kernel\Transfer\AbstractTransfer|null
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @module Test
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Spryker\Shared\Kernel\Transfer\AbstractTransfer
     */
    public function getAttributesOrFail()
    {
        if ($this->attributes === null) {
            $this->throwNullValueException(static::ATTRIBUTES);
        }

        return $this->attributes;
    }

    /**
     * @module Test
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAttributes()
    {
        $this->assertPropertyIsSet(self::ATTRIBUTES);

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
                case 'type':
                case 'resourceName':
                case 'method':
                case 'controller':
                case 'action':
                case 'parameters':
                case 'id':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'attributes':
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
                case 'type':
                case 'resourceName':
                case 'method':
                case 'controller':
                case 'action':
                case 'parameters':
                case 'id':
                    $values[$arrayKey] = $value;

                    break;
                case 'attributes':
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
                case 'type':
                case 'resourceName':
                case 'method':
                case 'controller':
                case 'action':
                case 'parameters':
                case 'id':
                    $values[$arrayKey] = $value;

                    break;
                case 'attributes':
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
            'type' => $this->type,
            'resourceName' => $this->resourceName,
            'method' => $this->method,
            'controller' => $this->controller,
            'action' => $this->action,
            'parameters' => $this->parameters,
            'id' => $this->id,
            'attributes' => $this->attributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased()
    {
        return [
            'type' => $this->type,
            'resource_name' => $this->resourceName,
            'method' => $this->method,
            'controller' => $this->controller,
            'action' => $this->action,
            'parameters' => $this->parameters,
            'id' => $this->id,
            'attributes' => $this->attributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased()
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
            'resource_name' => $this->resourceName instanceof AbstractTransfer ? $this->resourceName->toArray(true, false) : $this->resourceName,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, false) : $this->method,
            'controller' => $this->controller instanceof AbstractTransfer ? $this->controller->toArray(true, false) : $this->controller,
            'action' => $this->action instanceof AbstractTransfer ? $this->action->toArray(true, false) : $this->action,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, false) : $this->parameters,
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, false) : $this->id,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, false) : $this->attributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased()
    {
        return [
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
            'resourceName' => $this->resourceName instanceof AbstractTransfer ? $this->resourceName->toArray(true, true) : $this->resourceName,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, true) : $this->method,
            'controller' => $this->controller instanceof AbstractTransfer ? $this->controller->toArray(true, true) : $this->controller,
            'action' => $this->action instanceof AbstractTransfer ? $this->action->toArray(true, true) : $this->action,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, true) : $this->parameters,
            'id' => $this->id instanceof AbstractTransfer ? $this->id->toArray(true, true) : $this->id,
            'attributes' => $this->attributes instanceof AbstractTransfer ? $this->attributes->toArray(true, true) : $this->attributes,
        ];
    }
}
