# MailevaClient-php
API pour envoyer et suivre des Lettres Recommandées En Ligne distribuées par le facteur  Elles comprennent les fonctions clés pour :   
- créer un envoi,  
- ajouter des documents et des destinataires,  
- choisir ses options (noir & blanc ou couleur, recto ou recto-verso, avec ou sans AR …).  
- suivre la production (date de planification, suivi de l’envoi…).  Voir la documentation \"notification_center\".

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
composer require akramzerarka/maileva-sdk-php
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

La classe Maileva\Client\Maileva a 3 fonctions : 

```php
//Retourne un objet Maileva\Client\Api\EnvoiApi
$maileva->envoi();

//Retourne un objet Maileva\Client\Api\DocumentsApi
$maileva->documents():

//Retourne un objet Maileva\Client\Api\DestinatairesApi
$maileva->destinataires();
```

Il suffit ensuite d'utiliser les endpoints de chaque objet.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$maileva = new \Maileva\Client\Maileva(
    '<YOU-MAILEVA-LOGIN>', 
    '<YOU-MAILEVA-PASSWORD>', 
    '<YOU-MAILEVA-client_id>', 
    '<YOU-MAILEVA-client_secret>', 
    new GuzzleHttp\Client(), 
    new \Maileva\Client\Configuration()
);

//Création d'une lettre
$body = new \Maileva\Client\Model\SendingCreation(
    [
        "name" => "Résiliation d'un abonnement téléphonique",
        "custom_id" => "order_1234",
        "custom_data" => "order_1234",
        "acknowledgement_of_receipt" => true,
        "acknowledgement_of_receipt_scanning" => true,
        "color_printing" => true,
        "duplex_printing" => true,
        "optional_address_sheet" => false,
        "notification_email" => "do_not_reply@maileva.com",
        "sender_address_line_1" => "Société Durand",
        "sender_address_line_2" => "M. Pierre DUPONT",
        "sender_address_line_3" => "Batiment B",
        "sender_address_line_4" => "10 avenue Charles de Gaulle",
        "sender_address_line_5" => "",
        "sender_address_line_6" => "94673 Charenton-Le-Pont",
        "sender_country_code" => "FR",
        "archiving_duration" => 3,
        "return_envelope_reference" => 123456
    ]
); // \Maileva\Client\Model\RecipientCreation | 

try {
    $result = $maileva->envoi()->sendingsPost($body);
    echo '<pre>';
    print_r($result);
    echo '</pre>';
} catch (Exception $e) {
    echo 'Exception when calling EnvoiApi->sendingsPost: ', $e->getMessage(), PHP_EOL;
}

$sending_id = $result->getId();

//Suppression d'une lettre
try {
    $result = $apiInstance->sendingsSendingIdDelete($sending_id);
    echo '<pre>';
    print_r($result);
    echo '</pre>';
} catch (Exception $e) {
    echo 'Exception when calling EnvoiApi->sendingsSendingIdDelete: ', $e->getMessage(), PHP_EOL;
}

