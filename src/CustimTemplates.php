<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai;

class CustimTemplates 
{
	
	public const CUSTOM_TEMPLATEGENERATE_SERVERS = [
		'https://taam.ai/api',
	];
	
	public const CUSTOM_TEMPLATES_SERVERS = [
		'https://taam.ai/api',
	];
	
	public const DELETE_CUSTOMTEMPLATE_SERVERS = [
		'http://127.0.0.1:8000/api',
	];
	
	public const FAV_CUSTOM_TEMPLATES_SERVERS = [
		'https://taam.ai/api',
	];
	
	public const RESTORE_CUSTOMTEMPLATE_SERVERS = [
		'http://127.0.0.1:8000/api',
	];
	
	public const TRASHED_CUSTOM_TEMPLATES_SERVERS = [
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
     * Create Custom Template
     * 
     * @return \taamai\taamai\Models\Operations\CreateCustomTemplateResponse
     */
	public function createCustomTemplate(
    ): \taamai\taamai\Models\Operations\CreateCustomTemplateResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \taamai\taamai\Models\Operations\CreateCustomTemplateResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createCustomTemplate = $serializer->deserialize((string)$httpResponse->getBody(), 'taamai\taamai\Models\Operations\CreateCustomTemplateCreateCustomTemplate', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Custom Template generate
     * 
     * @param \taamai\taamai\Models\Operations\CustomTemplategenerateRequest $request
     * @param string $serverURL
     * @return \taamai\taamai\Models\Operations\CustomTemplategenerateResponse
     */
	public function customTemplategenerate(
        ?\taamai\taamai\Models\Operations\CustomTemplategenerateRequest $request,
        ?string $serverURL = null,
    ): \taamai\taamai\Models\Operations\CustomTemplategenerateResponse
    {
        $baseUrl = Utils\Utils::templateUrl(CustimTemplates::CUSTOM_TEMPLATEGENERATE_SERVERS[0], array(
        ));
        if (!empty($serverURL)) {
            $baseUrl = $serverURL;
        }
        
        $url = Utils\Utils::generateUrl($baseUrl, '/templates/custom-generate');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\taamai\taamai\Models\Operations\CustomTemplategenerateRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \taamai\taamai\Models\Operations\CustomTemplategenerateResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->customTemplategenerate = $serializer->deserialize((string)$httpResponse->getBody(), 'taamai\taamai\Models\Operations\CustomTemplategenerateCustomTemplategenerate', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Custom Templates
     * 
     * @param \taamai\taamai\Models\Operations\CustomTemplatesRequest $request
     * @param string $serverURL
     * @return \taamai\taamai\Models\Operations\CustomTemplatesResponse
     */
	public function customTemplates(
        ?\taamai\taamai\Models\Operations\CustomTemplatesRequest $request,
        ?string $serverURL = null,
    ): \taamai\taamai\Models\Operations\CustomTemplatesResponse
    {
        $baseUrl = Utils\Utils::templateUrl(CustimTemplates::CUSTOM_TEMPLATES_SERVERS[0], array(
        ));
        if (!empty($serverURL)) {
            $baseUrl = $serverURL;
        }
        
        $url = Utils\Utils::generateUrl($baseUrl, '/templates/custom-template');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\taamai\taamai\Models\Operations\CustomTemplatesRequest::class, $request, null));
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \taamai\taamai\Models\Operations\CustomTemplatesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }

        return $response;
    }
	
    /**
     * Delete Custom template
     * 
     * @param \taamai\taamai\Models\Operations\DeleteCustomtemplateRequest $request
     * @param string $serverURL
     * @return \taamai\taamai\Models\Operations\DeleteCustomtemplateResponse
     */
	public function deleteCustomtemplate(
        ?\taamai\taamai\Models\Operations\DeleteCustomtemplateRequest $request,
        ?string $serverURL = null,
    ): \taamai\taamai\Models\Operations\DeleteCustomtemplateResponse
    {
        $baseUrl = Utils\Utils::templateUrl(CustimTemplates::DELETE_CUSTOMTEMPLATE_SERVERS[0], array(
        ));
        if (!empty($serverURL)) {
            $baseUrl = $serverURL;
        }
        
        $url = Utils\Utils::generateUrl($baseUrl, '/customTemplate/delete');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\taamai\taamai\Models\Operations\DeleteCustomtemplateRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \taamai\taamai\Models\Operations\DeleteCustomtemplateResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->deleteCustomtemplate = $serializer->deserialize((string)$httpResponse->getBody(), 'taamai\taamai\Models\Operations\DeleteCustomtemplateDeleteCustomtemplate', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Fav Custom Templates
     * 
     * @param \taamai\taamai\Models\Operations\FavCustomTemplatesRequest $request
     * @param string $serverURL
     * @return \taamai\taamai\Models\Operations\FavCustomTemplatesResponse
     */
	public function favCustomTemplates(
        ?\taamai\taamai\Models\Operations\FavCustomTemplatesRequest $request,
        ?string $serverURL = null,
    ): \taamai\taamai\Models\Operations\FavCustomTemplatesResponse
    {
        $baseUrl = Utils\Utils::templateUrl(CustimTemplates::FAV_CUSTOM_TEMPLATES_SERVERS[0], array(
        ));
        if (!empty($serverURL)) {
            $baseUrl = $serverURL;
        }
        
        $url = Utils\Utils::generateUrl($baseUrl, '/templates/custom/favorite');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\taamai\taamai\Models\Operations\FavCustomTemplatesRequest::class, $request, null));
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \taamai\taamai\Models\Operations\FavCustomTemplatesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }

        return $response;
    }
	
