# ChatWithPdf
(*chatWithPdf*)

### Available Operations

* [newRequest](#newrequest) - New Request
* [sendandgetmsgtochatpdf](#sendandgetmsgtochatpdf) - Send and get msg to chat pdf
* [fileupload](#fileupload) - file upload
* [pdftotext](#pdftotext) - pdf to text
* [uploadfileforchatpdf](#uploadfileforchatpdf) - upload file for chat pdf

## newRequest

New Request

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\NewRequestRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new NewRequestRequest();
    $request->path = 'assets/pdf/64ef458eabc4e_Soban-Shahid (Laravel).pdf';
    $request->question = 'what data this file contains';

    $response = $sdk->chatWithPdf->newRequest($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\taamai\taamai\Models\Operations\NewRequestRequest](../../models/operations/NewRequestRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |
| `$serverURL`                                                                                       | *string*                                                                                           | :heavy_minus_sign:                                                                                 | An optional server URL to use.                                                                     |


### Response

**[?\taamai\taamai\Models\Operations\NewRequestResponse](../../models/operations/NewRequestResponse.md)**


## sendandgetmsgtochatpdf

Send and get msg to chat pdf

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\SendandgetmsgtochatpdfRequestBody;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new SendandgetmsgtochatpdfRequestBody();
    $request->question = 'what is the education';

    $response = $sdk->chatWithPdf->sendandgetmsgtochatpdf($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                          | Type                                                                                                                               | Required                                                                                                                           | Description                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                         | [\taamai\taamai\Models\Operations\SendandgetmsgtochatpdfRequestBody](../../models/operations/SendandgetmsgtochatpdfRequestBody.md) | :heavy_check_mark:                                                                                                                 | The request object to use for the request.                                                                                         |
| `$serverURL`                                                                                                                       | *string*                                                                                                                           | :heavy_minus_sign:                                                                                                                 | An optional server URL to use.                                                                                                     |


### Response

**[?\taamai\taamai\Models\Operations\SendandgetmsgtochatpdfResponse](../../models/operations/SendandgetmsgtochatpdfResponse.md)**


## fileupload

file upload

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\FileuploadRequestBody;
use \taamai\taamai\Models\Operations\FileuploadRequestBodyFile;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new FileuploadRequestBody();
    $request->file = new FileuploadRequestBodyFile();
    $request->file->content = 'd5#rF\'h3C;';
    $request->file->file = 'Martin coleslaw application';

    $response = $sdk->chatWithPdf->fileupload($request);

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
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\FileuploadRequestBody](../../models/operations/FileuploadRequestBody.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\FileuploadResponse](../../models/operations/FileuploadResponse.md)**


## pdftotext

pdf to text

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\PdftotextRequestBody;
use \taamai\taamai\Models\Operations\PdftotextRequestBodyFile;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new PdftotextRequestBody();
    $request->file = new PdftotextRequestBodyFile();
    $request->file->content = '!|%P7_AE=r';
    $request->file->file = 'woman secured';

    $response = $sdk->chatWithPdf->pdftotext($request);

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
| `$request`                                                                                               | [\taamai\taamai\Models\Operations\PdftotextRequestBody](../../models/operations/PdftotextRequestBody.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |
| `$serverURL`                                                                                             | *string*                                                                                                 | :heavy_minus_sign:                                                                                       | An optional server URL to use.                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\PdftotextResponse](../../models/operations/PdftotextResponse.md)**


## uploadfileforchatpdf

upload file for chat pdf

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\UploadfileforchatpdfRequestBody;
use \taamai\taamai\Models\Operations\UploadfileforchatpdfRequestBodyFile;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new UploadfileforchatpdfRequestBody();
    $request->file = new UploadfileforchatpdfRequestBodyFile();
    $request->file->content = ';-SdSu^1BO';
    $request->file->file = 'radian';

    $response = $sdk->chatWithPdf->uploadfileforchatpdf($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\taamai\taamai\Models\Operations\UploadfileforchatpdfRequestBody](../../models/operations/UploadfileforchatpdfRequestBody.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |
| `$serverURL`                                                                                                                   | *string*                                                                                                                       | :heavy_minus_sign:                                                                                                             | An optional server URL to use.                                                                                                 |


### Response

**[?\taamai\taamai\Models\Operations\UploadfileforchatpdfResponse](../../models/operations/UploadfileforchatpdfResponse.md)**

