# CustimTemplates


### Available Operations

* [createCustomTemplate](#createcustomtemplate) - Create Custom Template
* [customTemplategenerate](#customtemplategenerate) - Custom Template generate
* [customTemplates](#customtemplates) - Custom Templates
* [deleteCustomtemplate](#deletecustomtemplate) - Delete Custom template
* [favCustomTemplates](#favcustomtemplates) - Fav Custom Templates
* [restoreCustomtemplate](#restorecustomtemplate) - Restore Custom template
* [trashedCustomTemplates](#trashedcustomtemplates) - Trashed Custom Templates

## createCustomTemplate

Create Custom Template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;

$security = new Shared\Security();
$security->bearer = '';

$sdk = taamai\Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->custimTemplates->createCustomTemplate();

    if ($response->createCustomTemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\taamai\taamai\Models\Operations\CreateCustomTemplateResponse](../../Models/Operations/CreateCustomTemplateResponse.md)**


## customTemplategenerate

Custom Template generate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '';

$sdk = taamai\Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CustomTemplategenerateRequest();
    $request->creativity = 0.5;
    $request->description = 'code';
    $request->folderId = 1;
    $request->language = 'en-US';
    $request->maxResults = 1;
    $request->templateCode = 'AZL78';
    $request->text = 'hello';
    $request->text2 = 'really';
    $request->title = 'code';
    $request->userId = 40;
    $request->words = 100;
    $request->workbookId = 1;

    $response = $sdk->custimTemplates->customTemplategenerate($request);

    if ($response->customTemplategenerate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\taamai\taamai\Models\Operations\CustomTemplategenerateRequest](../../Models/Operations/CustomTemplategenerateRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |
| `$serverURL`                                                                                                               | *string*                                                                                                                   | :heavy_minus_sign:                                                                                                         | An optional server URL to use.                                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\CustomTemplategenerateResponse](../../Models/Operations/CustomTemplategenerateResponse.md)**


## customTemplates

Custom Templates

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '';

$sdk = taamai\Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CustomTemplatesRequest();
    $request->userId = 40;

    $response = $sdk->custimTemplates->customTemplates($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\taamai\taamai\Models\Operations\CustomTemplatesRequest](../../Models/Operations/CustomTemplatesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |
| `$serverURL`                                                                                                 | *string*                                                                                                     | :heavy_minus_sign:                                                                                           | An optional server URL to use.                                                                               |


### Response

**[?\taamai\taamai\Models\Operations\CustomTemplatesResponse](../../Models/Operations/CustomTemplatesResponse.md)**


## deleteCustomtemplate

Delete Custom template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '';

$sdk = taamai\Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\DeleteCustomtemplateRequest();
    $request->templateId = 3;
    $request->userId = 1;

    $response = $sdk->custimTemplates->deleteCustomtemplate($request);

    if ($response->deleteCustomtemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\taamai\taamai\Models\Operations\DeleteCustomtemplateRequest](../../Models/Operations/DeleteCustomtemplateRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |
| `$serverURL`                                                                                                           | *string*                                                                                                               | :heavy_minus_sign:                                                                                                     | An optional server URL to use.                                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\DeleteCustomtemplateResponse](../../Models/Operations/DeleteCustomtemplateResponse.md)**


## favCustomTemplates

Fav Custom Templates

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '';

$sdk = taamai\Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\FavCustomTemplatesRequest();
    $request->userId = 40;

    $response = $sdk->custimTemplates->favCustomTemplates($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\taamai\taamai\Models\Operations\FavCustomTemplatesRequest](../../Models/Operations/FavCustomTemplatesRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |
| `$serverURL`                                                                                                       | *string*                                                                                                           | :heavy_minus_sign:                                                                                                 | An optional server URL to use.                                                                                     |


### Response

**[?\taamai\taamai\Models\Operations\FavCustomTemplatesResponse](../../Models/Operations/FavCustomTemplatesResponse.md)**


## restoreCustomtemplate

Restore Custom template

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '';

$sdk = taamai\Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RestoreCustomtemplateRequest();
    $request->templateId = 3;
    $request->userId = 1;

    $response = $sdk->custimTemplates->restoreCustomtemplate($request);

    if ($response->restorecustomtemplate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\taamai\taamai\Models\Operations\RestoreCustomtemplateRequest](../../Models/Operations/RestoreCustomtemplateRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |
| `$serverURL`                                                                                                             | *string*                                                                                                                 | :heavy_minus_sign:                                                                                                       | An optional server URL to use.                                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\RestoreCustomtemplateResponse](../../Models/Operations/RestoreCustomtemplateResponse.md)**


## trashedCustomTemplates

Trashed Custom Templates

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '';

$sdk = taamai\Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\TrashedCustomTemplatesRequest();
    $request->userId = 1;

    $response = $sdk->custimTemplates->trashedCustomTemplates($request);

    if ($response->trashedCustomTemplates !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\taamai\taamai\Models\Operations\TrashedCustomTemplatesRequest](../../Models/Operations/TrashedCustomTemplatesRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |
| `$serverURL`                                                                                                               | *string*                                                                                                                   | :heavy_minus_sign:                                                                                                         | An optional server URL to use.                                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\TrashedCustomTemplatesResponse](../../Models/Operations/TrashedCustomTemplatesResponse.md)**

