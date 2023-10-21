# Product
(*product*)

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

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\CreateProductRequestBody;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateProductRequestBody();
    $request->bulletPoints = 'friend';
    $request->description = 'THis is testing';
    $request->name = 'New Product';
    $request->tags0 = 'hello';
    $request->tags1 = 'friend';
    $request->targetAudience = 'males';
    $request->userId = 1;

    $response = $sdk->product->createProduct($request);

    if ($response->createProduct !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\taamai\taamai\Models\Operations\CreateProductRequestBody](../../models/operations/CreateProductRequestBody.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |
| `$serverURL`                                                                                                     | *string*                                                                                                         | :heavy_minus_sign:                                                                                               | An optional server URL to use.                                                                                   |


### Response

**[?\taamai\taamai\Models\Operations\CreateProductResponse](../../models/operations/CreateProductResponse.md)**


## deleteProduct

Delete Product

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\DeleteProductRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteProductRequest();
    $request->productId = 10;
    $request->userId = 1;

    $response = $sdk->product->deleteProduct($request);

    if ($response->deleteProduct !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\taamai\taamai\Models\Operations\DeleteProductRequest](../../models/operations/DeleteProductRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |
| `$serverURL`                                                                                             | *string*                                                                                                 | :heavy_minus_sign:                                                                                       | An optional server URL to use.                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\DeleteProductResponse](../../models/operations/DeleteProductResponse.md)**


## restoreProduct

Restore Product

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\RestoreProductRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RestoreProductRequest();
    $request->productId = 10;
    $request->userId = 1;

    $response = $sdk->product->restoreProduct($request);

    if ($response->restoreProduct !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\RestoreProductRequest](../../models/operations/RestoreProductRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\RestoreProductResponse](../../models/operations/RestoreProductResponse.md)**


## trashedProducts

Trashed Products

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\TrashedProductsRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new TrashedProductsRequest();
    $request->userId = 1;

    $response = $sdk->product->trashedProducts($request);

    if ($response->trashedProducts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\taamai\taamai\Models\Operations\TrashedProductsRequest](../../models/operations/TrashedProductsRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |
| `$serverURL`                                                                                                 | *string*                                                                                                     | :heavy_minus_sign:                                                                                           | An optional server URL to use.                                                                               |


### Response

**[?\taamai\taamai\Models\Operations\TrashedProductsResponse](../../models/operations/TrashedProductsResponse.md)**


## updateProduct

Update Product

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\UpdateProductRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateProductRequest();
    $request->bulletPoints = 11;
    $request->description = 'updated';
    $request->name = 'updated';
    $request->productId = 11;
    $request->tags0 = 'new';
    $request->targetAudience = 'females';
    $request->userId = 1;

    $response = $sdk->product->updateProduct($request);

    if ($response->updateProduct !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\taamai\taamai\Models\Operations\UpdateProductRequest](../../models/operations/UpdateProductRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |
| `$serverURL`                                                                                             | *string*                                                                                                 | :heavy_minus_sign:                                                                                       | An optional server URL to use.                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\UpdateProductResponse](../../models/operations/UpdateProductResponse.md)**


## userProductd

User Productd

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\UserProductdRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UserProductdRequest();
    $request->userId = 1;

    $response = $sdk->product->userProductd($request);

    if ($response->userProductd !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\taamai\taamai\Models\Operations\UserProductdRequest](../../models/operations/UserProductdRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `$serverURL`                                                                                           | *string*                                                                                               | :heavy_minus_sign:                                                                                     | An optional server URL to use.                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\UserProductdResponse](../../models/operations/UserProductdResponse.md)**


## parmenentdeleteProduct

parmenent delete Product

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\ParmenentdeleteProductRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ParmenentdeleteProductRequest();
    $request->productId = 10;
    $request->userId = 1;

    $response = $sdk->product->parmenentdeleteProduct($request);

    if ($response->newRequest1 !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [\taamai\taamai\Models\Operations\ParmenentdeleteProductRequest](../../models/operations/ParmenentdeleteProductRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |
| `$serverURL`                                                                                                               | *string*                                                                                                                   | :heavy_minus_sign:                                                                                                         | An optional server URL to use.                                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\ParmenentdeleteProductResponse](../../models/operations/ParmenentdeleteProductResponse.md)**

