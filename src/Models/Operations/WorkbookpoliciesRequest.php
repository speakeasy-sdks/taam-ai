<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Operations;

use \taamai\taamai\Utils\SpeakeasyMetadata;
class WorkbookpoliciesRequest
{
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=type')]
    public string $type;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user_id')]
    public int $userId;
    
	public function __construct()
	{
		$this->type = "";
		$this->userId = 0;
	}
}
