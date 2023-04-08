# Maileva\Client\EnvoiApi

All URIs are relative to *https://api.sandbox.maileva.net/registered_mail/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendingsGet**](EnvoiApi.md#sendingsget) | **GET** /sendings | Liste des envois
[**sendingsPost**](EnvoiApi.md#sendingspost) | **POST** /sendings | Création d&#x27;un envoi
[**sendingsSendingIdDelete**](EnvoiApi.md#sendingssendingiddelete) | **DELETE** /sendings/{sending_id} | Suppression d&#x27;un envoi
[**sendingsSendingIdDownloadDepositProofGet**](EnvoiApi.md#sendingssendingiddownloaddepositproofget) | **GET** /sendings/{sending_id}/download_deposit_proof | 
[**sendingsSendingIdGet**](EnvoiApi.md#sendingssendingidget) | **GET** /sendings/{sending_id} | Détail d&#x27;un envoi
[**sendingsSendingIdPatch**](EnvoiApi.md#sendingssendingidpatch) | **PATCH** /sendings/{sending_id} | Modification des options d&#x27;envoi
[**sendingsSendingIdSubmitPost**](EnvoiApi.md#sendingssendingidsubmitpost) | **POST** /sendings/{sending_id}/submit | Finalisation d&#x27;un envoi

# **sendingsGet**
> \Maileva\Client\Model\SendingsResponse sendingsGet($start_index, $count)

Liste des envois

Cette API permet d'obtenir la liste des envois.  Il est possible de rajouter un attribut dans les paramètres afin de filtrer la liste des envois. La liste des envois peut être paginée. Par défaut, la pagination est de 50 résultats. Elle peut être modifiée pour  atteindre jusqu'à 500 résultats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\EnvoiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_index = 1; // float | Le premier élément à retourner
$count = 50; // float | Le nombre d'élément à retourner

try {
    $result = $apiInstance->sendingsGet($start_index, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvoiApi->sendingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_index** | **float**| Le premier élément à retourner | [optional] [default to 1]
 **count** | **float**| Le nombre d&#x27;élément à retourner | [optional] [default to 50]

### Return type

[**\Maileva\Client\Model\SendingsResponse**](../Model/SendingsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsPost**
> \Maileva\Client\Model\SendingResponse sendingsPost($body)

Création d'un envoi

Cette API permet de créer un envoi.  Le champ obligatoire pour créer un envoi est le nom.  Les options sont : - L'avis de réception (AR) : oui ou non, - Le coloris d'impression : oui pour la couleur ou non pour le noir et blanc, - Le format d'impression : oui pour recto-verso ou non pour recto, - L'ajout d'une page porte-adresse : oui ou non, - Notifications par e-mail : adresse e-mail à laquelle les notifications doivent être envoyées, - Impression de la référence interne : oui ou non, - Le type d'enveloppe est choisi automatiquement. 1 à 5 feuilles (feuille porte-adresse et enveloppe retour incluses) : enveloppe DL. 6 à 45 feuilles (hors feuille porte-adresse, enveloppe retour incluse) : enveloppe C4. - Gestion électronique des avis de réception (AR) : oui ou non, - Durée d'archivage : 3 ans, 6 ans ou 10 ans, - Adresse postale de l'expéditeur (obligatoire). L'expéditeur doit être en France métropolitaine, dans un DOM, à Monaco ou en Andorre.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\EnvoiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Maileva\Client\Model\SendingCreation(); // \Maileva\Client\Model\SendingCreation | 

try {
    $result = $apiInstance->sendingsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvoiApi->sendingsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Maileva\Client\Model\SendingCreation**](../Model/SendingCreation.md)|  | [optional]

### Return type

[**\Maileva\Client\Model\SendingResponse**](../Model/SendingResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdDelete**
> sendingsSendingIdDelete($sending_id)

Suppression d'un envoi

Cette API permet de supprimer un envoi.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\EnvoiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi

try {
    $apiInstance->sendingsSendingIdDelete($sending_id);
} catch (Exception $e) {
    echo 'Exception when calling EnvoiApi->sendingsSendingIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdDownloadDepositProofGet**
> string sendingsSendingIdDownloadDepositProofGet($sending_id)



Cette API permet de télécharger la preuve de dépôt

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\EnvoiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi

try {
    $result = $apiInstance->sendingsSendingIdDownloadDepositProofGet($sending_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvoiApi->sendingsSendingIdDownloadDepositProofGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdGet**
> \Maileva\Client\Model\SendingResponse sendingsSendingIdGet($sending_id)

Détail d'un envoi

Cette API permet de récupérer un envoi à partir de son identifiant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\EnvoiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi

try {
    $result = $apiInstance->sendingsSendingIdGet($sending_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvoiApi->sendingsSendingIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |

### Return type

[**\Maileva\Client\Model\SendingResponse**](../Model/SendingResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdPatch**
> \Maileva\Client\Model\SendingResponse sendingsSendingIdPatch($sending_id, $body)

Modification des options d'envoi

Cette API permet de modifier les options liées à l'envoi d'un courrier : - L'avis de réception (AR) : oui ou non, - Le coloris d'impression : oui pour la couleur ou non pour le noir et blanc, - Le format d'impression : oui pour recto-verso ou non pour recto, - L'ajout d'une page porte-adresse : oui ou non, - Notifications par e-mail : adresse e-mail à laquelle les notifications doivent être envoyées, - Impression de la référence interne : oui ou non, - Le type d'enveloppe est choisi automatiquement. 1 à 5 feuilles (feuille porte-adresse et enveloppe retour incluses) : enveloppe DL. 6 à 45 feuilles (hors feuille porte-adresse, enveloppe retour incluse) : enveloppe C4. - Gestion électronique des avis de réception (AR) : oui ou non, - Durée d'archivage : 3 ans, 6 ans ou 10 ans, - Adresse postale de l'expéditeur (obligatoire). L'expéditeur doit être en France métropolitaine, dans un DOM, à Monaco ou en Andorre. - Seuls les paramètres pour lesquels une valeur est fournie sont modifiés. - Si votre système ne permet pas d'utiliser le verbe PATCH, il est possible d'utiliser le verbe POST.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\EnvoiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi
$body = new \Maileva\Client\Model\SendingCreation(); // \Maileva\Client\Model\SendingCreation | 

try {
    $result = $apiInstance->sendingsSendingIdPatch($sending_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvoiApi->sendingsSendingIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |
 **body** | [**\Maileva\Client\Model\SendingCreation**](../Model/SendingCreation.md)|  | [optional]

### Return type

[**\Maileva\Client\Model\SendingResponse**](../Model/SendingResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdSubmitPost**
> sendingsSendingIdSubmitPost($sending_id)

Finalisation d'un envoi

Cette API permet de valider l'envoi et de déclencher ainsi la demande de  production.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\EnvoiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi

try {
    $apiInstance->sendingsSendingIdSubmitPost($sending_id);
} catch (Exception $e) {
    echo 'Exception when calling EnvoiApi->sendingsSendingIdSubmitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