    /**
     * Restore Custom template
     * 
     * @param \taamai\taamai\Models\Operations\RestoreCustomtemplateRequest $request
     * @param string $serverURL
     * @return \taamai\taamai\Models\Operations\RestoreCustomtemplateResponse
     */
	public function restoreCustomtemplate(
        ?\taamai\taamai\Models\Operations\RestoreCustomtemplateRequest $request,
        ?string $serverURL = null,
    ): \taamai\taamai\Models\Operations\RestoreCustomtemplateResponse
    {
        $baseUrl = Utils\Utils::templateUrl(CustimTemplates::RESTORE_CUSTOMTEMPLATE_SERVERS[0], array(
        ));
        if (!empty($serverURL)) {
            $baseUrl = $serverURL;
        }
        
        $url = Utils\Utils::generateUrl($baseUrl, '/customTemplate/restore');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\taamai\taamai\Models\Operations\RestoreCustomtemplateRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \taamai\taamai\Models\Operations\RestoreCustomtemplateResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->restorecustomtemplate = $serializer->deserialize((string)$httpResponse->getBody(), 'taamai\taamai\Models\Operations\RestoreCustomtemplateRestorecustomtemplate', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Trashed Custom Templates
     * 
     * @param \taamai\taamai\Models\Operations\TrashedCustomTemplatesRequest $request
     * @param string $serverURL
     * @return \taamai\taamai\Models\Operations\TrashedCustomTemplatesResponse
     */
	public function trashedCustomTemplates(
        ?\taamai\taamai\Models\Operations\TrashedCustomTemplatesRequest $request,
        ?string $serverURL = null,
    ): \taamai\taamai\Models\Operations\TrashedCustomTemplatesResponse
    {
        $baseUrl = Utils\Utils::templateUrl(CustimTemplates::TRASHED_CUSTOM_TEMPLATES_SERVERS[0], array(
        ));
        if (!empty($serverURL)) {
            $baseUrl = $serverURL;
        }
        
        $url = Utils\Utils::generateUrl($baseUrl, '/customTemplate/trashed');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\taamai\taamai\Models\Operations\TrashedCustomTemplatesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \taamai\taamai\Models\Operations\TrashedCustomTemplatesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->trashedCustomTemplates = $serializer->deserialize((string)$httpResponse->getBody(), 'taamai\taamai\Models\Operations\TrashedCustomTemplatesTrashedCustomTemplates', 'json');
            }
        }

        return $response;
    }
}