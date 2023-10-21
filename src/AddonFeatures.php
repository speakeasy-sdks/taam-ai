<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai;

class AddonFeatures 
{
	
	public const GENERATE_CODE_SERVERS = [
		'http://127.0.0.1:8000/api',
	];
	
	public const GENERATEIMAGEFROM_AI_SERVERS = [
		'http://127.0.0.1:8000/api',
	];
	
	public const GENERATESPEECHTOTEXT_SERVERS = [
		'http://127.0.0.1:8000/api',
	];
	
	public const SAVECODEINWORKSPACE_SERVERS = [
		'http://127.0.0.1:8000/api',
	];
	
	public const SAVETRANSCRIPT_SERVERS = [
		'http://127.0.0.1:8000/api',
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
     * Generate Code
     * 
     * @param \taamai\taamai\Models\Operations\GenerateCodeRequest $request
     * @param string $serverURL
     * @return \taamai\taamai\Models\Operations\GenerateCodeResponse
     */
	public function generateCode(
        ?\taamai\taamai\Models\Operations\GenerateCodeRequest $request,
        ?string $serverURL = null,
    ): \taamai\taamai\Models\Operations\GenerateCodeResponse
    {
        $baseUrl = Utils\Utils::templateUrl(AddonFeatures::GENERATE_CODE_SERVERS[0], array(
        ));
        if (!empty($serverURL)) {
            $baseUrl = $serverURL;
        }
        
        $url = Utils\Utils::generateUrl($baseUrl, '/code/process');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\taamai\taamai\Models\Operations\GenerateCodeRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \taamai\taamai\Models\Operations\GenerateCodeResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->generateCode = $serializer->deserialize((string)$httpResponse->getBody(), 'taamai\taamai\Models\Operations\GenerateCodeGenerateCode', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Generate image from AI
     * 
     * @param \taamai\taamai\Models\Operations\GenerateimagefromAIRequest $request
     * @param string $serverURL
     * @return \taamai\taamai\Models\Operations\GenerateimagefromAIResponse
     */
	public function generateimagefromAI(
        ?\taamai\taamai\Models\Operations\GenerateimagefromAIRequest $request,
        ?string $serverURL = null,
    ): \taamai\taamai\Models\Operations\GenerateimagefromAIResponse
    {
        $baseUrl = Utils\Utils::templateUrl(AddonFeatures::GENERATEIMAGEFROM_AI_SERVERS[0], array(
        ));
        if (!empty($serverURL)) {
            $baseUrl = $serverURL;
        }
        
        $url = Utils\Utils::generateUrl($baseUrl, '/image/process');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\taamai\taamai\Models\Operations\GenerateimagefromAIRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \taamai\taamai\Models\Operations\GenerateimagefromAIResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->generateimagefromAI = $serializer->deserialize((string)$httpResponse->getBody(), 'taamai\taamai\Models\Operations\GenerateimagefromAIGenerateimagefromAI', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Generate speech to text
     * 
     * @param \taamai\taamai\Models\Operations\GeneratespeechtotextRequestBody $request
     * @param string $serverURL
     * @return \taamai\taamai\Models\Operations\GeneratespeechtotextResponse
     */
	public function generatespeechtotext(
        ?\taamai\taamai\Models\Operations\GeneratespeechtotextRequestBody $request,
        ?string $serverURL = null,
    ): \taamai\taamai\Models\Operations\GeneratespeechtotextResponse
    {
        $baseUrl = Utils\Utils::templateUrl(AddonFeatures::GENERATESPEECHTOTEXT_SERVERS[0], array(
        ));
        if (!empty($serverURL)) {
            $baseUrl = $serverURL;
        }
        
        $url = Utils\Utils::generateUrl($baseUrl, '/transcribe/process');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "multipart");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \taamai\taamai\Models\Operations\GeneratespeechtotextResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->generatespeechtotext = $serializer->deserialize((string)$httpResponse->getBody(), 'taamai\taamai\Models\Operations\GeneratespeechtotextGeneratespeechtotext', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Save code in workspace
     * 
     * @param \taamai\taamai\Models\Operations\SavecodeinworkspaceRequest $request
     * @param string $serverURL
     * @return \taamai\taamai\Models\Operations\SavecodeinworkspaceResponse
     */
	public function savecodeinworkspace(
        ?\taamai\taamai\Models\Operations\SavecodeinworkspaceRequest $request,
        ?string $serverURL = null,
    ): \taamai\taamai\Models\Operations\SavecodeinworkspaceResponse
    {
        $baseUrl = Utils\Utils::templateUrl(AddonFeatures::SAVECODEINWORKSPACE_SERVERS[0], array(
        ));
        if (!empty($serverURL)) {
            $baseUrl = $serverURL;
        }
        
        $url = Utils\Utils::generateUrl($baseUrl, '/code/save');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\taamai\taamai\Models\Operations\SavecodeinworkspaceRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \taamai\taamai\Models\Operations\SavecodeinworkspaceResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->savecodeinworkspace = $serializer->deserialize((string)$httpResponse->getBody(), 'taamai\taamai\Models\Operations\SavecodeinworkspaceSavecodeinworkspace', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Save transcript
     * 
     * @param \taamai\taamai\Models\Operations\SavetranscriptRequest $request
     * @param string $serverURL
     * @return \taamai\taamai\Models\Operations\SavetranscriptResponse
     */
	public function savetranscript(
        ?\taamai\taamai\Models\Operations\SavetranscriptRequest $request,
        ?string $serverURL = null,
    ): \taamai\taamai\Models\Operations\SavetranscriptResponse
    {
        $baseUrl = Utils\Utils::templateUrl(AddonFeatures::SAVETRANSCRIPT_SERVERS[0], array(
        ));
        if (!empty($serverURL)) {
            $baseUrl = $serverURL;
        }
        
        $url = Utils\Utils::generateUrl($baseUrl, '/transcribe/save');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\taamai\taamai\Models\Operations\SavetranscriptRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \taamai\taamai\Models\Operations\SavetranscriptResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->savetranscript = $serializer->deserialize((string)$httpResponse->getBody(), 'taamai\taamai\Models\Operations\SavetranscriptSavetranscript', 'json');
            }
        }

        return $response;
    }
}