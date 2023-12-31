<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Operations;

use \taamai\taamai\Utils\SpeakeasyMetadata;
class CreatePromptTemplateRequest
{
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=activate')]
    public int $activate;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=category')]
    public string $category;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=code[0]')]
    public string $code0;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=edit')]
    public int $edit;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=input_field[0]')]
    public string $inputField0;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=language')]
    public string $language;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=name')]
    public string $name;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=names[0]')]
    public string $names0;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=package')]
    public string $package;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=placeholders[0]')]
    public string $placeholders0;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=prompt')]
    public string $prompt;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=public')]
    public int $public;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tone')]
    public int $tone;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user_id')]
    public int $userId;
    
	public function __construct()
	{
		$this->activate = 0;
		$this->category = "";
		$this->code0 = "";
		$this->edit = 0;
		$this->inputField0 = "";
		$this->language = "";
		$this->name = "";
		$this->names0 = "";
		$this->package = "";
		$this->placeholders0 = "";
		$this->prompt = "";
		$this->public = 0;
		$this->tone = 0;
		$this->userId = 0;
	}
}
