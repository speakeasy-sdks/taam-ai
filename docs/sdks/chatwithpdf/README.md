# ChatWithPdf


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

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\NewRequestRequest();
    $request->path = 'assets/pdf/64ef458eabc4e_Soban-Shahid (Laravel).pdf';
    $request->question = 'what data this file contains';;

    $response = $sdk->chatWithPdf->newRequest($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [\taamai\taamai\Models\Operations\NewRequestRequest](../../Models/Operations/NewRequestRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |
| `$serverURL`                                                                                       | *string*                                                                                           | :heavy_minus_sign:                                                                                 | An optional server URL to use.                                                                     |


### Response

**[?\taamai\taamai\Models\Operations\NewRequestResponse](../../Models/Operations/NewRequestResponse.md)**


## sendandgetmsgtochatpdf

Send and get msg to chat pdf

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\SendandgetmsgtochatpdfRequestBody();
    $request->question = 'what is the education';;

    $response = $sdk->chatWithPdf->sendandgetmsgtochatpdf($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                          | Type                                                                                                                               | Required                                                                                                                           | Description                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                         | [\taamai\taamai\Models\Operations\SendandgetmsgtochatpdfRequestBody](../../Models/Operations/SendandgetmsgtochatpdfRequestBody.md) | :heavy_check_mark:                                                                                                                 | The request object to use for the request.                                                                                         |
| `$serverURL`                                                                                                                       | *string*                                                                                                                           | :heavy_minus_sign:                                                                                                                 | An optional server URL to use.                                                                                                     |


### Response

**[?\taamai\taamai\Models\Operations\SendandgetmsgtochatpdfResponse](../../Models/Operations/SendandgetmsgtochatpdfResponse.md)**


## fileupload

file upload

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\FileuploadRequestBody();
    $request->file = new Operations\File();
    $request->file->content = '0xA40D81A486';
    $request->file->fileName = 'martin_coleslaw_application.gif';;

    $response = $sdk->chatWithPdf->fileupload($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\FileuploadRequestBody](../../Models/Operations/FileuploadRequestBody.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\FileuploadResponse](../../Models/Operations/FileuploadResponse.md)**


## pdftotext

pdf to text

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PdftotextRequestBody();
    $request->file = new Operations\PdftotextFile();
    $request->file->content = '0x0F1b5e786D';
    $request->file->fileName = 'woman_secured.pdf';;

    $response = $sdk->chatWithPdf->pdftotext($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\taamai\taamai\Models\Operations\PdftotextRequestBody](../../Models/Operations/PdftotextRequestBody.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |
| `$serverURL`                                                                                             | *string*                                                                                                 | :heavy_minus_sign:                                                                                       | An optional server URL to use.                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\PdftotextResponse](../../Models/Operations/PdftotextResponse.md)**


## uploadfileforchatpdf

upload file for chat pdf

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;
use \taamai\taamai\Models\Operations;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UploadfileforchatpdfRequestBody();
    $request->file = new Operations\UploadfileforchatpdfFile();
    $request->file->content = '0x62cfbDe38b';
    $request->file->fileName = 'radian.mp4v';;

    $response = $sdk->chatWithPdf->uploadfileforchatpdf($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\taamai\taamai\Models\Operations\UploadfileforchatpdfRequestBody](../../Models/Operations/UploadfileforchatpdfRequestBody.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |
| `$serverURL`                                                                                                                   | *string*                                                                                                                       | :heavy_minus_sign:                                                                                                             | An optional server URL to use.                                                                                                 |


### Response

**[?\taamai\taamai\Models\Operations\UploadfileforchatpdfResponse](../../Models/Operations/UploadfileforchatpdfResponse.md)**

