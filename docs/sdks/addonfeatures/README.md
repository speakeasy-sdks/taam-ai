# AddonFeatures


### Available Operations

* [generateCode](#generatecode) - Generate Code
* [generateimagefromAI](#generateimagefromai) - Generate image from AI
* [generatespeechtotext](#generatespeechtotext) - Generate speech to text
* [savecodeinworkspace](#savecodeinworkspace) - Save code in workspace
* [savetranscript](#savetranscript) - Save transcript

## generateCode

Generate Code

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
        $request = new Operations\GenerateCodeRequest();
    $request->document = 'new checking';
    $request->instructions = 'generate a code to store image';
    $request->language = 'php';
    $request->userId = 1;;

    $response = $sdk->addonFeatures->generateCode($request);

    if ($response->generateCode !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\taamai\taamai\Models\Operations\GenerateCodeRequest](../../Models/Operations/GenerateCodeRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `$serverURL`                                                                                           | *string*                                                                                               | :heavy_minus_sign:                                                                                     | An optional server URL to use.                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\GenerateCodeResponse](../../Models/Operations/GenerateCodeResponse.md)**


## generateimagefromAI

Generate image from AI

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
        $request = new Operations\GenerateimagefromAIRequest();
    $request->maxResults = 1;
    $request->name = 'sample checking';
    $request->resolution = '256x256';
    $request->title = 'need a eagle image';
    $request->userId = 1;
    $request->workbookFolderId = 1;
    $request->workbookId = 1;;

    $response = $sdk->addonFeatures->generateimagefromAI($request);

    if ($response->generateimagefromAI !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\taamai\taamai\Models\Operations\GenerateimagefromAIRequest](../../Models/Operations/GenerateimagefromAIRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `$serverURL`                                                                                                         | *string*                                                                                                             | :heavy_minus_sign:                                                                                                   | An optional server URL to use.                                                                                       |


### Response

**[?\taamai\taamai\Models\Operations\GenerateimagefromAIResponse](../../Models/Operations/GenerateimagefromAIResponse.md)**


## generatespeechtotext

Generate speech to text

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
        $request = new Operations\GeneratespeechtotextRequestBody();
    $request->audioFile = new Operations\AudioFile();
    $request->audioFile->content = '0xe91A8eB7A2';
    $request->audioFile->fileName = 'parse.wav';
    $request->document = 'new';
    $request->language = 'en';
    $request->task = 'transcribe';
    $request->userId = 1;
    $request->workbookFolderId = 1;
    $request->workbookId = 1;;

    $response = $sdk->addonFeatures->generatespeechtotext($request);

    if ($response->generatespeechtotext !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\taamai\taamai\Models\Operations\GeneratespeechtotextRequestBody](../../Models/Operations/GeneratespeechtotextRequestBody.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |
| `$serverURL`                                                                                                                   | *string*                                                                                                                       | :heavy_minus_sign:                                                                                                             | An optional server URL to use.                                                                                                 |


### Response

**[?\taamai\taamai\Models\Operations\GeneratespeechtotextResponse](../../Models/Operations/GeneratespeechtotextResponse.md)**


## savecodeinworkspace

Save code in workspace

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
        $request = new Operations\SavecodeinworkspaceRequest();
    $request->codeId = 32;
    $request->folderId = 1;
    $request->userId = 1;
    $request->workbookId = 1;;

    $response = $sdk->addonFeatures->savecodeinworkspace($request);

    if ($response->savecodeinworkspace !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\taamai\taamai\Models\Operations\SavecodeinworkspaceRequest](../../Models/Operations/SavecodeinworkspaceRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `$serverURL`                                                                                                         | *string*                                                                                                             | :heavy_minus_sign:                                                                                                   | An optional server URL to use.                                                                                       |


### Response

**[?\taamai\taamai\Models\Operations\SavecodeinworkspaceResponse](../../Models/Operations/SavecodeinworkspaceResponse.md)**


## savetranscript

Save transcript

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
        $request = new Operations\SavetranscriptRequest();
    $request->text = 'Marhaban, ana al-mutahaddithi al-iftiradi min imza\'i al-jawda. Da\'ani ulqi al-tahiyyata ala jumhourik wa u\'arrifahom ala muntajatik abra wasilatin min akthar al-wasaili al-taswiqiya, tashwiqan wa mut\'a.",
        "status": "success';
    $request->title = 'New task';
    $request->transcriptId = 43;
    $request->userId = 1;
    $request->workbookFolderId = 1;
    $request->workbookId = 1;;

    $response = $sdk->addonFeatures->savetranscript($request);

    if ($response->savetranscript !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\SavetranscriptRequest](../../Models/Operations/SavetranscriptRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\SavetranscriptResponse](../../Models/Operations/SavetranscriptResponse.md)**

