# PromptTemplate
(*promptTemplate*)

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
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\AddandremovefrombookmarkprompttemplateRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AddandremovefrombookmarkprompttemplateRequest();
    $request->templateId = 1;
    $request->userId = 1;

    $response = $sdk->promptTemplate->addandremovefrombookmarkprompttemplate($request);

    if ($response->newRequest1 !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                  | Type                                                                                                                                                       | Required                                                                                                                                                   | Description                                                                                                                                                |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                 | [\taamai\taamai\Models\Operations\AddandremovefrombookmarkprompttemplateRequest](../../models/operations/AddandremovefrombookmarkprompttemplateRequest.md) | :heavy_check_mark:                                                                                                                                         | The request object to use for the request.                                                                                                                 |
| `$serverURL`                                                                                                                                               | *string*                                                                                                                                                   | :heavy_minus_sign:                                                                                                                                         | An optional server URL to use.                                                                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\AddandremovefrombookmarkprompttemplateResponse](../../models/operations/AddandremovefrombookmarkprompttemplateResponse.md)**


## createPromptTemplate

Create Prompt Template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\CreatePromptTemplateRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreatePromptTemplateRequest();
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
    $request->userId = 1;

    $response = $sdk->promptTemplate->createPromptTemplate($request);

    if ($response->createPromptTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\taamai\taamai\Models\Operations\CreatePromptTemplateRequest](../../models/operations/CreatePromptTemplateRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |
| `$serverURL`                                                                                                           | *string*                                                                                                               | :heavy_minus_sign:                                                                                                     | An optional server URL to use.                                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\CreatePromptTemplateResponse](../../models/operations/CreatePromptTemplateResponse.md)**


## generateprompttemplate

Generate prompt template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\GenerateprompttemplateRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GenerateprompttemplateRequest();
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
    $request->workbookId = 1;

    $response = $sdk->promptTemplate->generateprompttemplate($request);

    if ($response->generateprompttemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\taamai\taamai\Models\Operations\GenerateprompttemplateRequest](../../models/operations/GenerateprompttemplateRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |
| `$serverURL`                                                                                                               | *string*                                                                                                                   | :heavy_minus_sign:                                                                                                         | An optional server URL to use.                                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\GenerateprompttemplateResponse](../../models/operations/GenerateprompttemplateResponse.md)**


## parmanentDeletePrompttemplate

Parmanent Delete Prompt template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\ParmanentDeletePrompttemplateRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ParmanentDeletePrompttemplateRequest();
    $request->templateId = 3;
    $request->userId = 1;

    $response = $sdk->promptTemplate->parmanentDeletePrompttemplate($request);

    if ($response->parmanentDeletePrompttemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                               | [\taamai\taamai\Models\Operations\ParmanentDeletePrompttemplateRequest](../../models/operations/ParmanentDeletePrompttemplateRequest.md) | :heavy_check_mark:                                                                                                                       | The request object to use for the request.                                                                                               |
| `$serverURL`                                                                                                                             | *string*                                                                                                                                 | :heavy_minus_sign:                                                                                                                       | An optional server URL to use.                                                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\ParmanentDeletePrompttemplateResponse](../../models/operations/ParmanentDeletePrompttemplateResponse.md)**


## promptTemplates

Prompt Templates

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\PromptTemplatesRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PromptTemplatesRequest();
    $request->cat = 'publc';
    $request->subCat = 'all';
    $request->userId = 1;

    $response = $sdk->promptTemplate->promptTemplates($request);

    if ($response->promptTemplates !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\taamai\taamai\Models\Operations\PromptTemplatesRequest](../../models/operations/PromptTemplatesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |
| `$serverURL`                                                                                                 | *string*                                                                                                     | :heavy_minus_sign:                                                                                           | An optional server URL to use.                                                                               |


### Response

**[?\taamai\taamai\Models\Operations\PromptTemplatesResponse](../../models/operations/PromptTemplatesResponse.md)**


## restorePromptTemplate

Restore Prompt Template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\RestorePromptTemplateRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RestorePromptTemplateRequest();
    $request->templateId = 3;
    $request->userId = 1;

    $response = $sdk->promptTemplate->restorePromptTemplate($request);

    if ($response->restorePromptTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\taamai\taamai\Models\Operations\RestorePromptTemplateRequest](../../models/operations/RestorePromptTemplateRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |
| `$serverURL`                                                                                                             | *string*                                                                                                                 | :heavy_minus_sign:                                                                                                       | An optional server URL to use.                                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\RestorePromptTemplateResponse](../../models/operations/RestorePromptTemplateResponse.md)**


## trashedPromptTemplates

Trashed Prompt Templates

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\TrashedPromptTemplatesRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TrashedPromptTemplatesRequest();
    $request->userId = 1;

    $response = $sdk->promptTemplate->trashedPromptTemplates($request);

    if ($response->trashedPromptTemplates !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\taamai\taamai\Models\Operations\TrashedPromptTemplatesRequest](../../models/operations/TrashedPromptTemplatesRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |
| `$serverURL`                                                                                                               | *string*                                                                                                                   | :heavy_minus_sign:                                                                                                         | An optional server URL to use.                                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\TrashedPromptTemplatesResponse](../../models/operations/TrashedPromptTemplatesResponse.md)**


## deleteprmopttemplate

delete prmopt template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\DeleteprmopttemplateRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteprmopttemplateRequest();
    $request->templateId = 3;
    $request->userId = 1;

    $response = $sdk->promptTemplate->deleteprmopttemplate($request);

    if ($response->deleteprmopttemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\taamai\taamai\Models\Operations\DeleteprmopttemplateRequest](../../models/operations/DeleteprmopttemplateRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |
| `$serverURL`                                                                                                           | *string*                                                                                                               | :heavy_minus_sign:                                                                                                     | An optional server URL to use.                                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\DeleteprmopttemplateResponse](../../models/operations/DeleteprmopttemplateResponse.md)**


## prompttemplatelikeorremovefromlike

prompt template like or remove from like

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\PrompttemplatelikeorremovefromlikeRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PrompttemplatelikeorremovefromlikeRequest();
    $request->templateId = 1;
    $request->userId = 1;

    $response = $sdk->promptTemplate->prompttemplatelikeorremovefromlike($request);

    if ($response->prompttemplatelikeorremovefromlike !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                          | Type                                                                                                                                               | Required                                                                                                                                           | Description                                                                                                                                        |
| -------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                         | [\taamai\taamai\Models\Operations\PrompttemplatelikeorremovefromlikeRequest](../../models/operations/PrompttemplatelikeorremovefromlikeRequest.md) | :heavy_check_mark:                                                                                                                                 | The request object to use for the request.                                                                                                         |
| `$serverURL`                                                                                                                                       | *string*                                                                                                                                           | :heavy_minus_sign:                                                                                                                                 | An optional server URL to use.                                                                                                                     |


### Response

**[?\taamai\taamai\Models\Operations\PrompttemplatelikeorremovefromlikeResponse](../../models/operations/PrompttemplatelikeorremovefromlikeResponse.md)**
