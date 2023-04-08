# Maileva\Client\DocumentsApi

All URIs are relative to *https://api.sandbox.maileva.net/registered_mail/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendingsSendingIdDocumentsDocumentIdDelete**](DocumentsApi.md#sendingssendingiddocumentsdocumentiddelete) | **DELETE** /sendings/{sending_id}/documents/{document_id} | Suppression d&#x27;un document
[**sendingsSendingIdDocumentsDocumentIdGet**](DocumentsApi.md#sendingssendingiddocumentsdocumentidget) | **GET** /sendings/{sending_id}/documents/{document_id} | Détail d&#x27;un document
[**sendingsSendingIdDocumentsDocumentIdSetPriorityPost**](DocumentsApi.md#sendingssendingiddocumentsdocumentidsetprioritypost) | **POST** /sendings/{sending_id}/documents/{document_id}/set_priority | Classement des documents
[**sendingsSendingIdDocumentsGet**](DocumentsApi.md#sendingssendingiddocumentsget) | **GET** /sendings/{sending_id}/documents | Liste des documents d&#x27;un envoi
[**sendingsSendingIdDocumentsPost**](DocumentsApi.md#sendingssendingiddocumentspost) | **POST** /sendings/{sending_id}/documents | Ajout d&#x27;un document à l&#x27;envoi.

# **sendingsSendingIdDocumentsDocumentIdDelete**
> sendingsSendingIdDocumentsDocumentIdDelete($sending_id, $document_id)

Suppression d'un document

Cette API permet de supprimer un document d'un envoi.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi
$document_id = "document_id_example"; // string | Identifiant du document

try {
    $apiInstance->sendingsSendingIdDocumentsDocumentIdDelete($sending_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->sendingsSendingIdDocumentsDocumentIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |
 **document_id** | **string**| Identifiant du document |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdDocumentsDocumentIdGet**
> \Maileva\Client\Model\DocumentResponse sendingsSendingIdDocumentsDocumentIdGet($sending_id, $document_id)

Détail d'un document

Cette API permet de récupérer le détail d'un document utilisé lors de l'envoi.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi
$document_id = "document_id_example"; // string | Identifiant du document

try {
    $result = $apiInstance->sendingsSendingIdDocumentsDocumentIdGet($sending_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->sendingsSendingIdDocumentsDocumentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |
 **document_id** | **string**| Identifiant du document |

### Return type

[**\Maileva\Client\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdDocumentsDocumentIdSetPriorityPost**
> sendingsSendingIdDocumentsDocumentIdSetPriorityPost($sending_id, $document_id, $body)

Classement des documents

Cette API permet d'ordonner les documents d'un envoi.  Les documents seront imprimés et mis sous pli dans l'ordre choisi.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi
$document_id = "document_id_example"; // string | Identifiant du document
$body = new \Maileva\Client\Model\Priority(); // \Maileva\Client\Model\Priority | 

try {
    $apiInstance->sendingsSendingIdDocumentsDocumentIdSetPriorityPost($sending_id, $document_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->sendingsSendingIdDocumentsDocumentIdSetPriorityPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |
 **document_id** | **string**| Identifiant du document |
 **body** | [**\Maileva\Client\Model\Priority**](../Model/Priority.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdDocumentsGet**
> \Maileva\Client\Model\DocumentsResponse sendingsSendingIdDocumentsGet($sending_id, $start_index, $count)

Liste des documents d'un envoi

Cette API permet de récupérer la liste des documents associés à l'envoi. La liste des documents d'un envoi peut être paginée. Par défaut et au maximum, la pagination est de 30 résultats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi
$start_index = 1; // float | Le premier élément à retourner
$count = 50; // float | Le nombre d'élément à retourner

try {
    $result = $apiInstance->sendingsSendingIdDocumentsGet($sending_id, $start_index, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->sendingsSendingIdDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |
 **start_index** | **float**| Le premier élément à retourner | [optional] [default to 1]
 **count** | **float**| Le nombre d&#x27;élément à retourner | [optional] [default to 50]

### Return type

[**\Maileva\Client\Model\DocumentsResponse**](../Model/DocumentsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdDocumentsPost**
> \Maileva\Client\Model\DocumentResponse sendingsSendingIdDocumentsPost($document, $metadata, $sending_id)

Ajout d'un document à l'envoi.

Cette API permet d'ajouter un document à l'envoi. Les types de documents autorisés sont :  - Adobe (.pdf)   - Word (.doc, .docx et .rtf)   - Texte (.txt)   - Excel (.xls, .xlsx)  Le document ajouté ne doit pas dépasser 20 Mo. Le nombre total de documents est limité à 30 par envoi. Le document doit être transmis en mutipart ainsi que la metadata. La  metadata est constituée de *priority* (permet de définir l'ordre  d'impression des documents) et de *name* (permet de donner un nom au  fichier). La première page du document est positionné systématiquement sur le  recto de la feuille.  Le  nombre de feuille d’un envoi ne doit pas dépasser la capacité de  l’enveloppe   - Enveloppe grand format C4 (210x300 mm, Double fenêtre) : 45 feuilles maximum (hors feuille porte-adresse, enveloppe retour incluse)    - Enveloppe petit format DL (114x229 mm Simple ou Double-fenêtre) : 5 feuilles maximum (feuille porte-adresse et enveloppe retour incluses)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = "document_example"; // string | 
$metadata = new \Maileva\Client\Model\SendingssendingIddocumentsMetadata(); // \Maileva\Client\Model\SendingssendingIddocumentsMetadata | 
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi

try {
    $result = $apiInstance->sendingsSendingIdDocumentsPost($document, $metadata, $sending_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->sendingsSendingIdDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document** | **string****string**|  |
 **metadata** | [**\Maileva\Client\Model\SendingssendingIddocumentsMetadata**](../Model/.md)|  |
 **sending_id** | **string**| Identifiant d&#x27;un envoi |

### Return type

[**\Maileva\Client\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

