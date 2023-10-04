<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Operations;

use \taamai\taamai\Utils\SpeakeasyMetadata;
class RejectWorkbookRequest
{
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user_id')]
    public int $userId;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=workbook_id')]
    public int $workbookId;
    
	public function __construct()
	{
		$this->userId = 0;
		$this->workbookId = 0;
	}
}
