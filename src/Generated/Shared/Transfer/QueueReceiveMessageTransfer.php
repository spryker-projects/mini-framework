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
class QueueReceiveMessageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUEUE_NAME = 'queueName';

    /**
     * @var string
     */
    public const QUEUE_MESSAGE = 'queueMessage';

    /**
     * @var string
     */
    public const ACKNOWLEDGE = 'acknowledge';

    /**
     * @var string
     */
    public const REJECT = 'reject';

    /**
     * @var string
     */
    public const HAS_ERROR = 'hasError';

    /**
     * @var string|null
     */
    protected $queueName;

    /**
     * @var \Generated\Shared\Transfer\QueueSendMessageTransfer|null
     */
    protected $queueMessage;

    /**
     * @var bool|null
     */
    protected $acknowledge;

    /**
     * @var bool|null
     */
    protected $reject;

    /**
     * @var bool|null
     */
    protected $hasError;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'queue_name' => 'queueName',
        'queueName' => 'queueName',
        'QueueName' => 'queueName',
        'queue_message' => 'queueMessage',
        'queueMessage' => 'queueMessage',
        'QueueMessage' => 'queueMessage',
        'acknowledge' => 'acknowledge',
        'Acknowledge' => 'acknowledge',
        'reject' => 'reject',
        'Reject' => 'reject',
        'has_error' => 'hasError',
        'hasError' => 'hasError',
        'HasError' => 'hasError',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUEUE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'queue_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUEUE_MESSAGE => [
            'type' => 'Generated\Shared\Transfer\QueueSendMessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'queue_message',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACKNOWLEDGE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'acknowledge',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REJECT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'reject',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::HAS_ERROR => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'has_error',
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
     * @module Queue
     *
     * @param string|null $queueName
     *
     * @return $this
     */
    public function setQueueName($queueName)
    {
        $this->queueName = $queueName;
        $this->modifiedProperties[self::QUEUE_NAME] = true;

        return $this;
    }

    /**
     * @module Queue
     *
     * @return string|null
     */
    public function getQueueName()
    {
        return $this->queueName;
    }

    /**
     * @module Queue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQueueNameOrFail()
    {
        if ($this->queueName === null) {
            $this->throwNullValueException(static::QUEUE_NAME);
        }

        return $this->queueName;
    }

    /**
     * @module Queue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQueueName()
    {
        $this->assertPropertyIsSet(self::QUEUE_NAME);

        return $this;
    }

    /**
     * @module Queue
     *
     * @param \Generated\Shared\Transfer\QueueSendMessageTransfer|null $queueMessage
     *
     * @return $this
     */
    public function setQueueMessage(QueueSendMessageTransfer $queueMessage = null)
    {
        $this->queueMessage = $queueMessage;
        $this->modifiedProperties[self::QUEUE_MESSAGE] = true;

        return $this;
    }

    /**
     * @module Queue
     *
     * @return \Generated\Shared\Transfer\QueueSendMessageTransfer|null
     */
    public function getQueueMessage()
    {
        return $this->queueMessage;
    }

    /**
     * @module Queue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QueueSendMessageTransfer
     */
    public function getQueueMessageOrFail()
    {
        if ($this->queueMessage === null) {
            $this->throwNullValueException(static::QUEUE_MESSAGE);
        }

        return $this->queueMessage;
    }

    /**
     * @module Queue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQueueMessage()
    {
        $this->assertPropertyIsSet(self::QUEUE_MESSAGE);

        return $this;
    }

    /**
     * @module Queue
     *
     * @param bool|null $acknowledge
     *
     * @return $this
     */
    public function setAcknowledge($acknowledge)
    {
        $this->acknowledge = $acknowledge;
        $this->modifiedProperties[self::ACKNOWLEDGE] = true;

        return $this;
    }

    /**
     * @module Queue
     *
     * @return bool|null
     */
    public function getAcknowledge()
    {
        return $this->acknowledge;
    }

    /**
     * @module Queue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getAcknowledgeOrFail()
    {
        if ($this->acknowledge === null) {
            $this->throwNullValueException(static::ACKNOWLEDGE);
        }

        return $this->acknowledge;
    }

    /**
     * @module Queue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAcknowledge()
    {
        $this->assertPropertyIsSet(self::ACKNOWLEDGE);

        return $this;
    }

    /**
     * @module Queue
     *
     * @param bool|null $reject
     *
     * @return $this
     */
    public function setReject($reject)
    {
        $this->reject = $reject;
        $this->modifiedProperties[self::REJECT] = true;

        return $this;
    }

    /**
     * @module Queue
     *
     * @return bool|null
     */
    public function getReject()
    {
        return $this->reject;
    }

    /**
     * @module Queue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getRejectOrFail()
    {
        if ($this->reject === null) {
            $this->throwNullValueException(static::REJECT);
        }

        return $this->reject;
    }

    /**
     * @module Queue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReject()
    {
        $this->assertPropertyIsSet(self::REJECT);

        return $this;
    }

    /**
     * @module Queue
     *
     * @param bool|null $hasError
     *
     * @return $this
     */
    public function setHasError($hasError)
    {
        $this->hasError = $hasError;
        $this->modifiedProperties[self::HAS_ERROR] = true;

        return $this;
    }

    /**
     * @module Queue
     *
     * @return bool|null
     */
    public function getHasError()
    {
        return $this->hasError;
    }

    /**
     * @module Queue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getHasErrorOrFail()
    {
        if ($this->hasError === null) {
            $this->throwNullValueException(static::HAS_ERROR);
        }

        return $this->hasError;
    }

    /**
     * @module Queue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHasError()
    {
        $this->assertPropertyIsSet(self::HAS_ERROR);

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
                case 'queueName':
                case 'acknowledge':
                case 'reject':
                case 'hasError':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'queueMessage':
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
                case 'queueName':
                case 'acknowledge':
                case 'reject':
                case 'hasError':
                    $values[$arrayKey] = $value;

                    break;
                case 'queueMessage':
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
                case 'queueName':
                case 'acknowledge':
                case 'reject':
                case 'hasError':
                    $values[$arrayKey] = $value;

                    break;
                case 'queueMessage':
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
            'queueName' => $this->queueName,
            'acknowledge' => $this->acknowledge,
            'reject' => $this->reject,
            'hasError' => $this->hasError,
            'queueMessage' => $this->queueMessage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased()
    {
        return [
            'queue_name' => $this->queueName,
            'acknowledge' => $this->acknowledge,
            'reject' => $this->reject,
            'has_error' => $this->hasError,
            'queue_message' => $this->queueMessage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased()
    {
        return [
            'queue_name' => $this->queueName instanceof AbstractTransfer ? $this->queueName->toArray(true, false) : $this->queueName,
            'acknowledge' => $this->acknowledge instanceof AbstractTransfer ? $this->acknowledge->toArray(true, false) : $this->acknowledge,
            'reject' => $this->reject instanceof AbstractTransfer ? $this->reject->toArray(true, false) : $this->reject,
            'has_error' => $this->hasError instanceof AbstractTransfer ? $this->hasError->toArray(true, false) : $this->hasError,
            'queue_message' => $this->queueMessage instanceof AbstractTransfer ? $this->queueMessage->toArray(true, false) : $this->queueMessage,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased()
    {
        return [
            'queueName' => $this->queueName instanceof AbstractTransfer ? $this->queueName->toArray(true, true) : $this->queueName,
            'acknowledge' => $this->acknowledge instanceof AbstractTransfer ? $this->acknowledge->toArray(true, true) : $this->acknowledge,
            'reject' => $this->reject instanceof AbstractTransfer ? $this->reject->toArray(true, true) : $this->reject,
            'hasError' => $this->hasError instanceof AbstractTransfer ? $this->hasError->toArray(true, true) : $this->hasError,
            'queueMessage' => $this->queueMessage instanceof AbstractTransfer ? $this->queueMessage->toArray(true, true) : $this->queueMessage,
        ];
    }
}
