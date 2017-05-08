<?php

namespace Picqer\BolPlazaClient\Entities;

/**
 * Class BolPlazaProcessStatus
 * @package Picqer\BolPlazaClient\Entities
 *
 * @property string id
 * @property string sellerId
 * @property string entityId
 * @property string eventType
 * @property string description
 * @property string status
 * @property string createTimestamp
 */
class BolPlazaPurchasableShippingLabels extends BaseModel {

    protected $xmlEntityName = 'PurchasableShippingLabels';    

    protected $attributes = [
        'TransporterCode',
        'LabelType',
        'MaxWeight',
        'MaxDimensions',
        'RetailPrice',
        'PurchasePrice',
        'Discount',
        'ShippingLabelCode'
    ];
}
