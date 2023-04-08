# RecipientResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifiant du destinataire | 
**custom_id** | **string** | Identifiant du destinataire fourni par le client | [optional] 
**custom_data** | **string** | Information libre fournie par le client | [optional] 
**address_line_1** | **string** | Ligne d&#x27;adresse n°1 (Société) | [optional] 
**address_line_2** | **string** | Ligne d&#x27;adresse n°2 (Civilité, Prénom, Nom) | [optional] 
**address_line_3** | **string** | Ligne d&#x27;adresse n°3 (Résidence, Bâtiement ...) | [optional] 
**address_line_4** | **string** | Ligne d&#x27;adresse n°4 (N° et libellé de la voie) | [optional] 
**address_line_5** | **string** | Ligne d&#x27;adresse n°5 (Lieu dit, BP...) | [optional] 
**address_line_6** | **string** | Ligne d&#x27;adresse n°6 (Code postal et ville) | 
**country_code** | [**\Maileva\Client\Model\CountryCode**](CountryCode.md) |  | 
**pages_range** | [**\Maileva\Client\Model\PagesRange**](PagesRange.md) |  | [optional] 
**status** | [**\Maileva\Client\Model\RecipientStatus**](RecipientStatus.md) |  | 
**status_detail** | **string** | Détail d&#x27;un statut (cause du rejet) | [optional] 
**last_delivery_status** | **string** | Dernier statut de distribution | [optional] 
**last_delivery_status_date** | **string** | Date du dernier statut de distribution | [optional] 
**postage_price** | **float** | Coût de l&#x27;affranchissement en euros | [optional] 
**registered_number** | **string** | Numéro de recommandé | [optional] 
**archive_date** | [**\DateTime**](\DateTime.md) | Date d&#x27;archivage du pli | [optional] 
**archive_url** | **string** | URL de l&#x27;archive du pli | [optional] 
**acknowledgement_of_receipt_archive_date** | [**\DateTime**](\DateTime.md) | Date d&#x27;archivage de l&#x27;avis de réception (AR) | [optional] 
**acknowledgement_of_receipt_url** | **string** | URL de l&#x27;archive de l&#x27;avis de réception | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

