<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Depth Entity.
 */
class Depth extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'asks' => true,
        'bids' => true,
        'date' => true,
        'contract_type' => true,
        'rate_id' => true,
        'depth' => true,
        'rate' => true,
    ];
}
