<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Operations;


/**
 * PrompttemplatelikeorremovefromlikePrompttemplatelikeorremovefromlike - OK
 * 
 * @package taamai\taamai\Models\Operations
 * @access public
 */
class PrompttemplatelikeorremovefromlikePrompttemplatelikeorremovefromlike
{
	#[\JMS\Serializer\Annotation\SerializedName('count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $count;
    
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $status;
    
	public function __construct()
	{
		$this->count = 0;
		$this->message = "";
		$this->status = "";
	}
}
