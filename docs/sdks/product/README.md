# Product


### Available Operations

* [createProduct](#createproduct) - Create Product
* [deleteProduct](#deleteproduct) - Delete Product
* [restoreProduct](#restoreproduct) - Restore Product
* [trashedProducts](#trashedproducts) - Trashed Products
* [updateProduct](#updateproduct) - Update Product
* [userProductd](#userproductd) - User Productd
* [parmenentdeleteProduct](#parmenentdeleteproduct) - parmenent delete Product

## createProduct

Create Product

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateProductRequestBody();
    $request->bulletPoints = 'friend';
    $request->description = 'THis is testing';
    $request->name = 'New Product';
    $request->tags0 = 'hello';
    $request->tags1 = 'friend';
    $request->targetAudience = 'males';
    $request->userId = 1;;

    $response = $sdk->product->createProduct($request);

    if ($response->createProduct !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\taamai\taamai\Models\Operations\CreateProductRequestBody](../../Models/Operations/CreateProductRequestBody.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |
| `$serverURL`                                                                                                     | *string*                                                                                                         | :heavy_minus_sign:                                                                                               | An optional server URL to use.                                                                                   |


### Response

**[?\taamai\taamai\Models\Operations\CreateProductResponse](../../Models/Operations/CreateProductResponse.md)**


## deleteProduct

Delete Product

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteProductRequest();
    $request->productId = 10;
    $request->userId = 1;;

    $response = $sdk->product->deleteProduct($request);

    if ($response->deleteProduct !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\taamai\taamai\Models\Operations\DeleteProductRequest](../../Models/Operations/DeleteProductRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |
| `$serverURL`                                                                                             | *string*                                                                                                 | :heavy_minus_sign:                                                                                       | An optional server URL to use.                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\DeleteProductResponse](../../Models/Operations/DeleteProductResponse.md)**


## restoreProduct

Restore Product

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RestoreProductRequest();
    $request->productId = 10;
    $request->userId = 1;;

    $response = $sdk->product->restoreProduct($request);

    if ($response->restoreProduct !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\RestoreProductRequest](../../Models/Operations/RestoreProductRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\RestoreProductResponse](../../Models/Operations/RestoreProductResponse.md)**


## trashedProducts

Trashed Products

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\TrashedProductsRequest();
    $request->userId = 1;;

    $response = $sdk->product->trashedProducts($request);

    if ($response->trashedProducts !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\taamai\taamai\Models\Operations\TrashedProductsRequest](../../Models/Operations/TrashedProductsRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |
| `$serverURL`                                                                                                 | *string*                                                                                                     | :heavy_minus_sign:                                                                                           | An optional server URL to use.                                                                               |


### Response

**[?\taamai\taamai\Models\Operations\TrashedProductsResponse](../../Models/Operations/TrashedProductsResponse.md)**


## updateProduct

Update Product

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateProductRequest();
    $request->bulletPoints = 11;
    $request->description = 'updated';
    $request->name = 'updated';
    $request->productId = 11;
    $request->tags0 = 'new';
    $request->targetAudience = 'females';
    $request->userId = 1;;

    $response = $sdk->product->updateProduct($request);

    if ($response->updateProduct !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\taamai\taamai\Models\Operations\UpdateProductRequest](../../Models/Operations/UpdateProductRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |
| `$serverURL`                                                                                             | *string*                                                                                                 | :heavy_minus_sign:                                                                                       | An optional server URL to use.                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\UpdateProductResponse](../../Models/Operations/UpdateProductResponse.md)**


## userProductd

User Productd

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UserProductdRequest();
    $request->userId = 1;;

    $response = $sdk->product->userProductd($request);

    if ($response->userProductd !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\taamai\taamai\Models\Operations\UserProductdRequest](../../Models/Operations/UserProductdRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `$serverURL`                                                                                           | *string*                                                                                               | :heavy_minus_sign:                                                                                     | An optional server URL to use.                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\UserProductdResponse](../../Models/Operations/UserProductdResponse.md)**


## parmenentdeleteProduct

parmenent delete Product

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ParmenentdeleteProductRequest();
    $request->productId = 10;
    $request->userId = 1;;

    $response = $sdk->product->parmenentdeleteProduct($request);

    if ($response->newRequest1 !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\taamai\taamai\Models\Operations\ParmenentdeleteProductRequest](../../Models/Operations/ParmenentdeleteProductRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |
| `$serverURL`                                                                                                               | *string*                                                                                                                   | :heavy_minus_sign:                                                                                                         | An optional server URL to use.                                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\ParmenentdeleteProductResponse](../../Models/Operations/ParmenentdeleteProductResponse.md)**

