<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Operations;


/**
 * AllTemplatesAllTemplates - OK
 * 
 * @package taamai\taamai\Models\Operations
 * @access public
 */
class AllTemplatesAllTemplates
{
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $code;
    
    /**
     * $data
     * 
     * @var array<\taamai\taamai\Models\Shared\Datum> $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<taamai\taamai\Models\Shared\Datum>')]
    public array $data;
    
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $status;
    
	public function __construct()
	{
		$this->code = "";
		$this->data = [];
		$this->message = "";
		$this->status = "";
	}
}