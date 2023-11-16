<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Operations;


class User2
{
	#[\JMS\Serializer\Annotation\SerializedName('available_chars')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $availableChars;
    
	#[\JMS\Serializer\Annotation\SerializedName('available_chars_prepaid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $availableCharsPrepaid;
    
	#[\JMS\Serializer\Annotation\SerializedName('available_images')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $availableImages;
    
	#[\JMS\Serializer\Annotation\SerializedName('available_images_prepaid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $availableImagesPrepaid;
    
	#[\JMS\Serializer\Annotation\SerializedName('available_minutes')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $availableMinutes;
    
	#[\JMS\Serializer\Annotation\SerializedName('available_minutes_prepaid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $availableMinutesPrepaid;
    
	#[\JMS\Serializer\Annotation\SerializedName('available_words')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $availableWords;
    
	#[\JMS\Serializer\Annotation\SerializedName('available_words_prepaid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $availableWordsPrepaid;
    
	#[\JMS\Serializer\Annotation\SerializedName('country')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $country;
    
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $createdAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('default_voiceover_language')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $defaultVoiceoverLanguage;
    
	#[\JMS\Serializer\Annotation\SerializedName('default_voiceover_voice')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $defaultVoiceoverVoice;
    
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;
    
	#[\JMS\Serializer\Annotation\SerializedName('email_verified_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $emailVerifiedAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('group')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $group;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('job_role')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $jobRole;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	#[\JMS\Serializer\Annotation\SerializedName('plan_id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $planId;
    
	#[\JMS\Serializer\Annotation\SerializedName('referral_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $referralId;
    
	#[\JMS\Serializer\Annotation\SerializedName('referred_by')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $referredBy;
    
    /**
     * $roles
     * 
     * @var array<\taamai\taamai\Models\Shared\Role> $roles
     */
	#[\JMS\Serializer\Annotation\SerializedName('roles')]
    #[\JMS\Serializer\Annotation\Type('array<taamai\taamai\Models\Shared\Role>')]
    public array $roles;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $status;
    
	#[\JMS\Serializer\Annotation\SerializedName('total_chars')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalChars;
    
	#[\JMS\Serializer\Annotation\SerializedName('total_images')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalImages;
    
	#[\JMS\Serializer\Annotation\SerializedName('total_minutes')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalMinutes;
    
	#[\JMS\Serializer\Annotation\SerializedName('total_words')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalWords;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $updatedAt;
    
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
		$this->availableChars = 0;
		$this->availableCharsPrepaid = "";
		$this->availableImages = 0;
		$this->availableImagesPrepaid = "";
		$this->availableMinutes = 0;
		$this->availableMinutesPrepaid = "";
		$this->availableWords = 0;
		$this->availableWordsPrepaid = "";
		$this->country = "";
		$this->createdAt = "";
		$this->defaultVoiceoverLanguage = "";
		$this->defaultVoiceoverVoice = "";
		$this->email = "";
		$this->emailVerifiedAt = "";
		$this->group = "";
		$this->id = 0;
		$this->jobRole = "";
		$this->name = "";
		$this->planId = 0;
		$this->referralId = "";
		$this->referredBy = "";
		$this->roles = [];
		$this->status = "";
		$this->totalChars = 0;
		$this->totalImages = 0;
		$this->totalMinutes = 0;
		$this->totalWords = 0;
		$this->updatedAt = "";
		$this->workbook = "";
		$this->workbookFolderId = 0;
		$this->workbookId = 0;
	}
}
