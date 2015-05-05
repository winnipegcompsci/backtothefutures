<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FuturesIndex Entity.
 */
class FuturesIndex extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'from_currency_id' => true,
        'to_currency_id' => true,
        'value' => true,
        'source_id' => true,
        'futures_index' => true,
        'from_currency' => true,
        'to_currency' => true,
        'source' => true,
    ];
}
