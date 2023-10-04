# WorkbookAndFolders
(*workbookAndFolders*)

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
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\AddandremovefromfavDocumentRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new AddandremovefromfavDocumentRequest();
    $request->id = 6;
    $request->type = 'document';
    $request->userId = 1;

    $response = $sdk->workbookAndFolders->addandremovefromfavDocument($request);

    if ($response->addandremovefromfavDocument !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [\taamai\taamai\Models\Operations\AddandremovefromfavDocumentRequest](../../models/operations/AddandremovefromfavDocumentRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |
| `$serverURL`                                                                                                                         | *string*                                                                                                                             | :heavy_minus_sign:                                                                                                                   | An optional server URL to use.                                                                                                       |


### Response

**[?\taamai\taamai\Models\Operations\AddandremovefromfavDocumentResponse](../../models/operations/AddandremovefromfavDocumentResponse.md)**


## contentsinworkbook

Contents in work book

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\ContentsinworkbookRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new ContentsinworkbookRequest();
    $request->type = 'general';
    $request->userId = 1;
    $request->workbookId = 1;

    $response = $sdk->workbookAndFolders->contentsinworkbook($request);

    if ($response->contentsinworkbook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\taamai\taamai\Models\Operations\ContentsinworkbookRequest](../../models/operations/ContentsinworkbookRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |
| `$serverURL`                                                                                                       | *string*                                                                                                           | :heavy_minus_sign:                                                                                                 | An optional server URL to use.                                                                                     |


### Response

**[?\taamai\taamai\Models\Operations\ContentsinworkbookResponse](../../models/operations/ContentsinworkbookResponse.md)**


## createFolder

Create Folder

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\CreateFolderRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new CreateFolderRequest();
    $request->folderName = 'default new';
    $request->userId = 1;
    $request->workbookId = 23;

    $response = $sdk->workbookAndFolders->createFolder($request);

    if ($response->createFolderlive !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\taamai\taamai\Models\Operations\CreateFolderRequest](../../models/operations/CreateFolderRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `$serverURL`                                                                                           | *string*                                                                                               | :heavy_minus_sign:                                                                                     | An optional server URL to use.                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\CreateFolderResponse](../../models/operations/CreateFolderResponse.md)**


## createWorkbook

Create Workbook

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\CreateWorkbookRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new CreateWorkbookRequest();
    $request->userId = 1;
    $request->workbookName = 'soban2';

    $response = $sdk->workbookAndFolders->createWorkbook($request);

    if ($response->createWorkbooklivw !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\CreateWorkbookRequest](../../models/operations/CreateWorkbookRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\CreateWorkbookResponse](../../models/operations/CreateWorkbookResponse.md)**


## deleteWorkspace

Delete Workspace

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\DeleteWorkspaceRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new DeleteWorkspaceRequest();
    $request->userId = 1;
    $request->workbookId = 39;

    $response = $sdk->workbookAndFolders->deleteWorkspace($request);

    if ($response->deleteWorkspacelive !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\taamai\taamai\Models\Operations\DeleteWorkspaceRequest](../../models/operations/DeleteWorkspaceRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |
| `$serverURL`                                                                                                 | *string*                                                                                                     | :heavy_minus_sign:                                                                                           | An optional server URL to use.                                                                               |


### Response

**[?\taamai\taamai\Models\Operations\DeleteWorkspaceResponse](../../models/operations/DeleteWorkspaceResponse.md)**


## deleteallkindofdocuments

Delete all kind of documents

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;

$sdk = Taamai::builder()
    ->build();

try {
    $response = $sdk->workbookAndFolders->deleteallkindofdocuments();

    if ($response->deleteallkindofdocuments !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                      | Type                           | Required                       | Description                    |
| ------------------------------ | ------------------------------ | ------------------------------ | ------------------------------ |
| `$serverURL`                   | *string*                       | :heavy_minus_sign:             | An optional server URL to use. |


### Response

**[?\taamai\taamai\Models\Operations\DeleteallkindofdocumentsResponse](../../models/operations/DeleteallkindofdocumentsResponse.md)**


## joinworkbook

Join workbook

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\JoinworkbookRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new JoinworkbookRequest();
    $request->userId = 12;
    $request->workbookId = 1;

    $response = $sdk->workbookAndFolders->joinworkbook($request);

    if ($response->joinworkbook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\taamai\taamai\Models\Operations\JoinworkbookRequest](../../models/operations/JoinworkbookRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `$serverURL`                                                                                           | *string*                                                                                               | :heavy_minus_sign:                                                                                     | An optional server URL to use.                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\JoinworkbookResponse](../../models/operations/JoinworkbookResponse.md)**


## joinworkbookrequestr

Join workbook requestr

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\JoinworkbookrequestrRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new JoinworkbookrequestrRequest();
    $request->email = 'sobanshahid38@gmail.com';
    $request->userId = 1;
    $request->workbookId = 1;

    $response = $sdk->workbookAndFolders->joinworkbookrequestr($request);

    if ($response->joinworkbookrequestr !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\taamai\taamai\Models\Operations\JoinworkbookrequestrRequest](../../models/operations/JoinworkbookrequestrRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |
| `$serverURL`                                                                                                           | *string*                                                                                                               | :heavy_minus_sign:                                                                                                     | An optional server URL to use.                                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\JoinworkbookrequestrResponse](../../models/operations/JoinworkbookrequestrResponse.md)**


## permanentDeletefolder

Permanent Delete folder

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\PermanentDeletefolderRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new PermanentDeletefolderRequest();
    $request->folderId = 27;
    $request->userId = 1;

    $response = $sdk->workbookAndFolders->permanentDeletefolder($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\taamai\taamai\Models\Operations\PermanentDeletefolderRequest](../../models/operations/PermanentDeletefolderRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |
| `$serverURL`                                                                                                             | *string*                                                                                                                 | :heavy_minus_sign:                                                                                                       | An optional server URL to use.                                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\PermanentDeletefolderResponse](../../models/operations/PermanentDeletefolderResponse.md)**


## permanentDeleteworkspace

Permanent Delete workspace

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;

$sdk = Taamai::builder()
    ->build();

try {
    $response = $sdk->workbookAndFolders->permanentDeleteworkspace();

    if ($response->permanentDeleteworkspacelive !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\taamai\taamai\Models\Operations\PermanentDeleteworkspaceResponse](../../models/operations/PermanentDeleteworkspaceResponse.md)**


## rejectWorkbook

Reject Workbook

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\RejectWorkbookRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new RejectWorkbookRequest();
    $request->userId = 12;
    $request->workbookId = 1;

    $response = $sdk->workbookAndFolders->rejectWorkbook($request);

    if ($response->rejectWorkbook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\RejectWorkbookRequest](../../models/operations/RejectWorkbookRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\RejectWorkbookResponse](../../models/operations/RejectWorkbookResponse.md)**


## restoreDocuemntofalltypeContentVoiceoverImagesTranscriptCode

Restore Docuemnt of all type  (content.voiceover,images,transcript,code)

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\RestoreDocuemntofalltypeContentVoiceoverImagesTranscriptCodeRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new RestoreDocuemntofalltypeContentVoiceoverImagesTranscriptCodeRequest();
    $request->id = 1;
    $request->type = 'document';
    $request->userId = 1;

    $response = $sdk->workbookAndFolders->restoreDocuemntofalltypeContentVoiceoverImagesTranscriptCode($request);

    if ($response->restoreDocuemntofalltypecontentVoiceoverimagestranscriptcode !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                              | Type                                                                                                                                                                                                   | Required                                                                                                                                                                                               | Description                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                                                                                             | [\taamai\taamai\Models\Operations\RestoreDocuemntofalltypeContentVoiceoverImagesTranscriptCodeRequest](../../models/operations/RestoreDocuemntofalltypeContentVoiceoverImagesTranscriptCodeRequest.md) | :heavy_check_mark:                                                                                                                                                                                     | The request object to use for the request.                                                                                                                                                             |
| `$serverURL`                                                                                                                                                                                           | *string*                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                     | An optional server URL to use.                                                                                                                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\RestoreDocuemntofalltypeContentVoiceoverImagesTranscriptCodeResponse](../../models/operations/RestoreDocuemntofalltypeContentVoiceoverImagesTranscriptCodeResponse.md)**


## restoreWorkspace

Restore Workspace

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\RestoreWorkspaceRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new RestoreWorkspaceRequest();
    $request->userId = 40;
    $request->workbookId = 39;

    $response = $sdk->workbookAndFolders->restoreWorkspace($request);

    if ($response->restoreWorkspacelive !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\taamai\taamai\Models\Operations\RestoreWorkspaceRequest](../../models/operations/RestoreWorkspaceRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |
| `$serverURL`                                                                                                   | *string*                                                                                                       | :heavy_minus_sign:                                                                                             | An optional server URL to use.                                                                                 |


### Response

**[?\taamai\taamai\Models\Operations\RestoreWorkspaceResponse](../../models/operations/RestoreWorkspaceResponse.md)**


## setdefualtworkspace

Set defualt workspace

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\SetdefualtworkspaceRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new SetdefualtworkspaceRequest();
    $request->userId = 1;
    $request->workbookId = 1;

    $response = $sdk->workbookAndFolders->setdefualtworkspace($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\taamai\taamai\Models\Operations\SetdefualtworkspaceRequest](../../models/operations/SetdefualtworkspaceRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `$serverURL`                                                                                                         | *string*                                                                                                             | :heavy_minus_sign:                                                                                                   | An optional server URL to use.                                                                                       |


### Response

**[?\taamai\taamai\Models\Operations\SetdefualtworkspaceResponse](../../models/operations/SetdefualtworkspaceResponse.md)**


## trashedfolders

Trashed folders

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\TrashedfoldersRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new TrashedfoldersRequest();
    $request->userId = 1;
    $request->workbookId = 22;

    $response = $sdk->workbookAndFolders->trashedfolders($request);

    if ($response->trashedfolderslive !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\TrashedfoldersRequest](../../models/operations/TrashedfoldersRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\TrashedfoldersResponse](../../models/operations/TrashedfoldersResponse.md)**


## trashedworkspaces

Trashed workspaces

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\TrashedworkspacesRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new TrashedworkspacesRequest();
    $request->userId = 1;

    $response = $sdk->workbookAndFolders->trashedworkspaces($request);

    if ($response->trashedworkspaceslive !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [\taamai\taamai\Models\Operations\TrashedworkspacesRequest](../../models/operations/TrashedworkspacesRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |
| `$serverURL`                                                                                                     | *string*                                                                                                         | :heavy_minus_sign:                                                                                               | An optional server URL to use.                                                                                   |


### Response

**[?\taamai\taamai\Models\Operations\TrashedworkspacesResponse](../../models/operations/TrashedworkspacesResponse.md)**


## workbookDetail

Workbook Detail

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\WorkbookDetailRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new WorkbookDetailRequest();
    $request->userId = 1;
    $request->workbookId = 12;

    $response = $sdk->workbookAndFolders->workbookDetail($request);

    if ($response->workbookDetaillive !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\WorkbookDetailRequest](../../models/operations/WorkbookDetailRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\WorkbookDetailResponse](../../models/operations/WorkbookDetailResponse.md)**


## workbookvoiceovers

Workbook voiceovers

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\WorkbookvoiceoversRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new WorkbookvoiceoversRequest();
    $request->folderId = 1;
    $request->type = 'general';
    $request->userId = 1;
    $request->workbookId = 1;

    $response = $sdk->workbookAndFolders->workbookvoiceovers($request);

    if ($response->workbookvoiceovers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [\taamai\taamai\Models\Operations\WorkbookvoiceoversRequest](../../models/operations/WorkbookvoiceoversRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |
| `$serverURL`                                                                                                       | *string*                                                                                                           | :heavy_minus_sign:                                                                                                 | An optional server URL to use.                                                                                     |


### Response

**[?\taamai\taamai\Models\Operations\WorkbookvoiceoversResponse](../../models/operations/WorkbookvoiceoversResponse.md)**


## allworkbooks

all workbooks

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\AllworkbooksRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new AllworkbooksRequest();
    $request->userId = 1;

    $response = $sdk->workbookAndFolders->allworkbooks($request);

    if ($response->allworkbookslive !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\taamai\taamai\Models\Operations\AllworkbooksRequest](../../models/operations/AllworkbooksRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `$serverURL`                                                                                           | *string*                                                                                               | :heavy_minus_sign:                                                                                     | An optional server URL to use.                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\AllworkbooksResponse](../../models/operations/AllworkbooksResponse.md)**


## deletefolder

delete folder

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\DeletefolderRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new DeletefolderRequest();
    $request->folderId = 27;
    $request->userId = 1;

    $response = $sdk->workbookAndFolders->deletefolder($request);

    if ($response->deletefolder !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\taamai\taamai\Models\Operations\DeletefolderRequest](../../models/operations/DeletefolderRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `$serverURL`                                                                                           | *string*                                                                                               | :heavy_minus_sign:                                                                                     | An optional server URL to use.                                                                         |


### Response

**[?\taamai\taamai\Models\Operations\DeletefolderResponse](../../models/operations/DeletefolderResponse.md)**


## permanentDeletedocument

permanent Delete document

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\PermanentDeletedocumentRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new PermanentDeletedocumentRequest();
    $request->id = 4;
    $request->type = 'document';
    $request->userId = 1;

    $response = $sdk->workbookAndFolders->permanentDeletedocument($request);

    if ($response->permanentDeletedocument !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [\taamai\taamai\Models\Operations\PermanentDeletedocumentRequest](../../models/operations/PermanentDeletedocumentRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |
| `$serverURL`                                                                                                                 | *string*                                                                                                                     | :heavy_minus_sign:                                                                                                           | An optional server URL to use.                                                                                               |


### Response

**[?\taamai\taamai\Models\Operations\PermanentDeletedocumentResponse](../../models/operations/PermanentDeletedocumentResponse.md)**


## restorefolder

restore folder

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\RestorefolderRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new RestorefolderRequest();
    $request->folderId = 27;
    $request->userId = 1;

    $response = $sdk->workbookAndFolders->restorefolder($request);

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
| `$request`                                                                                               | [\taamai\taamai\Models\Operations\RestorefolderRequest](../../models/operations/RestorefolderRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |
| `$serverURL`                                                                                             | *string*                                                                                                 | :heavy_minus_sign:                                                                                       | An optional server URL to use.                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\RestorefolderResponse](../../models/operations/RestorefolderResponse.md)**


## userchats

user chats

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\UserchatsRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new UserchatsRequest();
    $request->type = 'general';
    $request->userId = 1;

    $response = $sdk->workbookAndFolders->userchats($request);

    if ($response->userchats !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [\taamai\taamai\Models\Operations\UserchatsRequest](../../models/operations/UserchatsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |
| `$serverURL`                                                                                     | *string*                                                                                         | :heavy_minus_sign:                                                                               | An optional server URL to use.                                                                   |


### Response

**[?\taamai\taamai\Models\Operations\UserchatsResponse](../../models/operations/UserchatsResponse.md)**


## workbookcodes

workbook codes

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\WorkbookcodesRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new WorkbookcodesRequest();
    $request->folderId = 1;
    $request->type = 'general';
    $request->userId = 1;
    $request->workbookId = 'all';

    $response = $sdk->workbookAndFolders->workbookcodes($request);

    if ($response->newRequest !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\taamai\taamai\Models\Operations\WorkbookcodesRequest](../../models/operations/WorkbookcodesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |
| `$serverURL`                                                                                             | *string*                                                                                                 | :heavy_minus_sign:                                                                                       | An optional server URL to use.                                                                           |


### Response

**[?\taamai\taamai\Models\Operations\WorkbookcodesResponse](../../models/operations/WorkbookcodesResponse.md)**


## workbookimages

workbook images

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\WorkbookimagesRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new WorkbookimagesRequest();
    $request->folderId = 1;
    $request->type = 'general';
    $request->userId = 1;
    $request->workbookId = 'all';

    $response = $sdk->workbookAndFolders->workbookimages($request);

    if ($response->workbookimages !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\taamai\taamai\Models\Operations\WorkbookimagesRequest](../../models/operations/WorkbookimagesRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |
| `$serverURL`                                                                                               | *string*                                                                                                   | :heavy_minus_sign:                                                                                         | An optional server URL to use.                                                                             |


### Response

**[?\taamai\taamai\Models\Operations\WorkbookimagesResponse](../../models/operations/WorkbookimagesResponse.md)**


## workbookpolicies

workbook policies

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\WorkbookpoliciesRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new WorkbookpoliciesRequest();
    $request->type = 'general';
    $request->userId = 1;

    $response = $sdk->workbookAndFolders->workbookpolicies($request);

    if ($response->workbookpolicies !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\taamai\taamai\Models\Operations\WorkbookpoliciesRequest](../../models/operations/WorkbookpoliciesRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |
| `$serverURL`                                                                                                   | *string*                                                                                                       | :heavy_minus_sign:                                                                                             | An optional server URL to use.                                                                                 |


### Response

**[?\taamai\taamai\Models\Operations\WorkbookpoliciesResponse](../../models/operations/WorkbookpoliciesResponse.md)**


## workbooktranscripts

workbook transcripts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \taamai\taamai\Taamai;
use \taamai\taamai\Models\Shared\Security;
use \taamai\taamai\Models\Operations\WorkbooktranscriptsRequest;

$sdk = Taamai::builder()
    ->build();

try {
    $request = new WorkbooktranscriptsRequest();
    $request->folderId = 1;
    $request->type = 'general';
    $request->userId = 1;
    $request->workbookId = 'all';

    $response = $sdk->workbookAndFolders->workbooktranscripts($request);

    if ($response->workbooktranscripts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\taamai\taamai\Models\Operations\WorkbooktranscriptsRequest](../../models/operations/WorkbooktranscriptsRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `$serverURL`                                                                                                         | *string*                                                                                                             | :heavy_minus_sign:                                                                                                   | An optional server URL to use.                                                                                       |


### Response

**[?\taamai\taamai\Models\Operations\WorkbooktranscriptsResponse](../../models/operations/WorkbooktranscriptsResponse.md)**

