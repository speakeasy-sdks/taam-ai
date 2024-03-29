<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */


declare(strict_types=1);

namespace taamai\taamai;

/**
 * TaamaiBuilder is used to configure and build an instance of the SDK.
 * 
 * @package taamai\taamai
 */
class TaamaiBuilder
{
    public function __construct(
        private SDKConfiguration $sdkConfig = new SDKConfiguration(),
    ) {}

    /**
     * setClient allows setting a custom Guzzle client for the SDK to make requests with.
     *
     * @param \GuzzleHttp\ClientInterface $client
     * @return TaamaiBuilder
     */
    public function setClient(\GuzzleHttp\ClientInterface $client): TaamaiBuilder
    {
        $this->sdkConfig->defaultClient = $client;

        return $this;
    }
    
    /**
     * setSecurity is used to configure the security required for the SDK.
     *
     * @param Models\Shared\Security $security
     * @return TaamaiBuilder
     */
    public function setSecurity(Models\Shared\Security $security): TaamaiBuilder
    {
        $this->sdkConfig->security = $security;

        return $this;
    }
    
    /**
     * setServerUrl is used to configure the server URL for the SDK, and optionally template any parameters in the URL.
     *
     * @param string $serverUrl
     * @param array<string, string> $params
     * @return TaamaiBuilder
     */
    public function setServerUrl(string $serverUrl, ?array $params = null): TaamaiBuilder
    {
        $this->sdkConfig->serverUrl = Utils\Utils::templateUrl($serverUrl, $params);

        return $this;
    }
    
    /**
     * setServer is used to configure the server for the SDK
     *
     * @param int $serverIdx
     * @return TaamaiBuilder
     */
    public function setServerIndex(int $serverIdx): TaamaiBuilder
    {
        $this->sdkConfig->serverIndex = $serverIdx;

        return $this;
    }
    
    
    
    /**
     * build is used to build the SDK with any of the configured options.
     *
     * @return Taamai
     */
    public function build(): Taamai
    {
		if ($this->sdkConfig->defaultClient === null) {
			$this->sdkConfig->defaultClient = new \GuzzleHttp\Client([
				'timeout' => 60,
			]);
		}
		if ($this->sdkConfig->security !== null) {
			$this->sdkConfig->securityClient = Utils\Utils::configureSecurityClient($this->sdkConfig->defaultClient, $this->sdkConfig->security);
		}
		
		if ($this->sdkConfig->securityClient === null) {
			$this->sdkConfig->securityClient = $this->sdkConfig->defaultClient;
		}

        return new Taamai($this->sdkConfig);
    }
}