<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai;

class Auth 
{
	
	public const REGISTER_SERVERS = [
		'https://taam.ai/api',
	];
	
	public const LOGIN_SERVERS = [
		'https://taam.ai/api',
	];

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Register
     * 
     * @param \taamai\taamai\Models\Operations\RegisterRequest $request
     * @param string $serverURL
     * @return \taamai\taamai\Models\Operations\RegisterResponse
     */
	public function register(
        ?\taamai\taamai\Models\Operations\RegisterRequest $request,
        ?string $serverURL = null,
    ): \taamai\taamai\Models\Operations\RegisterResponse
    {
        $baseUrl = Utils\Utils::templateUrl(Auth::REGISTER_SERVERS[0], array(
        ));
        if (!empty($serverURL)) {
            $baseUrl = $serverURL;
        }
        
        $url = Utils\Utils::generateUrl($baseUrl, '/register');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\taamai\taamai\Models\Operations\RegisterRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \taamai\taamai\Models\Operations\RegisterResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->examplewithdefaultplansubdomainandsubsctpion = $serializer->deserialize((string)$httpResponse->getBody(), 'taamai\taamai\Models\Operations\RegisterExamplewithdefaultplansubdomainandsubsctpion', 'json');
            }
        }

        return $response;
    }
	
    /**
     * login
     * 
     * @param \taamai\taamai\Models\Operations\LoginRequestBody $request
     * @param string $serverURL
     * @return \taamai\taamai\Models\Operations\LoginResponse
     */
	public function login(
        ?\taamai\taamai\Models\Operations\LoginRequestBody $request,
        ?string $serverURL = null,
    ): \taamai\taamai\Models\Operations\LoginResponse
    {
        $baseUrl = Utils\Utils::templateUrl(Auth::LOGIN_SERVERS[0], array(
        ));
        if (!empty($serverURL)) {
            $baseUrl = $serverURL;
        }
        
        $url = Utils\Utils::generateUrl($baseUrl, '/login');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "form");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \taamai\taamai\Models\Operations\LoginResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->login = $serializer->deserialize((string)$httpResponse->getBody(), 'taamai\taamai\Models\Operations\LoginLogin', 'json');
            }
        }

        return $response;
    }
}