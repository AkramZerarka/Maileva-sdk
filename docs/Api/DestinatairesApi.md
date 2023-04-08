# Maileva\Client\DestinatairesApi

All URIs are relative to *https://api.sandbox.maileva.net/registered_mail/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**patchRecipient**](DestinatairesApi.md#patchrecipient) | **PATCH** /sendings/{sending_id}/recipients/{recipient_id} | Modification partielle d&#x27;un destinataire
[**sendingsSendingIdRecipientsDelete**](DestinatairesApi.md#sendingssendingidrecipientsdelete) | **DELETE** /sendings/{sending_id}/recipients | Suppression de tous les destinataires
[**sendingsSendingIdRecipientsGet**](DestinatairesApi.md#sendingssendingidrecipientsget) | **GET** /sendings/{sending_id}/recipients | Liste des destinataires d&#x27;un envoi
[**sendingsSendingIdRecipientsImportsPost**](DestinatairesApi.md#sendingssendingidrecipientsimportspost) | **POST** /sendings/{sending_id}/recipients/imports | Ajout d&#x27;un ou de plusieurs destinataire(s) à l&#x27;envoi
[**sendingsSendingIdRecipientsPost**](DestinatairesApi.md#sendingssendingidrecipientspost) | **POST** /sendings/{sending_id}/recipients | Ajout d&#x27;un destinataire à l&#x27;envoi
[**sendingsSendingIdRecipientsRecipientIdDelete**](DestinatairesApi.md#sendingssendingidrecipientsrecipientiddelete) | **DELETE** /sendings/{sending_id}/recipients/{recipient_id} | Suprression d&#x27;un destinataire
[**sendingsSendingIdRecipientsRecipientIdDeliveryStatusesGet**](DestinatairesApi.md#sendingssendingidrecipientsrecipientiddeliverystatusesget) | **GET** /sendings/{sending_id}/recipients/{recipient_id}/delivery_statuses | Liste des statuts de distribution d&#x27;un destinataire
[**sendingsSendingIdRecipientsRecipientIdDownloadAcknowledgementOfReceiptGet**](DestinatairesApi.md#sendingssendingidrecipientsrecipientiddownloadacknowledgementofreceiptget) | **GET** /sendings/{sending_id}/recipients/{recipient_id}/download_acknowledgement_of_receipt | Télécharger l&#x27;avis de réception archivé du destinataire
[**sendingsSendingIdRecipientsRecipientIdDownloadArchiveGet**](DestinatairesApi.md#sendingssendingidrecipientsrecipientiddownloadarchiveget) | **GET** /sendings/{sending_id}/recipients/{recipient_id}/download_archive | Télécharger le courrier envoyé au destinataire
[**sendingsSendingIdRecipientsRecipientIdGet**](DestinatairesApi.md#sendingssendingidrecipientsrecipientidget) | **GET** /sendings/{sending_id}/recipients/{recipient_id} | Détail d&#x27;un destinataire

# **patchRecipient**
> \Maileva\Client\Model\RecipientResponse patchRecipient($body, $sending_id, $recipient_id)

Modification partielle d'un destinataire

Cette API permet de modifier partiellement un destinataire

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\DestinatairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Maileva\Client\Model\RecipientCreation(); // \Maileva\Client\Model\RecipientCreation | 
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi
$recipient_id = "recipient_id_example"; // string | Identifiant du destinataire

try {
    $result = $apiInstance->patchRecipient($body, $sending_id, $recipient_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinatairesApi->patchRecipient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Maileva\Client\Model\RecipientCreation**](../Model/RecipientCreation.md)|  |
 **sending_id** | **string**| Identifiant d&#x27;un envoi |
 **recipient_id** | **string**| Identifiant du destinataire |

### Return type

[**\Maileva\Client\Model\RecipientResponse**](../Model/RecipientResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdRecipientsDelete**
> sendingsSendingIdRecipientsDelete($sending_id)

Suppression de tous les destinataires

Cette API permet de supprimer tous les destinataires d'un envoi.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\DestinatairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi

try {
    $apiInstance->sendingsSendingIdRecipientsDelete($sending_id);
} catch (Exception $e) {
    echo 'Exception when calling DestinatairesApi->sendingsSendingIdRecipientsDelete: ', $e->getMessage(), PHP_EOL;
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

# **sendingsSendingIdRecipientsGet**
> \Maileva\Client\Model\RecipientsResponse sendingsSendingIdRecipientsGet($sending_id, $start_index, $count)

Liste des destinataires d'un envoi

Cette API permet de récupérer la liste des destinataires d'un envoi. Cette liste peut être paginée. Par défaut, la pagination est de 50 résultats. Elle peut atteindre 500 au maximum.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\DestinatairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi
$start_index = 1; // float | Le premier élément à retourner
$count = 50; // float | Le nombre d'élément à retourner

try {
    $result = $apiInstance->sendingsSendingIdRecipientsGet($sending_id, $start_index, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinatairesApi->sendingsSendingIdRecipientsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Maileva\Client\Model\RecipientsResponse**](../Model/RecipientsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdRecipientsImportsPost**
> sendingsSendingIdRecipientsImportsPost($sending_id, $body)

Ajout d'un ou de plusieurs destinataire(s) à l'envoi

Cette API permet d'ajouter un ou plusieurs destinataire(s) à l'envoi. Le  nombre de destinataires à l'importation est limité à 30 000.  Chaque ligne d’adresse doit contenir au plus 38 caractères. La ligne d’adresse 1 ou 2 doit être définie. La ligne d’adresse 6 doit être définie. Pour les adresses françaises, la ligne d’adresse 6 doit contenir  un code postal sur 5 chiffres, suivi d’un espace, suivi d’une ville.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\DestinatairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi
$body = new \Maileva\Client\Model\ImportRecipients(); // \Maileva\Client\Model\ImportRecipients | 

try {
    $apiInstance->sendingsSendingIdRecipientsImportsPost($sending_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DestinatairesApi->sendingsSendingIdRecipientsImportsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |
 **body** | [**\Maileva\Client\Model\ImportRecipients**](../Model/ImportRecipients.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdRecipientsPost**
> \Maileva\Client\Model\RecipientResponse sendingsSendingIdRecipientsPost($sending_id, $body)

Ajout d'un destinataire à l'envoi

Cette API permet d'ajouter un destinataire à l'envoi. Le nombre de  destinataires est limité à 30 000.  Chaque ligne d’adresse doit contenir au plus 38 caractères. La ligne d’adresse 1 ou 2 doit être définie. La ligne d’adresse 6 doit être définie. Pour les adresses françaises, la  ligne d’adresse 6 doit contenir un code postal sur 5 chiffres, suivi  d’un espace, suivi d’une ville.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\DestinatairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi
$body = new \Maileva\Client\Model\RecipientCreation(); // \Maileva\Client\Model\RecipientCreation | 

try {
    $result = $apiInstance->sendingsSendingIdRecipientsPost($sending_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinatairesApi->sendingsSendingIdRecipientsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |
 **body** | [**\Maileva\Client\Model\RecipientCreation**](../Model/RecipientCreation.md)|  | [optional]

### Return type

[**\Maileva\Client\Model\RecipientResponse**](../Model/RecipientResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdRecipientsRecipientIdDelete**
> sendingsSendingIdRecipientsRecipientIdDelete($sending_id, $recipient_id)

Suprression d'un destinataire

Cette API permet de supprimer un destinataire d'un envoi.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\DestinatairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi
$recipient_id = "recipient_id_example"; // string | Identifiant du destinataire

try {
    $apiInstance->sendingsSendingIdRecipientsRecipientIdDelete($sending_id, $recipient_id);
} catch (Exception $e) {
    echo 'Exception when calling DestinatairesApi->sendingsSendingIdRecipientsRecipientIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |
 **recipient_id** | **string**| Identifiant du destinataire |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdRecipientsRecipientIdDeliveryStatusesGet**
> \Maileva\Client\Model\DeliveryStatusesResponse sendingsSendingIdRecipientsRecipientIdDeliveryStatusesGet($sending_id, $recipient_id, $start_index, $count)

Liste des statuts de distribution d'un destinataire

Cette API permet de lister les statuts de distribution d'un destinataire. Cette liste peut être paginée. Par défaut, la pagination est de 50 résultats. Elle peut atteindre 500 au maximum. Les différents statuts sont décrit dans un tableau suivant.   Il y a 2 types de suivi :     - suivi de production, jusqu'à la remise en poste     - suivi de distribution sui commence à la remise en poste jusqu'à la remise au destinataire (ou le retour à l'expéditeur    NB : le staut de distribution inclut également le cas de la numérisation par   nos services de l'Avis de Réception d'un recommandé ou des Plis Non   Distriubuables (PND).    - A : Acheminement   - P : Présentation   - D : Distribution   - N : Numérisé  <table>  <tr>     <th>Code</th>     <th>Source</th>     <th>Description</th>   </tr>   <tr>     <td>A01</td>     <td>La Poste</td>     <td>Pris en charge</td>   </tr>   <tr>     <td>A02</td>     <td>La Poste</td>     <td>Avisé</td>   </tr>   <tr>     <td>A03</td>     <td>La Poste</td>     <td>Départ de France</td>   </tr>   <tr>     <td>A04</td>     <td>La Poste</td>     <td>Arrivée</td>   </tr>   <tr>     <td>A05</td>     <td>La Poste</td>     <td>Tentative de distribution infructueuse</td>   </tr>   <tr>     <td>A06</td>     <td>La Poste</td>     <td>Dépôt</td>   </tr>   <tr>     <td>A07</td>     <td>La Poste</td>     <td>Départ</td>   </tr>   <tr>     <td>A08</td>     <td>La Poste</td>     <td>Arrivée en France</td>   </tr>   <tr>     <td>A09</td>     <td>La Poste</td>     <td>Attente douane / dédouanement</td>   </tr>   <tr>     <td>A10</td>     <td>La Poste</td>     <td>Dédouané, distribution en cours</td>   </tr>   <tr>     <td>A11</td>     <td>La Poste</td>     <td>Renvoyé vers la bonne destination</td>   </tr>   <tr>     <td>A12</td>     <td>La Poste</td>     <td>Renvoyé vers la bonne destination suite à correction de l'adresse par La Poste</td>   </tr>   <tr>     <td>A13</td>     <td>La Poste</td>     <td>Pli manquant au dépôt</td>   </tr>   <tr>     <td>A14</td>     <td>La Poste</td>     <td>Non distribuable pour cause de dépassement du délai de mise à disposition du recommandé en ligne</td>   </tr>   <tr>     <td>A15</td>     <td>La Poste</td>     <td>Non distribuable en attente d'un contact client auprès du service Consommateurs</td>   </tr>   <tr>     <td>A16</td>     <td>La Poste</td>     <td>Non distribuable pour cause de refus par le destinataire</td>   </tr>   <tr>     <td>A17</td>     <td>La Poste</td>     <td>Non distribuable délai de conservation expiré (CGV)</td>   </tr>   <tr>     <td>A18</td>     <td>La Poste</td>     <td>Non distribuable - refus</td>   </tr>   <tr>     <td>A19</td>     <td>La Poste</td>     <td>Non distribuable</td>   </tr>   <tr>     <td>A20</td>     <td>La Poste</td>     <td>En cours de traitement</td>   </tr>   <tr>     <td>A21</td>     <td>La Poste</td>     <td>Retourné à l'expéditeur pour cause d'accès à la boîte aux lettres impossible</td>   </tr>   <tr>     <td>A22</td>     <td>La Poste</td>     <td>Retourné à l'expéditeur pour cause de boîte aux lettres non identifiable</td>   </tr>   <tr>     <td>A23</td>     <td>La Poste</td>     <td>Retourné à l'expéditeur pour cause d'adresse incorrecte</td>   </tr>   <tr>     <td>A24</td>     <td>La Poste</td>     <td>Retourné à l'expéditeur suite à des recherches de La Poste</td>   </tr>   <tr>     <td>A25</td>     <td>La Poste</td>     <td>Retourné à l'expéditeur sur demande de l'expéditeur</td>   </tr>   <tr>     <td>A26</td>     <td>La Poste</td>     <td>Retourné à l'expéditeur</td>   </tr>   <tr>     <td>A27</td>     <td>La Poste</td>     <td>Renvoyé vers la bonne destination sur demande de l'expéditeur</td>   </tr>   <tr>     <td>P01</td>     <td>La Poste</td>     <td>Attend d'être retiré au guichet</td>   </tr>   <tr>     <td>P02</td>     <td>La Poste</td>     <td>En attente de seconde présentation</td>   </tr>   <tr>     <td>P03</td>     <td>La Poste</td>     <td>Retourné à l'expéditeur pour cause de dépassement de délai d'instance</td>   </tr>   <tr>     <td>P04</td>     <td>La Poste</td>     <td>Retour à l'expéditeur - refus</td>   </tr>   <tr>     <td>P05</td>     <td>La Poste</td>     <td>Retourné à l'expéditeur pour cause de refus à l'adresse</td>   </tr>   <tr>     <td>P06</td>     <td>La Poste</td>     <td>Retourné à l'expéditeur pour cause de refus de paiement</td>   </tr>   <tr>     <td>D01</td>     <td>La Poste</td>     <td>Distribué</td>   </tr>   <tr>     <td>N01</td>     <td>Maileva</td>     <td>AR Signé : RAR distribué</td>   </tr>   <tr>     <td>N02</td>     <td>Maileva</td>     <td>PND (Pli Non Distribuable) pour une LR</td>   </tr>   <tr>     <td>N03</td>     <td>Maileva</td>     <td>Non réclamé</td>   </tr>   <tr>     <td>N04</td>     <td>Maileva</td>     <td>Décédé</td>   </tr>   <tr>     <td>N05</td>     <td>Maileva</td>     <td>Refusé</td>   </tr>   <tr>     <td>N06</td>     <td>Maileva</td>     <td>Impossibilité de signer</td>   </tr>   <tr>     <td>N07</td>     <td>Maileva</td>     <td>Adresse incomplète</td>   </tr>   <tr>     <td>N08</td>     <td>Maileva</td>     <td>Refus détérioré</td>   </tr>   <tr>     <td>N09</td>     <td>Maileva</td>     <td>Régime international</td>   </tr>   <tr>     <td>N10</td>     <td>Maileva</td>     <td>PND (Pli Non Distribuable) pour un courrier</td>   </tr> </table>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\DestinatairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi
$recipient_id = "recipient_id_example"; // string | Identifiant du destinataire
$start_index = 1; // float | Le premier élément à retourner
$count = 50; // float | Le nombre d'élément à retourner

try {
    $result = $apiInstance->sendingsSendingIdRecipientsRecipientIdDeliveryStatusesGet($sending_id, $recipient_id, $start_index, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinatairesApi->sendingsSendingIdRecipientsRecipientIdDeliveryStatusesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |
 **recipient_id** | **string**| Identifiant du destinataire |
 **start_index** | **float**| Le premier élément à retourner | [optional] [default to 1]
 **count** | **float**| Le nombre d&#x27;élément à retourner | [optional] [default to 50]

### Return type

[**\Maileva\Client\Model\DeliveryStatusesResponse**](../Model/DeliveryStatusesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdRecipientsRecipientIdDownloadAcknowledgementOfReceiptGet**
> string sendingsSendingIdRecipientsRecipientIdDownloadAcknowledgementOfReceiptGet($sending_id, $recipient_id)

Télécharger l'avis de réception archivé du destinataire

Cette API permet de télécharger au format PDF l'avis de réception archivé du destinataire.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\DestinatairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi
$recipient_id = "recipient_id_example"; // string | Identifiant du destinataire

try {
    $result = $apiInstance->sendingsSendingIdRecipientsRecipientIdDownloadAcknowledgementOfReceiptGet($sending_id, $recipient_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinatairesApi->sendingsSendingIdRecipientsRecipientIdDownloadAcknowledgementOfReceiptGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |
 **recipient_id** | **string**| Identifiant du destinataire |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdRecipientsRecipientIdDownloadArchiveGet**
> string sendingsSendingIdRecipientsRecipientIdDownloadArchiveGet($sending_id, $recipient_id)

Télécharger le courrier envoyé au destinataire

Cette API permet de télécharger au format PDF le courrier envoyé au  destinataire.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\DestinatairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi
$recipient_id = "recipient_id_example"; // string | Identifiant du destinataire

try {
    $result = $apiInstance->sendingsSendingIdRecipientsRecipientIdDownloadArchiveGet($sending_id, $recipient_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinatairesApi->sendingsSendingIdRecipientsRecipientIdDownloadArchiveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |
 **recipient_id** | **string**| Identifiant du destinataire |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendingsSendingIdRecipientsRecipientIdGet**
> \Maileva\Client\Model\RecipientResponse sendingsSendingIdRecipientsRecipientIdGet($sending_id, $recipient_id)

Détail d'un destinataire

Cette API permet de lister les données d'un destinataire d'un envoi.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Maileva\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Maileva\Client\Api\DestinatairesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sending_id = "sending_id_example"; // string | Identifiant d'un envoi
$recipient_id = "recipient_id_example"; // string | Identifiant du destinataire

try {
    $result = $apiInstance->sendingsSendingIdRecipientsRecipientIdGet($sending_id, $recipient_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DestinatairesApi->sendingsSendingIdRecipientsRecipientIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sending_id** | **string**| Identifiant d&#x27;un envoi |
 **recipient_id** | **string**| Identifiant du destinataire |

### Return type

[**\Maileva\Client\Model\RecipientResponse**](../Model/RecipientResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

