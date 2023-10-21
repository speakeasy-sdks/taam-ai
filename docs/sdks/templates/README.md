# Templates
(*templates*)

### Available Operations

* [allTemplates](#alltemplates) - All Templates
* [favTemplates](#favtemplates) - Fav Templates
* [generateTemplate](#generatetemplate) - Generate Template
* [processTemplate](#processtemplate) - Process Template
* [templateDetail](#templatedetail) - Template Detail
* [templategroups](#templategroups) - Template groups

## allTemplates

All Templates

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\AllTemplatesRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AllTemplatesRequest();
    $request->userId = 1;

    $response = $sdk->templates->allTemplates($request);

    if ($response->allTemplates !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\taamai\taamai\Models\Operations\AllTemplatesRequest](../../models/operations/AllTemplatesRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `$serverURL`                                                                                           | *string*                                                                                               | :heavy_minus_sign:                                                                                     | An optional server URL to use.                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\AllTemplatesResponse](../../models/operations/AllTemplatesResponse.md)**


## favTemplates

Fav Templates

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\FavTemplatesRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new FavTemplatesRequest();
    $request->userId = 12;

    $response = $sdk->templates->favTemplates($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\taamai\taamai\Models\Operations\FavTemplatesRequest](../../models/operations/FavTemplatesRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `$serverURL`                                                                                           | *string*                                                                                               | :heavy_minus_sign:                                                                                     | An optional server URL to use.                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\FavTemplatesResponse](../../models/operations/FavTemplatesResponse.md)**


## generateTemplate

Generate Template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\GenerateTemplateRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GenerateTemplateRequest();
    $request->creativity = 0.5;
    $request->description = 'tell me about code';
    $request->folderId = 1;
    $request->language = 'en-US';
    $request->maxResults = 1;
    $request->templateCode = 'EEKZF';
    $request->title = 'Tsmokeshope';
    $request->userId = 40;
    $request->words = 100;
    $request->workbookId = 1;

    $response = $sdk->templates->generateTemplate($request);

    if ($response->generateTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\taamai\taamai\Models\Operations\GenerateTemplateRequest](../../models/operations/GenerateTemplateRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |
| `$serverURL`                                                                                                   | *string*                                                                                                       | :heavy_minus_sign:                                                                                             | An optional server URL to use.                                                                                 |


### Response

**[?\taamai\taamai\Models\Operations\GenerateTemplateResponse](../../models/operations/GenerateTemplateResponse.md)**


## processTemplate

Process Template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\ProcessTemplateRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ProcessTemplateRequest();
    $request->contentId = 286;
    $request->maxResults = 1;
    $request->maxWords = 100;
    $request->temperature = 0.5;
    $request->userId = 1;

    $response = $sdk->templates->processTemplate($request);

    if ($response->processTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\taamai\taamai\Models\Operations\ProcessTemplateRequest](../../models/operations/ProcessTemplateRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |
| `$serverURL`                                                                                                 | *string*                                                                                                     | :heavy_minus_sign:                                                                                           | An optional server URL to use.                                                                               |


### Response

**[?\taamai\taamai\Models\Operations\ProcessTemplateResponse](../../models/operations/ProcessTemplateResponse.md)**


## templateDetail

Template Detail

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\TemplateDetailRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TemplateDetailRequest();
    $request->templateId = 1;
    $request->userId = 40;

    $response = $sdk->templates->templateDetail($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\TemplateDetailRequest](../../models/operations/TemplateDetailRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\TemplateDetailResponse](../../models/operations/TemplateDetailResponse.md)**


## templategroups

Template groups

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->templates->templategroups();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                      | Type                           | Required                       | Description                    |
| ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ |
| `$serverURL`                   | *string*                       | :heavy_minus_sign:             | An optional server URL to use. |


### Response

**[?\taamai\taamai\Models\Operations\TemplategroupsResponse](../../models/operations/TemplategroupsResponse.md)**

