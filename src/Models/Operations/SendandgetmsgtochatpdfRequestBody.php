<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Operations;

use \taamai\taamai\Utils\SpeakeasyMetadata;
class SendandgetmsgtochatpdfRequestBody
{
	#[SpeakeasyMetadata('form:name=question')]
    public string $question;
    
	public function __construct()
	{
		$this->question = "";
	}
}