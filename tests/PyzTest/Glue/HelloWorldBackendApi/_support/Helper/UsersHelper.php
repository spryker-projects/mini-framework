<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Glue\HelloWorldBackendApi\Helper;

use Codeception\Module;
use Spryker\Shared\Config\Config;
use Spryker\Shared\GlueBackendApiApplication\GlueBackendApiApplicationConstants;
use Spryker\Shared\ZedRequest\ZedRequestConstants;

class UsersHelper extends Module
{
    /**
     * @param string|null $userIdentifier
     *
     * @return string
     */
    public function buildUsersUrl(?string $userIdentifier = null): string
    {
        return $userIdentifier !== null ? $this->buildBackendApiUrl('users/{id}', ['id' => $userIdentifier]) : $this->buildBackendApiUrl('users');
    }

    /**
     * @param string $url
     * @param array<mixed> $params
     *
     * @return string
     */
    protected function buildBackendApiUrl(string $url, array $params = []): string
    {
        $url = sprintf('%s://%s/%s', Config::get(ZedRequestConstants::ZED_API_SSL_ENABLED) ? 'https' : 'http', Config::get(GlueBackendApiApplicationConstants::GLUE_BACKEND_API_HOST), $this->formatUrl($url, $params));

        return rtrim($url, '/');
    }

    /**
     * @param string $url
     * @param array<mixed> $params
     *
     * @return string
     */
    protected function formatUrl(string $url, array $params): string
    {
        $refinedParams = [];
        foreach ($params as $key => $value) {
            $refinedParams['{' . $key . '}'] = urlencode($value);
        }

        return strtr($url, $refinedParams);
    }
}
