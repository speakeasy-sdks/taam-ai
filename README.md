# taamai/taamai

<div align="left">
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://github.com/speakeasy-sdks/taam-ai.git/actions"><img src="https://img.shields.io/github/actions/workflow/status/speakeasy-sdks/taam-ai/speakeasy_sdk_generation.yml?style=for-the-badge" /></a>
    
</div>

<!-- Start SDK Installation [installation] -->
## SDK Installation

### Composer

```bash
composer require "taamai/taamai"
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use taamai\taamai;
use taamai\taamai\Models\Shared;
use taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '';

$sdk = taamai\Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\AddandremovefromfavDocumentRequest();
    $request->id = 6;
    $request->type = 'document';
    $request->userId = 1;

    $response = $sdk->workbookAndFolders->addandremovefromfavDocument($request);

    if ($response->addandremovefromfavDocument !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

### [WorkbookAndFolders](docs/sdks/workbookandfolders/README.md)

* [addandremovefromfavDocument](docs/sdks/workbookandfolders/README.md#addandremovefromfavdocument) - Add and remove from fav Document
* [contentsinworkbook](docs/sdks/workbookandfolders/README.md#contentsinworkbook) - Contents in work book
* [createFolder](docs/sdks/workbookandfolders/README.md#createfolder) - Create Folder
* [createWorkbook](docs/sdks/workbookandfolders/README.md#createworkbook) - Create Workbook
* [deleteWorkspace](docs/sdks/workbookandfolders/README.md#deleteworkspace) - Delete Workspace
* [deleteallkindofdocuments](docs/sdks/workbookandfolders/README.md#deleteallkindofdocuments) - Delete all kind of documents
* [joinworkbook](docs/sdks/workbookandfolders/README.md#joinworkbook) - Join workbook
* [joinworkbookrequestr](docs/sdks/workbookandfolders/README.md#joinworkbookrequestr) - Join workbook requestr
* [permanentDeletefolder](docs/sdks/workbookandfolders/README.md#permanentdeletefolder) - Permanent Delete folder
* [permanentDeleteworkspace](docs/sdks/workbookandfolders/README.md#permanentdeleteworkspace) - Permanent Delete workspace
* [rejectWorkbook](docs/sdks/workbookandfolders/README.md#rejectworkbook) - Reject Workbook
* [restoreDocuemntofalltypeContentVoiceoverImagesTranscriptCode](docs/sdks/workbookandfolders/README.md#restoredocuemntofalltypecontentvoiceoverimagestranscriptcode) - Restore Docuemnt of all type  (content.voiceover,images,transcript,code)
* [restoreWorkspace](docs/sdks/workbookandfolders/README.md#restoreworkspace) - Restore Workspace
* [setdefualtworkspace](docs/sdks/workbookandfolders/README.md#setdefualtworkspace) - Set defualt workspace
* [trashedfolders](docs/sdks/workbookandfolders/README.md#trashedfolders) - Trashed folders
* [trashedworkspaces](docs/sdks/workbookandfolders/README.md#trashedworkspaces) - Trashed workspaces
* [workbookDetail](docs/sdks/workbookandfolders/README.md#workbookdetail) - Workbook Detail
* [workbookvoiceovers](docs/sdks/workbookandfolders/README.md#workbookvoiceovers) - Workbook voiceovers
* [allworkbooks](docs/sdks/workbookandfolders/README.md#allworkbooks) - all workbooks
* [deletefolder](docs/sdks/workbookandfolders/README.md#deletefolder) - delete folder
* [permanentDeletedocument](docs/sdks/workbookandfolders/README.md#permanentdeletedocument) - permanent Delete document
* [restorefolder](docs/sdks/workbookandfolders/README.md#restorefolder) - restore folder
* [userchats](docs/sdks/workbookandfolders/README.md#userchats) - user chats
* [workbookcodes](docs/sdks/workbookandfolders/README.md#workbookcodes) - workbook codes
* [workbookimages](docs/sdks/workbookandfolders/README.md#workbookimages) - workbook images
* [workbookpolicies](docs/sdks/workbookandfolders/README.md#workbookpolicies) - workbook policies
* [workbooktranscripts](docs/sdks/workbookandfolders/README.md#workbooktranscripts) - workbook transcripts

### [CustimTemplates](docs/sdks/custimtemplates/README.md)

* [createCustomTemplate](docs/sdks/custimtemplates/README.md#createcustomtemplate) - Create Custom Template
* [customTemplategenerate](docs/sdks/custimtemplates/README.md#customtemplategenerate) - Custom Template generate
* [customTemplates](docs/sdks/custimtemplates/README.md#customtemplates) - Custom Templates
* [deleteCustomtemplate](docs/sdks/custimtemplates/README.md#deletecustomtemplate) - Delete Custom template
* [favCustomTemplates](docs/sdks/custimtemplates/README.md#favcustomtemplates) - Fav Custom Templates
* [restoreCustomtemplate](docs/sdks/custimtemplates/README.md#restorecustomtemplate) - Restore Custom template
* [trashedCustomTemplates](docs/sdks/custimtemplates/README.md#trashedcustomtemplates) - Trashed Custom Templates

### [ChatWithPdf](docs/sdks/chatwithpdf/README.md)

* [newRequest](docs/sdks/chatwithpdf/README.md#newrequest) - New Request
* [sendandgetmsgtochatpdf](docs/sdks/chatwithpdf/README.md#sendandgetmsgtochatpdf) - Send and get msg to chat pdf
* [fileupload](docs/sdks/chatwithpdf/README.md#fileupload) - file upload
* [pdftotext](docs/sdks/chatwithpdf/README.md#pdftotext) - pdf to text
* [uploadfileforchatpdf](docs/sdks/chatwithpdf/README.md#uploadfileforchatpdf) - upload file for chat pdf

### [Misc](docs/sdks/misc/README.md)

* [allCategories](docs/sdks/misc/README.md#allcategories) - All Categories

### [AddonFeatures](docs/sdks/addonfeatures/README.md)

* [generateCode](docs/sdks/addonfeatures/README.md#generatecode) - Generate Code
* [generateimagefromAI](docs/sdks/addonfeatures/README.md#generateimagefromai) - Generate image from AI
* [generatespeechtotext](docs/sdks/addonfeatures/README.md#generatespeechtotext) - Generate speech to text
* [savecodeinworkspace](docs/sdks/addonfeatures/README.md#savecodeinworkspace) - Save code in workspace
* [savetranscript](docs/sdks/addonfeatures/README.md#savetranscript) - Save transcript

### [Auth](docs/sdks/auth/README.md)

* [register](docs/sdks/auth/README.md#register) - Register
* [login](docs/sdks/auth/README.md#login) - login

### [Product](docs/sdks/product/README.md)

* [createProduct](docs/sdks/product/README.md#createproduct) - Create Product
* [deleteProduct](docs/sdks/product/README.md#deleteproduct) - Delete Product
* [restoreProduct](docs/sdks/product/README.md#restoreproduct) - Restore Product
* [trashedProducts](docs/sdks/product/README.md#trashedproducts) - Trashed Products
* [updateProduct](docs/sdks/product/README.md#updateproduct) - Update Product
* [userProductd](docs/sdks/product/README.md#userproductd) - User Productd
* [parmenentdeleteProduct](docs/sdks/product/README.md#parmenentdeleteproduct) - parmenent delete Product

### [PromptTemplate](docs/sdks/prompttemplate/README.md)

* [addandremovefrombookmarkprompttemplate](docs/sdks/prompttemplate/README.md#addandremovefrombookmarkprompttemplate) - Add and remove from bookmark prompt template
* [createPromptTemplate](docs/sdks/prompttemplate/README.md#createprompttemplate) - Create Prompt Template
* [generateprompttemplate](docs/sdks/prompttemplate/README.md#generateprompttemplate) - Generate prompt template
* [parmanentDeletePrompttemplate](docs/sdks/prompttemplate/README.md#parmanentdeleteprompttemplate) - Parmanent Delete Prompt template
* [promptTemplates](docs/sdks/prompttemplate/README.md#prompttemplates) - Prompt Templates
* [restorePromptTemplate](docs/sdks/prompttemplate/README.md#restoreprompttemplate) - Restore Prompt Template
* [trashedPromptTemplates](docs/sdks/prompttemplate/README.md#trashedprompttemplates) - Trashed Prompt Templates
* [deleteprmopttemplate](docs/sdks/prompttemplate/README.md#deleteprmopttemplate) - delete prmopt template
* [prompttemplatelikeorremovefromlike](docs/sdks/prompttemplate/README.md#prompttemplatelikeorremovefromlike) - prompt template like or remove from like

### [Templates](docs/sdks/templates/README.md)

* [allTemplates](docs/sdks/templates/README.md#alltemplates) - All Templates
* [favTemplates](docs/sdks/templates/README.md#favtemplates) - Fav Templates
* [generateTemplate](docs/sdks/templates/README.md#generatetemplate) - Generate Template
* [processTemplate](docs/sdks/templates/README.md#processtemplate) - Process Template
* [templateDetail](docs/sdks/templates/README.md#templatedetail) - Template Detail
* [templategroups](docs/sdks/templates/README.md#templategroups) - Template groups
<!-- End Available Resources and Operations [operations] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
