<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Operations;

use \taamai\taamai\Utils\SpeakeasyMetadata;
class CustomTemplategenerateRequest
{
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=creativity')]
    public float $creativity;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=description')]
    public string $description;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=folder_id')]
    public int $folderId;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=language')]
    public string $language;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=max_results')]
    public int $maxResults;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=template_code')]
    public string $templateCode;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=text')]
    public string $text;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=text2')]
    public string $text2;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=title')]
    public string $title;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user_id')]
    public int $userId;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=words')]
    public int $words;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=workbook_id')]
    public int $workbookId;
    
	public function __construct()
	{
		$this->creativity = 0;
		$this->description = "";
		$this->folderId = 0;
		$this->language = "";
		$this->maxResults = 0;
		$this->templateCode = "";
		$this->text = "";
		$this->text2 = "";
		$this->title = "";
		$this->userId = 0;
		$this->words = 0;
		$this->workbookId = 0;
	}
}
