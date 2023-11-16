<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Operations;

use \taamai\taamai\Utils\SpeakeasyMetadata;
class TemplateDetailRequest
{
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=template_id')]
    public int $templateId;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user_id')]
    public int $userId;
    
	public function __construct()
	{
		$this->templateId = 0;
		$this->userId = 0;
	}
}
