<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Operations;


/**
 * LoginLogin - OK
 * 
 * @package taamai\taamai\Models\Operations
 * @access public
 */
class LoginLogin
{
	#[\JMS\Serializer\Annotation\SerializedName('access_token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $accessToken;
    
	#[\JMS\Serializer\Annotation\SerializedName('expires_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $expiresAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $status;
    
	#[\JMS\Serializer\Annotation\SerializedName('token_type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $tokenType;
    
	#[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('taamai\taamai\Models\Operations\User')]
    public User $user;
    
	public function __construct()
	{
		$this->accessToken = "";
		$this->expiresAt = "";
		$this->message = "";
		$this->status = false;
		$this->tokenType = "";
		$this->user = new \taamai\taamai\Models\Operations\User();
	}
}
