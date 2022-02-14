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
class ModuleDependencyTransfer extends AbstractTransfer
{
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
    public const COMPOSER_NAME = 'composerName';

    /**
     * @var string
     */
    public const IS_VALID = 'isValid';

    /**
     * @var string
     */
    public const IS_SRC_DEPENDENCY = 'isSrcDependency';

    /**
     * @var string
     */
    public const IS_TEST_DEPENDENCY = 'isTestDependency';

    /**
     * @var string
     */
    public const IS_SUGGESTED = 'isSuggested';

    /**
     * @var string
     */
    public const IS_OPTIONAL_DEPENDENCY = 'isOptionalDependency';

    /**
     * @var string
     */
    public const IS_OWN_EXTENSION_MODULE = 'isOwnExtensionModule';

    /**
     * @var string
     */
    public const IS_IN_COMPOSER_REQUIRE = 'isInComposerRequire';

    /**
     * @var string
     */
    public const IS_IN_COMPOSER_REQUIRE_DEV = 'isInComposerRequireDev';

    /**
     * @var string
     */
    public const DEPENDENCY_TYPES = 'dependencyTypes';

    /**
     * @var string
     */
    public const VALIDATION_MESSAGES = 'validationMessages';

    /**
     * @var string|null
     */
    protected $module;

    /**
     * @var string|null
     */
    protected $moduleName;

    /**
     * @var string|null
     */
    protected $composerName;

    /**
     * @var bool|null
     */
    protected $isValid;

    /**
     * @var bool|null
     */
    protected $isSrcDependency;

    /**
     * @var bool|null
     */
    protected $isTestDependency;

    /**
     * @var bool|null
     */
    protected $isSuggested;

    /**
     * @var bool|null
     */
    protected $isOptionalDependency;

    /**
     * @var bool|null
     */
    protected $isOwnExtensionModule;

    /**
     * @var bool|null
     */
    protected $isInComposerRequire;

    /**
     * @var bool|null
     */
    protected $isInComposerRequireDev;

