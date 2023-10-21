<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Shared;


class Data4
{
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $createdAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('deleted_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $deletedAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('draft')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $draft;
    
	#[\JMS\Serializer\Annotation\SerializedName('group')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $group;
    
	#[\JMS\Serializer\Annotation\SerializedName('icon')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $icon;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('input_text')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $inputText;
    
	#[\JMS\Serializer\Annotation\SerializedName('language')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $language;
    
	#[\JMS\Serializer\Annotation\SerializedName('language_flag')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $languageFlag;
    
	#[\JMS\Serializer\Annotation\SerializedName('language_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $languageName;
    
	#[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $model;
    
	#[\JMS\Serializer\Annotation\SerializedName('plan_type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $planType;
    
	#[\JMS\Serializer\Annotation\SerializedName('result_text')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $resultText;
    
	#[\JMS\Serializer\Annotation\SerializedName('tags')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $tags;
    
	#[\JMS\Serializer\Annotation\SerializedName('template_code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $templateCode;
    
	#[\JMS\Serializer\Annotation\SerializedName('template_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $templateName;
    
	#[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $title;
    
	#[\JMS\Serializer\Annotation\SerializedName('tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $tokens;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $updatedAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('user_id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $userId;
    
	#[\JMS\Serializer\Annotation\SerializedName('words')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $words;
    
	#[\JMS\Serializer\Annotation\SerializedName('workbook')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $workbook;
    
	#[\JMS\Serializer\Annotation\SerializedName('workbook_folder_id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $workbookFolderId;
    
	#[\JMS\Serializer\Annotation\SerializedName('workbook_id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $workbookId;
    
	public function __construct()
	{
		$this->createdAt = "";
		$this->deletedAt = "";
		$this->draft = 0;
		$this->group = "";
		$this->icon = "";
		$this->id = 0;
		$this->inputText = "";
		$this->language = "";
		$this->languageFlag = "";
		$this->languageName = "";
		$this->model = "";
		$this->planType = "";
		$this->resultText = "";
		$this->tags = "";
		$this->templateCode = "";
		$this->templateName = "";
		$this->title = "";
		$this->tokens = 0;
		$this->updatedAt = "";
		$this->userId = 0;
		$this->words = null;
		$this->workbook = "";
		$this->workbookFolderId = 0;
		$this->workbookId = 0;
	}
}