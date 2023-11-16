<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Operations;


/**
 * GenerateTemplateGenerateTemplate - OK
 * 
 * @package taamai\taamai\Models\Operations
 * @access public
 */
class GenerateTemplateGenerateTemplate
{
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('max_results')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $maxResults;
    
	#[\JMS\Serializer\Annotation\SerializedName('max_words')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $maxWords;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $status;
    
	#[\JMS\Serializer\Annotation\SerializedName('temperature')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $temperature;
    
	public function __construct()
	{
		$this->id = 0;
		$this->maxResults = "";
		$this->maxWords = 0;
		$this->status = "";
		$this->temperature = "";
	}
}
