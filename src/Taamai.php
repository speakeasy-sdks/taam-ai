<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace taamai\taamai;

/**
 * Taamai
 * 
 * @package taamai\taamai
 * @access public
 */
class Taamai
{
	public const SERVERS = [
		'https://taam.ai/api',
		'http://127.0.0.1:8000/api',
	];
  	
	public AddonFeatures $addonFeatures;
	
	public CustimTemplates $custimTemplates;
	
	public Misc $misc;
	
	public Product $product;
	
	public PromptTemplate $promptTemplate;
	
	public Templates $templates;
	
	public WorkbookAndFolders $workbookAndFolders;
	
	public Auth $auth;
	
	public ChatWithPdf $chatWithPdf;
		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return TaamaiBuilder
	 */
	public static function builder(): TaamaiBuilder
	{
		return new TaamaiBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
		
		$this->addonFeatures = new AddonFeatures($this->sdkConfiguration);
		
		$this->custimTemplates = new CustimTemplates($this->sdkConfiguration);
		
		$this->misc = new Misc($this->sdkConfiguration);
		
		$this->product = new Product($this->sdkConfiguration);
		
		$this->promptTemplate = new PromptTemplate($this->sdkConfiguration);
		
		$this->templates = new Templates($this->sdkConfiguration);
		
		$this->workbookAndFolders = new WorkbookAndFolders($this->sdkConfiguration);
		
		$this->auth = new Auth($this->sdkConfiguration);
		
		$this->chatWithPdf = new ChatWithPdf($this->sdkConfiguration);
	}
}