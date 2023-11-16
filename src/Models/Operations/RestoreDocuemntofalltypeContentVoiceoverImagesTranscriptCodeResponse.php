<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai\Models\Operations;


class RestoreDocuemntofalltypeContentVoiceoverImagesTranscriptCodeResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * $headers
     * 
     * @var array<string, array<string>> $headers
     */
	
    public array $headers;
    
    /**
     * OK
     * 
     * @var ?\taamai\taamai\Models\Operations\RestoreDocuemntofalltypeContentVoiceoverImagesTranscriptCodeRestoreDocuemntofalltypecontentVoiceoverimagestranscriptcode $restoreDocuemntofalltypecontentVoiceoverimagestranscriptcode
     */
	
    public ?RestoreDocuemntofalltypeContentVoiceoverImagesTranscriptCodeRestoreDocuemntofalltypecontentVoiceoverimagestranscriptcode $restoreDocuemntofalltypecontentVoiceoverimagestranscriptcode = null;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = [];
		$this->restoreDocuemntofalltypecontentVoiceoverimagestranscriptcode = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
