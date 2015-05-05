<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ticker Entity.
 */
class Ticker extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'ticker_name' => true,
        'from_currency_id' => true,
        'to_currency_id' => true,
        'source_id' => true,
        'from_currency' => true,
        'to_currency' => true,
        'source' => true,
    ];
}
