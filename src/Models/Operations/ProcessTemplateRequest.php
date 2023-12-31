<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Operations;

use \taamai\taamai\Utils\SpeakeasyMetadata;
class ProcessTemplateRequest
{
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=content_id')]
    public int $contentId;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=max_results')]
    public int $maxResults;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=max_words')]
    public int $maxWords;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=temperature')]
    public float $temperature;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user_id')]
    public int $userId;
    
	public function __construct()
	{
		$this->contentId = 0;
		$this->maxResults = 0;
		$this->maxWords = 0;
		$this->temperature = 0;
		$this->userId = 0;
	}
}
