<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Operations;


class CreateCustomTemplateCreateCustomTemplateData12
{
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $createdAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;
    
    /**
     * $fields
     * 
     * @var array<\taamai\taamai\Models\Shared\Field> $fields
     */
	#[\JMS\Serializer\Annotation\SerializedName('fields')]
    #[\JMS\Serializer\Annotation\Type('array<taamai\taamai\Models\Shared\Field>')]
    public array $fields;
    
	#[\JMS\Serializer\Annotation\SerializedName('group')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $group;
    
	#[\JMS\Serializer\Annotation\SerializedName('icon')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $icon;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	#[\JMS\Serializer\Annotation\SerializedName('package')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $package;
    
	#[\JMS\Serializer\Annotation\SerializedName('professional')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $professional;
    
	#[\JMS\Serializer\Annotation\SerializedName('prompt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $prompt;
    
	#[\JMS\Serializer\Annotation\SerializedName('slug')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $slug;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $status;
    
	#[\JMS\Serializer\Annotation\SerializedName('template_code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $templateCode;
    
	#[\JMS\Serializer\Annotation\SerializedName('tone')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $tone;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $updatedAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('user_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $userId;
    
	public function __construct()
	{
		$this->createdAt = "";
		$this->description = "";
		$this->fields = [];
		$this->group = "";
		$this->icon = "";
		$this->id = 0;
		$this->name = "";
		$this->package = "";
		$this->professional = false;
		$this->prompt = "";
		$this->slug = "";
		$this->status = false;
		$this->templateCode = "";
		$this->tone = false;
		$this->updatedAt = "";
		$this->userId = "";
	}
}