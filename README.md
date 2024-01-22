[![codecov](https://codecov.io/gh/spryker-projects/mini-api-framework/branch/master/graph/badge.svg?token=AIC5DCCH5P)](https://codecov.io/gh/spryker-projects/mini-api-framework)

# Spryker Mini Framework

## Message Broker

### How to send messages

```php
$message = new TestMessageTransfer();

$message->setMessageAttributes((new MessageAttributesTransfer())
    ->setActorId('app-3f2980ec-675d-4086-8828-202200815826')
    ->setTenantIdentifier('tenant-4c8d78fa-42d1-4ddb-8f1f-1d6e4d23964a')
);

/** $messageBrokerFacade \Spryker\Zed\MessageBroker\Business\MessageBrokerFacadeInterface  */
$messageBrokerFacade->sendMessage($message);
```

### How to consume messages

To consume messages need to define handler plugins in `MessageBrokerDependencyProvider`.
An example you can find in  `\Pyz\Zed\MessageBroker\MessageBrokerDependencyProvider::getMessageHandlerPlugins`