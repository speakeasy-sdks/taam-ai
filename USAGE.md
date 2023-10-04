<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\GenerateCodeRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new GenerateCodeRequest();
    $request->document = 'new checking';
    $request->instructions = 'generate a code to store image';
    $request->language = 'php';
    $request->userId = 1;

    $response = $sdk->addonFeatures->generateCode($request);

    if ($response->generateCode !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->