//Récupération de toutes les lettres
try {
    $result = $maileva->envoi()->sendingsGet();
    echo '<pre>';
    print_r($result);
    echo '</pre>';
} catch (Exception $e) {
    echo 'Exception when calling EnvoiApi->sendingsSendingIdGet: ', $e->getMessage(), PHP_EOL;
```



## Documentation for API Endpoints

All URIs are relative to *https://api.sandbox.maileva.net/registered_mail/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DestinatairesApi* | [**patchRecipient**](docs/Api/DestinatairesApi.md#patchrecipient) | **PATCH** /sendings/{sending_id}/recipients/{recipient_id} | Modification partielle d&#x27;un destinataire
*DestinatairesApi* | [**sendingsSendingIdRecipientsDelete**](docs/Api/DestinatairesApi.md#sendingssendingidrecipientsdelete) | **DELETE** /sendings/{sending_id}/recipients | Suppression de tous les destinataires
*DestinatairesApi* | [**sendingsSendingIdRecipientsGet**](docs/Api/DestinatairesApi.md#sendingssendingidrecipientsget) | **GET** /sendings/{sending_id}/recipients | Liste des destinataires d&#x27;un envoi
*DestinatairesApi* | [**sendingsSendingIdRecipientsImportsPost**](docs/Api/DestinatairesApi.md#sendingssendingidrecipientsimportspost) | **POST** /sendings/{sending_id}/recipients/imports | Ajout d&#x27;un ou de plusieurs destinataire(s) à l&#x27;envoi
*DestinatairesApi* | [**sendingsSendingIdRecipientsPost**](docs/Api/DestinatairesApi.md#sendingssendingidrecipientspost) | **POST** /sendings/{sending_id}/recipients | Ajout d&#x27;un destinataire à l&#x27;envoi
*DestinatairesApi* | [**sendingsSendingIdRecipientsRecipientIdDelete**](docs/Api/DestinatairesApi.md#sendingssendingidrecipientsrecipientiddelete) | **DELETE** /sendings/{sending_id}/recipients/{recipient_id} | Suprression d&#x27;un destinataire
*DestinatairesApi* | [**sendingsSendingIdRecipientsRecipientIdDeliveryStatusesGet**](docs/Api/DestinatairesApi.md#sendingssendingidrecipientsrecipientiddeliverystatusesget) | **GET** /sendings/{sending_id}/recipients/{recipient_id}/delivery_statuses | Liste des statuts de distribution d&#x27;un destinataire
*DestinatairesApi* | [**sendingsSendingIdRecipientsRecipientIdDownloadAcknowledgementOfReceiptGet**](docs/Api/DestinatairesApi.md#sendingssendingidrecipientsrecipientiddownloadacknowledgementofreceiptget) | **GET** /sendings/{sending_id}/recipients/{recipient_id}/download_acknowledgement_of_receipt | Télécharger l&#x27;avis de réception archivé du destinataire
*DestinatairesApi* | [**sendingsSendingIdRecipientsRecipientIdDownloadArchiveGet**](docs/Api/DestinatairesApi.md#sendingssendingidrecipientsrecipientiddownloadarchiveget) | **GET** /sendings/{sending_id}/recipients/{recipient_id}/download_archive | Télécharger le courrier envoyé au destinataire
*DestinatairesApi* | [**sendingsSendingIdRecipientsRecipientIdGet**](docs/Api/DestinatairesApi.md#sendingssendingidrecipientsrecipientidget) | **GET** /sendings/{sending_id}/recipients/{recipient_id} | Détail d&#x27;un destinataire
*DocumentsApi* | [**sendingsSendingIdDocumentsDocumentIdDelete**](docs/Api/DocumentsApi.md#sendingssendingiddocumentsdocumentiddelete) | **DELETE** /sendings/{sending_id}/documents/{document_id} | Suppression d&#x27;un document
*DocumentsApi* | [**sendingsSendingIdDocumentsDocumentIdGet**](docs/Api/DocumentsApi.md#sendingssendingiddocumentsdocumentidget) | **GET** /sendings/{sending_id}/documents/{document_id} | Détail d&#x27;un document
*DocumentsApi* | [**sendingsSendingIdDocumentsDocumentIdSetPriorityPost**](docs/Api/DocumentsApi.md#sendingssendingiddocumentsdocumentidsetprioritypost) | **POST** /sendings/{sending_id}/documents/{document_id}/set_priority | Classement des documents
*DocumentsApi* | [**sendingsSendingIdDocumentsGet**](docs/Api/DocumentsApi.md#sendingssendingiddocumentsget) | **GET** /sendings/{sending_id}/documents | Liste des documents d&#x27;un envoi
*DocumentsApi* | [**sendingsSendingIdDocumentsPost**](docs/Api/DocumentsApi.md#sendingssendingiddocumentspost) | **POST** /sendings/{sending_id}/documents | Ajout d&#x27;un document à l&#x27;envoi.
*EnvoiApi* | [**sendingsGet**](docs/Api/EnvoiApi.md#sendingsget) | **GET** /sendings | Liste des envois
*EnvoiApi* | [**sendingsPost**](docs/Api/EnvoiApi.md#sendingspost) | **POST** /sendings | Création d&#x27;un envoi
*EnvoiApi* | [**sendingsSendingIdDelete**](docs/Api/EnvoiApi.md#sendingssendingiddelete) | **DELETE** /sendings/{sending_id} | Suppression d&#x27;un envoi
*EnvoiApi* | [**sendingsSendingIdDownloadDepositProofGet**](docs/Api/EnvoiApi.md#sendingssendingiddownloaddepositproofget) | **GET** /sendings/{sending_id}/download_deposit_proof | 
*EnvoiApi* | [**sendingsSendingIdGet**](docs/Api/EnvoiApi.md#sendingssendingidget) | **GET** /sendings/{sending_id} | Détail d&#x27;un envoi
*EnvoiApi* | [**sendingsSendingIdPatch**](docs/Api/EnvoiApi.md#sendingssendingidpatch) | **PATCH** /sendings/{sending_id} | Modification des options d&#x27;envoi
*EnvoiApi* | [**sendingsSendingIdSubmitPost**](docs/Api/EnvoiApi.md#sendingssendingidsubmitpost) | **POST** /sendings/{sending_id}/submit | Finalisation d&#x27;un envoi

## Documentation For Models

 - [Body](docs/Model/Body.md)
 - [CountryCode](docs/Model/CountryCode.md)
 - [DeliveryStatusesResponse](docs/Model/DeliveryStatusesResponse.md)
 - [DeliveryStatusesResponseDeliveryStatuses](docs/Model/DeliveryStatusesResponseDeliveryStatuses.md)
 - [DocumentResponse](docs/Model/DocumentResponse.md)
 - [DocumentsResponse](docs/Model/DocumentsResponse.md)
 - [EnvelopeType](docs/Model/EnvelopeType.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [ErrorsResponse](docs/Model/ErrorsResponse.md)
 - [ImportRecipients](docs/Model/ImportRecipients.md)
 - [PagesRange](docs/Model/PagesRange.md)
 - [PagingResponse](docs/Model/PagingResponse.md)
 - [Priority](docs/Model/Priority.md)
 - [RecipientCreation](docs/Model/RecipientCreation.md)
 - [RecipientResponse](docs/Model/RecipientResponse.md)
 - [RecipientStatus](docs/Model/RecipientStatus.md)
 - [RecipientsCounts](docs/Model/RecipientsCounts.md)
 - [RecipientsResponse](docs/Model/RecipientsResponse.md)
 - [SendingCreation](docs/Model/SendingCreation.md)
 - [SendingResponse](docs/Model/SendingResponse.md)
 - [SendingStatus](docs/Model/SendingStatus.md)
 - [SendingsResponse](docs/Model/SendingsResponse.md)
 - [SendingssendingIddocumentsMetadata](docs/Model/SendingssendingIddocumentsMetadata.md)

## Documentation For Authorization


## bearerAuth

- **Type**: HTTP bearer authentication



