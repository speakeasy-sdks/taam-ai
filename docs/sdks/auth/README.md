# Auth


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

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RegisterRequest();
    $request->country = 'pakistan';
    $request->email = 'sobanshahid47@gmail.com';
    $request->name = 'soban';
    $request->password = 'ali112233';
    $request->subdomain = 'friend';;

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
| `$request`                                                                                     | [\taamai\taamai\Models\Operations\RegisterRequest](../../Models/Operations/RegisterRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |
| `$serverURL`                                                                                   | *string*                                                                                       | :heavy_minus_sign:                                                                             | An optional server URL to use.                                                                 |


### Response

**[?\taamai\taamai\Models\Operations\RegisterResponse](../../Models/Operations/RegisterResponse.md)**


## login

login

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
        $request = new Operations\LoginRequestBody();
    $request->email = 'sobanshahid47@gmail.com';
    $request->password = 'ali112233';;

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
| `$request`                                                                                       | [\taamai\taamai\Models\Operations\LoginRequestBody](../../Models/Operations/LoginRequestBody.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |
| `$serverURL`                                                                                     | *string*                                                                                         | :heavy_minus_sign:                                                                               | An optional server URL to use.                                                                   |


### Response

**[?\taamai\taamai\Models\Operations\LoginResponse](../../Models/Operations/LoginResponse.md)**

