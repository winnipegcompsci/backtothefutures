<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Spotprice Entity.
 */
class Spotprice extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'currency_id' => true,
        'source_id' => true,
        'low' => true,
        'high' => true,
        'last' => true,
        'buy' => true,
        'sell' => true,
        'volume' => true,
        'timestamp' => true,
        'currency' => true,
        'source' => true,
    ];
}
