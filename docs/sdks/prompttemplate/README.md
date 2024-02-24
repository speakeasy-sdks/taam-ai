# PromptTemplate


### Available Operations

* [addandremovefrombookmarkprompttemplate](#addandremovefrombookmarkprompttemplate) - Add and remove from bookmark prompt template
* [createPromptTemplate](#createprompttemplate) - Create Prompt Template
* [generateprompttemplate](#generateprompttemplate) - Generate prompt template
* [parmanentDeletePrompttemplate](#parmanentdeleteprompttemplate) - Parmanent Delete Prompt template
* [promptTemplates](#prompttemplates) - Prompt Templates
* [restorePromptTemplate](#restoreprompttemplate) - Restore Prompt Template
* [trashedPromptTemplates](#trashedprompttemplates) - Trashed Prompt Templates
* [deleteprmopttemplate](#deleteprmopttemplate) - delete prmopt template
* [prompttemplatelikeorremovefromlike](#prompttemplatelikeorremovefromlike) - prompt template like or remove from like

## addandremovefrombookmarkprompttemplate

Add and remove from bookmark prompt template

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AddandremovefrombookmarkprompttemplateRequest();
    $request->templateId = 1;
    $request->userId = 1;;

    $response = $sdk->promptTemplate->addandremovefrombookmarkprompttemplate($request);

    if ($response->newRequest1 !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                  | Type                                                                                                                                                       | Required                                                                                                                                                   | Description                                                                                                                                                |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                 | [\taamai\taamai\Models\Operations\AddandremovefrombookmarkprompttemplateRequest](../../Models/Operations/AddandremovefrombookmarkprompttemplateRequest.md) | :heavy_check_mark:                                                                                                                                         | The request object to use for the request.                                                                                                                 |
| `$serverURL`                                                                                                                                               | *string*                                                                                                                                                   | :heavy_minus_sign:                                                                                                                                         | An optional server URL to use.                                                                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\AddandremovefrombookmarkprompttemplateResponse](../../Models/Operations/AddandremovefrombookmarkprompttemplateResponse.md)**


## createPromptTemplate

Create Prompt Template

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreatePromptTemplateRequest();
    $request->activate = 1;
    $request->category = 'text';
    $request->code0 = 'input-field-1';
    $request->edit = 1;
    $request->inputField0 = 'input';
    $request->language = 'en-US';
    $request->name = 'New checking';
    $request->names0 = 'new';
    $request->package = 'all';
    $request->placeholders0 = 'Enter relavent information';
    $request->prompt = 'Want to create vlog';
    $request->public = 1;
    $request->tone = 1;
    $request->userId = 1;;

    $response = $sdk->promptTemplate->createPromptTemplate($request);

    if ($response->createPromptTemplate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\taamai\taamai\Models\Operations\CreatePromptTemplateRequest](../../Models/Operations/CreatePromptTemplateRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |
| `$serverURL`                                                                                                           | *string*                                                                                                               | :heavy_minus_sign:                                                                                                     | An optional server URL to use.                                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\CreatePromptTemplateResponse](../../Models/Operations/CreatePromptTemplateResponse.md)**


## generateprompttemplate

Generate prompt template

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GenerateprompttemplateRequest();
    $request->creativity = 0.5;
    $request->description = 'something new';
    $request->folderId = 1;
    $request->language = 'en-US';
    $request->maxResults = 1;
    $request->templateCode = 'SXHY9';
    $request->text1 = 'hello';
    $request->title = 'new';
    $request->userId = 1;
    $request->words = 10000;
    $request->workbookId = 1;;

    $response = $sdk->promptTemplate->generateprompttemplate($request);

    if ($response->generateprompttemplate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\taamai\taamai\Models\Operations\GenerateprompttemplateRequest](../../Models/Operations/GenerateprompttemplateRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |
| `$serverURL`                                                                                                               | *string*                                                                                                                   | :heavy_minus_sign:                                                                                                         | An optional server URL to use.                                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\GenerateprompttemplateResponse](../../Models/Operations/GenerateprompttemplateResponse.md)**


## parmanentDeletePrompttemplate

Parmanent Delete Prompt template

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ParmanentDeletePrompttemplateRequest();
    $request->templateId = 3;
    $request->userId = 1;;

    $response = $sdk->promptTemplate->parmanentDeletePrompttemplate($request);

    if ($response->parmanentDeletePrompttemplate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                               | [\taamai\taamai\Models\Operations\ParmanentDeletePrompttemplateRequest](../../Models/Operations/ParmanentDeletePrompttemplateRequest.md) | :heavy_check_mark:                                                                                                                       | The request object to use for the request.                                                                                               |
| `$serverURL`                                                                                                                             | *string*                                                                                                                                 | :heavy_minus_sign:                                                                                                                       | An optional server URL to use.                                                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\ParmanentDeletePrompttemplateResponse](../../Models/Operations/ParmanentDeletePrompttemplateResponse.md)**


## promptTemplates

Prompt Templates

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PromptTemplatesRequest();
    $request->cat = 'publc';
    $request->subCat = 'all';
    $request->userId = 1;;

    $response = $sdk->promptTemplate->promptTemplates($request);

    if ($response->promptTemplates !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\taamai\taamai\Models\Operations\PromptTemplatesRequest](../../Models/Operations/PromptTemplatesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |
| `$serverURL`                                                                                                 | *string*                                                                                                     | :heavy_minus_sign:                                                                                           | An optional server URL to use.                                                                               |


### Response

**[?\taamai\taamai\Models\Operations\PromptTemplatesResponse](../../Models/Operations/PromptTemplatesResponse.md)**


## restorePromptTemplate

Restore Prompt Template

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RestorePromptTemplateRequest();
    $request->templateId = 3;
    $request->userId = 1;;

    $response = $sdk->promptTemplate->restorePromptTemplate($request);

    if ($response->restorePromptTemplate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\taamai\taamai\Models\Operations\RestorePromptTemplateRequest](../../Models/Operations/RestorePromptTemplateRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |
| `$serverURL`                                                                                                             | *string*                                                                                                                 | :heavy_minus_sign:                                                                                                       | An optional server URL to use.                                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\RestorePromptTemplateResponse](../../Models/Operations/RestorePromptTemplateResponse.md)**


## trashedPromptTemplates

Trashed Prompt Templates

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\TrashedPromptTemplatesRequest();
    $request->userId = 1;;

    $response = $sdk->promptTemplate->trashedPromptTemplates($request);

    if ($response->trashedPromptTemplates !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\taamai\taamai\Models\Operations\TrashedPromptTemplatesRequest](../../Models/Operations/TrashedPromptTemplatesRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |
| `$serverURL`                                                                                                               | *string*                                                                                                                   | :heavy_minus_sign:                                                                                                         | An optional server URL to use.                                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\TrashedPromptTemplatesResponse](../../Models/Operations/TrashedPromptTemplatesResponse.md)**


## deleteprmopttemplate

delete prmopt template

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteprmopttemplateRequest();
    $request->templateId = 3;
    $request->userId = 1;;

    $response = $sdk->promptTemplate->deleteprmopttemplate($request);

    if ($response->deleteprmopttemplate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\taamai\taamai\Models\Operations\DeleteprmopttemplateRequest](../../Models/Operations/DeleteprmopttemplateRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |
| `$serverURL`                                                                                                           | *string*                                                                                                               | :heavy_minus_sign:                                                                                                     | An optional server URL to use.                                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\DeleteprmopttemplateResponse](../../Models/Operations/DeleteprmopttemplateResponse.md)**


## prompttemplatelikeorremovefromlike

prompt template like or remove from like

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PrompttemplatelikeorremovefromlikeRequest();
    $request->templateId = 1;
    $request->userId = 1;;

    $response = $sdk->promptTemplate->prompttemplatelikeorremovefromlike($request);

    if ($response->prompttemplatelikeorremovefromlike !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                          | Type                                                                                                                                               | Required                                                                                                                                           | Description                                                                                                                                        |
| -------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                         | [\taamai\taamai\Models\Operations\PrompttemplatelikeorremovefromlikeRequest](../../Models/Operations/PrompttemplatelikeorremovefromlikeRequest.md) | :heavy_check_mark:                                                                                                                                 | The request object to use for the request.                                                                                                         |
| `$serverURL`                                                                                                                                       | *string*                                                                                                                                           | :heavy_minus_sign:                                                                                                                                 | An optional server URL to use.                                                                                                                     |


### Response

**[?\taamai\taamai\Models\Operations\PrompttemplatelikeorremovefromlikeResponse](../../Models/Operations/PrompttemplatelikeorremovefromlikeResponse.md)**

