# WorkbookAndFolders


### Available Operations

* [addandremovefromfavDocument](#addandremovefromfavdocument) - Add and remove from fav Document
* [contentsinworkbook](#contentsinworkbook) - Contents in work book
* [createFolder](#createfolder) - Create Folder
* [createWorkbook](#createworkbook) - Create Workbook
* [deleteWorkspace](#deleteworkspace) - Delete Workspace
* [deleteallkindofdocuments](#deleteallkindofdocuments) - Delete all kind of documents
* [joinworkbook](#joinworkbook) - Join workbook
* [joinworkbookrequestr](#joinworkbookrequestr) - Join workbook requestr
* [permanentDeletefolder](#permanentdeletefolder) - Permanent Delete folder
* [permanentDeleteworkspace](#permanentdeleteworkspace) - Permanent Delete workspace
* [rejectWorkbook](#rejectworkbook) - Reject Workbook
* [restoreDocuemntofalltypeContentVoiceoverImagesTranscriptCode](#restoredocuemntofalltypecontentvoiceoverimagestranscriptcode) - Restore Docuemnt of all type  (content.voiceover,images,transcript,code)
* [restoreWorkspace](#restoreworkspace) - Restore Workspace
* [setdefualtworkspace](#setdefualtworkspace) - Set defualt workspace
* [trashedfolders](#trashedfolders) - Trashed folders
* [trashedworkspaces](#trashedworkspaces) - Trashed workspaces
* [workbookDetail](#workbookdetail) - Workbook Detail
* [workbookvoiceovers](#workbookvoiceovers) - Workbook voiceovers
* [allworkbooks](#allworkbooks) - all workbooks
* [deletefolder](#deletefolder) - delete folder
* [permanentDeletedocument](#permanentdeletedocument) - permanent Delete document
* [restorefolder](#restorefolder) - restore folder
* [userchats](#userchats) - user chats
* [workbookcodes](#workbookcodes) - workbook codes
* [workbookimages](#workbookimages) - workbook images
* [workbookpolicies](#workbookpolicies) - workbook policies
* [workbooktranscripts](#workbooktranscripts) - workbook transcripts

## addandremovefromfavDocument

Add and remove from fav Document

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
        $request = new Operations\AddandremovefromfavDocumentRequest();
    $request->id = 6;
    $request->type = 'document';
    $request->userId = 1;;

    $response = $sdk->workbookAndFolders->addandremovefromfavDocument($request);

    if ($response->addandremovefromfavDocument !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [\taamai\taamai\Models\Operations\AddandremovefromfavDocumentRequest](../../Models/Operations/AddandremovefromfavDocumentRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |
| `$serverURL`                                                                                                                         | *string*                                                                                                                             | :heavy_minus_sign:                                                                                                                   | An optional server URL to use.                                                                                                       |


### Response

**[?\taamai\taamai\Models\Operations\AddandremovefromfavDocumentResponse](../../Models/Operations/AddandremovefromfavDocumentResponse.md)**


## contentsinworkbook

Contents in work book

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
        $request = new Operations\ContentsinworkbookRequest();
    $request->type = 'general';
    $request->userId = 1;
    $request->workbookId = 1;;

    $response = $sdk->workbookAndFolders->contentsinworkbook($request);

    if ($response->contentsinworkbook !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\taamai\taamai\Models\Operations\ContentsinworkbookRequest](../../Models/Operations/ContentsinworkbookRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |
| `$serverURL`                                                                                                       | *string*                                                                                                           | :heavy_minus_sign:                                                                                                 | An optional server URL to use.                                                                                     |


### Response

**[?\taamai\taamai\Models\Operations\ContentsinworkbookResponse](../../Models/Operations/ContentsinworkbookResponse.md)**


## createFolder

Create Folder

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
        $request = new Operations\CreateFolderRequest();
    $request->folderName = 'default new';
    $request->userId = 1;
    $request->workbookId = 23;;

    $response = $sdk->workbookAndFolders->createFolder($request);

    if ($response->createFolderlive !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\taamai\taamai\Models\Operations\CreateFolderRequest](../../Models/Operations/CreateFolderRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `$serverURL`                                                                                           | *string*                                                                                               | :heavy_minus_sign:                                                                                     | An optional server URL to use.                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\CreateFolderResponse](../../Models/Operations/CreateFolderResponse.md)**


## createWorkbook

Create Workbook

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
        $request = new Operations\CreateWorkbookRequest();
    $request->userId = 1;
    $request->workbookName = 'soban2';;

    $response = $sdk->workbookAndFolders->createWorkbook($request);

    if ($response->createWorkbooklivw !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\CreateWorkbookRequest](../../Models/Operations/CreateWorkbookRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\CreateWorkbookResponse](../../Models/Operations/CreateWorkbookResponse.md)**


## deleteWorkspace

Delete Workspace

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
        $request = new Operations\DeleteWorkspaceRequest();
    $request->userId = 1;
    $request->workbookId = 39;;

    $response = $sdk->workbookAndFolders->deleteWorkspace($request);

    if ($response->deleteWorkspacelive !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\taamai\taamai\Models\Operations\DeleteWorkspaceRequest](../../Models/Operations/DeleteWorkspaceRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |
| `$serverURL`                                                                                                 | *string*                                                                                                     | :heavy_minus_sign:                                                                                           | An optional server URL to use.                                                                               |


### Response

**[?\taamai\taamai\Models\Operations\DeleteWorkspaceResponse](../../Models/Operations/DeleteWorkspaceResponse.md)**


## deleteallkindofdocuments

Delete all kind of documents

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
    $response = $sdk->workbookAndFolders->deleteallkindofdocuments();

    if ($response->deleteallkindofdocuments !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                      | Type                           | Required                       | Description                    |
| ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ |
| `$serverURL`                   | *string*                       | :heavy_minus_sign:             | An optional server URL to use. |


### Response

**[?\taamai\taamai\Models\Operations\DeleteallkindofdocumentsResponse](../../Models/Operations/DeleteallkindofdocumentsResponse.md)**


## joinworkbook

Join workbook

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
        $request = new Operations\JoinworkbookRequest();
    $request->userId = 12;
    $request->workbookId = 1;;

    $response = $sdk->workbookAndFolders->joinworkbook($request);

    if ($response->joinworkbook !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\taamai\taamai\Models\Operations\JoinworkbookRequest](../../Models/Operations/JoinworkbookRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `$serverURL`                                                                                           | *string*                                                                                               | :heavy_minus_sign:                                                                                     | An optional server URL to use.                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\JoinworkbookResponse](../../Models/Operations/JoinworkbookResponse.md)**


## joinworkbookrequestr

Join workbook requestr

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
        $request = new Operations\JoinworkbookrequestrRequest();
    $request->email = 'sobanshahid38@gmail.com';
    $request->userId = 1;
    $request->workbookId = 1;;

    $response = $sdk->workbookAndFolders->joinworkbookrequestr($request);

    if ($response->joinworkbookrequestr !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\taamai\taamai\Models\Operations\JoinworkbookrequestrRequest](../../Models/Operations/JoinworkbookrequestrRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |
| `$serverURL`                                                                                                           | *string*                                                                                                               | :heavy_minus_sign:                                                                                                     | An optional server URL to use.                                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\JoinworkbookrequestrResponse](../../Models/Operations/JoinworkbookrequestrResponse.md)**


## permanentDeletefolder

Permanent Delete folder

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
        $request = new Operations\PermanentDeletefolderRequest();
    $request->folderId = 27;
    $request->userId = 1;;

    $response = $sdk->workbookAndFolders->permanentDeletefolder($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\taamai\taamai\Models\Operations\PermanentDeletefolderRequest](../../Models/Operations/PermanentDeletefolderRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |
| `$serverURL`                                                                                                             | *string*                                                                                                                 | :heavy_minus_sign:                                                                                                       | An optional server URL to use.                                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\PermanentDeletefolderResponse](../../Models/Operations/PermanentDeletefolderResponse.md)**


## permanentDeleteworkspace

Permanent Delete workspace

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \taamai\taamai;
use \taamai\taamai\Models\Shared;

$security = new Shared\Security();
$security->bearer = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = taamai\Taamai::builder()->setSecurity($security)->build();

try {
    $response = $sdk->workbookAndFolders->permanentDeleteworkspace();

    if ($response->permanentDeleteworkspacelive !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\taamai\taamai\Models\Operations\PermanentDeleteworkspaceResponse](../../Models/Operations/PermanentDeleteworkspaceResponse.md)**


## rejectWorkbook

Reject Workbook

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
        $request = new Operations\RejectWorkbookRequest();
    $request->userId = 12;
    $request->workbookId = 1;;

    $response = $sdk->workbookAndFolders->rejectWorkbook($request);

    if ($response->rejectWorkbook !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\RejectWorkbookRequest](../../Models/Operations/RejectWorkbookRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\RejectWorkbookResponse](../../Models/Operations/RejectWorkbookResponse.md)**


## restoreDocuemntofalltypeContentVoiceoverImagesTranscriptCode

Restore Docuemnt of all type  (content.voiceover,images,transcript,code)

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
        $request = new Operations\RestoreDocuemntofalltypeContentVoiceoverImagesTranscriptCodeRequest();
    $request->id = 1;
    $request->type = 'document';
    $request->userId = 1;;

    $response = $sdk->workbookAndFolders->restoreDocuemntofalltypeContentVoiceoverImagesTranscriptCode($request);

    if ($response->restoreDocuemntofalltypecontentVoiceoverimagestranscriptcode !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                              | Type                                                                                                                                                                                                   | Required                                                                                                                                                                                               | Description                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                                                                                             | [\taamai\taamai\Models\Operations\RestoreDocuemntofalltypeContentVoiceoverImagesTranscriptCodeRequest](../../Models/Operations/RestoreDocuemntofalltypeContentVoiceoverImagesTranscriptCodeRequest.md) | :heavy_check_mark:                                                                                                                                                                                     | The request object to use for the request.                                                                                                                                                             |
| `$serverURL`                                                                                                                                                                                           | *string*                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                     | An optional server URL to use.                                                                                                                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\RestoreDocuemntofalltypeContentVoiceoverImagesTranscriptCodeResponse](../../Models/Operations/RestoreDocuemntofalltypeContentVoiceoverImagesTranscriptCodeResponse.md)**


## restoreWorkspace

Restore Workspace

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
        $request = new Operations\RestoreWorkspaceRequest();
    $request->userId = 40;
    $request->workbookId = 39;;

    $response = $sdk->workbookAndFolders->restoreWorkspace($request);

    if ($response->restoreWorkspacelive !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\taamai\taamai\Models\Operations\RestoreWorkspaceRequest](../../Models/Operations/RestoreWorkspaceRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |
| `$serverURL`                                                                                                   | *string*                                                                                                       | :heavy_minus_sign:                                                                                             | An optional server URL to use.                                                                                 |


### Response

**[?\taamai\taamai\Models\Operations\RestoreWorkspaceResponse](../../Models/Operations/RestoreWorkspaceResponse.md)**


## setdefualtworkspace

Set defualt workspace

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
        $request = new Operations\SetdefualtworkspaceRequest();
    $request->userId = 1;
    $request->workbookId = 1;;

    $response = $sdk->workbookAndFolders->setdefualtworkspace($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\taamai\taamai\Models\Operations\SetdefualtworkspaceRequest](../../Models/Operations/SetdefualtworkspaceRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `$serverURL`                                                                                                         | *string*                                                                                                             | :heavy_minus_sign:                                                                                                   | An optional server URL to use.                                                                                       |


### Response

**[?\taamai\taamai\Models\Operations\SetdefualtworkspaceResponse](../../Models/Operations/SetdefualtworkspaceResponse.md)**


## trashedfolders

Trashed folders

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
        $request = new Operations\TrashedfoldersRequest();
    $request->userId = 1;
    $request->workbookId = 22;;

    $response = $sdk->workbookAndFolders->trashedfolders($request);

    if ($response->trashedfolderslive !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\TrashedfoldersRequest](../../Models/Operations/TrashedfoldersRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\TrashedfoldersResponse](../../Models/Operations/TrashedfoldersResponse.md)**


## trashedworkspaces

Trashed workspaces

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
        $request = new Operations\TrashedworkspacesRequest();
    $request->userId = 1;;

    $response = $sdk->workbookAndFolders->trashedworkspaces($request);

    if ($response->trashedworkspaceslive !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\taamai\taamai\Models\Operations\TrashedworkspacesRequest](../../Models/Operations/TrashedworkspacesRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |
| `$serverURL`                                                                                                     | *string*                                                                                                         | :heavy_minus_sign:                                                                                               | An optional server URL to use.                                                                                   |


### Response

**[?\taamai\taamai\Models\Operations\TrashedworkspacesResponse](../../Models/Operations/TrashedworkspacesResponse.md)**


## workbookDetail

Workbook Detail

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
        $request = new Operations\WorkbookDetailRequest();
    $request->userId = 1;
    $request->workbookId = 12;;

    $response = $sdk->workbookAndFolders->workbookDetail($request);

    if ($response->workbookDetaillive !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\WorkbookDetailRequest](../../Models/Operations/WorkbookDetailRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\WorkbookDetailResponse](../../Models/Operations/WorkbookDetailResponse.md)**


## workbookvoiceovers

Workbook voiceovers

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
        $request = new Operations\WorkbookvoiceoversRequest();
    $request->folderId = 1;
    $request->type = 'general';
    $request->userId = 1;
    $request->workbookId = 1;;

    $response = $sdk->workbookAndFolders->workbookvoiceovers($request);

    if ($response->workbookvoiceovers !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\taamai\taamai\Models\Operations\WorkbookvoiceoversRequest](../../Models/Operations/WorkbookvoiceoversRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |
| `$serverURL`                                                                                                       | *string*                                                                                                           | :heavy_minus_sign:                                                                                                 | An optional server URL to use.                                                                                     |


### Response

**[?\taamai\taamai\Models\Operations\WorkbookvoiceoversResponse](../../Models/Operations/WorkbookvoiceoversResponse.md)**


## allworkbooks

all workbooks

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
        $request = new Operations\AllworkbooksRequest();
    $request->userId = 1;;

    $response = $sdk->workbookAndFolders->allworkbooks($request);

    if ($response->allworkbookslive !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\taamai\taamai\Models\Operations\AllworkbooksRequest](../../Models/Operations/AllworkbooksRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `$serverURL`                                                                                           | *string*                                                                                               | :heavy_minus_sign:                                                                                     | An optional server URL to use.                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\AllworkbooksResponse](../../Models/Operations/AllworkbooksResponse.md)**


## deletefolder

delete folder

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
        $request = new Operations\DeletefolderRequest();
    $request->folderId = 27;
    $request->userId = 1;;

    $response = $sdk->workbookAndFolders->deletefolder($request);

    if ($response->deletefolder !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\taamai\taamai\Models\Operations\DeletefolderRequest](../../Models/Operations/DeletefolderRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `$serverURL`                                                                                           | *string*                                                                                               | :heavy_minus_sign:                                                                                     | An optional server URL to use.                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\DeletefolderResponse](../../Models/Operations/DeletefolderResponse.md)**


## permanentDeletedocument

permanent Delete document

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
        $request = new Operations\PermanentDeletedocumentRequest();
    $request->id = 4;
    $request->type = 'document';
    $request->userId = 1;;

    $response = $sdk->workbookAndFolders->permanentDeletedocument($request);

    if ($response->permanentDeletedocument !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [\taamai\taamai\Models\Operations\PermanentDeletedocumentRequest](../../Models/Operations/PermanentDeletedocumentRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |
| `$serverURL`                                                                                                                 | *string*                                                                                                                     | :heavy_minus_sign:                                                                                                           | An optional server URL to use.                                                                                               |


### Response

**[?\taamai\taamai\Models\Operations\PermanentDeletedocumentResponse](../../Models/Operations/PermanentDeletedocumentResponse.md)**


## restorefolder

restore folder

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
        $request = new Operations\RestorefolderRequest();
    $request->folderId = 27;
    $request->userId = 1;;

    $response = $sdk->workbookAndFolders->restorefolder($request);

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
| `$request`                                                                                               | [\taamai\taamai\Models\Operations\RestorefolderRequest](../../Models/Operations/RestorefolderRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |
| `$serverURL`                                                                                             | *string*                                                                                                 | :heavy_minus_sign:                                                                                       | An optional server URL to use.                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\RestorefolderResponse](../../Models/Operations/RestorefolderResponse.md)**


## userchats

user chats

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
        $request = new Operations\UserchatsRequest();
    $request->type = 'general';
    $request->userId = 1;;

    $response = $sdk->workbookAndFolders->userchats($request);

    if ($response->userchats !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [\taamai\taamai\Models\Operations\UserchatsRequest](../../Models/Operations/UserchatsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |
| `$serverURL`                                                                                     | *string*                                                                                         | :heavy_minus_sign:                                                                               | An optional server URL to use.                                                                   |


### Response

**[?\taamai\taamai\Models\Operations\UserchatsResponse](../../Models/Operations/UserchatsResponse.md)**


## workbookcodes

workbook codes

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
        $request = new Operations\WorkbookcodesRequest();
    $request->folderId = 1;
    $request->type = 'general';
    $request->userId = 1;
    $request->workbookId = 'all';;

    $response = $sdk->workbookAndFolders->workbookcodes($request);

    if ($response->newRequest !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\taamai\taamai\Models\Operations\WorkbookcodesRequest](../../Models/Operations/WorkbookcodesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |
| `$serverURL`                                                                                             | *string*                                                                                                 | :heavy_minus_sign:                                                                                       | An optional server URL to use.                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\WorkbookcodesResponse](../../Models/Operations/WorkbookcodesResponse.md)**


## workbookimages

workbook images

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
        $request = new Operations\WorkbookimagesRequest();
    $request->folderId = 1;
    $request->type = 'general';
    $request->userId = 1;
    $request->workbookId = 'all';;

    $response = $sdk->workbookAndFolders->workbookimages($request);

    if ($response->workbookimages !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\WorkbookimagesRequest](../../Models/Operations/WorkbookimagesRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\WorkbookimagesResponse](../../Models/Operations/WorkbookimagesResponse.md)**


## workbookpolicies

workbook policies

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
        $request = new Operations\WorkbookpoliciesRequest();
    $request->type = 'general';
    $request->userId = 1;;

    $response = $sdk->workbookAndFolders->workbookpolicies($request);

    if ($response->workbookpolicies !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\taamai\taamai\Models\Operations\WorkbookpoliciesRequest](../../Models/Operations/WorkbookpoliciesRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |
| `$serverURL`                                                                                                   | *string*                                                                                                       | :heavy_minus_sign:                                                                                             | An optional server URL to use.                                                                                 |


### Response

**[?\taamai\taamai\Models\Operations\WorkbookpoliciesResponse](../../Models/Operations/WorkbookpoliciesResponse.md)**


## workbooktranscripts

workbook transcripts

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
        $request = new Operations\WorkbooktranscriptsRequest();
    $request->folderId = 1;
    $request->type = 'general';
    $request->userId = 1;
    $request->workbookId = 'all';;

    $response = $sdk->workbookAndFolders->workbooktranscripts($request);

    if ($response->workbooktranscripts !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\taamai\taamai\Models\Operations\WorkbooktranscriptsRequest](../../Models/Operations/WorkbooktranscriptsRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `$serverURL`                                                                                                         | *string*                                                                                                             | :heavy_minus_sign:                                                                                                   | An optional server URL to use.                                                                                       |


### Response

**[?\taamai\taamai\Models\Operations\WorkbooktranscriptsResponse](../../Models/Operations/WorkbooktranscriptsResponse.md)**