    /**
     * @var string[]
     */
    protected $dependencyTypes = [];

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ValidationMessageTransfer[]
     */
    protected $validationMessages;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'module' => 'module',
        'Module' => 'module',
        'module_name' => 'moduleName',
        'moduleName' => 'moduleName',
        'ModuleName' => 'moduleName',
        'composer_name' => 'composerName',
        'composerName' => 'composerName',
        'ComposerName' => 'composerName',
        'is_valid' => 'isValid',
        'isValid' => 'isValid',
        'IsValid' => 'isValid',
        'is_src_dependency' => 'isSrcDependency',
        'isSrcDependency' => 'isSrcDependency',
        'IsSrcDependency' => 'isSrcDependency',
        'is_test_dependency' => 'isTestDependency',
        'isTestDependency' => 'isTestDependency',
        'IsTestDependency' => 'isTestDependency',
        'is_suggested' => 'isSuggested',
        'isSuggested' => 'isSuggested',
        'IsSuggested' => 'isSuggested',
        'is_optional_dependency' => 'isOptionalDependency',
        'isOptionalDependency' => 'isOptionalDependency',
        'IsOptionalDependency' => 'isOptionalDependency',
        'is_own_extension_module' => 'isOwnExtensionModule',
        'isOwnExtensionModule' => 'isOwnExtensionModule',
        'IsOwnExtensionModule' => 'isOwnExtensionModule',
        'is_in_composer_require' => 'isInComposerRequire',
        'isInComposerRequire' => 'isInComposerRequire',
        'IsInComposerRequire' => 'isInComposerRequire',
        'is_in_composer_require_dev' => 'isInComposerRequireDev',
        'isInComposerRequireDev' => 'isInComposerRequireDev',
        'IsInComposerRequireDev' => 'isInComposerRequireDev',
        'dependency_types' => 'dependencyTypes',
        'dependencyTypes' => 'dependencyTypes',
        'DependencyTypes' => 'dependencyTypes',
        'validation_messages' => 'validationMessages',
        'validationMessages' => 'validationMessages',
        'ValidationMessages' => 'validationMessages',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::MODULE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'module',
            'is_collection' => false,
            'is_transfer' => false,
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
        self::COMPOSER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'composer_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::IS_SRC_DEPENDENCY => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_src_dependency',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_TEST_DEPENDENCY => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_test_dependency',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_SUGGESTED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_suggested',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_OPTIONAL_DEPENDENCY => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_optional_dependency',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_OWN_EXTENSION_MODULE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_own_extension_module',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_IN_COMPOSER_REQUIRE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_in_composer_require',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_IN_COMPOSER_REQUIRE_DEV => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_in_composer_require_dev',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DEPENDENCY_TYPES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'dependency_types',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALIDATION_MESSAGES => [
            'type' => 'Generated\Shared\Transfer\ValidationMessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'validation_messages',
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
     * @deprecated Use moduleName instead.
     *
     * @param string|null $module
     *
     * @return $this
     */
    public function setModule($module)
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
     * @return string|null
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
     * @return string
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
     * @param string|null $composerName
     *
     * @return $this
     */
    public function setComposerName($composerName)
    {
        $this->composerName = $composerName;
        $this->modifiedProperties[self::COMPOSER_NAME] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string|null
     */
    public function getComposerName()
    {
        return $this->composerName;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getComposerNameOrFail()
    {
        if ($this->composerName === null) {
            $this->throwNullValueException(static::COMPOSER_NAME);
        }

        return $this->composerName;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireComposerName()
    {
        $this->assertPropertyIsSet(self::COMPOSER_NAME);

        return $this;
    }

    /**
     * @module Development
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
     * @module Development
     *
     * @return bool|null
     */
    public function getIsValid()
    {
        return $this->isValid;
    }

    /**
     * @module Development
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
     * @module Development
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
     * @module Development
     *
     * @param bool|null $isSrcDependency
     *
     * @return $this
     */
    public function setIsSrcDependency($isSrcDependency)
    {
        $this->isSrcDependency = $isSrcDependency;
        $this->modifiedProperties[self::IS_SRC_DEPENDENCY] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return bool|null
     */
    public function getIsSrcDependency()
    {
        return $this->isSrcDependency;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSrcDependencyOrFail()
    {
        if ($this->isSrcDependency === null) {
            $this->throwNullValueException(static::IS_SRC_DEPENDENCY);
        }

        return $this->isSrcDependency;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSrcDependency()
    {
        $this->assertPropertyIsSet(self::IS_SRC_DEPENDENCY);

        return $this;
    }

    /**
     * @module Development
     *
     * @param bool|null $isTestDependency
     *
     * @return $this
     */
    public function setIsTestDependency($isTestDependency)
    {
        $this->isTestDependency = $isTestDependency;
        $this->modifiedProperties[self::IS_TEST_DEPENDENCY] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return bool|null
     */
    public function getIsTestDependency()
    {
        return $this->isTestDependency;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsTestDependencyOrFail()
    {
        if ($this->isTestDependency === null) {
            $this->throwNullValueException(static::IS_TEST_DEPENDENCY);
        }

        return $this->isTestDependency;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsTestDependency()
    {
        $this->assertPropertyIsSet(self::IS_TEST_DEPENDENCY);

        return $this;
    }

    /**
     * @module Development
     *
     * @param bool|null $isSuggested
     *
     * @return $this
     */
    public function setIsSuggested($isSuggested)
    {
        $this->isSuggested = $isSuggested;
        $this->modifiedProperties[self::IS_SUGGESTED] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return bool|null
     */
    public function getIsSuggested()
    {
        return $this->isSuggested;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSuggestedOrFail()
    {
        if ($this->isSuggested === null) {
            $this->throwNullValueException(static::IS_SUGGESTED);
        }

        return $this->isSuggested;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuggested()
    {
        $this->assertPropertyIsSet(self::IS_SUGGESTED);

        return $this;
    }

    /**
     * @module Development
     *
     * @param bool|null $isOptionalDependency
     *
     * @return $this
     */
    public function setIsOptionalDependency($isOptionalDependency)
    {
        $this->isOptionalDependency = $isOptionalDependency;
        $this->modifiedProperties[self::IS_OPTIONAL_DEPENDENCY] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return bool|null
     */
    public function getIsOptionalDependency()
    {
        return $this->isOptionalDependency;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsOptionalDependencyOrFail()
    {
        if ($this->isOptionalDependency === null) {
            $this->throwNullValueException(static::IS_OPTIONAL_DEPENDENCY);
        }

        return $this->isOptionalDependency;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsOptionalDependency()
    {
        $this->assertPropertyIsSet(self::IS_OPTIONAL_DEPENDENCY);

        return $this;
    }

    /**
     * @module Development
     *
     * @param bool|null $isOwnExtensionModule
     *
     * @return $this
     */
    public function setIsOwnExtensionModule($isOwnExtensionModule)
    {
        $this->isOwnExtensionModule = $isOwnExtensionModule;
        $this->modifiedProperties[self::IS_OWN_EXTENSION_MODULE] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return bool|null
     */
    public function getIsOwnExtensionModule()
    {
        return $this->isOwnExtensionModule;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsOwnExtensionModuleOrFail()
    {
        if ($this->isOwnExtensionModule === null) {
            $this->throwNullValueException(static::IS_OWN_EXTENSION_MODULE);
        }

        return $this->isOwnExtensionModule;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsOwnExtensionModule()
    {
        $this->assertPropertyIsSet(self::IS_OWN_EXTENSION_MODULE);

        return $this;
    }

    /**
     * @module Development
     *
     * @param bool|null $isInComposerRequire
     *
     * @return $this
     */
    public function setIsInComposerRequire($isInComposerRequire)
    {
        $this->isInComposerRequire = $isInComposerRequire;
        $this->modifiedProperties[self::IS_IN_COMPOSER_REQUIRE] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return bool|null
     */
    public function getIsInComposerRequire()
    {
        return $this->isInComposerRequire;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsInComposerRequireOrFail()
    {
        if ($this->isInComposerRequire === null) {
            $this->throwNullValueException(static::IS_IN_COMPOSER_REQUIRE);
        }

        return $this->isInComposerRequire;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsInComposerRequire()
    {
        $this->assertPropertyIsSet(self::IS_IN_COMPOSER_REQUIRE);

        return $this;
    }

    /**
     * @module Development
     *
     * @param bool|null $isInComposerRequireDev
     *
     * @return $this
     */
    public function setIsInComposerRequireDev($isInComposerRequireDev)
    {
        $this->isInComposerRequireDev = $isInComposerRequireDev;
        $this->modifiedProperties[self::IS_IN_COMPOSER_REQUIRE_DEV] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return bool|null
     */
    public function getIsInComposerRequireDev()
    {
        return $this->isInComposerRequireDev;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsInComposerRequireDevOrFail()
    {
        if ($this->isInComposerRequireDev === null) {
            $this->throwNullValueException(static::IS_IN_COMPOSER_REQUIRE_DEV);
        }

        return $this->isInComposerRequireDev;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsInComposerRequireDev()
    {
        $this->assertPropertyIsSet(self::IS_IN_COMPOSER_REQUIRE_DEV);

        return $this;
    }

    /**
     * @module Development
     *
     * @param string[]|null $dependencyTypes
     *
     * @return $this
     */
    public function setDependencyTypes(array $dependencyTypes = null)
    {
        if ($dependencyTypes === null) {
            $dependencyTypes = [];
        }

        $this->dependencyTypes = $dependencyTypes;
        $this->modifiedProperties[self::DEPENDENCY_TYPES] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return string[]
     */
    public function getDependencyTypes()
    {
        return $this->dependencyTypes;
    }

    /**
     * @module Development
     *
     * @param string $dependencyTypes
     *
     * @return $this
     */
    public function addDependencyTypes($dependencyTypes)
    {
        $this->dependencyTypes[] = $dependencyTypes;
        $this->modifiedProperties[self::DEPENDENCY_TYPES] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDependencyTypes()
    {
        $this->assertPropertyIsSet(self::DEPENDENCY_TYPES);

        return $this;
    }

    /**
     * @module Development
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ValidationMessageTransfer[] $validationMessages
     *
     * @return $this
     */
    public function setValidationMessages(ArrayObject $validationMessages)
    {
        $this->validationMessages = $validationMessages;
        $this->modifiedProperties[self::VALIDATION_MESSAGES] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ValidationMessageTransfer[]
     */
    public function getValidationMessages()
    {
        return $this->validationMessages;
    }

    /**
     * @module Development
     *
     * @param \Generated\Shared\Transfer\ValidationMessageTransfer $validationMessage
     *
     * @return $this
     */
    public function addValidationMessage(ValidationMessageTransfer $validationMessage)
    {
        $this->validationMessages[] = $validationMessage;
        $this->modifiedProperties[self::VALIDATION_MESSAGES] = true;

        return $this;
    }

    /**
     * @module Development
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValidationMessages()
    {
        $this->assertCollectionPropertyIsSet(self::VALIDATION_MESSAGES);

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
                case 'module':
                case 'moduleName':
                case 'composerName':
                case 'isValid':
                case 'isSrcDependency':
                case 'isTestDependency':
                case 'isSuggested':
                case 'isOptionalDependency':
                case 'isOwnExtensionModule':
                case 'isInComposerRequire':
                case 'isInComposerRequireDev':
                case 'dependencyTypes':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'validationMessages':
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
                case 'module':
                case 'moduleName':
                case 'composerName':
                case 'isValid':
                case 'isSrcDependency':
                case 'isTestDependency':
                case 'isSuggested':
                case 'isOptionalDependency':
                case 'isOwnExtensionModule':
                case 'isInComposerRequire':
                case 'isInComposerRequireDev':
                case 'dependencyTypes':
                    $values[$arrayKey] = $value;

                    break;
                case 'validationMessages':
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
                case 'module':
                case 'moduleName':
                case 'composerName':
                case 'isValid':
                case 'isSrcDependency':
                case 'isTestDependency':
                case 'isSuggested':
                case 'isOptionalDependency':
                case 'isOwnExtensionModule':
                case 'isInComposerRequire':
                case 'isInComposerRequireDev':
                case 'dependencyTypes':
                    $values[$arrayKey] = $value;

                    break;
                case 'validationMessages':
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
        $this->validationMessages = $this->validationMessages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased()
    {
        return [
            'module' => $this->module,
            'moduleName' => $this->moduleName,
            'composerName' => $this->composerName,
            'isValid' => $this->isValid,
            'isSrcDependency' => $this->isSrcDependency,
            'isTestDependency' => $this->isTestDependency,
            'isSuggested' => $this->isSuggested,
            'isOptionalDependency' => $this->isOptionalDependency,
            'isOwnExtensionModule' => $this->isOwnExtensionModule,
            'isInComposerRequire' => $this->isInComposerRequire,
            'isInComposerRequireDev' => $this->isInComposerRequireDev,
            'dependencyTypes' => $this->dependencyTypes,
            'validationMessages' => $this->validationMessages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased()
    {
        return [
            'module' => $this->module,
            'module_name' => $this->moduleName,
            'composer_name' => $this->composerName,
            'is_valid' => $this->isValid,
            'is_src_dependency' => $this->isSrcDependency,
            'is_test_dependency' => $this->isTestDependency,
            'is_suggested' => $this->isSuggested,
            'is_optional_dependency' => $this->isOptionalDependency,
            'is_own_extension_module' => $this->isOwnExtensionModule,
            'is_in_composer_require' => $this->isInComposerRequire,
            'is_in_composer_require_dev' => $this->isInComposerRequireDev,
            'dependency_types' => $this->dependencyTypes,
            'validation_messages' => $this->validationMessages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased()
    {
        return [
            'module' => $this->module instanceof AbstractTransfer ? $this->module->toArray(true, false) : $this->module,
            'module_name' => $this->moduleName instanceof AbstractTransfer ? $this->moduleName->toArray(true, false) : $this->moduleName,
            'composer_name' => $this->composerName instanceof AbstractTransfer ? $this->composerName->toArray(true, false) : $this->composerName,
            'is_valid' => $this->isValid instanceof AbstractTransfer ? $this->isValid->toArray(true, false) : $this->isValid,
            'is_src_dependency' => $this->isSrcDependency instanceof AbstractTransfer ? $this->isSrcDependency->toArray(true, false) : $this->isSrcDependency,
            'is_test_dependency' => $this->isTestDependency instanceof AbstractTransfer ? $this->isTestDependency->toArray(true, false) : $this->isTestDependency,
            'is_suggested' => $this->isSuggested instanceof AbstractTransfer ? $this->isSuggested->toArray(true, false) : $this->isSuggested,
            'is_optional_dependency' => $this->isOptionalDependency instanceof AbstractTransfer ? $this->isOptionalDependency->toArray(true, false) : $this->isOptionalDependency,
            'is_own_extension_module' => $this->isOwnExtensionModule instanceof AbstractTransfer ? $this->isOwnExtensionModule->toArray(true, false) : $this->isOwnExtensionModule,
            'is_in_composer_require' => $this->isInComposerRequire instanceof AbstractTransfer ? $this->isInComposerRequire->toArray(true, false) : $this->isInComposerRequire,
            'is_in_composer_require_dev' => $this->isInComposerRequireDev instanceof AbstractTransfer ? $this->isInComposerRequireDev->toArray(true, false) : $this->isInComposerRequireDev,
            'dependency_types' => $this->dependencyTypes instanceof AbstractTransfer ? $this->dependencyTypes->toArray(true, false) : $this->dependencyTypes,
            'validation_messages' => $this->validationMessages instanceof AbstractTransfer ? $this->validationMessages->toArray(true, false) : $this->addValuesToCollection($this->validationMessages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased()
    {
        return [
            'module' => $this->module instanceof AbstractTransfer ? $this->module->toArray(true, true) : $this->module,
            'moduleName' => $this->moduleName instanceof AbstractTransfer ? $this->moduleName->toArray(true, true) : $this->moduleName,
            'composerName' => $this->composerName instanceof AbstractTransfer ? $this->composerName->toArray(true, true) : $this->composerName,
            'isValid' => $this->isValid instanceof AbstractTransfer ? $this->isValid->toArray(true, true) : $this->isValid,
            'isSrcDependency' => $this->isSrcDependency instanceof AbstractTransfer ? $this->isSrcDependency->toArray(true, true) : $this->isSrcDependency,
            'isTestDependency' => $this->isTestDependency instanceof AbstractTransfer ? $this->isTestDependency->toArray(true, true) : $this->isTestDependency,
            'isSuggested' => $this->isSuggested instanceof AbstractTransfer ? $this->isSuggested->toArray(true, true) : $this->isSuggested,
            'isOptionalDependency' => $this->isOptionalDependency instanceof AbstractTransfer ? $this->isOptionalDependency->toArray(true, true) : $this->isOptionalDependency,
            'isOwnExtensionModule' => $this->isOwnExtensionModule instanceof AbstractTransfer ? $this->isOwnExtensionModule->toArray(true, true) : $this->isOwnExtensionModule,
            'isInComposerRequire' => $this->isInComposerRequire instanceof AbstractTransfer ? $this->isInComposerRequire->toArray(true, true) : $this->isInComposerRequire,
            'isInComposerRequireDev' => $this->isInComposerRequireDev instanceof AbstractTransfer ? $this->isInComposerRequireDev->toArray(true, true) : $this->isInComposerRequireDev,
            'dependencyTypes' => $this->dependencyTypes instanceof AbstractTransfer ? $this->dependencyTypes->toArray(true, true) : $this->dependencyTypes,
            'validationMessages' => $this->validationMessages instanceof AbstractTransfer ? $this->validationMessages->toArray(true, true) : $this->addValuesToCollection($this->validationMessages, true, true),
        ];
    }
}
