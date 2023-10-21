<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai;

class Misc 
{
	
	public const ALL_CATEGORIES_SERVERS = [
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
     * All Categories
     * 
     * @param \taamai\taamai\Models\Operations\AllCategoriesRequest $request
     * @param string $serverURL
     * @return \taamai\taamai\Models\Operations\AllCategoriesResponse
     */
	public function allCategories(
        ?\taamai\taamai\Models\Operations\AllCategoriesRequest $request,
        ?string $serverURL = null,
    ): \taamai\taamai\Models\Operations\AllCategoriesResponse
    {
        $baseUrl = Utils\Utils::templateUrl(Misc::ALL_CATEGORIES_SERVERS[0], array(
        ));
        if (!empty($serverURL)) {
            $baseUrl = $serverURL;
        }
        
        $url = Utils\Utils::generateUrl($baseUrl, '/all/categories');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\taamai\taamai\Models\Operations\AllCategoriesRequest::class, $request, null));
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \taamai\taamai\Models\Operations\AllCategoriesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }

        return $response;
    }
}