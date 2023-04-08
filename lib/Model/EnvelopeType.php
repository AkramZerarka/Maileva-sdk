<?php
/**
 * EnvelopeType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Maileva\Client
 * @author   Maileva Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Maileva / Envoi et Suivi de Lettres Recommandées En Ligne distribuées par le facteur
 *
 * API pour envoyer et suivre des Lettres Recommandées En Ligne distribuées par le facteur  Elles comprennent les fonctions clés pour :   - créer un envoi,  - ajouter des documents et des destinataires,  - choisir ses options (noir & blanc ou couleur, recto ou recto-verso, avec ou sans AR …).  - suivre la production (date de planification, suivi de l’envoi…).  Voir la documentation \"notification_center\".
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Maileva Codegen version: 3.0.21
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Maileva\Client\Model;
use \Maileva\Client\ObjectSerializer;

/**
 * EnvelopeType Class Doc Comment
 *
 * @category Class
 * @description Type de l&#x27;envelope
 * @package  Maileva\Client
 * @author   Maileva Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnvelopeType
{
    /**
     * Possible values of this enum
     */
    const DL = 'DL';
const C4 = 'C4';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DL,
self::C4,        ];
    }
}