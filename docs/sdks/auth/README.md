# Auth
(*auth*)

### Available Operations

* [register](#register) - Register
* [login](#login) - login

## register

Register

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\RegisterRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new RegisterRequest();
    $request->country = 'pakistan';
    $request->email = 'sobanshahid47@gmail.com';
    $request->name = 'soban';
    $request->password = 'ali112233';
    $request->subdomain = 'friend';

    $response = $sdk->auth->register($request);

    if ($response->examplewithdefaultplansubdomainandsubsctpion !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\taamai\taamai\Models\Operations\RegisterRequest](../../models/operations/RegisterRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |
| `$serverURL`                                                                                   | *string*                                                                                       | :heavy_minus_sign:                                                                             | An optional server URL to use.                                                                 |


### Response

**[?\taamai\taamai\Models\Operations\RegisterResponse](../../models/operations/RegisterResponse.md)**


## login

login

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\LoginRequestBody;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new LoginRequestBody();
    $request->email = 'sobanshahid47@gmail.com';
    $request->password = 'ali112233';

    $response = $sdk->auth->login($request);

    if ($response->login !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [\taamai\taamai\Models\Operations\LoginRequestBody](../../models/operations/LoginRequestBody.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |
| `$serverURL`                                                                                     | *string*                                                                                         | :heavy_minus_sign:                                                                               | An optional server URL to use.                                                                   |


### Response

**[?\taamai\taamai\Models\Operations\LoginResponse](../../models/operations/LoginResponse.md)**

