<?php


/**
 * Here go your local configs which should not be version controlled (tokens, passwords, keys, ...)
 */

// Due to some deprecation notices we silence all deprecations for the time being
$config[\Spryker\Shared\ErrorHandler\ErrorHandlerConstants::ERROR_LEVEL] = E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED;
$config[\Spryker\Shared\ErrorHandler\ErrorHandlerConstants::ERROR_LEVEL_LOG_ONLY] = E_DEPRECATED | E_USER_DEPRECATED;
