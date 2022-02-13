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
class GlueRequestValidationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_VALID = 'isValid';

    /**
     * @var string
     */
    public const STATUS_CODE = 'statusCode';

    /**
     * @var string
     */
    public const ERRORS = 'errors';

    /**
     * @var string
     */
    public const VALIDATION_ERROR = 'validationError';

    /**
     * @var bool|null
     */
    protected $isValid;

    /**
     * @var string|null
     */
    protected $statusCode;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\GlueErrorTransfer[]
     */
    protected $errors;

    /**
     * @var string|null
     */
    protected $validationError;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_valid' => 'isValid',
        'isValid' => 'isValid',
        'IsValid' => 'isValid',
        'status_code' => 'statusCode',
        'statusCode' => 'statusCode',
        'StatusCode' => 'statusCode',
        'errors' => 'errors',
        'Errors' => 'errors',
        'validation_error' => 'validationError',
        'validationError' => 'validationError',
        'ValidationError' => 'validationError',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_VALID => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_valid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATUS_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'status_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ERRORS => [
            'type' => 'Generated\Shared\Transfer\GlueErrorTransfer',
            'type_shim' => null,
            'name_underscore' => 'errors',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALIDATION_ERROR => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'validation_error',
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
     * @module GlueApplication|GlueHttp
     *
     * @param bool|null $isValid
     *
     * @return $this
     */
    public function setIsValid($isValid)
    {
        $this->isValid = $isValid;
        $this->modifiedProperties[self::IS_VALID] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueHttp
     *
     * @return bool|null
     */
    public function getIsValid()
    {
        return $this->isValid;
    }

    /**
     * @module GlueApplication|GlueHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsValidOrFail()
    {
        if ($this->isValid === null) {
            $this->throwNullValueException(static::IS_VALID);
        }

        return $this->isValid;
    }

    /**
     * @module GlueApplication|GlueHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsValid()
    {
        $this->assertPropertyIsSet(self::IS_VALID);

        return $this;
    }

    /**
     * @module GlueApplication|GlueHttp
     *
     * @param string|null $statusCode
     *
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        $this->modifiedProperties[self::STATUS_CODE] = true;

        return $this;
    }

    /**
     * @module GlueApplication|GlueHttp
     *
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @module GlueApplication|GlueHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStatusCodeOrFail()
    {
        if ($this->statusCode === null) {
            $this->throwNullValueException(static::STATUS_CODE);
        }

        return $this->statusCode;
    }

    /**
     * @module GlueApplication|GlueHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStatusCode()
    {
        $this->assertPropertyIsSet(self::STATUS_CODE);

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\GlueErrorTransfer[] $errors
     *
     * @return $this
     */
    public function setErrors(ArrayObject $errors)
    {
        $this->errors = $errors;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\GlueErrorTransfer[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @module GlueApplication
     *
     * @param \Generated\Shared\Transfer\GlueErrorTransfer $error
     *
     * @return $this
     */
    public function addError(GlueErrorTransfer $error)
    {
        $this->errors[] = $error;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module GlueApplication
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrors()
    {
        $this->assertCollectionPropertyIsSet(self::ERRORS);

        return $this;
    }

    /**
     * @module GlueHttp
     *
     * @param string|null $validationError
     *
     * @return $this
     */
    public function setValidationError($validationError)
    {
        $this->validationError = $validationError;
        $this->modifiedProperties[self::VALIDATION_ERROR] = true;

        return $this;
    }

    /**
     * @module GlueHttp
     *
     * @return string|null
     */
    public function getValidationError()
    {
        return $this->validationError;
    }

    /**
     * @module GlueHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getValidationErrorOrFail()
    {
        if ($this->validationError === null) {
            $this->throwNullValueException(static::VALIDATION_ERROR);
        }

        return $this->validationError;
    }

    /**
     * @module GlueHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidationError()
    {
        $this->assertPropertyIsSet(self::VALIDATION_ERROR);

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
                case 'isValid':
                case 'statusCode':
                case 'validationError':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'errors':
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
                case 'isValid':
                case 'statusCode':
                case 'validationError':
                    $values[$arrayKey] = $value;

                    break;
                case 'errors':
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
                case 'isValid':
                case 'statusCode':
                case 'validationError':
                    $values[$arrayKey] = $value;

                    break;
                case 'errors':
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
        $this->errors = $this->errors ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased()
    {
        return [
            'isValid' => $this->isValid,
            'statusCode' => $this->statusCode,
            'validationError' => $this->validationError,
            'errors' => $this->errors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased()
    {
        return [
            'is_valid' => $this->isValid,
            'status_code' => $this->statusCode,
            'validation_error' => $this->validationError,
            'errors' => $this->errors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased()
    {
        return [
            'is_valid' => $this->isValid instanceof AbstractTransfer ? $this->isValid->toArray(true, false) : $this->isValid,
            'status_code' => $this->statusCode instanceof AbstractTransfer ? $this->statusCode->toArray(true, false) : $this->statusCode,
            'validation_error' => $this->validationError instanceof AbstractTransfer ? $this->validationError->toArray(true, false) : $this->validationError,
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, false) : $this->addValuesToCollection($this->errors, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased()
    {
        return [
            'isValid' => $this->isValid instanceof AbstractTransfer ? $this->isValid->toArray(true, true) : $this->isValid,
            'statusCode' => $this->statusCode instanceof AbstractTransfer ? $this->statusCode->toArray(true, true) : $this->statusCode,
            'validationError' => $this->validationError instanceof AbstractTransfer ? $this->validationError->toArray(true, true) : $this->validationError,
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, true) : $this->addValuesToCollection($this->errors, true, true),
        ];
    }
}
