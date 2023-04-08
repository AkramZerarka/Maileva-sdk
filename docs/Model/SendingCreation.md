# SendingCreation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Nom de l&#x27;envoi | 
**custom_id** | **string** | Identifiant de l&#x27;envoi défini par le client | [optional] 
**custom_data** | **string** | Information libre fournie par le client | [optional] 
**acknowledgement_of_receipt** | **bool** | Avis de réception (AR) | [optional] [default to true]
**acknowledgement_of_receipt_scanning** | **bool** | Gestion électronique des avis de réception (AR). Cette option indique que Maileva doit recevoir, numériser, mettre en ligne l’image et archiver physiquement les Avis de Réception. Pour cela, la première ligne de l’adresse de l’expéditeur sera conservée, mais les 5 autres lignes et le pays seront remplacés par l’adresse de Maileva. Cette option nécessite que l’option avis de réception soit activée. | [optional] [default to false]
**color_printing** | **bool** | Impression couleur | [optional] [default to true]
**duplex_printing** | **bool** | Impression recto verso | [optional] [default to false]
**optional_address_sheet** | **bool** | Feuille porte adresse optionnelle | [optional] [default to false]
**notification_email** | **string** | E-mail du destinataire des notifications | 
**sender_address_line_1** | **string** | Ligne d&#x27;adresse n°1 (Société) de l&#x27;expéditeur | [optional] 
**sender_address_line_2** | **string** | Ligne d&#x27;adresse n°2 (Civilité, Prénom, Nom) de l&#x27;expéditeur | [optional] 
**sender_address_line_3** | **string** | Ligne d&#x27;adresse n°3 (Résidence, Bâtiement ...) de l&#x27;expéditeur | [optional] 
**sender_address_line_4** | **string** | Ligne d&#x27;adresse n°4 (N° et libellé de la voie) de l&#x27;expéditeur | [optional] 
**sender_address_line_5** | **string** | Ligne d&#x27;adresse n°5 (Lieu dit, BP...) de l&#x27;expéditeur | [optional] 
**sender_address_line_6** | **string** | Ligne d&#x27;adresse n°6 (Code postal et ville) de l&#x27;expéditeur | [optional] 
**sender_country_code** | [**\Maileva\Client\Model\CountryCode**](CountryCode.md) |  | [optional] 
**archiving_duration** | **int** | Durée d&#x27;archivage en années | [optional] [default to ARCHIVING_DURATION.3]
**return_envelope_reference** | **string** | Référence de l’enveloppe retour. Si l&#x27;enveloppe retour est une enveloppe T (postréponse) et si un destinataire n&#x27;est pas en France métropolitaine ou dans un DOM, alors le pli partira sans enveloppe T. Cette option ajoute un délai d&#x27;un jour de production supplémentaire | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

