<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use taamai\taamai;
use taamai\taamai\Models\Shared;
use taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\AddandremovefromfavDocumentRequest();
    $request->id = 6;
    $request->type = 'document';
    $request->userId = 1;

    $response = $sdk->workbookAndFolders->addandremovefromfavDocument($request);

    if ($response->addandremovefromfavDocument !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->