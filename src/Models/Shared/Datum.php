<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Shared;


class Datum
{
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $createdAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;
    
	#[\JMS\Serializer\Annotation\SerializedName('fields')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $fields;
    
	#[\JMS\Serializer\Annotation\SerializedName('group')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $group;
    
	#[\JMS\Serializer\Annotation\SerializedName('icon')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $icon;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('image')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $image;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	#[\JMS\Serializer\Annotation\SerializedName('new')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $new;
    
	#[\JMS\Serializer\Annotation\SerializedName('package')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $package;
    
	#[\JMS\Serializer\Annotation\SerializedName('popular')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $popular;
    
	#[\JMS\Serializer\Annotation\SerializedName('professional')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $professional;
    
	#[\JMS\Serializer\Annotation\SerializedName('slug')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $slug;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $status;
    
	#[\JMS\Serializer\Annotation\SerializedName('template_code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $templateCode;
    
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $type;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $updatedAt;
    
	public function __construct()
	{
		$this->createdAt = "";
		$this->description = "";
		$this->fields = "";
		$this->group = "";
		$this->icon = "";
		$this->id = 0;
		$this->image = "";
		$this->name = "";
		$this->new = 0;
		$this->package = "";
		$this->popular = 0;
		$this->professional = 0;
		$this->slug = "";
		$this->status = 0;
		$this->templateCode = "";
		$this->type = "";
		$this->updatedAt = "";
	}
}
