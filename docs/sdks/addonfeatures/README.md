# AddonFeatures
(*addonFeatures*)

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
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\GenerateCodeRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
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

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\taamai\taamai\Models\Operations\GenerateCodeRequest](../../models/operations/GenerateCodeRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `$serverURL`                                                                                           | *string*                                                                                               | :heavy_minus_sign:                                                                                     | An optional server URL to use.                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\GenerateCodeResponse](../../models/operations/GenerateCodeResponse.md)**


## generateimagefromAI

Generate image from AI

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\GenerateimagefromAIRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GenerateimagefromAIRequest();
    $request->maxResults = 1;
    $request->name = 'sample checking';
    $request->resolution = '256x256';
    $request->title = 'need a eagle image';
    $request->userId = 1;
    $request->workbookFolderId = 1;
    $request->workbookId = 1;

    $response = $sdk->addonFeatures->generateimagefromAI($request);

    if ($response->generateimagefromAI !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\taamai\taamai\Models\Operations\GenerateimagefromAIRequest](../../models/operations/GenerateimagefromAIRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `$serverURL`                                                                                                         | *string*                                                                                                             | :heavy_minus_sign:                                                                                                   | An optional server URL to use.                                                                                       |


### Response

**[?\taamai\taamai\Models\Operations\GenerateimagefromAIResponse](../../models/operations/GenerateimagefromAIResponse.md)**


## generatespeechtotext

Generate speech to text

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\GeneratespeechtotextRequestBody;
use \taamai\taamai\Models\Operations\GeneratespeechtotextRequestBodyAudioFile;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GeneratespeechtotextRequestBody();
    $request->audioFile = new GeneratespeechtotextRequestBodyAudioFile();
    $request->audioFile->audioFile = 'string';
    $request->audioFile->content = '\H(gC_iAf,';
    $request->document = 'new';
    $request->language = 'en';
    $request->task = 'transcribe';
    $request->userId = 1;
    $request->workbookFolderId = 1;
    $request->workbookId = 1;

    $response = $sdk->addonFeatures->generatespeechtotext($request);

    if ($response->generatespeechtotext !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\taamai\taamai\Models\Operations\GeneratespeechtotextRequestBody](../../models/operations/GeneratespeechtotextRequestBody.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |
| `$serverURL`                                                                                                                   | *string*                                                                                                                       | :heavy_minus_sign:                                                                                                             | An optional server URL to use.                                                                                                 |


### Response

**[?\taamai\taamai\Models\Operations\GeneratespeechtotextResponse](../../models/operations/GeneratespeechtotextResponse.md)**


## savecodeinworkspace

Save code in workspace

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\SavecodeinworkspaceRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new SavecodeinworkspaceRequest();
    $request->codeId = 32;
    $request->folderId = 1;
    $request->userId = 1;
    $request->workbookId = 1;

    $response = $sdk->addonFeatures->savecodeinworkspace($request);

    if ($response->savecodeinworkspace !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\taamai\taamai\Models\Operations\SavecodeinworkspaceRequest](../../models/operations/SavecodeinworkspaceRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `$serverURL`                                                                                                         | *string*                                                                                                             | :heavy_minus_sign:                                                                                                   | An optional server URL to use.                                                                                       |


### Response

**[?\taamai\taamai\Models\Operations\SavecodeinworkspaceResponse](../../models/operations/SavecodeinworkspaceResponse.md)**


## savetranscript

Save transcript

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\SavetranscriptRequest;

$security = new Security();
$security->bearer = '';

$sdk = Taamai::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new SavetranscriptRequest();
    $request->text = 'Marhaban, ana al-mutahaddithi al-iftiradi min imza\'i al-jawda. Da\'ani ulqi al-tahiyyata ala jumhourik wa u\'arrifahom ala muntajatik abra wasilatin min akthar al-wasaili al-taswiqiya, tashwiqan wa mut\'a.",
        "status": "success';
    $request->title = 'New task';
    $request->transcriptId = 43;
    $request->userId = 1;
    $request->workbookFolderId = 1;
    $request->workbookId = 1;

    $response = $sdk->addonFeatures->savetranscript($request);

    if ($response->savetranscript !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\SavetranscriptRequest](../../models/operations/SavetranscriptRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\SavetranscriptResponse](../../models/operations/SavetranscriptResponse.md)**

