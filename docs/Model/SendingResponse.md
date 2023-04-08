# SendingResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifiant d&#x27;un envoi | [optional] 
**name** | **string** | Nom d&#x27;un envoi | [optional] 
**custom_id** | **string** | Identifiant de l&#x27;envoi défini par le client | [optional] 
**custom_data** | **string** | Information libre fournie par le client | [optional] 
**status** | [**\Maileva\Client\Model\SendingStatus**](SendingStatus.md) |  | [optional] 
**status_detail** | **string** | Détail d&#x27;un statut (cause du rejet) | [optional] 
**acknowledgement_of_receipt** | **bool** | Avis de réception (AR) | [optional] 
**acknowledgement_of_receipt_scanning** | **bool** | Gestion électronique des avis de réception (AR). Cette option indique que Maileva doit recevoir, numériser, mettre en ligne l’image et archiver physiquement les Avis de Réception. Pour cela, la première ligne de l’adresse de l’expéditeur sera conservée, mais les 5 autres lignes et le pays seront remplacés par l’adresse de Maileva. Cette option nécessite que l’option avis de réception soit activée. | [optional] 
**creation_date** | [**\DateTime**](\DateTime.md) | Date et heure de création | [optional] 
**submission_date** | [**\DateTime**](\DateTime.md) | Date et heure de soumission | [optional] 
**scheduled_date** | [**\DateTime**](\DateTime.md) | Date et heure de planification | [optional] 
**processed_date** | [**\DateTime**](\DateTime.md) | Date et heure de production | [optional] 
**archive_date** | [**\DateTime**](\DateTime.md) | Date d&#x27;archivage du dernier pli archivable | [optional] 
**documents_count** | **int** | Nombre de documents dans l&#x27;envoi | [optional] 
**documents_weight** | **int** | Poids du document (en octets) | [optional] 
**pages_count** | **int** | Somme du nombre de pages de chaque destinataire | [optional] 
**billed_pages_count** | **int** | Nombre de pages facturées (disponible à partir du statut ACCEPTED) | [optional] 
**sheets_count** | **int** | Nombre de feuilles (disponible à partir du statut ACCEPTED) | [optional] 
**recipients_counts** | [**\Maileva\Client\Model\RecipientsCounts**](RecipientsCounts.md) |  | [optional] 
**color_printing** | **bool** | Impression couleur | [optional] 
**duplex_printing** | **bool** | Impression recto verso | [optional] 
**optional_address_sheet** | **bool** | Feuille porte adresse optionnnelle (payante) | [optional] 
**system_address_sheet** | **bool** | Feuille porte adresse imposée (gratuite) | [optional] 
**notification_email** | **string** | Email de notification | [optional] 
**envelope_type** | [**\Maileva\Client\Model\EnvelopeType**](EnvelopeType.md) |  | [optional] 
**sender_address_line_1** | **string** | Ligne d&#x27;adresse n°1 (Société) de l&#x27;expéditeur | [optional] 
**sender_address_line_2** | **string** | Ligne d&#x27;adresse n°2 (Civilité, Prénom, Nom) de l&#x27;expéditeur | [optional] 
**sender_address_line_3** | **string** | Ligne d&#x27;adresse n°3 (Résidence, Bâtiement ...) de l&#x27;expéditeur | [optional] 
**sender_address_line_4** | **string** | Ligne d&#x27;adresse n°4 (N° et libellé de la voie) de l&#x27;expéditeur | [optional] 
**sender_address_line_5** | **string** | Ligne d&#x27;adresse n°5 (Lieu dit, BP...) de l&#x27;expéditeur | [optional] 
**sender_address_line_6** | **string** | Ligne d&#x27;adresse n°6 (Code postal et ville) de l&#x27;expéditeur | [optional] 
**sender_country_code** | [**\Maileva\Client\Model\CountryCode**](CountryCode.md) |  | [optional] 
**archiving_duration** | **int** | Durée d&#x27;archivage en années | [optional] 
**return_envelope_reference** | **string** | Référence de l’enveloppe retour. Si l&#x27;enveloppe retour est une enveloppe T (postréponse) et si un destinataire n&#x27;est pas en France métropolitaine ou dans un DOM, alors le pli partira sans enveloppe T. Délai d&#x27;un jour supplémentaire pour l&#x27;acheminement vers La Poste si option choisie. | [optional] 
**deposit_proof_date** | **string** | Date de la preuve de dépôt | [optional] 
**deposit_proof_url** | **string** | Lien de téléchargement de la preuve de dépôt | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

