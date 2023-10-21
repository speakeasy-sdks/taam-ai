# Misc
(*misc*)

### Available Operations

* [allCategories](#allcategories) - All Categories

## allCategories

All Categories

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\AllCategoriesRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AllCategoriesRequest();
    $request->userId = 40;

    $response = $sdk->misc->allCategories($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\taamai\taamai\Models\Operations\AllCategoriesRequest](../../models/operations/AllCategoriesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |
| `$serverURL`                                                                                             | *string*                                                                                                 | :heavy_minus_sign:                                                                                       | An optional server URL to use.                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\AllCategoriesResponse](../../models/operations/AllCategoriesResponse.md)**

