<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Operations;


/**
 * RestoreCustomtemplateRestorecustomtemplate - OK
 * 
 * @package taamai\taamai\Models\Operations
 * @access public
 */
class RestoreCustomtemplateRestorecustomtemplate
{
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $status;
    
	public function __construct()
	{
		$this->message = "";
		$this->status = "";
	}
}
